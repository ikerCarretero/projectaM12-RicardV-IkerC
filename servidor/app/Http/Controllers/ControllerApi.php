<?php

namespace App\Http\Controllers;

use App\Models\Alineacio;
use App\Models\Competicio;
use App\Models\EquipFantasy;
use App\Models\EquipReal;
use App\Models\EstadisticaJugador;
use App\Models\Jornada;
use App\Models\Jugador;
use App\Models\LligaPrivada;
use App\Models\Partit;
use App\Models\Puntuacio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ControllerApi extends Controller
{
    // ══════════════════════════════════════════════════════════════
    //  AUTENTICACIÓ
    // ══════════════════════════════════════════════════════════════

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'nom' => $validated['nom'],
            'name' => $validated['nom'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'rol' => 'usuari',
        ]);

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return response()->json([
                'message' => 'Les credencials no són correctes',
            ], 401);
        }

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        $token = $request->user()?->currentAccessToken();

        if ($token) {
            $token->delete();
        }

        return response()->json([
            'message' => 'Sessió tancada correctament',
        ]);
    }

    public function me(Request $request)
    {
        return response()->json(
            $request->user()->load('equipFantasy', 'equipsFantasy', 'lliguesPrivades')
        );
    }

    // ══════════════════════════════════════════════════════════════
    //  USUARIS
    // ══════════════════════════════════════════════════════════════

    public function usuarisIndex()
    {
        return response()->json(User::with('equipsFantasy', 'lliguesPrivades')->get());
    }

    public function usuarisShow($id)
    {
        return response()->json(User::with('equipsFantasy', 'lliguesPrivades')->findOrFail($id));
    }

    public function usuarisStore(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'rol' => 'required|in:admin,usuari,administrador',
        ]);

        $user = User::create([
            'nom' => $validated['nom'],
            'name' => $validated['nom'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'rol' => $validated['rol'],
        ]);

        return response()->json($user, 201);
    }

    public function usuarisUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $id,
            'password' => 'sometimes|string|min:6',
            'rol' => 'sometimes|in:admin,usuari,administrador',
        ]);

        if (isset($validated['nom'])) {
            $validated['name'] = $validated['nom'];
        }

        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }

        $user->update($validated);

        return response()->json($user);
    }

    public function usuarisDestroy($id)
    {
        User::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Usuari eliminat correctament',
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    //  LLIGUES PRIVADES COMPATIBLES AMB EL FRONTEND
    // ══════════════════════════════════════════════════════════════

    public function lliguesIndex(Request $request)
    {
        $user = $request->user();

        $lligues = LligaPrivada::with([
                'usuaris:id,nom,name,email,rol',
                'equipsFantasy.usuari:id,nom,name,email,rol',
            ])
            ->withCount('usuaris')
            ->whereHas('usuaris', function ($query) use ($user) {
                $query->where('users.id', $user->id);
            })
            ->latest()
            ->get()
            ->map(fn ($lliga) => $this->formatLligaFrontend($lliga));

        return response()->json($lligues);
    }

    public function lliguesShow(Request $request, $id)
    {
        $user = $request->user();

        $lliga = LligaPrivada::with([
                'usuaris:id,nom,name,email,rol',
                'equipsFantasy.usuari:id,nom,name,email,rol',
                'puntuacions',
            ])
            ->withCount('usuaris')
            ->findOrFail($id);

        $formaPart = $lliga->usuaris()->where('users.id', $user->id)->exists();
        $esAdmin = $this->esAdmin($user);

        if (!$formaPart && !$esAdmin) {
            return response()->json([
                'message' => 'No tens permís per veure aquesta lliga.',
            ], 403);
        }

        $data = $this->formatLligaFrontend($lliga);

        return response()->json([
            'success' => true,
            'lliga' => $data,
            'data' => $data,
        ]);
    }

    public function lliguesStore(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'descripcio' => 'nullable|string',
            'pressupost_inicial' => 'nullable|numeric|min:0',
            'maxim_participants' => 'nullable|integer|min:2|max:30',
            'max_participants' => 'nullable|integer|min:2|max:30',
        ]);

        $pressupostInicial = $validated['pressupost_inicial'] ?? 250000000;
        $maximParticipants = $validated['maxim_participants'] ?? $validated['max_participants'] ?? 10;

        $lliga = LligaPrivada::create([
            'nom' => $validated['nom'],
            'descripcio' => $validated['descripcio'] ?? null,
            'codi_acces' => $this->generarCodiLligaUnic(),
            'pressupost_inicial' => $pressupostInicial,
            'maxim_participants' => $maximParticipants,
            'creador_id' => $user->id,
        ]);

        $lliga->usuaris()->syncWithoutDetaching([$user->id]);
        $this->assegurarEquipFantasyUsuari($user, $lliga);

        $lliga->load([
            'usuaris:id,nom,name,email,rol',
            'equipsFantasy.usuari:id,nom,name,email,rol',
        ])->loadCount('usuaris');

        $data = $this->formatLligaFrontend($lliga);

        return response()->json([
            'success' => true,
            'message' => 'Lliga creada correctament',
            'lliga' => $data,
            'data' => $data,
        ], 201);
    }

    public function lliguesUpdate(Request $request, $id)
    {
        $user = $request->user();
        $lliga = LligaPrivada::findOrFail($id);

        $esCreador = (int) $lliga->creador_id === (int) $user->id;

        if (!$esCreador && !$this->esAdmin($user)) {
            return response()->json([
                'message' => 'Només el creador o un admin pot modificar aquesta lliga.',
            ], 403);
        }

        $validated = $request->validate([
            'nom' => 'sometimes|string|max:255',
            'descripcio' => 'nullable|string',
            'pressupost_inicial' => 'sometimes|numeric|min:0',
            'maxim_participants' => 'sometimes|integer|min:2|max:30',
            'max_participants' => 'sometimes|integer|min:2|max:30',
        ]);

        if (isset($validated['max_participants']) && !isset($validated['maxim_participants'])) {
            $validated['maxim_participants'] = $validated['max_participants'];
        }

        unset($validated['max_participants']);

        $lliga->update($validated);

        $lliga->load([
            'usuaris:id,nom,name,email,rol',
            'equipsFantasy.usuari:id,nom,name,email,rol',
        ])->loadCount('usuaris');

        $data = $this->formatLligaFrontend($lliga);

        return response()->json([
            'success' => true,
            'message' => 'Lliga actualitzada correctament',
            'lliga' => $data,
            'data' => $data,
        ]);
    }

    public function lliguesDestroy(Request $request, $id)
    {
        $user = $request->user();
        $lliga = LligaPrivada::findOrFail($id);

        $esCreador = (int) $lliga->creador_id === (int) $user->id;

        if (!$esCreador && !$this->esAdmin($user)) {
            return response()->json([
                'message' => 'Només el creador o un admin pot eliminar aquesta lliga.',
            ], 403);
        }

        $lliga->delete();

        return response()->json([
            'success' => true,
            'message' => 'Lliga privada eliminada correctament',
        ]);
    }

    public function lliguesUnirse(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'codi_acces' => 'nullable|string',
            'codi' => 'nullable|string',
        ]);

        $codi = $request->input('codi_acces') ?: $request->input('codi');

        if (!$codi) {
            return response()->json([
                'message' => 'Has d’introduir un codi de lliga.',
            ], 422);
        }

        $lliga = LligaPrivada::where('codi_acces', strtoupper($codi))->first();

        if (!$lliga) {
            return response()->json([
                'message' => 'No s’ha trobat cap lliga amb aquest codi.',
            ], 404);
        }

        $membresActuals = $lliga->usuaris()->count();
        $jaFormaPart = $lliga->usuaris()->where('users.id', $user->id)->exists();

        if ($lliga->maxim_participants && $membresActuals >= $lliga->maxim_participants && !$jaFormaPart) {
            return response()->json([
                'message' => 'Aquesta lliga ja ha arribat al màxim de participants.',
            ], 422);
        }

        $lliga->usuaris()->syncWithoutDetaching([$user->id]);
        $this->assegurarEquipFantasyUsuari($user, $lliga);

        $lliga->load([
            'usuaris:id,nom,name,email,rol',
            'equipsFantasy.usuari:id,nom,name,email,rol',
        ])->loadCount('usuaris');

        $data = $this->formatLligaFrontend($lliga);

        return response()->json([
            'success' => true,
            'message' => "T'has unit a la lliga correctament",
            'lliga' => $data,
            'data' => $data,
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    //  COMPETICIONS
    // ══════════════════════════════════════════════════════════════

    public function competicionsIndex()
    {
        return response()->json(Competicio::with('equipsReals', 'jornades')->get());
    }

    public function competicionsShow($id)
    {
        return response()->json(Competicio::with('equipsReals', 'jornades')->findOrFail($id));
    }

    public function competicionsStore(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'temporada' => 'required|string|max:20',
            'bandera' => 'nullable|string|max:255',
        ]);

        return response()->json(Competicio::create($validated), 201);
    }

    public function competicionsUpdate(Request $request, $id)
    {
        $competicio = Competicio::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'sometimes|string|max:255',
            'temporada' => 'sometimes|string|max:20',
            'bandera' => 'nullable|string|max:255',
        ]);

        $competicio->update($validated);

        return response()->json($competicio);
    }

    public function competicionsDestroy($id)
    {
        Competicio::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Competició eliminada correctament',
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    //  EQUIPS REALS
    // ══════════════════════════════════════════════════════════════

    public function equipsRealsIndex()
    {
        return response()->json(EquipReal::with('competicio', 'jugadors')->get());
    }

    public function equipsRealsShow($id)
    {
        return response()->json(
            EquipReal::with('competicio', 'jugadors', 'partitsLocal', 'partitsVisitant')->findOrFail($id)
        );
    }

    public function equipsRealsStore(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'pais' => 'required|string|max:100',
            'img' => 'nullable|string|max:255',
            'competicio_id' => 'required|exists:competicions,id',
        ]);

        return response()->json(EquipReal::create($validated), 201);
    }

    public function equipsRealsUpdate(Request $request, $id)
    {
        $equip = EquipReal::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'sometimes|string|max:255',
            'pais' => 'sometimes|string|max:100',
            'img' => 'nullable|string|max:255',
            'competicio_id' => 'sometimes|exists:competicions,id',
        ]);

        $equip->update($validated);

        return response()->json($equip);
    }

    public function equipsRealsDestroy($id)
    {
        EquipReal::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Equip real eliminat correctament',
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    //  JUGADORS
    // ══════════════════════════════════════════════════════════════

    public function jugadorsIndex()
    {
        return response()->json(
            Jugador::with('equipReal')
                ->where('posicio_base', '!=', 'Entrenador')
                ->get()
                ->map(fn ($jugador) => $this->formatJugadorFrontend($jugador))
        );
    }

    public function jugadorsShow($id)
    {
        return response()->json(Jugador::with('equipReal', 'estadistiques', 'equipsFantasy')->findOrFail($id));
    }

    public function jugadorsStore(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'nacionalitat' => 'nullable|string|max:100',
            'posicio_base' => 'required|string|max:50',
            'dorsal' => 'nullable|integer|min:0',
            'partits_jugats' => 'nullable|integer|min:0',
            'gols_marcats' => 'nullable|integer|min:0',
            'gols_rebuts' => 'nullable|integer|min:0',
            'img' => 'nullable|string|max:255',
            'valor_mercat' => 'required|numeric|min:0',
            'puntuacio_total' => 'sometimes|integer',
            'equip_real_id' => 'required|exists:equips_reals,id',
        ]);

        return response()->json(Jugador::create($validated), 201);
    }

    public function jugadorsUpdate(Request $request, $id)
    {
        $jugador = Jugador::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'sometimes|string|max:255',
            'nacionalitat' => 'nullable|string|max:100',
            'posicio_base' => 'sometimes|string|max:50',
            'dorsal' => 'nullable|integer|min:0',
            'partits_jugats' => 'nullable|integer|min:0',
            'gols_marcats' => 'nullable|integer|min:0',
            'gols_rebuts' => 'nullable|integer|min:0',
            'img' => 'nullable|string|max:255',
            'valor_mercat' => 'sometimes|numeric|min:0',
            'puntuacio_total' => 'sometimes|integer',
            'equip_real_id' => 'sometimes|exists:equips_reals,id',
        ]);

        $jugador->update($validated);

        return response()->json($jugador);
    }

    public function jugadorsDestroy($id)
    {
        Jugador::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Jugador eliminat correctament',
        ]);
    }

    public function jugadorsEstadistiques($id)
    {
        $jugador = Jugador::with('estadistiques.partit')->findOrFail($id);

        return response()->json($jugador->estadistiques);
    }

    // ══════════════════════════════════════════════════════════════
    //  JORNADES
    // ══════════════════════════════════════════════════════════════

    public function jornadesIndex()
    {
        return response()->json(Jornada::with('competicio')->get());
    }

    public function jornadesShow($id)
    {
        return response()->json(
            Jornada::with('competicio', 'partits.equipLocal', 'partits.equipVisitant', 'puntuacions')->findOrFail($id)
        );
    }

    public function jornadesStore(Request $request)
    {
        $validated = $request->validate([
            'numero' => 'required|integer|min:1',
            'nom' => 'nullable|string|max:255',
            'data_inici' => 'required|date',
            'data_fi' => 'required|date|after_or_equal:data_inici',
            'estat' => 'nullable|string|max:50',
            'competicio_id' => 'required|exists:competicions,id',
        ]);

        return response()->json(Jornada::create($validated), 201);
    }

    public function jornadesUpdate(Request $request, $id)
    {
        $jornada = Jornada::findOrFail($id);

        $validated = $request->validate([
            'numero' => 'sometimes|integer|min:1',
            'nom' => 'nullable|string|max:255',
            'data_inici' => 'sometimes|date',
            'data_fi' => 'sometimes|date|after_or_equal:data_inici',
            'estat' => 'nullable|string|max:50',
            'competicio_id' => 'sometimes|exists:competicions,id',
        ]);

        $jornada->update($validated);

        return response()->json($jornada);
    }

    public function jornadesDestroy($id)
    {
        Jornada::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Jornada eliminada correctament',
        ]);
    }

    public function jornadesPartits($id)
    {
        $jornada = Jornada::with('partits.equipLocal', 'partits.equipVisitant')->findOrFail($id);

        return response()->json($jornada->partits);
    }

    // ══════════════════════════════════════════════════════════════
    //  PARTITS
    // ══════════════════════════════════════════════════════════════

    public function partitsIndex()
    {
        return response()->json(Partit::with('jornada', 'equipLocal', 'equipVisitant')->get());
    }

    public function partitsShow($id)
    {
        return response()->json(
            Partit::with('jornada', 'equipLocal', 'equipVisitant', 'estadistiques.jugador')->findOrFail($id)
        );
    }

    public function partitsStore(Request $request)
    {
        $validated = $request->validate([
            'data_hora' => 'required|date',
            'resultat' => 'nullable|string|max:20',
            'gols_local' => 'nullable|integer|min:0',
            'gols_visitant' => 'nullable|integer|min:0',
            'estat' => 'nullable|string|max:50',
            'jornada_id' => 'required|exists:jornades,id',
            'equip_local_id' => 'required|exists:equips_reals,id',
            'equip_visitant_id' => 'required|exists:equips_reals,id|different:equip_local_id',
        ]);

        return response()->json(Partit::create($validated), 201);
    }

    public function partitsUpdate(Request $request, $id)
    {
        $partit = Partit::findOrFail($id);

        $validated = $request->validate([
            'data_hora' => 'sometimes|date',
            'resultat' => 'nullable|string|max:20',
            'gols_local' => 'nullable|integer|min:0',
            'gols_visitant' => 'nullable|integer|min:0',
            'estat' => 'nullable|string|max:50',
            'jornada_id' => 'sometimes|exists:jornades,id',
            'equip_local_id' => 'sometimes|exists:equips_reals,id',
            'equip_visitant_id' => 'sometimes|exists:equips_reals,id|different:equip_local_id',
        ]);

        $partit->update($validated);

        return response()->json($partit);
    }

    public function partitsDestroy($id)
    {
        Partit::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Partit eliminat correctament',
        ]);
    }

    public function partitsEstadistiques($id)
    {
        $partit = Partit::with('estadistiques.jugador')->findOrFail($id);

        return response()->json($partit->estadistiques);
    }

    // ══════════════════════════════════════════════════════════════
    //  EQUIPS FANTASY
    // ══════════════════════════════════════════════════════════════

    public function equipsFantasyIndex()
    {
        return response()->json(EquipFantasy::with('usuari', 'lligaPrivada', 'jugadors')->get());
    }

    public function equipsFantasyShow($id)
    {
        return response()->json(
            EquipFantasy::with('usuari', 'lligaPrivada', 'jugadors', 'alineacions')->findOrFail($id)
        );
    }

    public function equipsFantasyStore(Request $request)
    {
        $validated = $request->validate([
            'nom_equip' => 'required|string|max:255',
            'pressupost' => 'nullable|numeric|min:0',
            'usuari_id' => 'required|exists:users,id',
            'lliga_privada_id' => 'required|exists:lligues_privades,id',
        ]);

        $lliga = LligaPrivada::findOrFail($validated['lliga_privada_id']);

        $equip = EquipFantasy::firstOrCreate(
            [
                'usuari_id' => $validated['usuari_id'],
                'lliga_privada_id' => $validated['lliga_privada_id'],
            ],
            [
                'nom_equip' => $validated['nom_equip'],
                'pressupost' => $validated['pressupost'] ?? $lliga->pressupost_inicial ?? 250000000,
            ]
        );

        return response()->json($equip, 201);
    }

    public function equipsFantasyUpdate(Request $request, $id)
    {
        $equip = EquipFantasy::findOrFail($id);

        $validated = $request->validate([
            'nom_equip' => 'sometimes|string|max:255',
            'pressupost' => 'sometimes|numeric|min:0',
        ]);

        $equip->update($validated);

        return response()->json($equip);
    }

    public function equipsFantasyDestroy($id)
    {
        EquipFantasy::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Equip fantasy eliminat correctament',
        ]);
    }

    public function equipsFantasyAfegirJugador(Request $request, $id)
    {
        $validated = $request->validate([
            'jugador_id' => 'required|exists:jugadors,id',
        ]);

        $equip = EquipFantasy::findOrFail($id);
        $jugador = Jugador::findOrFail($validated['jugador_id']);

        if ($equip->jugadors()->where('jugadors.id', $jugador->id)->exists()) {
            return response()->json([
                'message' => 'El jugador ja pertany a aquest equip',
            ], 422);
        }

        $equip->jugadors()->attach($jugador->id, [
            'preu_fitxatge' => $jugador->valor_mercat,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'message' => 'Jugador afegit correctament',
        ]);
    }

    public function equipsFantasyEliminarJugador(Request $request, $id)
    {
        $validated = $request->validate([
            'jugador_id' => 'required|exists:jugadors,id',
        ]);

        EquipFantasy::findOrFail($id)->jugadors()->detach($validated['jugador_id']);

        return response()->json([
            'message' => "Jugador eliminat de l'equip correctament",
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    //  MERCAT
    // ══════════════════════════════════════════════════════════════

    public function mercatIndex(Request $request)
    {
        $lligaId = $request->query('lliga_privada_id');

        $query = Jugador::with('equipReal')
            ->where('posicio_base', '!=', 'Entrenador');

        if ($lligaId) {
            $jugadorsOcupats = DB::table('jugador_equips_fantasy')
                ->join('equips_fantasy', 'equips_fantasy.id', '=', 'jugador_equips_fantasy.equip_fantasy_id')
                ->where('equips_fantasy.lliga_privada_id', $lligaId)
                ->pluck('jugador_equips_fantasy.jugador_id');

            $query->whereNotIn('id', $jugadorsOcupats);
        }

        return response()->json(
            $query->get()->map(fn ($jugador) => $this->formatJugadorFrontend($jugador))
        );
    }

    public function mercatFitxar(Request $request, Jugador $jugador)
    {
        $validated = $request->validate([
            'lliga_privada_id' => 'required|exists:lligues_privades,id',
        ]);

        $equip = $this->obtenirEquipFantasyUsuari($request, $validated['lliga_privada_id']);

        $jaFitxatALliga = DB::table('jugador_equips_fantasy')
            ->join('equips_fantasy', 'equips_fantasy.id', '=', 'jugador_equips_fantasy.equip_fantasy_id')
            ->where('equips_fantasy.lliga_privada_id', $validated['lliga_privada_id'])
            ->where('jugador_equips_fantasy.jugador_id', $jugador->id)
            ->exists();

        if ($jaFitxatALliga) {
            return response()->json([
                'message' => 'Aquest jugador ja està fitxat en aquesta lliga.',
            ], 422);
        }

        if ($equip->pressupost < $jugador->valor_mercat) {
            return response()->json([
                'message' => 'No tens prou pressupost.',
            ], 422);
        }

        $equip->jugadors()->attach($jugador->id, [
            'preu_fitxatge' => $jugador->valor_mercat,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $equip->decrement('pressupost', $jugador->valor_mercat);

        return response()->json([
            'success' => true,
            'message' => $jugador->nom . ' fitxat correctament.',
            'pressupost' => $equip->fresh()->pressupost,
            'jugador' => $this->formatJugadorFrontend($jugador),
            'equip' => $equip->fresh('jugadors'),
        ]);
    }

    public function mercatVendre(Request $request, Jugador $jugador)
    {
        $validated = $request->validate([
            'lliga_privada_id' => 'required|exists:lligues_privades,id',
        ]);

        $equip = $this->obtenirEquipFantasyUsuari($request, $validated['lliga_privada_id']);

        if (!$equip->jugadors()->where('jugadors.id', $jugador->id)->exists()) {
            return response()->json([
                'message' => 'Aquest jugador no està a la teva plantilla.',
            ], 404);
        }

        $equip->jugadors()->detach($jugador->id);
        $equip->increment('pressupost', $jugador->valor_mercat);

        return response()->json([
            'success' => true,
            'message' => $jugador->nom . ' venut correctament.',
            'pressupost' => $equip->fresh()->pressupost,
            'jugador' => $this->formatJugadorFrontend($jugador),
            'equip' => $equip->fresh('jugadors'),
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    //  ALINEACIONS COMPATIBLES AMB EL FRONTEND
    // ══════════════════════════════════════════════════════════════

    public function alineacionsIndex(Request $request)
    {
        $request->validate([
            'lliga_privada_id' => 'required|exists:lligues_privades,id',
            'formacio' => 'nullable|string|max:20',
            'jornada_id' => 'nullable|exists:jornades,id',
        ]);

        $equip = $this->obtenirEquipFantasyUsuari($request, $request->lliga_privada_id);

        $alineacio = Alineacio::with('jugadors')
            ->where('equip_fantasy_id', $equip->id)
            ->when($request->jornada_id, function ($query) use ($request) {
                $query->where('jornada_id', $request->jornada_id);
            }, function ($query) {
                $query->whereNull('jornada_id');
            })
            ->first();

        if (!$alineacio) {
            return response()->json([
                'formacio' => $request->formacio ?: '4-3-3',
                'titulars' => [],
                'alineacio' => null,
            ]);
        }

        return response()->json($this->formatAlineacioFrontend($alineacio));
    }

    public function alineacionsShow($id)
    {
        $alineacio = Alineacio::with('equipFantasy', 'jornada', 'jugadors')->findOrFail($id);

        return response()->json($this->formatAlineacioFrontend($alineacio));
    }

    public function alineacionsStore(Request $request)
    {
        $validated = $request->validate([
            'lliga_privada_id' => 'required|exists:lligues_privades,id',
            'jornada_id' => 'nullable|exists:jornades,id',
            'formacio' => 'required|string|max:20',
            'titulars' => 'nullable|array',
            'titulars.*.slot' => 'required_with:titulars|string|max:50',
            'titulars.*.jugador_id' => 'required_with:titulars|exists:jugadors,id',
        ]);

        $equip = $this->obtenirEquipFantasyUsuari($request, $validated['lliga_privada_id']);

        $alineacio = Alineacio::updateOrCreate(
            [
                'equip_fantasy_id' => $equip->id,
                'jornada_id' => $validated['jornada_id'] ?? null,
            ],
            [
                'esquema' => $validated['formacio'],
            ]
        );

        $sync = [];

        foreach ($validated['titulars'] ?? [] as $item) {
            $slot = $item['slot'];
            $jugadorId = $item['jugador_id'];

            $sync[$jugadorId] = [
                'posicio_alineacio' => $this->posicioDesDeSlot($slot),
                'ordre' => $this->ordreDesDeSlot($slot),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        $alineacio->jugadors()->sync($sync);

        return response()->json([
            'success' => true,
            'message' => 'Alineació guardada correctament',
            'alineacio' => $this->formatAlineacioFrontend($alineacio->load('jugadors')),
        ]);
    }

    public function alineacionsUpdate(Request $request, $id)
    {
        $alineacio = Alineacio::findOrFail($id);

        $validated = $request->validate([
            'formacio' => 'sometimes|string|max:20',
            'esquema' => 'sometimes|string|max:20',
            'titulars' => 'nullable|array',
            'titulars.*.slot' => 'required_with:titulars|string|max:50',
            'titulars.*.jugador_id' => 'required_with:titulars|exists:jugadors,id',
        ]);

        $alineacio->update([
            'esquema' => $validated['formacio'] ?? $validated['esquema'] ?? $alineacio->esquema,
        ]);

        if (isset($validated['titulars'])) {
            $sync = [];

            foreach ($validated['titulars'] as $item) {
                $slot = $item['slot'];
                $jugadorId = $item['jugador_id'];

                $sync[$jugadorId] = [
                    'posicio_alineacio' => $this->posicioDesDeSlot($slot),
                    'ordre' => $this->ordreDesDeSlot($slot),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            $alineacio->jugadors()->sync($sync);
        }

        return response()->json([
            'success' => true,
            'message' => 'Alineació actualitzada correctament',
            'alineacio' => $this->formatAlineacioFrontend($alineacio->load('jugadors')),
        ]);
    }

    public function alineacionsDestroy($id)
    {
        Alineacio::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Alineació eliminada correctament',
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    //  PUNTUACIONS
    // ══════════════════════════════════════════════════════════════

    public function puntuacionsRanking($lligaId)
    {
        $ranking = Puntuacio::with('equipFantasy.usuari', 'jornada')
            ->where('lliga_privada_id', $lligaId)
            ->orderByDesc('punts_total')
            ->get();

        return response()->json($ranking);
    }

    public function puntuacionsIndex()
    {
        return response()->json(Puntuacio::with('equipFantasy.usuari', 'lligaPrivada', 'jornada')->get());
    }

    public function puntuacionsShow($id)
    {
        return response()->json(Puntuacio::with('equipFantasy.usuari', 'lligaPrivada', 'jornada')->findOrFail($id));
    }

    public function puntuacionsStore(Request $request)
    {
        $validated = $request->validate([
            'punts_total' => 'required|integer',
            'equip_fantasy_id' => 'required|exists:equips_fantasy,id',
            'lliga_privada_id' => 'required|exists:lligues_privades,id',
            'jornada_id' => 'nullable|exists:jornades,id',
        ]);

        return response()->json(Puntuacio::create($validated), 201);
    }

    public function puntuacionsUpdate(Request $request, $id)
    {
        $puntuacio = Puntuacio::findOrFail($id);

        $validated = $request->validate([
            'punts_total' => 'sometimes|integer',
            'equip_fantasy_id' => 'sometimes|exists:equips_fantasy,id',
            'lliga_privada_id' => 'sometimes|exists:lligues_privades,id',
            'jornada_id' => 'nullable|exists:jornades,id',
        ]);

        $puntuacio->update($validated);

        return response()->json($puntuacio);
    }

    public function puntuacionsDestroy($id)
    {
        Puntuacio::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Puntuació eliminada correctament',
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    //  ESTADÍSTIQUES JUGADOR
    // ══════════════════════════════════════════════════════════════

    public function estadistiquesIndex()
    {
        return response()->json(EstadisticaJugador::with('jugador', 'partit')->get());
    }

    public function estadistiquesShow($id)
    {
        return response()->json(EstadisticaJugador::with('jugador', 'partit')->findOrFail($id));
    }

    public function estadistiquesStore(Request $request)
    {
        $validated = $request->validate($this->estadistiquesRules(true));
        $validated['punts_jornada'] = $this->calcularPuntsJornada($validated);

        $existeix = EstadisticaJugador::where('jugador_id', $validated['jugador_id'])
            ->where('partit_id', $validated['partit_id'])
            ->exists();

        if ($existeix) {
            return response()->json([
                'message' => 'Ja existeixen estadístiques per a aquest jugador en aquest partit',
            ], 422);
        }

        return response()->json(EstadisticaJugador::create($validated), 201);
    }

    public function estadistiquesUpdate(Request $request, $id)
    {
        $estadistica = EstadisticaJugador::findOrFail($id);
        $validated = $request->validate($this->estadistiquesRules(false));

        $data = array_merge($estadistica->toArray(), $validated);
        $validated['punts_jornada'] = $this->calcularPuntsJornada($data);

        $estadistica->update($validated);

        return response()->json($estadistica);
    }

    public function estadistiquesDestroy($id)
    {
        EstadisticaJugador::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Estadística eliminada correctament',
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    //  HELPERS
    // ══════════════════════════════════════════════════════════════

    private function esAdmin(User $user): bool
    {
        return in_array(strtolower($user->rol ?? ''), ['admin', 'administrador'], true);
    }

    private function generarCodiLligaUnic(): string
    {
        do {
            $codi = strtoupper(Str::random(8));
        } while (LligaPrivada::where('codi_acces', $codi)->exists());

        return $codi;
    }

    private function assegurarEquipFantasyUsuari(User $user, LligaPrivada $lliga): EquipFantasy
    {
        return EquipFantasy::firstOrCreate(
            [
                'usuari_id' => $user->id,
                'lliga_privada_id' => $lliga->id,
            ],
            [
                'nom_equip' => 'Equip de ' . ($user->nom ?? $user->name ?? 'Usuari'),
                'pressupost' => $lliga->pressupost_inicial ?? 250000000,
            ]
        );
    }

    private function obtenirEquipFantasyUsuari(Request $request, $lligaId): EquipFantasy
    {
        $user = $request->user();
        $lliga = LligaPrivada::findOrFail($lligaId);

        return $this->assegurarEquipFantasyUsuari($user, $lliga);
    }

    private function formatLligaFrontend(LligaPrivada $lliga): array
    {
        $membresCount = $lliga->usuaris_count ?? $lliga->usuaris()->count();

        return [
            'id' => $lliga->id,
            'nom' => $lliga->nom,
            'descripcio' => $lliga->descripcio,
            'codi' => $lliga->codi_acces,
            'codi_acces' => $lliga->codi_acces,
            'codi_invitacio' => $lliga->codi_acces,
            'pressupost_inicial' => (float) $lliga->pressupost_inicial,
            'pressupost' => (float) $lliga->pressupost_inicial,
            'maxim_participants' => (int) $lliga->maxim_participants,
            'membres_count' => $membresCount,
            'usuaris_count' => $membresCount,
            'creador_id' => $lliga->creador_id,
            'usuaris' => $lliga->relationLoaded('usuaris') ? $lliga->usuaris : [],
            'equips_fantasy' => $lliga->relationLoaded('equipsFantasy') ? $lliga->equipsFantasy : [],
            'estat' => 'activa',
            'created_at' => $lliga->created_at,
            'updated_at' => $lliga->updated_at,
        ];
    }

    private function formatJugadorFrontend(Jugador $jugador): array
    {
        return [
            'id' => $jugador->id,
            'nom' => $jugador->nom,
            'equip' => $jugador->equipReal?->nom ?? 'Sense equip',
            'equip_real' => $jugador->equipReal,
            'posicio' => $this->normalitzarPosicioFrontend($jugador->posicio_base),
            'posicio_base' => $jugador->posicio_base,
            'valor_mercat' => (float) $jugador->valor_mercat,
            'punts' => (int) ($jugador->puntuacio_total ?? 0),
            'puntuacio_total' => (int) ($jugador->puntuacio_total ?? 0),
            'img' => $jugador->img,
            'estat' => 'Disponible',
        ];
    }

    private function normalitzarPosicioFrontend($posicio): string
    {
        $value = strtolower($posicio ?? '');

        if (str_contains($value, 'porter') || str_contains($value, 'portero')) {
            return 'Porter';
        }

        if (str_contains($value, 'def')) {
            return 'Defensa';
        }

        if (str_contains($value, 'mig') || str_contains($value, 'centro')) {
            return 'Migcampista';
        }

        if (str_contains($value, 'entrenador')) {
            return 'Entrenador';
        }

        return 'Davanter';
    }

    private function posicioDesDeSlot($slot): string
    {
        $slot = strtolower($slot);

        if (str_starts_with($slot, 'porter')) {
            return 'porter';
        }

        if (str_starts_with($slot, 'defensa')) {
            return 'defensa';
        }

        if (str_starts_with($slot, 'migcampista')) {
            return 'migcampista';
        }

        return 'atacant';
    }

    private function ordreDesDeSlot($slot): int
    {
        $parts = explode('-', $slot);

        return isset($parts[1]) ? (int) $parts[1] : 1;
    }

    private function slotDesDePivot($posicio, $ordre): string
    {
        if ($posicio === 'porter') {
            return 'porter-' . $ordre;
        }

        if ($posicio === 'defensa') {
            return 'defensa-' . $ordre;
        }

        if ($posicio === 'migcampista') {
            return 'migcampista-' . $ordre;
        }

        return 'davanter-' . $ordre;
    }

    private function formatAlineacioFrontend(Alineacio $alineacio): array
    {
        $titulars = [];

        foreach ($alineacio->jugadors as $jugador) {
            $slot = $this->slotDesDePivot(
                $jugador->pivot->posicio_alineacio,
                $jugador->pivot->ordre
            );

            $titulars[$slot] = $jugador->id;
        }

        return [
            'id' => $alineacio->id,
            'formacio' => $alineacio->esquema,
            'esquema' => $alineacio->esquema,
            'equip_fantasy_id' => $alineacio->equip_fantasy_id,
            'jornada_id' => $alineacio->jornada_id,
            'titulars' => $titulars,
            'jugadors' => $alineacio->jugadors,
        ];
    }

    private function estadistiquesRules(bool $creating): array
    {
        $required = $creating ? 'required' : 'sometimes';

        return [
            'minuts_jugats' => $required . '|integer|min:0|max:120',
            'partit_guanyat' => 'sometimes|boolean',
            'gols' => $required . '|integer|min:0',
            'assistencies' => $required . '|integer|min:0',
            'gols_propia' => 'sometimes|integer|min:0',
            'parades_clau' => 'sometimes|integer|min:0',
            'parades_normals' => 'sometimes|integer|min:0',
            'faltes_fetes' => 'sometimes|integer|min:0',
            'passes_completades' => 'sometimes|integer|min:0',
            'targetes_grogues' => $required . '|integer|min:0|max:2',
            'targetes_vermelles' => $required . '|integer|min:0|max:1',
            'penaltis_comesos' => 'sometimes|integer|min:0',
            'penaltis_provocats' => 'sometimes|integer|min:0',
            'punts_jornada' => 'sometimes|integer',
            'jugador_id' => $creating ? 'required|exists:jugadors,id' : 'sometimes|exists:jugadors,id',
            'partit_id' => $creating ? 'required|exists:partits,id' : 'sometimes|exists:partits,id',
        ];
    }

    private function calcularPuntsJornada(array $stats): int
    {
        $punts = 0;

        $punts += intdiv((int) ($stats['minuts_jugats'] ?? 0), 45);
        $punts += !empty($stats['partit_guanyat']) ? 3 : 0;
        $punts += (int) ($stats['gols'] ?? 0) * 5;
        $punts += (int) ($stats['assistencies'] ?? 0) * 3;
        $punts -= (int) ($stats['gols_propia'] ?? 0) * 3;
        $punts += (int) ($stats['parades_clau'] ?? 0) * 2;
        $punts += intdiv((int) ($stats['parades_normals'] ?? 0), 2);
        $punts -= intdiv((int) ($stats['faltes_fetes'] ?? 0), 2);
        $punts -= (int) ($stats['targetes_grogues'] ?? 0) * 2;
        $punts -= (int) ($stats['targetes_vermelles'] ?? 0) * 3;
        $punts += intdiv((int) ($stats['passes_completades'] ?? 0), 5);
        $punts -= (int) ($stats['penaltis_comesos'] ?? 0) * 3;
        $punts += (int) ($stats['penaltis_provocats'] ?? 0) * 2;

        return $punts;
    }
}