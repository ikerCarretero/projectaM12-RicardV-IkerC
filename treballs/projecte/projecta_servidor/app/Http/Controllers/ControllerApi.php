<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\LligaPrivada;
use App\Models\Competicio;
use App\Models\EquipReal;
use App\Models\Jugador;
use App\Models\EquipFantasy;
use App\Models\Jornada;
use App\Models\Partit;
use App\Models\Alineacio;
use App\Models\Puntuacio;
use App\Models\EstadistiqueJugador;

class ControllerApi extends Controller
{
    // ══════════════════════════════════════════════════════════════
    //  AUTENTICACIÓ
    // ══════════════════════════════════════════════════════════════

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nom'      => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'nom'      => $validated['nom'],
            'name'     => $validated['nom'],
            'email'    => $validated['email'],
            'password' => bcrypt($validated['password']),
            'rol'      => 'usuari',
        ]);

        $token = $user->createToken('api-token')->plainTextToken;
        return response()->json(['user' => $user, 'token' => $token], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Les credencials no són correctes'], 401);
        }

        $token = $user->createToken('api-token')->plainTextToken;
        return response()->json(['user' => $user, 'token' => $token]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Sessió tancada correctament']);
    }

    public function me(Request $request)
    {
        return response()->json($request->user()->load('equipFantasy', 'lliguesPrivades'));
    }

    // ══════════════════════════════════════════════════════════════
    //  USUARIS
    // ══════════════════════════════════════════════════════════════

    public function usuarisIndex()
    {
        return response()->json(User::with('equipFantasy', 'lliguesPrivades')->get());
    }

    public function usuarisShow($id)
    {
        return response()->json(User::with('equipFantasy', 'lliguesPrivades')->findOrFail($id));
    }

    public function usuarisStore(Request $request)
    {
        $validated = $request->validate([
            'nom'      => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'rol'      => 'required|in:admin,usuari',
        ]);
        $user = User::create([
            'nom'      => $validated['nom'],
            'name'     => $validated['nom'],
            'email'    => $validated['email'],
            'password' => bcrypt($validated['password']),
            'rol'      => $validated['rol'],
        ]);
        return response()->json($user, 201);
    }

    public function usuarisUpdate(Request $request, $id)
    {
        $user      = User::findOrFail($id);
        $validated = $request->validate([
            'nom'      => 'sometimes|string|max:255',
            'email'    => 'sometimes|email|unique:users,email,' . $id,
            'password' => 'sometimes|string|min:6',
            'rol'      => 'sometimes|in:admin,usuari',
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
        return response()->json(['message' => 'Usuari eliminat correctament']);
    }

    // ══════════════════════════════════════════════════════════════
    //  LLIGUES PRIVADES
    // ══════════════════════════════════════════════════════════════

    public function lliguesIndex()
    {
        return response()->json(LligaPrivada::with('usuaris', 'equipsFanstasy')->get());
    }

    public function lliguesShow($id)
    {
        return response()->json(LligaPrivada::with('usuaris', 'equipsFanstasy', 'puntuacions')->findOrFail($id));
    }

    public function lliguesStore(Request $request)
    {
        $validated               = $request->validate(['nom' => 'required|string|max:255']);
        $validated['codi_acces'] = strtoupper(Str::random(8));
        return response()->json(LligaPrivada::create($validated), 201);
    }

    public function lliguesUpdate(Request $request, $id)
    {
        $lliga     = LligaPrivada::findOrFail($id);
        $validated = $request->validate(['nom' => 'sometimes|string|max:255']);
        $lliga->update($validated);
        return response()->json($lliga);
    }

    public function lliguesDestroy($id)
    {
        LligaPrivada::findOrFail($id)->delete();
        return response()->json(['message' => 'Lliga privada eliminada correctament']);
    }

    public function lliguesUnirse(Request $request)
    {
        $request->validate([
            'codi_acces' => 'required|string',
            'usuari_id'  => 'required|exists:users,id',
        ]);
        $lliga = LligaPrivada::where('codi_acces', $request->codi_acces)->firstOrFail();
        if (!$lliga->usuaris()->where('usuari_id', $request->usuari_id)->exists()) {
            $lliga->usuaris()->attach($request->usuari_id);
        }
        return response()->json(['message' => "T'has unit a la lliga correctament", 'lliga' => $lliga]);
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
            'nom'       => 'required|string|max:255',
            'temporada' => 'required|string|max:20',
        ]);
        return response()->json(Competicio::create($validated), 201);
    }

    public function competicionsUpdate(Request $request, $id)
    {
        $competicio = Competicio::findOrFail($id);
        $validated  = $request->validate([
            'nom'       => 'sometimes|string|max:255',
            'temporada' => 'sometimes|string|max:20',
        ]);
        $competicio->update($validated);
        return response()->json($competicio);
    }

    public function competicionsDestroy($id)
    {
        Competicio::findOrFail($id)->delete();
        return response()->json(['message' => 'Competició eliminada correctament']);
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
            'nom'           => 'required|string|max:255',
            'pais'          => 'required|string|max:100',
            'competicio_id' => 'required|exists:competicions,id',
        ]);
        return response()->json(EquipReal::create($validated), 201);
    }

    public function equipsRealsUpdate(Request $request, $id)
    {
        $equip     = EquipReal::findOrFail($id);
        $validated = $request->validate([
            'nom'           => 'sometimes|string|max:255',
            'pais'          => 'sometimes|string|max:100',
            'competicio_id' => 'sometimes|exists:competicions,id',
        ]);
        $equip->update($validated);
        return response()->json($equip);
    }

    public function equipsRealsDestroy($id)
    {
        EquipReal::findOrFail($id)->delete();
        return response()->json(['message' => 'Equip real eliminat correctament']);
    }

    // ══════════════════════════════════════════════════════════════
    //  JUGADORS
    // ══════════════════════════════════════════════════════════════

    public function jugadorsIndex()
    {
        return response()->json(Jugador::with('equipReal')->get());
    }

    public function jugadorsShow($id)
    {
        return response()->json(Jugador::with('equipReal', 'estadistiques', 'equipsFanstasy')->findOrFail($id));
    }

    public function jugadorsStore(Request $request)
    {
        $validated = $request->validate([
            'nom'             => 'required|string|max:255',
            'posicio_base'    => 'required|in:Porter,Defensa,Migcampista,Davanter',
            'valor_mercat'    => 'required|numeric|min:0',
            'puntuacio_total' => 'sometimes|integer|min:0',
            'equip_real_id'   => 'required|exists:equips_reals,id',
        ]);
        return response()->json(Jugador::create($validated), 201);
    }

    public function jugadorsUpdate(Request $request, $id)
    {
        $jugador   = Jugador::findOrFail($id);
        $validated = $request->validate([
            'nom'             => 'sometimes|string|max:255',
            'posicio_base'    => 'sometimes|in:Porter,Defensa,Migcampista,Davanter',
            'valor_mercat'    => 'sometimes|numeric|min:0',
            'puntuacio_total' => 'sometimes|integer|min:0',
            'equip_real_id'   => 'sometimes|exists:equips_reals,id',
        ]);
        $jugador->update($validated);
        return response()->json($jugador);
    }

    public function jugadorsDestroy($id)
    {
        Jugador::findOrFail($id)->delete();
        return response()->json(['message' => 'Jugador eliminat correctament']);
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
            'numero'        => 'required|integer|min:1',
            'data_inici'    => 'required|date',
            'data_fi'       => 'required|date|after_or_equal:data_inici',
            'competicio_id' => 'required|exists:competicions,id',
        ]);
        return response()->json(Jornada::create($validated), 201);
    }

    public function jornadesUpdate(Request $request, $id)
    {
        $jornada   = Jornada::findOrFail($id);
        $validated = $request->validate([
            'numero'        => 'sometimes|integer|min:1',
            'data_inici'    => 'sometimes|date',
            'data_fi'       => 'sometimes|date|after_or_equal:data_inici',
            'competicio_id' => 'sometimes|exists:competicions,id',
        ]);
        $jornada->update($validated);
        return response()->json($jornada);
    }

    public function jornadesDestroy($id)
    {
        Jornada::findOrFail($id)->delete();
        return response()->json(['message' => 'Jornada eliminada correctament']);
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
            'data_hora'         => 'required|date',
            'resultat'          => 'nullable|string|max:10',
            'jornada_id'        => 'required|exists:jornades,id',
            'equip_local_id'    => 'required|exists:equips_reals,id',
            'equip_visitant_id' => 'required|exists:equips_reals,id|different:equip_local_id',
        ]);
        return response()->json(Partit::create($validated), 201);
    }

    public function partitsUpdate(Request $request, $id)
    {
        $partit    = Partit::findOrFail($id);
        $validated = $request->validate([
            'data_hora'         => 'sometimes|date',
            'resultat'          => 'nullable|string|max:10',
            'jornada_id'        => 'sometimes|exists:jornades,id',
            'equip_local_id'    => 'sometimes|exists:equips_reals,id',
            'equip_visitant_id' => 'sometimes|exists:equips_reals,id|different:equip_local_id',
        ]);
        $partit->update($validated);
        return response()->json($partit);
    }

    public function partitsDestroy($id)
    {
        Partit::findOrFail($id)->delete();
        return response()->json(['message' => 'Partit eliminat correctament']);
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
            'nom_equip'        => 'required|string|max:255',
            'pressupost'       => 'required|numeric|min:0',
            'usuari_id'        => 'required|exists:users,id',
            'lliga_privada_id' => 'required|exists:lligues_privades,id',
        ]);
        $existe = EquipFantasy::where('usuari_id', $validated['usuari_id'])
                              ->where('lliga_privada_id', $validated['lliga_privada_id'])
                              ->exists();
        if ($existe) {
            return response()->json(['message' => 'Aquest usuari ja té un equip en aquesta lliga'], 422);
        }
        return response()->json(EquipFantasy::create($validated), 201);
    }

    public function equipsFantasyUpdate(Request $request, $id)
    {
        $equip     = EquipFantasy::findOrFail($id);
        $validated = $request->validate([
            'nom_equip'  => 'sometimes|string|max:255',
            'pressupost' => 'sometimes|numeric|min:0',
        ]);
        $equip->update($validated);
        return response()->json($equip);
    }

    public function equipsFantasyDestroy($id)
    {
        EquipFantasy::findOrFail($id)->delete();
        return response()->json(['message' => 'Equip fantasy eliminat correctament']);
    }

    public function equipsFantasyAfegirJugador(Request $request, $id)
    {
        $request->validate(['jugador_id' => 'required|exists:jugadors,id']);
        $equip = EquipFantasy::findOrFail($id);
        if ($equip->jugadors()->where('jugador_id', $request->jugador_id)->exists()) {
            return response()->json(['message' => 'El jugador ja pertany a aquest equip'], 422);
        }
        $equip->jugadors()->attach($request->jugador_id);
        return response()->json(['message' => 'Jugador afegit correctament']);
    }

    public function equipsFantasyEliminarJugador(Request $request, $id)
    {
        $request->validate(['jugador_id' => 'required|exists:jugadors,id']);
        EquipFantasy::findOrFail($id)->jugadors()->detach($request->jugador_id);
        return response()->json(['message' => "Jugador eliminat de l'equip correctament"]);
    }

    // ══════════════════════════════════════════════════════════════
    //  ALINEACIONS
    // ══════════════════════════════════════════════════════════════

    public function alineacionsIndex()
    {
        return response()->json(Alineacio::with('equipFantasy', 'jornada')->get());
    }

    public function alineacionsShow($id)
    {
        return response()->json(Alineacio::with('equipFantasy', 'jornada', 'jugadors')->findOrFail($id));
    }

    public function alineacionsStore(Request $request)
    {
        $validated = $request->validate([
            'esquema'          => 'required|string|max:10',
            'equip_fantasy_id' => 'required|exists:equips_fantasy,id',
            'jornada_id'       => 'required|exists:jornades,id',
        ]);
        $existe = Alineacio::where('equip_fantasy_id', $validated['equip_fantasy_id'])
                           ->where('jornada_id', $validated['jornada_id'])
                           ->exists();
        if ($existe) {
            return response()->json(['message' => 'Ja existeix una alineació per a aquesta jornada'], 422);
        }
        return response()->json(Alineacio::create($validated), 201);
    }

    public function alineacionsUpdate(Request $request, $id)
    {
        $alineacio = Alineacio::findOrFail($id);
        $validated = $request->validate(['esquema' => 'sometimes|string|max:10']);
        $alineacio->update($validated);
        return response()->json($alineacio);
    }

    public function alineacionsDestroy($id)
    {
        Alineacio::findOrFail($id)->delete();
        return response()->json(['message' => 'Alineació eliminada correctament']);
    }

    public function alineacionsAfegirJugador(Request $request, $id)
    {
        $request->validate([
            'jugador_id'        => 'required|exists:jugadors,id',
            'posicio_alineacio' => 'required|in:porter,defensa,migcampista,atacant',
            'ordre'             => 'required|integer|min:1|max:11',
        ]);
        $alineacio = Alineacio::findOrFail($id);
        $alineacio->jugadors()->syncWithoutDetaching([
            $request->jugador_id => [
                'posicio_alineacio' => $request->posicio_alineacio,
                'ordre'             => $request->ordre,
            ],
        ]);
        return response()->json(['message' => "Jugador afegit a l'alineació correctament"]);
    }

    public function alineacionsEliminarJugador(Request $request, $id)
    {
        $request->validate(['jugador_id' => 'required|exists:jugadors,id']);
        Alineacio::findOrFail($id)->jugadors()->detach($request->jugador_id);
        return response()->json(['message' => "Jugador tret de l'alineació correctament"]);
    }

    // ══════════════════════════════════════════════════════════════
    //  PUNTUACIONS
    // ══════════════════════════════════════════════════════════════

    public function puntuacionsIndex()
    {
        return response()->json(Puntuacio::with('lligaPrivada', 'jornada')->get());
    }

    public function puntuacionsShow($id)
    {
        return response()->json(Puntuacio::with('lligaPrivada', 'jornada')->findOrFail($id));
    }

    public function puntuacionsStore(Request $request)
    {
        $validated = $request->validate([
            'nom'                => 'required|string|max:255',
            'punts_total'        => 'sometimes|integer|min:0',
            'lligues_privada_id' => 'required|exists:lligues_privades,id',
            'jornada_id'         => 'required|exists:jornades,id',
        ]);
        return response()->json(Puntuacio::create($validated), 201);
    }

    public function puntuacionsUpdate(Request $request, $id)
    {
        $puntuacio = Puntuacio::findOrFail($id);
        $validated = $request->validate([
            'nom'         => 'sometimes|string|max:255',
            'punts_total' => 'sometimes|integer|min:0',
        ]);
        $puntuacio->update($validated);
        return response()->json($puntuacio);
    }

    public function puntuacionsDestroy($id)
    {
        Puntuacio::findOrFail($id)->delete();
        return response()->json(['message' => 'Puntuació eliminada correctament']);
    }

    public function puntuacionsRanking($lligaId)
    {
        return response()->json(
            Puntuacio::where('lligues_privada_id', $lligaId)
                     ->orderByDesc('punts_total')
                     ->with('jornada')
                     ->get()
        );
    }

    // ══════════════════════════════════════════════════════════════
    //  ESTADÍSTIQUES JUGADOR
    // ══════════════════════════════════════════════════════════════

    public function estadistiquesIndex()
    {
        return response()->json(EstadistiqueJugador::with('jugador', 'partit')->get());
    }

    public function estadistiquesShow($id)
    {
        return response()->json(EstadistiqueJugador::with('jugador', 'partit')->findOrFail($id));
    }

    public function estadistiquesStore(Request $request)
    {
        $validated = $request->validate([
            'minuts_jugats'      => 'required|integer|min:0|max:120',
            'gols'               => 'required|integer|min:0',
            'assistencies'       => 'required|integer|min:0',
            'targetes_grogues'   => 'required|integer|min:0|max:2',
            'targetes_vermelles' => 'required|integer|min:0|max:1',
            'punts_jornada'      => 'sometimes|integer',
            'jugador_id'         => 'required|exists:jugadors,id',
            'partit_id'          => 'required|exists:partits,id',
        ]);
        $existe = EstadistiqueJugador::where('jugador_id', $validated['jugador_id'])
                                     ->where('partit_id', $validated['partit_id'])
                                     ->exists();
        if ($existe) {
            return response()->json(['message' => 'Ja existeixen estadístiques per a aquest jugador en aquest partit'], 422);
        }
        return response()->json(EstadistiqueJugador::create($validated), 201);
    }

    public function estadistiquesUpdate(Request $request, $id)
    {
        $est       = EstadistiqueJugador::findOrFail($id);
        $validated = $request->validate([
            'minuts_jugats'      => 'sometimes|integer|min:0|max:120',
            'gols'               => 'sometimes|integer|min:0',
            'assistencies'       => 'sometimes|integer|min:0',
            'targetes_grogues'   => 'sometimes|integer|min:0|max:2',
            'targetes_vermelles' => 'sometimes|integer|min:0|max:1',
            'punts_jornada'      => 'sometimes|integer',
        ]);
        $est->update($validated);
        return response()->json($est);
    }

    public function estadistiquesDestroy($id)
    {
        EstadistiqueJugador::findOrFail($id)->delete();
        return response()->json(['message' => 'Estadística eliminada correctament']);
    }
}