<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ── Usuaris ───────────────────────────────────────────────
        $admin = User::create([
            'nom'      => 'Admin',
            'name'     => 'Admin',
            'email'    => 'admin@fantasy.com',
            'password' => Hash::make('password'),
            'rol'      => 'admin',
        ]);

        $ricard = User::create([
            'nom'      => 'Ricard Vergés',
            'name'     => 'Ricard Vergés',
            'email'    => 'ricard@fantasy.com',
            'password' => Hash::make('password'),
            'rol'      => 'usuari',
        ]);

        $iker = User::create([
            'nom'      => 'Iker Carretero',
            'name'     => 'Iker Carretero',
            'email'    => 'iker@fantasy.com',
            'password' => Hash::make('password'),
            'rol'      => 'usuari',
        ]);

        // ── Lligues Privades ──────────────────────────────────────
        $lliga1 = LligaPrivada::create([
            'nom'        => 'Lliga dels Amics',
            'codi_acces' => 'AMICS123',
        ]);

        $lliga2 = LligaPrivada::create([
            'nom'        => 'Lliga DAW2',
            'codi_acces' => 'DAW2BEST',
        ]);

        // Afegir usuaris a les lligues
        $lliga1->usuaris()->attach([$ricard->id, $iker->id]);
        $lliga2->usuaris()->attach([$ricard->id, $iker->id, $admin->id]);

        // ── Competicions ──────────────────────────────────────────
        $laliga = Competicio::create([
            'nom'       => 'La Liga',
            'temporada' => '2025-2026',
        ]);

        $championsLeague = Competicio::create([
            'nom'       => 'UEFA Champions League',
            'temporada' => '2025-2026',
        ]);

        $premierLeague = Competicio::create([
            'nom'       => 'Premier League',
            'temporada' => '2025-2026',
        ]);

        // ── Equips Reals ──────────────────────────────────────────
        $barca = EquipReal::create([
            'nom'           => 'FC Barcelona',
            'pais'          => 'Espanya',
            'competicio_id' => $laliga->id,
        ]);

        $madrid = EquipReal::create([
            'nom'           => 'Real Madrid',
            'pais'          => 'Espanya',
            'competicio_id' => $laliga->id,
        ]);

        $atletico = EquipReal::create([
            'nom'           => 'Atlético de Madrid',
            'pais'          => 'Espanya',
            'competicio_id' => $laliga->id,
        ]);

        $mancity = EquipReal::create([
            'nom'           => 'Manchester City',
            'pais'          => 'Anglaterra',
            'competicio_id' => $premierLeague->id,
        ]);

        $arsenal = EquipReal::create([
            'nom'           => 'Arsenal FC',
            'pais'          => 'Anglaterra',
            'competicio_id' => $premierLeague->id,
        ]);

        // ── Jugadors ──────────────────────────────────────────────
        $ter_stegen = Jugador::create([
            'nom'             => 'Marc-André ter Stegen',
            'posicio_base'    => 'Porter',
            'valor_mercat'    => 25000000,
            'puntuacio_total' => 45,
            'equip_real_id'   => $barca->id,
        ]);

        $pedri = Jugador::create([
            'nom'             => 'Pedri',
            'posicio_base'    => 'Migcampista',
            'valor_mercat'    => 90000000,
            'puntuacio_total' => 120,
            'equip_real_id'   => $barca->id,
        ]);

        $lewandowski = Jugador::create([
            'nom'             => 'Robert Lewandowski',
            'posicio_base'    => 'Davanter',
            'valor_mercat'    => 15000000,
            'puntuacio_total' => 155,
            'equip_real_id'   => $barca->id,
        ]);

        $courtois = Jugador::create([
            'nom'             => 'Thibaut Courtois',
            'posicio_base'    => 'Porter',
            'valor_mercat'    => 30000000,
            'puntuacio_total' => 60,
            'equip_real_id'   => $madrid->id,
        ]);

        $vinicius = Jugador::create([
            'nom'             => 'Vinícius Jr.',
            'posicio_base'    => 'Davanter',
            'valor_mercat'    => 180000000,
            'puntuacio_total' => 175,
            'equip_real_id'   => $madrid->id,
        ]);

        $bellingham = Jugador::create([
            'nom'             => 'Jude Bellingham',
            'posicio_base'    => 'Migcampista',
            'valor_mercat'    => 180000000,
            'puntuacio_total' => 160,
            'equip_real_id'   => $madrid->id,
        ]);

        $oblak = Jugador::create([
            'nom'             => 'Jan Oblak',
            'posicio_base'    => 'Porter',
            'valor_mercat'    => 20000000,
            'puntuacio_total' => 55,
            'equip_real_id'   => $atletico->id,
        ]);

        $griezmann = Jugador::create([
            'nom'             => 'Antoine Griezmann',
            'posicio_base'    => 'Davanter',
            'valor_mercat'    => 20000000,
            'puntuacio_total' => 140,
            'equip_real_id'   => $atletico->id,
        ]);

        $ederson = Jugador::create([
            'nom'             => 'Ederson',
            'posicio_base'    => 'Porter',
            'valor_mercat'    => 40000000,
            'puntuacio_total' => 50,
            'equip_real_id'   => $mancity->id,
        ]);

        $haaland = Jugador::create([
            'nom'             => 'Erling Haaland',
            'posicio_base'    => 'Davanter',
            'valor_mercat'    => 200000000,
            'puntuacio_total' => 200,
            'equip_real_id'   => $mancity->id,
        ]);

        $saliba = Jugador::create([
            'nom'             => 'William Saliba',
            'posicio_base'    => 'Defensa',
            'valor_mercat'    => 70000000,
            'puntuacio_total' => 95,
            'equip_real_id'   => $arsenal->id,
        ]);

        $saka = Jugador::create([
            'nom'             => 'Bukayo Saka',
            'posicio_base'    => 'Davanter',
            'valor_mercat'    => 150000000,
            'puntuacio_total' => 165,
            'equip_real_id'   => $arsenal->id,
        ]);

        // ── Jornades ──────────────────────────────────────────────
        $jornada1 = Jornada::create([
            'numero'        => 1,
            'data_inici'    => '2024-08-17',
            'data_fi'       => '2024-08-19',
            'competicio_id' => $laliga->id,
        ]);

        $jornada2 = Jornada::create([
            'numero'        => 2,
            'data_inici'    => '2024-08-24',
            'data_fi'       => '2024-08-26',
            'competicio_id' => $laliga->id,
        ]);

        $jornada1PL = Jornada::create([
            'numero'        => 1,
            'data_inici'    => '2024-08-16',
            'data_fi'       => '2024-08-18',
            'competicio_id' => $premierLeague->id,
        ]);

        // ── Partits ───────────────────────────────────────────────
        $partit1 = Partit::create([
            'data_hora'         => '2024-08-17 20:00:00',
            'resultat'          => '2-1',
            'jornada_id'        => $jornada1->id,
            'equip_local_id'    => $barca->id,
            'equip_visitant_id' => $atletico->id,
        ]);

        $partit2 = Partit::create([
            'data_hora'         => '2024-08-18 21:00:00',
            'resultat'          => '3-0',
            'jornada_id'        => $jornada1->id,
            'equip_local_id'    => $madrid->id,
            'equip_visitant_id' => $atletico->id,
        ]);

        $partit3 = Partit::create([
            'data_hora'         => '2024-08-24 20:00:00',
            'resultat'          => null,
            'jornada_id'        => $jornada2->id,
            'equip_local_id'    => $atletico->id,
            'equip_visitant_id' => $barca->id,
        ]);

        $partit4 = Partit::create([
            'data_hora'         => '2024-08-16 20:00:00',
            'resultat'          => '5-1',
            'jornada_id'        => $jornada1PL->id,
            'equip_local_id'    => $mancity->id,
            'equip_visitant_id' => $arsenal->id,
        ]);

        // ── Equips Fantasy ────────────────────────────────────────
        $equipRicard = EquipFantasy::create([
            'nom_equip'        => 'Els Cracks de Ricard',
            'pressupost'       => 100000000,
            'usuari_id'        => $ricard->id,
            'lliga_privada_id' => $lliga1->id,
        ]);

        $equipIker = EquipFantasy::create([
            'nom_equip'        => 'Iker FC',
            'pressupost'       => 85000000,
            'usuari_id'        => $iker->id,
            'lliga_privada_id' => $lliga1->id,
        ]);

        // Afegir jugadors als equips fantasy
        $equipRicard->jugadors()->attach([
            $vinicius->id,
            $bellingham->id,
            $lewandowski->id,
            $ter_stegen->id,
            $saliba->id,
        ]);

        $equipIker->jugadors()->attach([
            $haaland->id,
            $saka->id,
            $pedri->id,
            $courtois->id,
            $griezmann->id,
        ]);

        // ── Alineacions ───────────────────────────────────────────
        $alineacioRicard = Alineacio::create([
            'esquema'          => '4-3-3',
            'equip_fantasy_id' => $equipRicard->id,
            'jornada_id'       => $jornada1->id,
        ]);

        $alineacioIker = Alineacio::create([
            'esquema'          => '4-4-2',
            'equip_fantasy_id' => $equipIker->id,
            'jornada_id'       => $jornada1->id,
        ]);

        // Jugadors a l'alineació de Ricard
        $alineacioRicard->jugadors()->attach([
            $ter_stegen->id  => ['posicio_alineacio' => 'porter',      'ordre' => 1],
            $saliba->id      => ['posicio_alineacio' => 'defensa',      'ordre' => 2],
            $bellingham->id  => ['posicio_alineacio' => 'migcampista',  'ordre' => 3],
            $vinicius->id    => ['posicio_alineacio' => 'atacant',      'ordre' => 4],
            $lewandowski->id => ['posicio_alineacio' => 'atacant',      'ordre' => 5],
        ]);

        // Jugadors a l'alineació d'Iker
        $alineacioIker->jugadors()->attach([
            $courtois->id  => ['posicio_alineacio' => 'porter',     'ordre' => 1],
            $pedri->id     => ['posicio_alineacio' => 'migcampista', 'ordre' => 2],
            $saka->id      => ['posicio_alineacio' => 'atacant',     'ordre' => 3],
            $haaland->id   => ['posicio_alineacio' => 'atacant',     'ordre' => 4],
            $griezmann->id => ['posicio_alineacio' => 'atacant',     'ordre' => 5],
        ]);

        // ── Estadístiques Jugador ─────────────────────────────────
        EstadistiqueJugador::create([
            'minuts_jugats'      => 90,
            'gols'               => 0,
            'assistencies'       => 0,
            'targetes_grogues'   => 0,
            'targetes_vermelles' => 0,
            'punts_jornada'      => 8,
            'jugador_id'         => $ter_stegen->id,
            'partit_id'          => $partit1->id,
        ]);

        EstadistiqueJugador::create([
            'minuts_jugats'      => 90,
            'gols'               => 1,
            'assistencies'       => 1,
            'targetes_grogues'   => 0,
            'targetes_vermelles' => 0,
            'punts_jornada'      => 18,
            'jugador_id'         => $lewandowski->id,
            'partit_id'          => $partit1->id,
        ]);

        EstadistiqueJugador::create([
            'minuts_jugats'      => 90,
            'gols'               => 2,
            'assistencies'       => 0,
            'targetes_grogues'   => 1,
            'targetes_vermelles' => 0,
            'punts_jornada'      => 20,
            'jugador_id'         => $vinicius->id,
            'partit_id'          => $partit2->id,
        ]);

        EstadistiqueJugador::create([
            'minuts_jugats'      => 90,
            'gols'               => 1,
            'assistencies'       => 2,
            'targetes_grogues'   => 0,
            'targetes_vermelles' => 0,
            'punts_jornada'      => 22,
            'jugador_id'         => $bellingham->id,
            'partit_id'          => $partit2->id,
        ]);

        EstadistiqueJugador::create([
            'minuts_jugats'      => 90,
            'gols'               => 3,
            'assistencies'       => 1,
            'targetes_grogues'   => 0,
            'targetes_vermelles' => 0,
            'punts_jornada'      => 30,
            'jugador_id'         => $haaland->id,
            'partit_id'          => $partit4->id,
        ]);

        EstadistiqueJugador::create([
            'minuts_jugats'      => 90,
            'gols'               => 2,
            'assistencies'       => 1,
            'targetes_grogues'   => 0,
            'targetes_vermelles' => 0,
            'punts_jornada'      => 25,
            'jugador_id'         => $saka->id,
            'partit_id'          => $partit4->id,
        ]);

        // ── Puntuacions ───────────────────────────────────────────
        Puntuacio::create([
            'nom'                => 'Els Cracks de Ricard - J1',
            'punts_total'        => 46,
            'lligues_privada_id' => $lliga1->id,
            'jornada_id'         => $jornada1->id,
        ]);

        Puntuacio::create([
            'nom'                => 'Iker FC - J1',
            'punts_total'        => 77,
            'lligues_privada_id' => $lliga1->id,
            'jornada_id'         => $jornada1->id,
        ]);
    }
}