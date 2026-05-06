<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jugador;
use App\Models\EquipReal;

class JugadorSeeder extends Seeder
{
    public function run(): void
    {
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — ARSENAL FC (2025-2026)
        // ───────────────────────────────────────────────
        $arsenal = EquipReal::where('nom', 'Arsenal FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'David Raya',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 3,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250171278.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Kepa Arrizabalaga',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Porter',
            'dorsal' => 13,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 2,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250039900.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Gabriel',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250131901.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Ben White',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250156002.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'William Saliba',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127439.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Cristhian Mosquera',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250129972.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Jurriën Timber',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 12,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101728.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Piero Hincapié',
            'nacionalitat' => 'ECU',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163454.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Eberechi Eze',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134376.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Declan Rice',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 41,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 120000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250083732.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Martín Zubimendi',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 36,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250143679.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Leandro Trossard',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 19,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250023009.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Myles Lewis-Skelly',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 49,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250181082.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Gabriel Martinelli',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 11,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134304.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Viktor Gyökeres',
            'nacionalitat' => 'SWE',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 10,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250105927.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Bukayo Saka',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 8,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 120000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106939.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Gabriel Jesus',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 5,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106649.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Sebastian Ferdinand',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 40,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250189246.jpg',
            'equip_real_id' => $arsenal->id,
        ]);



        Jugador::create([
            'nom' => 'Mikel Arteta',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $arsenal->id,
        ]);
        // ───────────────────────────────────────────────
        // BUNDESLIGA — FC BAYERN MÜNCHEN (2025-2026)
        // ───────────────────────────────────────────────
        $bayern = EquipReal::where('nom', 'FC Bayern München')->first();

        // Porters
        Jugador::create([
            'nom' => 'Manuel Neuer',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 11,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/97923.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Jonas Urbig',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Porter',
            'dorsal' => 40,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 3,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153936.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Jonathan Tah',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 12,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250055660.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Dayot Upamecano',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250079545.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Josip Stanišić',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Defensa',
            'dorsal' => 44,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250112220.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Raphaël Guerreiro',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 22,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066156.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Minjae Kim',
            'nacionalitat' => 'KOR',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250162325.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Hiroki Ito',
            'nacionalitat' => 'JPN',
            'posicio_base' => 'Defensa',
            'dorsal' => 21,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250181455.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Aleksandar Pavlovic',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 45,
            'partits_jugats' => 12,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163777.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Michael Olise',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 17,
            'partits_jugats' => 11,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 140000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250171184.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Joshua Kimmich',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250070417.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Tom Bischof',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250168211.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Leon Goretzka',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250041771.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Harry Kane',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 11,
            'gols_marcats' => 12,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250016833.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Serge Gnabry',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 11,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250041770.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Luis Díaz',
            'nacionalitat' => 'COL',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 10,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250132811.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Nicolas Jackson',
            'nacionalitat' => 'SEN',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 8,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163689.jpg',
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Wisdom Mike *',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Davanter',
            'dorsal' => 36,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250201122.jpg',
            'equip_real_id' => $bayern->id,
        ]);



        Jugador::create([
            'nom' => 'Vincent Kompany',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $bayern->id,
        ]);
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — LIVERPOOL FC (2025-2026)
        // ───────────────────────────────────────────────
        $liverpool = EquipReal::where('nom', 'Liverpool FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Giorgi Mamardashvili',
            'nacionalitat' => 'GEO',
            'posicio_base' => 'Porter',
            'dorsal' => 25,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 10,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101805.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Alisson Becker',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 3,
            'valor_mercat' => 17000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250099867.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Virgil van Dijk',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 12,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/50327420.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Ibrahima Konaté',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250091013.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Jeremie Frimpong',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 30,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250113276.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Milos Kerkez',
            'nacionalitat' => 'HUN',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163153.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Andy Robertson',
            'nacionalitat' => 'SCO',
            'posicio_base' => 'Defensa',
            'dorsal' => 26,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066157.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Joe Gomez',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250058215.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Dominik Szoboszlai',
            'nacionalitat' => 'HUN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 12,
            'gols_marcats' => 5,
            'gols_rebuts' => 0,
            'valor_mercat' => 100000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250104066.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Alexis Mac Allister',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 12,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250172672.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Ryan Gravenberch',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 38,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250113001.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Florian Wirtz',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 7,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 110000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250139445.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Curtis Jones',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 17,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106935.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Hugo Ekitiké',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 22,
            'partits_jugats' => 12,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250144643.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Cody Gakpo',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Davanter',
            'dorsal' => 18,
            'partits_jugats' => 11,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250096849.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Mohamed Salah',
            'nacionalitat' => 'EGY',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 10,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250052469.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Alexander Isak',
            'nacionalitat' => 'SWE',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 100000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250089868.jpg',
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Federico Chiesa',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 5,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250090398.jpg',
            'equip_real_id' => $liverpool->id,
        ]);



        Jugador::create([
            'nom' => 'Arne Slot',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://editorial.uefa.com/resources/0291-1bfa16558310-86d956dee6b5-1000/format/wide1/arne_slot_instructs_his_liverpool_players_during_the_win_at_ac_milan.jpeg',
            'equip_real_id' => $liverpool->id,
        ]);
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — TOTTENHAM HOTSPUR FC (2025-2026)
        // ───────────────────────────────────────────────
        $tottenham = EquipReal::where('nom', 'Tottenham Hotspur FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Guglielmo Vicario',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 11,
            'valor_mercat' => 23000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250178594.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Antonín Kinský',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Porter',
            'dorsal' => 31,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 3,
            'valor_mercat' => 13000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250130778.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Djed Spence',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250171293.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Pedro Porro',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 23,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/150562676.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Micky van de Ven',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 37,
            'partits_jugats' => 8,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/50327427.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Cristian Romero',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Defensa',
            'dorsal' => 17,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250144325.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Kevin Danso',
            'nacionalitat' => 'AUT',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250081703.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Destiny Udogie',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 13,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128956.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Xavi Simons',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 7,
            'partits_jugats' => 10,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128451.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Pape Matar Sarr',
            'nacionalitat' => 'SEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 29,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 32000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174777.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'João Palhinha',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250067295.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Archie Gray',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 14,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250171355.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Wilson Odobert',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 28,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153862.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Randal Kolo Muani',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 39,
            'partits_jugats' => 9,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250146926.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Richarlison',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250129539.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Dominic Solanke',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 19,
            'partits_jugats' => 3,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066930.jpg',
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Mathys Tel',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250140936.jpg',
            'equip_real_id' => $tottenham->id,
        ]);



        Jugador::create([
            'nom' => 'Igor Tudor',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $tottenham->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — FC BARCELONA (2025-2026)
        // ───────────────────────────────────────────────
        $barca = EquipReal::where('nom', 'FC Barcelona')->first();

        // Porters
        Jugador::create([
            'nom' => 'Joan García',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Porter',
            'dorsal' => 13,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 14,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250118131.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Wojciech Szczęsny',
            'nacionalitat' => 'POL',
            'posicio_base' => 'Porter',
            'dorsal' => 25,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 6,
            'valor_mercat' => 900000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/108501.jpg',
            'equip_real_id' => $barca->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Gerard Martín',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 18,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250197801.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Eric García',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250103561.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Jules Koundé',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 23,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250096309.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Ronald Araújo',
            'nacionalitat' => 'URU',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134170.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Pau Cubarsí',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250176453.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Alejandro Balde',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250135416.jpg',
            'equip_real_id' => $barca->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Pedri',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 150000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250143693.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Frenkie de Jong',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 21,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/50327423.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Marc Bernal',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 22,
            'partits_jugats' => 6,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250190383.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Gavi',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250139255.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Xavi Espart *',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 42,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250190377.jpg',
            'equip_real_id' => $barca->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Fermín López',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 16,
            'partits_jugats' => 11,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 100000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250164780.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Marcus Rashford',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 11,
            'gols_marcats' => 5,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088246.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Robert Lewandowski',
            'nacionalitat' => 'POL',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 11,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250002096.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Lamine Yamal',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 10,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 200000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250176450.jpg',
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Ferran Torres',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 10,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088320.jpg',
            'equip_real_id' => $barca->id,
        ]);



        Jugador::create([
            'nom' => 'Hansi Flick',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $barca->id,
        ]);
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — CHELSEA FC (2025-2026)
        // ───────────────────────────────────────────────
        $chelsea = EquipReal::where('nom', 'Chelsea FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Robert Sánchez',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 12,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250154983.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Teddy Sharman-Lowe',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Porter',
            'dorsal' => 28,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 550000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250164895.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Marc Cucurella',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250076168.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Trevoh Chalobah',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 23,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250076233.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Reece James',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250110362.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Malo Gusto',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 27,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134145.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Wesley Fofana',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 29,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250136472.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Tosin Adarabioyo',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250064355.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Enzo Fernández',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 10,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174838.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Moises Caicedo',
            'nacionalitat' => 'ECU',
            'posicio_base' => 'Migcampista',
            'dorsal' => 25,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 110000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250181610.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Jamie Gittens',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 11,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153402.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Andrey Santos',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 17,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250182090.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Cole Palmer',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 4,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 110000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250124282.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Alejandro Garnacho',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Davanter',
            'dorsal' => 49,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250135496.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'João Pedro',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 20,
            'partits_jugats' => 8,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188541.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Pedro Neto',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106986.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Estêvão',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 41,
            'partits_jugats' => 7,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250209858.jpg',
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Liam Delap',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 5,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 32000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128380.jpg',
            'equip_real_id' => $chelsea->id,
        ]);



        Jugador::create([
            'nom' => 'Liam Rosenior',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $chelsea->id,
        ]);
        // ───────────────────────────────────────────────
        // PORTUGAL — SPORTING CP (2025-2026)
        // ───────────────────────────────────────────────
        $sporting = EquipReal::where('nom', 'Sporting CP')->first();

        // Porters
        Jugador::create([
            'nom' => 'Rui Silva',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 14,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250062141.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'João Virginia',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Porter',
            'dorsal' => 12,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 1,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250089238.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Gonçalo Inácio',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 25,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250136464.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Iván Fresneda *',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 22,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250179137.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Ousmane Diomande',
            'nacionalitat' => 'CIV',
            'posicio_base' => 'Defensa',
            'dorsal' => 26,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250169685.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Eduardo Quaresma',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 72,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117415.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Matheus Reis',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250121330.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Giorgos Vagiannid',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Defensa',
            'dorsal' => 13,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 11000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250187284.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Maximiliano Araujo',
            'nacionalitat' => 'URU',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 11,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250200231.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Hidemasa Morita',
            'nacionalitat' => 'JPN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 5,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 9000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250156457.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Morten Hjulmand',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 42,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101557.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'João Simões *',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 52,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250180059.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Pedro Gonçalves',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250143328.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Luis Suárez',
            'nacionalitat' => 'COL',
            'posicio_base' => 'Davanter',
            'dorsal' => 97,
            'partits_jugats' => 12,
            'gols_marcats' => 5,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250147458.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Francisco Trincão',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 17,
            'partits_jugats' => 11,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250112122.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Geny Catamo',
            'nacionalitat' => 'MOZ',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250145845.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Geovany Quenda',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 6,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 42000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250177497.jpg',
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Fotis Ioannidis',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Davanter',
            'dorsal' => 89,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127400.jpg',
            'equip_real_id' => $sporting->id,
        ]);



        Jugador::create([
            'nom' => 'Rui Borges',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $sporting->id,
        ]);
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — MANCHESTER CITY FC (2025-2026)
        // ───────────────────────────────────────────────
        $mancity = EquipReal::where('nom', 'Manchester City FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Gianluigi Donnarumma',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Porter',
            'dorsal' => 25,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 12,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250078922.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'James Trafford',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 2,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117515.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Rúben Dias',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250058220.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Rayan Aït-Nouri',
            'nacionalitat' => 'ALG',
            'posicio_base' => 'Defensa',
            'dorsal' => 21,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127436.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Abdukodir Khusanov',
            'nacionalitat' => 'UZB',
            'posicio_base' => 'Defensa',
            'dorsal' => 45,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250187698.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Nathan Aké',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250027008.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Joško Gvardiol',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127284.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'John Stones',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250064233.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Tijjani Reijnders',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 4,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250121294.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Jeremy Doku',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 11,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250113142.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Rayan Cherki',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 8,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250124063.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Bernardo Silva',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 27000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250059115.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Nico O’Reilly *',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 33,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250165221.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Erling Haaland',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 10,
            'gols_marcats' => 8,
            'gols_rebuts' => 0,
            'valor_mercat' => 200000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250103758.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Omar Marmoush',
            'nacionalitat' => 'EGY',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250139217.jpg',
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Antoine Semenyo',
            'nacionalitat' => 'GHA',
            'posicio_base' => 'Davanter',
            'dorsal' => 42,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250181717.jpg',
            'equip_real_id' => $mancity->id,
        ]);



        Jugador::create([
            'nom' => 'Pep Guardiola',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $mancity->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — REAL MADRID CF (2025-2026)
        // ───────────────────────────────────────────────
        $madrid = EquipReal::where('nom', 'Real Madrid CF')->first();

        // Porters
        Jugador::create([
            'nom' => 'Thibaut Courtois',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 11,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250011668.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Andriy Lunin',
            'nacionalitat' => 'UKR',
            'posicio_base' => 'Porter',
            'dorsal' => 13,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 9,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250089824.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Trent Alexander-Arnold',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 12,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250076357.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Álvaro Carreras',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 18,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153945.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Dean Huijsen',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250194474.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Raúl Asencio',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 17,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153617.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Antonio Rüdiger',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 22,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 9000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250028211.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Fran García',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 20,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250091175.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Arda Güler',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 15,
            'partits_jugats' => 14,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250161881.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Federico Valverde',
            'nacionalitat' => 'URU',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 13,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 120000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101284.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Aurélien Tchouaméni',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 14,
            'partits_jugats' => 13,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250105244.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Eduardo Camavinga',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128270.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Jude Bellingham',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 5,
            'partits_jugats' => 9,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 140000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128377.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Vinícius Júnior',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 14,
            'gols_marcats' => 5,
            'gols_rebuts' => 0,
            'valor_mercat' => 150000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250121533.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Brahim Díaz',
            'nacionalitat' => 'MAR',
            'posicio_base' => 'Davanter',
            'dorsal' => 21,
            'partits_jugats' => 12,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088039.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Kylian Mbappé',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 11,
            'gols_marcats' => 15,
            'gols_rebuts' => 0,
            'valor_mercat' => 200000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250076574.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Franco Mastantuono',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Davanter',
            'dorsal' => 30,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210290.jpg',
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Rodrygo',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 5,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250132829.jpg',
            'equip_real_id' => $madrid->id,
        ]);



        Jugador::create([
            'nom' => 'Álvaro Arbeloa',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $madrid->id,
        ]);
        // ───────────────────────────────────────────────
        // SERIE A — FC INTERNAZIONALE MILANO (2025-2026)
        // ───────────────────────────────────────────────
        $inter = EquipReal::where('nom', 'FC Internazionale Milano')->first();

        // Porters
        Jugador::create([
            'nom' => 'Yann Sommer',
            'nacionalitat' => 'SUI',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 12,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/97746.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Raffaele Di Gennaro',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Porter',
            'dorsal' => 12,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 300000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250017814.jpg',
            'equip_real_id' => $inter->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Manuel Akanji',
            'nacionalitat' => 'SUI',
            'posicio_base' => 'Defensa',
            'dorsal' => 25,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250085369.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Federico Dimarco',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 32,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250056189.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Alessandro Bastoni',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 95,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250091199.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Carlos Augusto',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 30,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 26000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188223.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Yann Bisseck',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 31,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250116951.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Denzel Dumfries',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 5,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250112690.jpg',
            'equip_real_id' => $inter->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Piotr Zieliński',
            'nacionalitat' => 'POL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 7,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250024370.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Petar Sučić',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250135339.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Nicolò Barella',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 23,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066739.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Davide Frattesi',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 16,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088150.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Hakan Çalhanoğlu',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 6,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250022829.jpg',
            'equip_real_id' => $inter->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Ange-Yoan Bonny',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250173062.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Marcus Thuram',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 9,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250068805.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Pio Esposito *',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Davanter',
            'dorsal' => 94,
            'partits_jugats' => 9,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163404.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Lautaro Martínez',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 8,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 85000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250118281.jpg',
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Luis Henrique',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 23000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250146919.jpg',
            'equip_real_id' => $inter->id,
        ]);



        Jugador::create([
            'nom' => 'Cristian Chivu',
            'nacionalitat' => 'ROU',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $inter->id,
        ]);
        // ───────────────────────────────────────────────
        // LIGUE 1 — PARIS SAINT-GERMAIN (2025-2026)
        // ───────────────────────────────────────────────
        $psg = EquipReal::where('nom', 'Paris Saint-Germain')->first();

        // Porters
        Jugador::create([
            'nom' => 'Matvei Safonov',
            'nacionalitat' => 'RUS',
            'posicio_base' => 'Porter',
            'dorsal' => 39,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 7,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250090101.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Lucas Chevalier',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Porter',
            'dorsal' => 30,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 10,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250135068.jpg',
            'equip_real_id' => $psg->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Willian Pacho',
            'nacionalitat' => 'ECU',
            'posicio_base' => 'Defensa',
            'dorsal' => 51,
            'partits_jugats' => 14,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174126.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Nuno Mendes',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 25,
            'partits_jugats' => 14,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250136465.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Marquinhos',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 12,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250064064.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Achraf Hakimi',
            'nacionalitat' => 'MAR',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088061.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Lucas Hernández',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 21,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250063803.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Illia Zabarnyi',
            'nacionalitat' => 'UKR',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250119185.jpg',
            'equip_real_id' => $psg->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Vitinha',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 17,
            'partits_jugats' => 14,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 110000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101444.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Warren Zaïre-Emery',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 33,
            'partits_jugats' => 14,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153849.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'João Neves',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 87,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 110000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250164991.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Kang-in Lee',
            'nacionalitat' => 'KOR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 19,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250121584.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Senny Mayulu',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 24,
            'partits_jugats' => 9,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250177597.jpg',
            'equip_real_id' => $psg->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Khvicha Kvaratskhelia',
            'nacionalitat' => 'GEO',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 13,
            'gols_marcats' => 8,
            'gols_rebuts' => 0,
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101808.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Bradley Barcola',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 29,
            'partits_jugats' => 13,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134138.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Désiré Doué',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 10,
            'gols_marcats' => 5,
            'gols_rebuts' => 0,
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250162177.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Ousmane Dembélé',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 10,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 100000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066886.jpg',
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Gonçalo Ramos',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250116654.jpg',
            'equip_real_id' => $psg->id,
        ]);



        Jugador::create([
            'nom' => 'Luis Enrique',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $psg->id,
        ]);
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — NEWCASTLE UNITED FC (2025-2026)
        // ───────────────────────────────────────────────
        $newcastle = EquipReal::where('nom', 'Newcastle United FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Nick Pope',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 6,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250118266.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Aaron Ramsdale',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Porter',
            'dorsal' => 32,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 12,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250105912.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Dan Burn',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 33,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250186141.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Malick Thiaw',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 12,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250123978.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Lewis Hall *',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250139204.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Kieran Trippier',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250000919.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Sven Botman',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101719.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Tino Livramento',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 21,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117508.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Sandro Tonali',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117809.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Joelinton',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 7,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250086067.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Joe Willock',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 28,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 16000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250076081.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Jacob Ramsey',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 41,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163250.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Lewis Miley *',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 67,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250183854.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Anthony Gordon',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 12,
            'gols_marcats' => 10,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117036.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Harvey Barnes',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 12,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 32000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250102497.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Anthony Elanga',
            'nacionalitat' => 'SWE',
            'posicio_base' => 'Davanter',
            'dorsal' => 20,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250124269.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Nick Woltemade',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Davanter',
            'dorsal' => 27,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127360.jpg',
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Jacob Murphy',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 23,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250109276.jpg',
            'equip_real_id' => $newcastle->id,
        ]);



        Jugador::create([
            'nom' => 'Eddie Howe',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $newcastle->id,
        ]);
        // ───────────────────────────────────────────────
        // SERIE A — JUVENTUS FC (2025-2026)
        // ───────────────────────────────────────────────
        $juve = EquipReal::where('nom', 'Juventus FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Michele Di Gregorio',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Porter',
            'dorsal' => 16,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 11,
            'valor_mercat' => 14000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101201.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Mattia Perin',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 6,
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250007075.jpg',
            'equip_real_id' => $juve->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Pierre Kalulu',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 15,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 32000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250122983.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Lloyd Kelly',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250130510.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Andrea Cambiaso',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 27,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163623.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Juan Cabal',
            'nacionalitat' => 'COL',
            'posicio_base' => 'Defensa',
            'dorsal' => 32,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 9000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250194564.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Federico Gatti',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 5,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 16000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250172907.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Bremer',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250132322.jpg',
            'equip_real_id' => $juve->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Weston McKennie',
            'nacionalitat' => 'USA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 22,
            'partits_jugats' => 10,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250116904.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Teun Koopmeiners',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250081553.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Manuel Locatelli',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 5,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066747.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Khephren Thuram',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 19,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106722.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Fabio Miretti',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 21,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 16000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250135575.jpg',
            'equip_real_id' => $juve->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Kenan Yıldız *',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250171055.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Jonathan David',
            'nacionalitat' => 'CAN',
            'posicio_base' => 'Davanter',
            'dorsal' => 30,
            'partits_jugats' => 9,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250102035.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Francisco Conceição',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117405.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Loïs Openda',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Davanter',
            'dorsal' => 20,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 32000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250096954.jpg',
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Edon Zhegrova',
            'nacionalitat' => 'KOS',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 14000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250118504.jpg',
            'equip_real_id' => $juve->id,
        ]);



        Jugador::create([
            'nom' => 'Luciano Spalletti',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $juve->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — ATLÉTICO DE MADRID (2025-2026)
        // ───────────────────────────────────────────────
        $atleti = EquipReal::where('nom', 'Atlético de Madrid')->first();

        // Porters
        Jugador::create([
            'nom' => 'Jan Oblak',
            'nacionalitat' => 'SVN',
            'posicio_base' => 'Porter',
            'dorsal' => 13,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 20,
            'valor_mercat' => 17000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250012069.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Juan Musso',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 6,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250137521.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Matteo Ruggeri',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 13,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127239.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Robin Le Normand',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 12,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250112513.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Dávid Hancko',
            'nacionalitat' => 'SVK',
            'posicio_base' => 'Defensa',
            'dorsal' => 17,
            'partits_jugats' => 11,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250092668.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Nahuel Molina',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Defensa',
            'dorsal' => 16,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250172673.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Marc Pubill',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 18,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250194472.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'José María Giménez',
            'nacionalitat' => 'URU',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 6,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250063505.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Koke',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 14,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/1909917.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Marcos Llorente',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 14,
            'partits_jugats' => 12,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250079670.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Álex Baena',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106963.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Pablo Barrios',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250139036.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Johnny Cardoso',
            'nacionalitat' => 'USA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 5,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250150915.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Julián Alvarez',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Davanter',
            'dorsal' => 19,
            'partits_jugats' => 13,
            'gols_marcats' => 9,
            'gols_rebuts' => 0,
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250172668.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Alexander Sørloth',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 13,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250061361.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Antoine Griezmann',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 13,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250019498.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Giuliano Simeone',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Davanter',
            'dorsal' => 20,
            'partits_jugats' => 13,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153634.jpg',
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Nicolás González',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Davanter',
            'dorsal' => 23,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 24000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250137525.jpg',
            'equip_real_id' => $atleti->id,
        ]);



        Jugador::create([
            'nom' => 'Diego Simeone',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $atleti->id,
        ]);
        // ───────────────────────────────────────────────
        // SERIE A — ATALANTA BC (2025-2026)
        // ───────────────────────────────────────────────
        $atalanta = EquipReal::where('nom', 'Atalanta BC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Marco Carnesecchi',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Porter',
            'dorsal' => 29,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 18,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250105612.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Marco Sportiello',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Porter',
            'dorsal' => 57,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 5,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250082738.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Davide Zappacosta',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 77,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250064232.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Berat Djimsiti',
            'nacionalitat' => 'ALB',
            'posicio_base' => 'Defensa',
            'dorsal' => 19,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250028715.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Odilon Kossounou',
            'nacionalitat' => 'CIV',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250132810.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Lorenzo Bernasconi',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 47,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250138174.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Isak Hien',
            'nacionalitat' => 'SWE',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174149.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Raoul Bellanova',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 16,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250091828.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Marten de Roon',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 15,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250014709.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Lazar Samardžić',
            'nacionalitat' => 'SRB',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 10,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 17000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250124849.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Mario Pašalić',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 9,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250042631.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Éderson',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 13,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188474.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Yunus Musah',
            'nacionalitat' => 'USA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117511.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Nikola Krstović',
            'nacionalitat' => 'MNE',
            'posicio_base' => 'Davanter',
            'dorsal' => 90,
            'partits_jugats' => 12,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250105227.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Gianluca Scamacca',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 10,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250076743.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Kamaldeen Sulemana',
            'nacionalitat' => 'GHA',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210995.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Charles De Ketelaere',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Davanter',
            'dorsal' => 17,
            'partits_jugats' => 8,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117705.jpg',
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Giacomo Raspadori',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Davanter',
            'dorsal' => 18,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250105617.jpg',
            'equip_real_id' => $atalanta->id,
        ]);



        Jugador::create([
            'nom' => 'Raffaele Palladino',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $atalanta->id,
        ]);
        // ───────────────────────────────────────────────
        // BUNDESLIGA — BAYER 04 LEVERKUSEN (2025-2026)
        // ───────────────────────────────────────────────
        $leverkusen = EquipReal::where('nom', 'Bayer 04 Leverkusen')->first();

        // Porters
        Jugador::create([
            'nom' => 'Janis Blaswich',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Porter',
            'dorsal' => 28,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 5,
            'valor_mercat' => 700000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250051291.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Jonas Omlin',
            'nacionalitat' => 'SUI',
            'posicio_base' => 'Porter',
            'dorsal' => 18,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250072893.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Alejandro Grimaldo',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 20,
            'partits_jugats' => 12,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 24000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250042422.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Jarell Quansah',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128391.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Edmond Tapsoba',
            'nacionalitat' => 'BFA',
            'posicio_base' => 'Defensa',
            'dorsal' => 12,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250118391.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Loïc Badé',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250161164.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Arthur',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 13,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188129.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Lucas Vázquez',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 21,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250040521.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Aleix García',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 24,
            'partits_jugats' => 12,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250065301.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Ibrahim Maza',
            'nacionalitat' => 'ALG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 30,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250194495.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Malik Tillman',
            'nacionalitat' => 'USA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250123677.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Robert Andrich',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250055957.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Equi Fernández',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250212325.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Ernest Poku',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Davanter',
            'dorsal' => 19,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250139070.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Christian Kofane',
            'nacionalitat' => 'CMR',
            'posicio_base' => 'Davanter',
            'dorsal' => 35,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210178.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Patrik Schick',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 9,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250055110.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Martin Terrier',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250099459.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);



        Jugador::create([
            'nom' => 'Xabi Alonso',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $leverkusen->id,
        ]);
        // ───────────────────────────────────────────────
        // BUNDESLIGA — BORUSSIA DORTMUND (2025-2026)
        // ───────────────────────────────────────────────
        $dortmund = EquipReal::where('nom', 'Borussia Dortmund')->first();

        // Porters
        Jugador::create([
            'nom' => 'Gregor Kobel',
            'nacionalitat' => 'SUI',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 21,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250069832.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Alexander Meyer',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Porter',
            'dorsal' => 33,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174737.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Ramy Bensebaini',
            'nacionalitat' => 'ALG',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 9,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250119677.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Daniel Svensson',
            'nacionalitat' => 'SWE',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 9,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250156423.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Waldemar Anton',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101238.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Julian Ryerson',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Defensa',
            'dorsal' => 26,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250092517.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Yan Couto',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163731.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Nico Schlotterbeck',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134856.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Felix Nmecha',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 10,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250112224.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Julian Brandt',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 9,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250046522.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Carney Chukwuemeka',
            'nacionalitat' => 'AUT',
            'posicio_base' => 'Migcampista',
            'dorsal' => 17,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250169276.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Marcel Sabitzer',
            'nacionalitat' => 'AUT',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250024349.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Salih Özcan',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250081693.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Serhou Guirassy',
            'nacionalitat' => 'GUI',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 10,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250080553.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Jobe Bellingham',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250167832.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Karim Adeyemi',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Davanter',
            'dorsal' => 27,
            'partits_jugats' => 9,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127347.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Maximilian Beier',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250124222.jpg',
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Fábio Silva',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 21,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250113350.jpg',
            'equip_real_id' => $dortmund->id,
        ]);



        Jugador::create([
            'nom' => 'Niko Kovač',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $dortmund->id,
        ]);
        // ───────────────────────────────────────────────
        // GRÈCIA — OLYMPIACOS FC (2025-2026)
        // ───────────────────────────────────────────────
        $olympiacos = EquipReal::where('nom', 'Olympiacos FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Kostas Tzolakis',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Porter',
            'dorsal' => 88,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 16,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250129408.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Alexandros Paschalakis',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 400000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250035377.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Francisco Ortega',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250189214.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Lorenzo Pirola',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 9000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250123994.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Panagiotis Retsos',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Defensa',
            'dorsal' => 45,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250076626.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Rodinei',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 23,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 900000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250187887.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Costinha',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 20,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127411.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Giulian Biancone',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250113291.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Christos Mouzakitis',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Migcampista',
            'dorsal' => 96,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250172102.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Santiago Hezze',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 32,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 14000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188565.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Dani García',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 14,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250086635.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Lorenzo Scipioni',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 16,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210516.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'André Luiz',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 17,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250216980.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Mehdi Taremi',
            'nacionalitat' => 'IRN',
            'posicio_base' => 'Davanter',
            'dorsal' => 99,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250097909.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Ayoub El Kaabi',
            'nacionalitat' => 'MAR',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250118298.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Chiquinho',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 22,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250131924.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Gelson Martins',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 9,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066239.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Daniel Podence',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 56,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250075880.jpg',
            'equip_real_id' => $olympiacos->id,
        ]);



        Jugador::create([
            'nom' => 'José Luis Mendilibar',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $olympiacos->id,
        ]);
        // ───────────────────────────────────────────────
        // BÈLGICA — CLUB BRUGGE KV (2025-2026)
        // ───────────────────────────────────────────────
        $brugge = EquipReal::where('nom', 'Club Brugge KV')->first();

        // Porters
        Jugador::create([
            'nom' => 'Simon Mignolet',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Porter',
            'dorsal' => 22,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 10,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/98078.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Club Brujas Nordin Jackers',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Porter',
            'dorsal' => 29,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 14,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066521.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Brandon Mechele',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Defensa',
            'dorsal' => 44,
            'partits_jugats' => 14,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250053044.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Kyriani Sabbe *',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Defensa',
            'dorsal' => 64,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250138985.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Joel Ordoñez *',
            'nacionalitat' => 'ECU',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 33000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250176201.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Bjorn Meijer',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 14,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250187320.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Hugo Siquet',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Defensa',
            'dorsal' => 41,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128898.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Jorne Spileers *',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Defensa',
            'dorsal' => 58,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153677.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Hans Vanaken',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 14,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250064188.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Aleksandar Stanković',
            'nacionalitat' => 'SRB',
            'posicio_base' => 'Migcampista',
            'dorsal' => 25,
            'partits_jugats' => 14,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163409.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Joaquin Seys *',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 65,
            'partits_jugats' => 13,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 17000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163786.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Raphael Onyedika',
            'nacionalitat' => 'NGA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 15,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 23000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250135101.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Hugo Vetlesen',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250115134.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Nicolo Tresoldi',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 14,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 13000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250181849.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Christos Tzolis',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Davanter',
            'dorsal' => 8,
            'partits_jugats' => 13,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250124460.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Carlos Forbs',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 13,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250138957.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Romeo Vermant *',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Davanter',
            'dorsal' => 17,
            'partits_jugats' => 11,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 11000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250138982.jpg',
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Mamadou Diakhon',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 67,
            'partits_jugats' => 11,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 9000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250192955.jpg',
            'equip_real_id' => $brugge->id,
        ]);



        Jugador::create([
            'nom' => 'Ivan Leko',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $brugge->id,
        ]);
        // ───────────────────────────────────────────────
        // TURQUIA — GALATASARAY SK (2025-2026)
        // ───────────────────────────────────────────────
        $galatasaray = EquipReal::where('nom', 'Galatasaray SK')->first();

        // Porters
        Jugador::create([
            'nom' => 'Uğurcan Çakır',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 19,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250078452.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Günay Güvenç',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Porter',
            'dorsal' => 19,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 1,
            'valor_mercat' => 300000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250073722.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Ismail Jakobs',
            'nacionalitat' => 'SEN',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117015.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Davinson Sánchez',
            'nacionalitat' => 'COL',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250099374.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Abdülkerim Bardakcı',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Defensa',
            'dorsal' => 42,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 6500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250043129.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Eren Elmalı',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Defensa',
            'dorsal' => 17,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163343.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Wilfried Singo',
            'nacionalitat' => 'CIV',
            'posicio_base' => 'Defensa',
            'dorsal' => 90,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250132323.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Sacha Boey',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 93,
            'partits_jugats' => 4,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250136348.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Gabriel Sara',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 12,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250199220.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Lucas Torreira',
            'nacionalitat' => 'URU',
            'posicio_base' => 'Migcampista',
            'dorsal' => 34,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250118286.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Leroy Sané',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250063984.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Mario Lemina',
            'nacionalitat' => 'GAB',
            'posicio_base' => 'Migcampista',
            'dorsal' => 99,
            'partits_jugats' => 9,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134357.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'İlkay Gündoğan',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250005335.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Barış Alper Yılmaz',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Davanter',
            'dorsal' => 53,
            'partits_jugats' => 12,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 26000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250158929.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Roland Sallai',
            'nacionalitat' => 'HUN',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250065179.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Victor Osimhen',
            'nacionalitat' => 'NGA',
            'posicio_base' => 'Davanter',
            'dorsal' => 45,
            'partits_jugats' => 10,
            'gols_marcats' => 7,
            'gols_rebuts' => 0,
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250132987.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Mauro Icardi',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250074434.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Yunus Akgün',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 9,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250103764.jpg',
            'equip_real_id' => $galatasaray->id,
        ]);



        Jugador::create([
            'nom' => 'Okan Buruk',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $galatasaray->id,
        ]);
        // ───────────────────────────────────────────────
        // LIGUE 1 — AS MONACO FC (2025-2026)
        // ───────────────────────────────────────────────
        $monaco = EquipReal::where('nom', 'AS Monaco FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Philipp Köhn',
            'nacionalitat' => 'SUI',
            'posicio_base' => 'Porter',
            'dorsal' => 16,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 17,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250090955.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Lukas Hrádecký',
            'nacionalitat' => 'FIN',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 2,
            'valor_mercat' => 1800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/1907188.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Jordan Teze',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 9,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088122.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Thilo Kehrer',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250055663.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Caio Henrique',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 12,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101097.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Vanderson',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250169730.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Kassoum Ouattara',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 20,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250183510.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Eric Dier',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 3,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250050416.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Maghnes Akliouche',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 11,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250160436.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Mamadou Coulibaly',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 28,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250178062.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Aleksandr Golovin',
            'nacionalitat' => 'RUS',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250058227.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Denis Zakaria',
            'nacionalitat' => 'SUI',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250079677.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Lamine Camara',
            'nacionalitat' => 'SEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 15,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250198240.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Folarin Balogun',
            'nacionalitat' => 'USA',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 10,
            'gols_marcats' => 5,
            'gols_rebuts' => 0,
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250118797.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Mika Biereth',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250167111.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Ansu Fati',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 31,
            'partits_jugats' => 5,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117471.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Simon Adingra',
            'nacionalitat' => 'CIV',
            'posicio_base' => 'Davanter',
            'dorsal' => 24,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174749.jpg',
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Joan Tincres *',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 42,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250184806.jpg',
            'equip_real_id' => $monaco->id,
        ]);



        Jugador::create([
            'nom' => 'Sebastien Pocognoli',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $monaco->id,
        ]);
        // ───────────────────────────────────────────────
        // AZERBAIDJAN — QARABAĞ FK (2025-2026)
        // ───────────────────────────────────────────────
        $qarabag = EquipReal::where('nom', 'Qarabağ FK')->first();

        // Porters
        Jugador::create([
            'nom' => 'Mateusz Kochalski',
            'nacionalitat' => 'POL',
            'posicio_base' => 'Porter',
            'dorsal' => 99,
            'partits_jugats' => 15,
            'gols_marcats' => 0,
            'gols_rebuts' => 35,
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250102244.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Fabijan Buntić',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Porter',
            'dorsal' => 97,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250089563.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Elvin Jafarguliyev',
            'nacionalitat' => 'AZE',
            'posicio_base' => 'Defensa',
            'dorsal' => 44,
            'partits_jugats' => 16,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127544.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Matheus Silva',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 16,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188528.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Kevin Medina',
            'nacionalitat' => 'COL',
            'posicio_base' => 'Defensa',
            'dorsal' => 81,
            'partits_jugats' => 15,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 450000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250141155.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Bahlul Mustafazada',
            'nacionalitat' => 'AZE',
            'posicio_base' => 'Defensa',
            'dorsal' => 13,
            'partits_jugats' => 15,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250065006.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Dani Bolt',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 18,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 900000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250209890.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Samy Mmaee',
            'nacionalitat' => 'MAR',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250073778.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Abdellah Zoubir',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 16,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 400000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250026416.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Pedro Bicalho',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 35,
            'partits_jugats' => 16,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250209889.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Leandro Andrade',
            'nacionalitat' => 'CPV',
            'posicio_base' => 'Migcampista',
            'dorsal' => 15,
            'partits_jugats' => 15,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250169677.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Marko Janković',
            'nacionalitat' => 'MNE',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 13,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250042347.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Olexiy Kashchuk',
            'nacionalitat' => 'UKR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 21,
            'partits_jugats' => 12,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 1800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250092182.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Emmanuel Addai',
            'nacionalitat' => 'GHA',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 15,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250200453.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Nariman Akhundzade',
            'nacionalitat' => 'AZE',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 12,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174016.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Musa Gurbanli',
            'nacionalitat' => 'AZE',
            'posicio_base' => 'Davanter',
            'dorsal' => 22,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 700000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250113364.jpg',
            'equip_real_id' => $qarabag->id,
        ]);

        Jugador::create([
            'nom' => 'Camilo Duran',
            'nacionalitat' => 'COL',
            'posicio_base' => 'Davanter',
            'dorsal' => 17,
            'partits_jugats' => 10,
            'gols_marcats' => 5,
            'gols_rebuts' => 0,
            'valor_mercat' => 750000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250212186.jpg',
            'equip_real_id' => $qarabag->id,
        ]);



        Jugador::create([
            'nom' => 'Gurban Gurbanov',
            'nacionalitat' => 'AZE',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $qarabag->id,
        ]);
        // ───────────────────────────────────────────────
        // NORUEGA — FK BODØ/GLIMT (2025-2026)
        // ───────────────────────────────────────────────
        $bodo = EquipReal::where('nom', 'FK Bodø/Glimt')->first();

        // Porters
        Jugador::create([
            'nom' => 'Nikita Haikin',
            'nacionalitat' => 'RUS',
            'posicio_base' => 'Porter',
            'dorsal' => 12,
            'partits_jugats' => 14,
            'gols_marcats' => 0,
            'gols_rebuts' => 24,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250141864.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Julian Faye Lund',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 300000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250085663.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Odin Bjørtuft',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 14,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 4500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250187215.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Fredrik André Bjør',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Defensa',
            'dorsal' => 15,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250104207.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Haitam Aleesami',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 250000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250084903.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Jostein Gundersen',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250109274.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Villads Nielsen',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2300000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250189213.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Håkon Evjen',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 26,
            'partits_jugats' => 14,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250107249.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Fredrik Sjøvold',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 14,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250173424.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Patrick Berg',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 7,
            'partits_jugats' => 14,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250065292.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Sondre Brunstad Fet',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 19,
            'partits_jugats' => 12,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 1800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250141862.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Sondre Auklend',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2700000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250129159.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Jens Petter Hauge',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 14,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250193522.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Kasper Høgh',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 14,
            'gols_marcats' => 6,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250126445.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Andreas Helmersen',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Davanter',
            'dorsal' => 21,
            'partits_jugats' => 13,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250078507.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Isak Dybvik Määttä',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Davanter',
            'dorsal' => 25,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1200000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250138384.jpg',
            'equip_real_id' => $bodo->id,
        ]);

        Jugador::create([
            'nom' => 'Ole Didrik Blomberg',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 10,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250187645.jpg',
            'equip_real_id' => $bodo->id,
        ]);



        Jugador::create([
            'nom' => 'Kjetil Knutsen',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $bodo->id,
        ]);
        // ───────────────────────────────────────────────
        // PORTUGAL — SL BENFICA (2025-2026)
        // ───────────────────────────────────────────────
        $benfica = EquipReal::where('nom', 'SL Benfica')->first();

        // Porters
        Jugador::create([
            'nom' => 'Moreirense Anatoliy Trubin',
            'nacionalitat' => 'UKR',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 14,
            'gols_marcats' => 0,
            'gols_rebuts' => 15,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250113444.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Samuel Soares',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Porter',
            'dorsal' => 24,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117408.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Nicolás Otamendi',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Defensa',
            'dorsal' => 30,
            'partits_jugats' => 14,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250017040.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Amar Dedić',
            'nacionalitat' => 'BIH',
            'posicio_base' => 'Defensa',
            'dorsal' => 17,
            'partits_jugats' => 14,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250126449.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Samuel Dahl',
            'nacionalitat' => 'SWE',
            'posicio_base' => 'Defensa',
            'dorsal' => 26,
            'partits_jugats' => 13,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250130428.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'António Silva',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 10,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128468.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Tomás Araújo',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 44,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117410.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Sidny Lopes Cabral',
            'nacionalitat' => 'CPV',
            'posicio_base' => 'Defensa',
            'dorsal' => 15,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250208952.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Fredrik Aursnes',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 14,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 17000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250061027.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Leandro Barreiro',
            'nacionalitat' => 'LUX',
            'posicio_base' => 'Migcampista',
            'dorsal' => 18,
            'partits_jugats' => 13,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250089626.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Enzo Barrenechea',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 5,
            'partits_jugats' => 13,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250139154.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Richard Ríos',
            'nacionalitat' => 'COL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 12,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250194566.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Georgiy Sudakov',
            'nacionalitat' => 'UKR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250119181.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Vangelis Pavlidis',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 14,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 32000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250078012.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Franjo Ivanović',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250169350.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Andreas Schjelderup',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Davanter',
            'dorsal' => 21,
            'partits_jugats' => 10,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250138999.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Gianluca Prestianni',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Davanter',
            'dorsal' => 25,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250197866.jpg',
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Dodi Lukébakio',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250067658.jpg',
            'equip_real_id' => $benfica->id,
        ]);



        Jugador::create([
            'nom' => 'José Mourinho',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $benfica->id,
        ]);
        // ───────────────────────────────────────────────
        // LIGUE 1 — OLYMPIQUE DE MARSEILLE (2025-2026)
        // ───────────────────────────────────────────────
        $marseille = EquipReal::where('nom', 'Olympique de Marseille')->first();

        // Porters
        Jugador::create([
            'nom' => 'Gerónimo Rulli',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 14,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250073918.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Jeffrey de Lange',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Porter',
            'dorsal' => 12,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250079056.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Michael Murillo',
            'nacionalitat' => 'PAN',
            'posicio_base' => 'Defensa',
            'dorsal' => 62,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250116910.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Benjamin Pavard',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 28,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250081921.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Leonardo Balerdi',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128118.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Emerson',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 33,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250100056.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Nayef Aguerd',
            'nacionalitat' => 'MAR',
            'posicio_base' => 'Defensa',
            'dorsal' => 21,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101087.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Facundo Medina',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Defensa',
            'dorsal' => 32,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250186120.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Pierre-Emile Højbjerg',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 23,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250026986.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Timothy Weah',
            'nacionalitat' => 'USA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 22,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101472.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Matt O\'Riley',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 17,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250169725.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Arthur Vermeeren',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 18,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250166930.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Geoffrey Kondogbia',
            'nacionalitat' => 'CTA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 19,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250014009.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Igor Paixão',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 8,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250177886.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Pierre-Emerick Aubameyang',
            'nacionalitat' => 'GAB',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 8,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250011037.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Mason Greenwood',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 8,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250116767.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Robino Vaz',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 34,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250211049.jpg',
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Amine Gouiri',
            'nacionalitat' => 'ALG',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250101129.jpg',
            'equip_real_id' => $marseille->id,
        ]);



        Jugador::create([
            'nom' => 'Roberto De Zerbi',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $marseille->id,
        ]);
        // ───────────────────────────────────────────────
        // XIPRE — PAFOS FC (2025-2026)
        // ───────────────────────────────────────────────
        $pafos = EquipReal::where('nom', 'Pafos FC')->first();

        // Porters
        Jugador::create([
            'nom' => 'Neofytos Michae',
            'nacionalitat' => 'CYP',
            'posicio_base' => 'Porter',
            'dorsal' => 93,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 12,
            'valor_mercat' => 325000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250097265.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Jay Gorter',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 2,
            'valor_mercat' => 700000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250160935.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Derrick Luckassen',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 23,
            'partits_jugats' => 14,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250067337.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Kostas Pileas',
            'nacionalitat' => 'CYP',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 13,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 600000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250079510.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'David Goldar',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 750000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250195989.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Bruno Langa',
            'nacionalitat' => 'MOZ',
            'posicio_base' => 'Defensa',
            'dorsal' => 25,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 750000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250209888.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'João Correia',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 77,
            'partits_jugats' => 9,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 1200000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250113790.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'David Luiz',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 200000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/1900733.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Pêpê',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 88,
            'partits_jugats' => 14,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 2200000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066115.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Vlad Dragomir',
            'nacionalitat' => 'ROU',
            'posicio_base' => 'Migcampista',
            'dorsal' => 30,
            'partits_jugats' => 14,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250087668.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Ivan Šunjić',
            'nacionalitat' => 'BIH',
            'posicio_base' => 'Migcampista',
            'dorsal' => 26,
            'partits_jugats' => 13,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250056080.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Ken Sema',
            'nacionalitat' => 'SWE',
            'posicio_base' => 'Migcampista',
            'dorsal' => 12,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250110384.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Domingos Quina',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250090271.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Mislav Oršić',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Davanter',
            'dorsal' => 17,
            'partits_jugats' => 14,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250024176.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Anderson Silva',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 33,
            'partits_jugats' => 13,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174104.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Jajá',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 13,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 1200000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250195986.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Bruno',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 13,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 750000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250121287.jpg',
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => '€ Mons Bassouamina',
            'nacionalitat' => 'CGO',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 450000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210292.jpg',
            'equip_real_id' => $pafos->id,
        ]);



        Jugador::create([
            'nom' => 'Albert Celades',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $pafos->id,
        ]);
        // ───────────────────────────────────────────────
        // BÈLGICA — ROYALE UNION SAINT-GILLOISE (2025-2026)
        // ───────────────────────────────────────────────
        $usg = EquipReal::where('nom', 'Royale Union Saint-Gilloise')->first();

        // Porters
        Jugador::create([
            'nom' => 'Kjell Scherpen',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Porter',
            'dorsal' => 37,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 17,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250123304.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Vic Chambaere',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 700000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250130411.jpg',
            'equip_real_id' => $usg->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Kevin Mac Allister',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250187843.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Christian Burgess',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 16,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174796.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Kamiel Van De Perre',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 7500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250135600.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Fedde Leysen',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Defensa',
            'dorsal' => 48,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250130416.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Ross Sykes',
            'nacionalitat' => 'ENG',
            'posicio_base' => 'Defensa',
            'dorsal' => 26,
            'partits_jugats' => 6,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174767.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Louis Patris',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Defensa',
            'dorsal' => 27,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250185904.jpg',
            'equip_real_id' => $usg->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Adem Zorgane',
            'nacionalitat' => 'ALG',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250181746.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Anouar Ait El Hadj',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250118896.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Rob Schoofs',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 17,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2200000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250056048.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Ousseynou Niang',
            'nacionalitat' => 'SEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 22,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 7500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250197734.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Mathias Rasmussen',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 4,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250109217.jpg',
            'equip_real_id' => $usg->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Anan Khalaili',
            'nacionalitat' => 'ISR',
            'posicio_base' => 'Davanter',
            'dorsal' => 25,
            'partits_jugats' => 8,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153814.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Promise David',
            'nacionalitat' => 'CAN',
            'posicio_base' => 'Davanter',
            'dorsal' => 12,
            'partits_jugats' => 7,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 17000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250197951.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Kevin Rodriguez',
            'nacionalitat' => 'ECU',
            'posicio_base' => 'Davanter',
            'dorsal' => 13,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250181613.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Raul Florucz',
            'nacionalitat' => 'AUT',
            'posicio_base' => 'Davanter',
            'dorsal' => 30,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250186489.jpg',
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Mohammed Fuseini',
            'nacionalitat' => 'GHA',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174812.jpg',
            'equip_real_id' => $usg->id,
        ]);



        Jugador::create([
            'nom' => 'David Hubert',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $usg->id,
        ]);
        // ───────────────────────────────────────────────
        // PAÏSOS BAIXOS — PSV EINDHOVEN (2025-2026)
        // ───────────────────────────────────────────────
        $psv = EquipReal::where('nom', 'PSV Eindhoven')->first();

        // Porters
        Jugador::create([
            'nom' => 'Matěj Kovář',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Porter',
            'dorsal' => 32,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 16,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117491.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Nick Olij',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250046909.jpg',
            'equip_real_id' => $psv->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Mauro Júnior',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 17,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 17000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250122213.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Anass Salah-Eddine',
            'nacionalitat' => 'MAR',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250117587.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Yarek Gasiorowski',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 16000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250171006.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Armando Obispo',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088117.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Sergiño Dest',
            'nacionalitat' => 'USA',
            'posicio_base' => 'Defensa',
            'dorsal' => 8,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250112998.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Ryan Flamingo',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 14000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250189506.jpg',
            'equip_real_id' => $psv->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Guus Til',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 8,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250099671.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Jerdy Schouten',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 22,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 22000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250172787.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Joey Veerman',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 23,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 27000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250105890.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Ismael Saibari',
            'nacionalitat' => 'MAR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 34,
            'partits_jugats' => 7,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 32000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134320.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Paul Wanner',
            'nacionalitat' => 'AUT',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163784.jpg',
            'equip_real_id' => $psv->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Dennis Man',
            'nacionalitat' => 'ROU',
            'posicio_base' => 'Davanter',
            'dorsal' => 27,
            'partits_jugats' => 8,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 13000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250104534.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Ivan Perišić',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Davanter',
            'dorsal' => 5,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 1300000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/103310.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Couhaib Driouech',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 7,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250197264.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Ricardo Pepi',
            'nacionalitat' => 'USA',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 5,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250187620.jpg',
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Esmir Bajraktarevic',
            'nacionalitat' => 'BIH',
            'posicio_base' => 'Davanter',
            'dorsal' => 19,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250200525.jpg',
            'equip_real_id' => $psv->id,
        ]);



        Jugador::create([
            'nom' => 'Peter Bosz',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $psv->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — ATHLETIC CLUB (2025-2026)
        // ───────────────────────────────────────────────
        $athletic = EquipReal::where('nom', 'Athletic Club')->first();

        // Porters
        Jugador::create([
            'nom' => 'Unai Simón',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 14,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250076116.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Alex Padilla',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Porter',
            'dorsal' => 27,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250168993.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Andoni Gorosabel',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250064462.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Aitor Paredes',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250126271.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Daniel Vivian',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250194503.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Adama Boiro',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 19,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188504.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Jesús Areso',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 12,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188290.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Yuri Berchiche',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 17,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1200000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/103823.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Alejandro Rego',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 30,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250202816.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Robert Navarro',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 23,
            'partits_jugats' => 7,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250121553.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Iñigo Ruiz de Galarreta',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 16,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250013893.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Mikel Jauregizar',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 18,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250200318.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Unai Gomez',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250194475.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Gorka Guruzeta',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 7,
            'gols_marcats' => 5,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250076101.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Nico Serrano',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 22,
            'partits_jugats' => 5,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250136444.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Iñaki Williams',
            'nacionalitat' => 'GHA',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250074671.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Asier Hierro *',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 31,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250202815.jpg',
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Selton Sánchez *',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 44,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250212200.jpg',
            'equip_real_id' => $athletic->id,
        ]);



        Jugador::create([
            'nom' => 'Ernesto Valverde',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $athletic->id,
        ]);
        // ───────────────────────────────────────────────
        // SERIE A — SSC NAPOLI (2025-2026)
        // ───────────────────────────────────────────────
        $napoli = EquipReal::where('nom', 'SSC Napoli')->first();

        // Porters
        Jugador::create([
            'nom' => 'Vanja Milinković-Savić',
            'nacionalitat' => 'SRB',
            'posicio_base' => 'Porter',
            'dorsal' => 32,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 12,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250065792.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Alex Meret',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 3,
            'valor_mercat' => 14000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250066753.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Juan Jesus',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250045594.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Giovanni Di Lorenzo',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 22,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250064229.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Alessandro Buongiorno',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088491.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Leonardo Spinazzola',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Defensa',
            'dorsal' => 37,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250020885.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Mathías Olivera',
            'nacionalitat' => 'URU',
            'posicio_base' => 'Defensa',
            'dorsal' => 17,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134196.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Sam Beukema',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 31,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250161248.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Scott McTominay',
            'nacionalitat' => 'SCO',
            'posicio_base' => 'Migcampista',
            'dorsal' => 8,
            'partits_jugats' => 8,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088240.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Eljif Elmas',
            'nacionalitat' => 'MKD',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 14000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250091841.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Stanislav Lobotka',
            'nacionalitat' => 'SVK',
            'posicio_base' => 'Migcampista',
            'dorsal' => 68,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250055982.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Frank Anguissa',
            'nacionalitat' => 'CMR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 99,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250086987.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Billy Gilmour',
            'nacionalitat' => 'SCO',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250107117.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Rasmus Højlund',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Davanter',
            'dorsal' => 19,
            'partits_jugats' => 7,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250130221.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Matteo Politano',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Davanter',
            'dorsal' => 21,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250050381.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'David Neres',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106648.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Noa Lang',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Davanter',
            'dorsal' => 70,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250091165.jpg',
            'equip_real_id' => $napoli->id,
        ]);

        Jugador::create([
            'nom' => 'Lorenzo Lucca',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Davanter',
            'dorsal' => 27,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 26000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250164476.jpg',
            'equip_real_id' => $napoli->id,
        ]);



        Jugador::create([
            'nom' => 'Antonio Conte',
            'nacionalitat' => 'ITA',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $napoli->id,
        ]);
        // ───────────────────────────────────────────────
        // DINAMARCA — FC KØBENHAVN (2025-2026)
        // ───────────────────────────────────────────────
        $copenhagen = EquipReal::where('nom', 'FC København')->first();

        // Porters
        Jugador::create([
            'nom' => 'Dominik Kotarski',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 14,
            'gols_marcats' => 0,
            'gols_rebuts' => 22,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250096795.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Rúnar Alex Rúnarsson',
            'nacionalitat' => 'ISL',
            'posicio_base' => 'Porter',
            'dorsal' => 31,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 400000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250042038.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Gabriel Pereira',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 14,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 6500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250198707.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Marcos Lopez',
            'nacionalitat' => 'PER',
            'posicio_base' => 'Defensa',
            'dorsal' => 15,
            'partits_jugats' => 13,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250122937.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Pantelis Hatzidiakos',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Defensa',
            'dorsal' => 6,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250085443.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Birger Meling',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250082812.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Junnosuke Suzuki',
            'nacionalitat' => 'JPN',
            'posicio_base' => 'Defensa',
            'dorsal' => 20,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250211189.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Munashe Garananga',
            'nacionalitat' => 'ZIM',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250182335.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Viktor Claesson',
            'nacionalitat' => 'SWE',
            'posicio_base' => 'Migcampista',
            'dorsal' => 7,
            'partits_jugats' => 13,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250024171.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Robert',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 16,
            'partits_jugats' => 11,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 2200000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250198706.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Lukas Lerager',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 12,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250059199.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'William Clem',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 36,
            'partits_jugats' => 11,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250169615.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Mads Emil Madsen',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 21,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134853.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Jordan Larsson',
            'nacionalitat' => 'SWE',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 14,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250090718.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Mohamed Elyounoussi',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Davanter',
            'dorsal' => 10,
            'partits_jugats' => 13,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 4500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250055967.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Elias Achouri',
            'nacionalitat' => 'TUN',
            'posicio_base' => 'Davanter',
            'dorsal' => 30,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250132393.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Youssoufa Moukoko',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 11,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134659.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);

        Jugador::create([
            'nom' => 'Andreas Cornelius',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Davanter',
            'dorsal' => 14,
            'partits_jugats' => 9,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 400000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250041664.jpg',
            'equip_real_id' => $copenhagen->id,
        ]);



        Jugador::create([
            'nom' => 'Jacob Neestrup',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $copenhagen->id,
        ]);
        // ───────────────────────────────────────────────
        // PAÏSOS BAIXOS — AFC AJAX (2025-2026)
        // ───────────────────────────────────────────────
        $ajax = EquipReal::where('nom', 'AFC Ajax')->first();

        // Porters
        Jugador::create([
            'nom' => 'Vitězslav Jaroš',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 13,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250113263.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Remko Pasveer',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Porter',
            'dorsal' => 22,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 8,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/98834.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Youri Baas',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 15,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128433.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Anton Gaaei',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250174052.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Jorthy Mokio',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250190193.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Ko Itakura',
            'nacionalitat' => 'JPN',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250160989.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Owen Wijndal',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250097317.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Josip Šutalo',
            'nacionalitat' => 'CRO',
            'posicio_base' => 'Defensa',
            'dorsal' => 37,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250100914.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Oscar Gloukh',
            'nacionalitat' => 'ISR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 8,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153349.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Davy Klaassen',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 18,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250013855.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Youri Regeer',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250128449.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Kian Fitz-Jim',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Migcampista',
            'dorsal' => 28,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134945.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Rayane Bounida *',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Migcampista',
            'dorsal' => 43,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250172221.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Mika Godts *',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Davanter',
            'dorsal' => 11,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250154132.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Kasper Dolberg',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 5,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250177904.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Wout Weghorst',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Davanter',
            'dorsal' => 25,
            'partits_jugats' => 5,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250078682.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Raul Moro',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250123959.jpg',
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Oliver Edvardsen',
            'nacionalitat' => 'NOR',
            'posicio_base' => 'Davanter',
            'dorsal' => 17,
            'partits_jugats' => 4,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250090259.jpg',
            'equip_real_id' => $ajax->id,
        ]);



        Jugador::create([
            'nom' => 'Fred Grim',
            'nacionalitat' => 'NED',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $ajax->id,
        ]);
        // ───────────────────────────────────────────────
        // BUNDESLIGA — EINTRACHT FRANKFURT (2025-2026)
        // ───────────────────────────────────────────────
        $eintracht = EquipReal::where('nom', 'Eintracht Frankfurt')->first();

        // Porters
        Jugador::create([
            'nom' => 'Michael Zetterer',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Porter',
            'dorsal' => 23,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 11,
            'valor_mercat' => 4500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250211809.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Kauã Santos',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Porter',
            'dorsal' => 40,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 10,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250199364.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Robin Koch',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250126501.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Arthur Theate',
            'nacionalitat' => 'BEL',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250127396.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Nathaniel Brown',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 21,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250190350.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Nnamdi Collins *',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Defensa',
            'dorsal' => 34,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134652.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Aurele Amenda',
            'nacionalitat' => 'SUI',
            'posicio_base' => 'Defensa',
            'dorsal' => 5,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250135303.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Rasmus Kristensen',
            'nacionalitat' => 'DEN',
            'posicio_base' => 'Defensa',
            'dorsal' => 13,
            'partits_jugats' => 4,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250074850.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Ansgar Knauff',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 7,
            'partits_jugats' => 8,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134656.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Ellyes Skhiri',
            'nacionalitat' => 'TUN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 15,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250119519.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Jean-Mattéo Bahoya',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 19,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250164528.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Mario Götze',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Migcampista',
            'dorsal' => 27,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250007605.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Ritsu Doan',
            'nacionalitat' => 'JPN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134309.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Fares Chaibi',
            'nacionalitat' => 'ALG',
            'posicio_base' => 'Davanter',
            'dorsal' => 8,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188522.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Jonathan Burkardt',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 5,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106143.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Can Uzun',
            'nacionalitat' => 'TUR',
            'posicio_base' => 'Davanter',
            'dorsal' => 42,
            'partits_jugats' => 5,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250166964.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Elye Wahi',
            'nacionalitat' => 'FRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 17,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250126805.jpg',
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Jessic Ngankam',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Davanter',
            'dorsal' => 32,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250124846.jpg',
            'equip_real_id' => $eintracht->id,
        ]);



        Jugador::create([
            'nom' => 'Dennis Schmitt',
            'nacionalitat' => 'GER',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $eintracht->id,
        ]);
        // ───────────────────────────────────────────────
        // REPÚBLICA TXECA — SK SLAVIA PRAHA (2025-2026)
        // ───────────────────────────────────────────────
        $slavia = EquipReal::where('nom', 'SK Slavia Praha')->first();

        // Porters
        Jugador::create([
            'nom' => 'Jindřich Staněk',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Porter',
            'dorsal' => 36,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 16,
            'valor_mercat' => 2800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250055112.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Jakub Markovič',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Porter',
            'dorsal' => 35,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 3,
            'valor_mercat' => 2800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250115748.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Stepan Chaloupek',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Defensa',
            'dorsal' => 2,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250190353.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'David Zima',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250124916.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Youssoupha Mbodji',
            'nacionalitat' => 'SEN',
            'posicio_base' => 'Defensa',
            'dorsal' => 12,
            'partits_jugats' => 7,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250212115.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'David Douděra',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Defensa',
            'dorsal' => 21,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250134691.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Murphy Dorley',
            'nacionalitat' => 'LBR',
            'posicio_base' => 'Defensa',
            'dorsal' => 19,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250109754.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Tomáš Vlček',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Defensa',
            'dorsal' => 27,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 4500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250115749.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Lukáš Provod',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Migcampista',
            'dorsal' => 17,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250064811.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Michal Sadílek',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Migcampista',
            'dorsal' => 23,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250077931.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Christos Zafeiris',
            'nacionalitat' => 'GRE',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250129653.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Youssoupha Sanyang',
            'nacionalitat' => 'GAM',
            'posicio_base' => 'Migcampista',
            'dorsal' => 11,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210228.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'David Moses',
            'nacionalitat' => 'NGA',
            'posicio_base' => 'Migcampista',
            'dorsal' => 16,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 9000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210225.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Vasil Kušej',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 4500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250107463.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Tomáš Chorý',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Davanter',
            'dorsal' => 25,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250042406.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Mojmír Chytil',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Davanter',
            'dorsal' => 13,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250092161.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Muhammed Cham',
            'nacionalitat' => 'AUT',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250126258.jpg',
            'equip_real_id' => $slavia->id,
        ]);

        Jugador::create([
            'nom' => 'Ivan Schranz',
            'nacionalitat' => 'SVK',
            'posicio_base' => 'Davanter',
            'dorsal' => 26,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 750000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250012660.jpg',
            'equip_real_id' => $slavia->id,
        ]);



        Jugador::create([
            'nom' => 'Jindřich Trpišovský',
            'nacionalitat' => 'CZE',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $slavia->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — VILLARREAL CF (2025-2026)
        // ───────────────────────────────────────────────
        $villarreal = EquipReal::where('nom', 'Villarreal CF')->first();

        // Porters
        Jugador::create([
            'nom' => 'Luiz Júnior',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 11,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210287.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Arnau Tenas',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Porter',
            'dorsal' => 25,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 7,
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106979.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Renato Veiga',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 12,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250164935.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Sergi Cardona',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 23,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 9000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210289.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Santiago Mouriño',
            'nacionalitat' => 'URU',
            'posicio_base' => 'Defensa',
            'dorsal' => 15,
            'partits_jugats' => 6,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188006.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Rafa Marín',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250129412.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Juan Foyth',
            'nacionalitat' => 'ARG',
            'posicio_base' => 'Defensa',
            'dorsal' => 8,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250147278.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Pau Navarro',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Defensa',
            'dorsal' => 26,
            'partits_jugats' => 3,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250210288.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Santiago Comesa',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 14,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250188937.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Tani Oluwaseyi',
            'nacionalitat' => 'CAN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 21,
            'partits_jugats' => 7,
            'gols_marcats' => 2,
            'gols_rebuts' => 0,
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250195532.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Daniel Parejo',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 10,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 1200000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/104033.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Pape Gueye',
            'nacionalitat' => 'SEN',
            'posicio_base' => 'Migcampista',
            'dorsal' => 18,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250144229.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Alberto Moleiro',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250168991.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Nicolas Pépé',
            'nacionalitat' => 'CIV',
            'posicio_base' => 'Davanter',
            'dorsal' => 19,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250106003.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Georges Mikautadze',
            'nacionalitat' => 'GEO',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 7,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250155025.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Tajon Buchanan',
            'nacionalitat' => 'CAN',
            'posicio_base' => 'Davanter',
            'dorsal' => 17,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250173127.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Ayoze Pérez',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 22,
            'partits_jugats' => 5,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250075625.jpg',
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Gerard Moreno',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 2,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 2800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250074565.jpg',
            'equip_real_id' => $villarreal->id,
        ]);



        Jugador::create([
            'nom' => 'Marcelino',
            'nacionalitat' => 'ESP',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $villarreal->id,
        ]);
        // ───────────────────────────────────────────────
        // KAZAKHSTAN — FC KAIRAT ALMATY (2025-2026)
        // ───────────────────────────────────────────────
        $kairat = EquipReal::where('nom', 'FC Kairat Almaty')->first();

        // Porters
        Jugador::create([
            'nom' => 'Temirlan Anarbekov',
            'nacionalitat' => 'KAZ',
            'posicio_base' => 'Porter',
            'dorsal' => 77,
            'partits_jugats' => 8,
            'gols_marcats' => 0,
            'gols_rebuts' => 13,
            'valor_mercat' => 400000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250130452.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Alexandr Zarutskiy',
            'nacionalitat' => 'KAZ',
            'posicio_base' => 'Porter',
            'dorsal' => 1,
            'partits_jugats' => 7,
            'gols_marcats' => 0,
            'gols_rebuts' => 4,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250071852.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        // Defenses
        Jugador::create([
            'nom' => 'Alexandr Mrynskiy',
            'nacionalitat' => 'KAZ',
            'posicio_base' => 'Defensa',
            'dorsal' => 24,
            'partits_jugats' => 16,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 400000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250165048.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Egor Sorokin',
            'nacionalitat' => 'RUS',
            'posicio_base' => 'Defensa',
            'dorsal' => 80,
            'partits_jugats' => 16,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250085597.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Damir Kassabulat',
            'nacionalitat' => 'KAZ',
            'posicio_base' => 'Defensa',
            'dorsal' => 4,
            'partits_jugats' => 15,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 600000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250126383.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Luís Mata',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Defensa',
            'dorsal' => 3,
            'partits_jugats' => 14,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 600000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250057871.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Aleksandr Martynovich',
            'nacionalitat' => 'BLR',
            'posicio_base' => 'Defensa',
            'dorsal' => 14,
            'partits_jugats' => 13,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 250000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/74771.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Ofri Arad',
            'nacionalitat' => 'ISR',
            'posicio_base' => 'Defensa',
            'dorsal' => 15,
            'partits_jugats' => 10,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250099183.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        // Migcampistes
        Jugador::create([
            'nom' => 'Valeri Gromyko',
            'nacionalitat' => 'BLR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 55,
            'partits_jugats' => 16,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250088603.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Yerkin Tapalov',
            'nacionalitat' => 'KAZ',
            'posicio_base' => 'Migcampista',
            'dorsal' => 20,
            'partits_jugats' => 16,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 300000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250163306.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Dan Glazer',
            'nacionalitat' => 'ISR',
            'posicio_base' => 'Migcampista',
            'dorsal' => 18,
            'partits_jugats' => 12,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 700000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250056097.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Jug Stanojev',
            'nacionalitat' => 'SRB',
            'posicio_base' => 'Migcampista',
            'dorsal' => 33,
            'partits_jugats' => 9,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250115168.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Adilet Sadybekov',
            'nacionalitat' => 'KAZ',
            'posicio_base' => 'Migcampista',
            'dorsal' => 6,
            'partits_jugats' => 8,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 500000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250153683.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        // Davanters
        Jugador::create([
            'nom' => 'Jorginho',
            'nacionalitat' => 'POR',
            'posicio_base' => 'Davanter',
            'dorsal' => 7,
            'partits_jugats' => 16,
            'gols_marcats' => 3,
            'gols_rebuts' => 0,
            'valor_mercat' => 800000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250186990.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Ricardinho',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 99,
            'partits_jugats' => 15,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 700000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250186184.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Edmilson',
            'nacionalitat' => 'BRA',
            'posicio_base' => 'Davanter',
            'dorsal' => 26,
            'partits_jugats' => 14,
            'gols_marcats' => 1,
            'gols_rebuts' => 0,
            'valor_mercat' => 300000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250187405.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Dastan Satpayev',
            'nacionalitat' => 'KAZ',
            'posicio_base' => 'Davanter',
            'dorsal' => 9,
            'partits_jugats' => 12,
            'gols_marcats' => 4,
            'gols_rebuts' => 0,
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250192320.jpg',
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Ramazan Bagdat',
            'nacionalitat' => 'KAZ',
            'posicio_base' => 'Davanter',
            'dorsal' => 89,
            'partits_jugats' => 4,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 150000,
            'puntuacio_total' => 0,
            'img' => 'https://img.uefa.com/imgml/TP/players/1/2026/75x75/250201523.jpg',
            'equip_real_id' => $kairat->id,
        ]);


        Jugador::create([
            'nom' => 'Rafael Urazbakhtin',
            'nacionalitat' => 'KAZ',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => null,
            'equip_real_id' => $kairat->id,
        ]);
    }
}