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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/arsenal/david-raya.jpg',
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Kepa Arrizabalaga',
            'nacionalitat' => 'ESP','posicio_base' => 'Porter',
            'dorsal' => 13,
            'partits_jugats' => 1,
            'gols_marcats' => 0,
            'gols_rebuts' => 2,
            'valor_mercat' => 7000000,
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/arsenal/kepa-arrizabalaga.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/arsenal/gabriel.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/arsenal/ben-white.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/arsenal/william-saliba.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/arsenal/cristhian-mosquera.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/arsenal/jurrien-timber.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/arsenal/piero-hincapie.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/arsenal/eberechi-eze.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/arsenal/declan-rice.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/arsenal/martin-zubimendi.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/arsenal/leandro-trossard.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/arsenal/myles-lewis-skelly.jpg',
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
            'puntuacio_total' => 52,
            'img' => 'images/jugadors/arsenal/gabriel-martinelli.jpg',
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
            'puntuacio_total' => 40,
            'img' => 'images/jugadors/arsenal/viktor-gyokeres.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/arsenal/bukayo-saka.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/arsenal/gabriel-jesus.jpg',
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
            'img' => 'images/jugadors/arsenal/sebastian-ferdinand.jpg',
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
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => "images/entrenadors/arteta.jpg",
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/bayern-munchen/manuel-neuer.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/bayern-munchen/jonas-urbig.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/bayern-munchen/jonathan-tah.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/bayern-munchen/dayot-upamecano.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/bayern-munchen/josip-stanisic.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/bayern-munchen/raphael-guerreiro.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/bayern-munchen/minjae-kim.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/bayern-munchen/hiroki-ito.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/bayern-munchen/aleksandar-pavlovic.jpg',
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
            'puntuacio_total' => 42,
            'img' => 'images/jugadors/bayern-munchen/michael-olise.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/bayern-munchen/joshua-kimmich.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/bayern-munchen/tom-bischof.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/bayern-munchen/leon-goretzka.jpg',
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
            'puntuacio_total' => 82,
            'img' => 'images/jugadors/bayern-munchen/harry-kane.jpg',
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
            'puntuacio_total' => 32,
            'img' => 'images/jugadors/bayern-munchen/serge-gnabry.jpg',
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
            'puntuacio_total' => 50,
            'img' => 'images/jugadors/bayern-munchen/luis-diaz.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/bayern-munchen/nicolas-jackson.jpg',
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
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/bayern-munchen/wisdom-mike.jpg',
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
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => "images/entrenadors/kompany.jpg",
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/liverpool/giorgi-mamardashvili.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/liverpool/alisson-becker.jpg',
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
            'puntuacio_total' => 34,
            'img' => 'images/jugadors/liverpool/virgil-van-dijk.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/liverpool/ibrahima-konate.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/liverpool/jeremie-frimpong.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/liverpool/milos-kerkez.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/liverpool/andy-robertson.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/liverpool/joe-gomez.jpg',
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
            'puntuacio_total' => 49,
            'img' => 'images/jugadors/liverpool/dominik-szoboszlai.jpg',
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
            'puntuacio_total' => 39,
            'img' => 'images/jugadors/liverpool/alexis-mac-allister.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/liverpool/ryan-gravenberch.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/liverpool/florian-wirtz.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/liverpool/curtis-jones.jpg',
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
            'puntuacio_total' => 39,
            'img' => 'images/jugadors/liverpool/hugo-ekitike.jpg',
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
            'puntuacio_total' => 32,
            'img' => 'images/jugadors/liverpool/cody-gakpo.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/liverpool/mohamed-salah.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/liverpool/alexander-isak.jpg',
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
            'puntuacio_total' => 15,
            'img' => 'images/jugadors/liverpool/federico-chiesa.jpg',
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
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => "images/entrenadors/slot.jpg",
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/tottenham/guglielmo-vicario.jpg',
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
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/tottenham/antonin-kinsky.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/tottenham/djed-spence.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/tottenham/pedro-porro.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/tottenham/micky-van-de-ven.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/tottenham/cristian-romero.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/tottenham/kevin-danso.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/tottenham/destiny-udogie.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/tottenham/xavi-simons.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/tottenham/pape-sarr.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/tottenham/joao-palhinha.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/tottenham/archie-gray.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/tottenham/wilson-odobert.jpg',
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
            'puntuacio_total' => 38,
            'img' => 'images/jugadors/tottenham/randal-kolo-muani.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/tottenham/richarlison.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/tottenham/dominic-solanke.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/tottenham/mathys-tel.jpg',
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
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => "images/entrenadors/tudor.jpg",
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/barcelona/joan-garcia.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/barcelona/wojciech-szczesny.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/barcelona/gerard-martin.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/barcelona/eric-garcia.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/barcelona/jules-kounde.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/barcelona/ronald-araujo.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/barcelona/pau-cubarsi.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/barcelona/alejandro-balde.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/barcelona/pedri.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/barcelona/frenkie-de-jong.jpg',
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
            'puntuacio_total' => 17,
            'img' => 'images/jugadors/barcelona/marc-bernal.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/barcelona/gavi.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/barcelona/xavi-espart.jpg',
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
            'puntuacio_total' => 52,
            'img' => 'images/jugadors/barcelona/fermin-lopez.jpg',
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
            'puntuacio_total' => 47,
            'img' => 'images/jugadors/barcelona/marcus-rashford.jpg',
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
            'puntuacio_total' => 42,
            'img' => 'images/jugadors/barcelona/robert-lewandowski.jpg',
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
            'puntuacio_total' => 50,
            'img' => 'images/jugadors/barcelona/lamine-yamal.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/barcelona/ferran-torres.jpg',
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
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => "images/entrenadors/flick.jpg",
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/chelsea/robert-sanchez.jpg',
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
            'img' => null,
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/chelsea/marc-cucurella.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/chelsea/trevoh-chalobah.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/chelsea/reece-james.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/chelsea/malo-gusto.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/chelsea/wesley-fofana.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/chelsea/tosin-adarabioyo.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/chelsea/enzo-fernandez.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/chelsea/moises-caicedo.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/chelsea/jamie-gittens.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/chelsea/andrey-santos.jpg',
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
            'puntuacio_total' => 13,
            'img' => 'images/jugadors/chelsea/cole-palmer.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/chelsea/alejandro-garnacho.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/chelsea/joao-pedro.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/chelsea/pedro-neto.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/chelsea/estevao.jpg',
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
            'puntuacio_total' => 15,
            'img' => 'images/jugadors/chelsea/liam-delap.jpg',
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
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => "images/entrenadors/rosenior.jpg",
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/sporting-cp/rui-silva.jpg',
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
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/sporting-cp/joao-virginia.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/sporting-cp/goncalo-inacio.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/sporting-cp/ivan-fresneda.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/sporting-cp/ousmane-diomande.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/sporting-cp/eduardo-quaresma.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/sporting-cp/matheus-reis.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/sporting-cp/giorgos-vagiannidis.jpg',
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
            'puntuacio_total' => 32,
            'img' => 'images/jugadors/sporting-cp/maximiliano-araujo.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/sporting-cp/hidemasa-morita.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/sporting-cp/morten-hjulmand.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/sporting-cp/joao-simoes.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/sporting-cp/pedro-goncalves.jpg',
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
            'puntuacio_total' => 49,
            'img' => 'images/jugadors/sporting-cp/luis-suarez.jpg',
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
            'puntuacio_total' => 42,
            'img' => 'images/jugadors/sporting-cp/francisco-trincao.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/sporting-cp/geny-catamo.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/sporting-cp/geovany-quenda.jpg',
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
            'puntuacio_total' => 10,
            'img' => null,
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
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'img' => "images/entrenadors/borges.jpg",
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/manchester-city/gianluigi-donnarumma.jpg',
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
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/manchester-city/james-trafford.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/manchester-city/ruben-dias.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/manchester-city/rayan-ait-nouri.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/manchester-city/abdukodir-khusanov.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/manchester-city/nathan-ake.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/manchester-city/josko-gvardiol.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/manchester-city/john-stones.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/manchester-city/tijjani-reijnders.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/manchester-city/jeremy-doku.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/manchester-city/rayan-cherki.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/manchester-city/bernardo-silva.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/manchester-city/nico-o-reilly.jpg',
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
            'puntuacio_total' => 60,
            'img' => 'images/jugadors/manchester-city/erling-haaland.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/manchester-city/omar-marmoush.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/manchester-city/antoine-semenyo.jpg',
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
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'img' => "images/entrenadors/guardiola.jpg",
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/real-madrid/thibaut-courtois.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/real-madrid/andriy-lunin.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/real-madrid/trent-alexander-arnold.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/real-madrid/alvaro-carreras.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/real-madrid/dean-huijsen.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/real-madrid/raul-asencio.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/real-madrid/antonio-rudiger.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/real-madrid/fran-garcia.jpg',
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
            'puntuacio_total' => 38,
            'img' => 'images/jugadors/real-madrid/arda-guler.jpg',
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
            'puntuacio_total' => 41,
            'img' => 'images/jugadors/real-madrid/federico-valverde.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/real-madrid/aurelien-tchouameni.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/real-madrid/eduardo-camavinga.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/real-madrid/jude-bellingham.jpg',
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
            'puntuacio_total' => 53,
            'img' => 'images/jugadors/real-madrid/vinicius-junior.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/real-madrid/brahim-diaz.jpg',
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
            'puntuacio_total' => 97,
            'img' => 'images/jugadors/real-madrid/kylian-mbappe.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/real-madrid/franco-mastantuono.jpg',
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
            'puntuacio_total' => 15,
            'img' => 'images/jugadors/real-madrid/rodrygo.jpg',
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
            'img' => "images/entrenadors/arbeloa.jpg",
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/inter/yann-sommer.jpg',
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
            'img' => 'images/jugadors/inter/raffaele-di-gennaro.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/inter/manuel-akanji.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/inter/federico-dimarco.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/inter/alessandro-bastoni.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/inter/carlos-augusto.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/inter/yann-bisseck.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/inter/denzel-dumfries.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/inter/piotr-zielinski.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/inter/petar-sucic.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/inter/nicolo-barella.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/inter/davide-frattesi.jpg',
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
            'puntuacio_total' => 17,
            'img' => 'images/jugadors/inter/hakan-calhanoglu.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/inter/ange-yoan-bonny.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/inter/marcus-thuram.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/inter/pio-esposito.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/inter/lautaro-martinez.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/inter/luis-henrique.jpg',
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
            'img' => "images/entrenadors/chivu.jpg",
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/paris/matvei-safonov.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/paris/lucas-chevalier.jpg',
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
            'puntuacio_total' => 38,
            'img' => 'images/jugadors/paris/willian-pacho.jpg',
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
            'puntuacio_total' => 38,
            'img' => 'images/jugadors/paris/nuno-mendes.jpg',
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
            'puntuacio_total' => 34,
            'img' => 'images/jugadors/paris/marquinhos.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/paris/achraf-hakimi.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/paris/lucas-hernandez.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/paris/illia-zabarnyi.jpg',
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
            'puntuacio_total' => 58,
            'img' => 'images/jugadors/paris/vitinha.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/paris/warren-zaire-emery.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/paris/joao-neves.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/paris/kang-in-lee.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/paris/senny-mayulu.jpg',
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
            'puntuacio_total' => 66,
            'img' => 'images/jugadors/paris/khvicha-kvaratskhelia.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/paris/bradley-barcola.jpg',
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
            'puntuacio_total' => 45,
            'img' => 'images/jugadors/paris/desire-doue.jpg',
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
            'puntuacio_total' => 40,
            'img' => 'images/jugadors/paris/ousmane-dembele.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/paris/goncalo-ramos.jpg',
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
            'img' => "images/entrenadors/luis-enrique.jpg",
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/newcastle/nick-pope.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/newcastle/aaron-ramsdale.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/newcastle/dan-burn.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/newcastle/malick-thiaw.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/newcastle/lewis-hall.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/newcastle/kieran-trippier.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/newcastle/sven-botman.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/newcastle/tino-livramento.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/newcastle/sandro-tonali.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/newcastle/joelinton.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/newcastle/joe-willock.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/newcastle/jacob-ramsey.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/newcastle/lewis-miley.jpg',
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
            'puntuacio_total' => 74,
            'img' => 'images/jugadors/newcastle/anthony-gordon.jpg',
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
            'puntuacio_total' => 54,
            'img' => 'images/jugadors/newcastle/harvey-barnes.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/newcastle/anthony-elanga.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/newcastle/nick-woltemade.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/newcastle/jacob-murphy.jpg',
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
            'img' => "images/entrenadors/howe.jpg",
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/juventus/michele-di-gregorio.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/juventus/mattia-perin.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/juventus/pierre-kalulu.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/juventus/lloyd-kelly.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/juventus/andrea-cambiaso.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/juventus/juan-cabal.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/juventus/federico-gatti.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/juventus/bremer.jpg',
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
            'puntuacio_total' => 40,
            'img' => 'images/jugadors/juventus/weston-mckennie.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/juventus/teun-koopmeiners.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/juventus/manuel-locatelli.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/juventus/khephren-thuram.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/juventus/fabio-miretti.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/juventus/kenan-yildiz.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/juventus/jonathan-david.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/juventus/francisco-conceicao.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/juventus/lois-openda.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/juventus/edon-zhegrova.jpg',
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
            'img' => "images/entrenadors/spalletti.jpg",
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/atletico-madrid/jan-oblak.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/atletico-madrid/juan-musso.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/atletico-madrid/matteo-ruggeri.jpg',
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
            'puntuacio_total' => 34,
            'img' => 'images/jugadors/atletico-madrid/robin-le-normand.jpg',
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
            'puntuacio_total' => 32,
            'img' => 'images/jugadors/atletico-madrid/david-hancko.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/atletico-madrid/nahuel-molina.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/atletico-madrid/marc-pubill.jpg',
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
            'puntuacio_total' => 17,
            'img' => 'images/jugadors/atletico-madrid/jose-maria-gimenez.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/atletico-madrid/koke.jpg',
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
            'puntuacio_total' => 44,
            'img' => 'images/jugadors/atletico-madrid/marcos-llorente.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/atletico-madrid/alex-baena.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/atletico-madrid/pablo-barrios.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/atletico-madrid/johnny-cardoso.jpg',
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
            'puntuacio_total' => 71,
            'img' => 'images/jugadors/atletico-madrid/julian-alvarez.jpg',
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
            'puntuacio_total' => 56,
            'img' => 'images/jugadors/atletico-madrid/alexander-sorloth.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/atletico-madrid/antoine-griezmann.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/atletico-madrid/giuliano-simeone.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/atletico-madrid/nicolas-gonzalez.jpg',
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
            'img' => "images/entrenadors/simeone.jpg",
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/atalanta/marco-carnesecchi.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/atalanta/marco-sportiello.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/atalanta/davide-zappacosta.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/atalanta/berat-djimsiti.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/atalanta/odilon-kossounou.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/atalanta/lorenzo-bernasconi.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/atalanta/isak-hien.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/atalanta/raoul-bellanova.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/atalanta/marten-de-roon.jpg',
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
            'puntuacio_total' => 40,
            'img' => 'images/jugadors/atalanta/lazar-samardzic.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/atalanta/mario-pasalic.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/atalanta/ederson.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/atalanta/yunus-musah.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/atalanta/nikola-krstovic.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/atalanta/gianluca-scamacca.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/atalanta/kamaldeen-sulemana.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/atalanta/charles-de-ketelaere.jpg',
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
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/atalanta/giacomo-raspadori.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/bayer-leverkusen/janis-blaswich.jpg',
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
            'img' => 'images/jugadors/bayer-leverkusen/jonas-omlin.jpg',
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
            'puntuacio_total' => 44,
            'img' => 'images/jugadors/bayer-leverkusen/alejandro-grimaldo.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/bayer-leverkusen/jarell-quansah.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/bayer-leverkusen/edmond-tapsoba.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/bayer-leverkusen/loic-bade.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/bayer-leverkusen/arthur.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/bayer-leverkusen/lucas-vazquez.jpg',
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
            'puntuacio_total' => 34,
            'img' => 'images/jugadors/bayer-leverkusen/aleix-garcia.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/bayer-leverkusen/ibrahim-maza.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/bayer-leverkusen/malik-tillman.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/bayer-leverkusen/robert-andrich.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/bayer-leverkusen/equi-fernandez.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/bayer-leverkusen/ernest-poku.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/bayer-leverkusen/christian-kofane.jpg',
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
            'puntuacio_total' => 38,
            'img' => 'images/jugadors/bayer-leverkusen/patrik-schick.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/bayer-leverkusen/martin-terrier.jpg',
            'equip_real_id' => $leverkusen->id,
        ]);



        Jugador::create([
            'nom' => 'Kasper Hjulmand',
            'nacionalitat' => 'DNK',
            'posicio_base' => 'Entrenador',
            'dorsal' => 0,
            'partits_jugats' => 0,
            'gols_marcats' => 0,
            'gols_rebuts' => 0,
            'valor_mercat' => 0,
            'puntuacio_total' => 0,
            'img' => "images/entrenadors/hjulmand.jpg",
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/borussia-dortmund/gregor-kobel.jpg',
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
            'img' => null,
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/borussia-dortmund/ramy-bensebaini.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/borussia-dortmund/daniel-svensson.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/borussia-dortmund/waldemar-anton.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/borussia-dortmund/julian-ryerson.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/borussia-dortmund/yan-couto.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/borussia-dortmund/nico-schlotterbeck.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/borussia-dortmund/felix-nmecha.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/borussia-dortmund/julian-brandt.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/borussia-dortmund/carney-chukwuemeka.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/borussia-dortmund/marcel-sabitzer.jpg',
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
            'img' => 'images/jugadors/borussia-dortmund/salih-ozcan.jpg',
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
            'puntuacio_total' => 40,
            'img' => 'images/jugadors/borussia-dortmund/serhou-guirassy.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/borussia-dortmund/jobe-bellingham.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/borussia-dortmund/karim-adeyemi.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/borussia-dortmund/maximilian-beier.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/borussia-dortmund/fabio-silva.jpg',
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
            'img' => "images/entrenadors/kovac.jpg",
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/olympiacos/kostas-tzolakis.jpg',
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
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/olympiacos/alexandros-paschalakis.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/olympiacos/francisco-ortega.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/olympiacos/lorenzo-pirola.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/olympiacos/panagiotis-retsos.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/olympiacos/rodinei.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/olympiacos/costinha.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/olympiacos/giulian-biancone.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/olympiacos/christos-mouzakitis.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/olympiacos/santiago-hezze.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/olympiacos/dani-garcia.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/olympiacos/lorenzo-scipioni.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/olympiacos/andre-luiz.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/olympiacos/mehdi-taremi.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/olympiacos/ayoub-el-kaabi.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/olympiacos/chiquinho.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/olympiacos/gelson-martins.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/olympiacos/daniel-podence.jpg',
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
            'img' => "images/entrenadors/mendilibar.jpg",
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/club-brugge/simon-mignolet.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/club-brugge/nordin-jackers.jpg',
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
            'puntuacio_total' => 38,
            'img' => 'images/jugadors/club-brugge/brandon-mechele.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/club-brugge/kyriani-sabbe.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/club-brugge/joel-ordonez.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/club-brugge/bjorn-meijer.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/club-brugge/hugo-siquet.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/club-brugge/jorne-spileers.jpg',
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
            'puntuacio_total' => 48,
            'img' => 'images/jugadors/club-brugge/hans-vanaken.jpg',
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
            'puntuacio_total' => 43,
            'img' => 'images/jugadors/club-brugge/aleksandar-stankovic.jpg',
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
            'puntuacio_total' => 41,
            'img' => 'images/jugadors/club-brugge/joaquin-seys.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/club-brugge/raphael-onyedika.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/club-brugge/hugo-vetlesen.jpg',
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
            'puntuacio_total' => 48,
            'img' => 'images/jugadors/club-brugge/nicolo-tresoldi.jpg',
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
            'puntuacio_total' => 41,
            'img' => 'images/jugadors/club-brugge/christos-tzolis.jpg',
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
            'puntuacio_total' => 41,
            'img' => 'images/jugadors/club-brugge/carlos-forbs.jpg',
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
            'puntuacio_total' => 42,
            'img' => 'images/jugadors/club-brugge/romeo-vermant.jpg',
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
            'puntuacio_total' => 32,
            'img' => 'images/jugadors/club-brugge/mamadou-diakhon.jpg',
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
            'img' => "images/entrenadors/leko.jpg",
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/galatasaray/ugurcan-cakir.jpg',
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
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/galatasaray/gunay-guvenc.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/galatasaray/ismail-jakobs.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/galatasaray/davinson-sanchez.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/galatasaray/abdulkerim-bardakci.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/galatasaray/eren-elmali.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/galatasaray/wilfried-singo.jpg',
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
            'puntuacio_total' => 13,
            'img' => 'images/jugadors/galatasaray/sacha-boey.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/galatasaray/gabriel-sara.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/galatasaray/lucas-torreira.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/galatasaray/leroy-sane.jpg',
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
            'puntuacio_total' => 23,
            'img' => 'images/jugadors/galatasaray/mario-lemina.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/galatasaray/ilkay-gundogan.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/galatasaray/baris-alper-yilmaz.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/galatasaray/roland-sallai.jpg',
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
            'puntuacio_total' => 55,
            'img' => 'images/jugadors/galatasaray/victor-osimhen.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/galatasaray/mauro-icardi.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/galatasaray/yunus-akgun.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/monaco/philipp-kohn.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/monaco/lukas-hradecky.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/monaco/jordan-teze.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/monaco/thilo-kehrer.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/monaco/caio-henrique.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/monaco/vanderson.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/monaco/kassoum-ouattara.jpg',
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
            'puntuacio_total' => 11,
            'img' => 'images/jugadors/monaco/eric-dier.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/monaco/maghnes-akliouche.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/monaco/mamadou-coulibaly.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/monaco/aleksandr-golovin.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/monaco/denis-zakaria.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/monaco/lamine-camara.jpg',
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
            'puntuacio_total' => 45,
            'img' => 'images/jugadors/monaco/folarin-balogun.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/monaco/mika-biereth.jpg',
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
            'puntuacio_total' => 15,
            'img' => 'images/jugadors/monaco/ansu-fati.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/monaco/simon-adingra.jpg',
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
            'img' => 'images/jugadors/monaco/joan-tincres.jpg',
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
            'img' => "images/entrenadors/pocognoli.jpg",
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/qarabag/mateusz-kochalski.jpg',
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
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/qarabag/fabijan-buntic.jpg',
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
            'puntuacio_total' => 42,
            'img' => 'images/jugadors/qarabag/elvin-jafarguliyev.jpg',
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
            'puntuacio_total' => 37,
            'img' => 'images/jugadors/qarabag/matheus-silva.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/qarabag/kevin-medina.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/qarabag/bahlul-mustafazade.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/qarabag/dani-bolt.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/qarabag/samy-mmaee.jpg',
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
            'puntuacio_total' => 42,
            'img' => 'images/jugadors/qarabag/abdellah-zoubir.jpg',
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
            'puntuacio_total' => 32,
            'img' => 'images/jugadors/qarabag/pedro-bicalho.jpg',
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
            'puntuacio_total' => 60,
            'img' => 'images/jugadors/qarabag/leandro-andrade.jpg',
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
            'puntuacio_total' => 41,
            'img' => 'images/jugadors/qarabag/marko-jankovic.jpg',
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
            'puntuacio_total' => 34,
            'img' => 'images/jugadors/qarabag/olexiy-kashchuk.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/qarabag/emmanuel-addai.jpg',
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
            'puntuacio_total' => 34,
            'img' => 'images/jugadors/qarabag/nariman-akhundzade.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/qarabag/musa-gurbanli.jpg',
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
            'puntuacio_total' => 45,
            'img' => 'images/jugadors/qarabag/camilo-duran.jpg',
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
            'img' => "images/entrenadors/gurbanov.jpg",
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/bodo-glimt/nikita-haikin.jpg',
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
            'img' => 'images/jugadors/bodo-glimt/julian-faye-lund.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/bodo-glimt/odin-bjortuft.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/bodo-glimt/fredrik-andre-bjorkan.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/bodo-glimt/haitam-aleesami.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/bodo-glimt/jostein-gundersen.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/bodo-glimt/villads-nielsen.jpg',
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
            'puntuacio_total' => 38,
            'img' => 'images/jugadors/bodo-glimt/hakon-evjen.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/bodo-glimt/fredrik-sjovold.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/bodo-glimt/patrick-berg.jpg',
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
            'puntuacio_total' => 44,
            'img' => 'images/jugadors/bodo-glimt/sondre-brunstad-fet.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/bodo-glimt/sondre-auklend.jpg',
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
            'puntuacio_total' => 58,
            'img' => 'images/jugadors/bodo-glimt/jens-petter-hauge.jpg',
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
            'puntuacio_total' => 58,
            'img' => 'images/jugadors/bodo-glimt/kasper-hogh.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/bodo-glimt/andreas-helmersen.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/bodo-glimt/isak-dybvik-maatta.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/bodo-glimt/ole-didrik-blomberg.jpg',
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
            'img' => "images/entrenadors/knutsen.jpg",
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/benfica/anatoliy-trubin.jpg',
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
            'img' => 'images/jugadors/benfica/samuel-soares.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/benfica/nicolas-otamendi.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/benfica/amar-dedic.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/benfica/samuel-dahl.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/benfica/antonio-silva.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/benfica/tomas-araujo.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/benfica/sidny-lopes-cabral.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/benfica/fredrik-aursnes.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/benfica/leandro-barreiro.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/benfica/enzo-barrenechea.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/benfica/richard-rios.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/benfica/georgiy-sudakov.jpg',
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
            'puntuacio_total' => 38,
            'img' => 'images/jugadors/benfica/vangelis-pavlidis.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/benfica/franjo-ivanovic.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/benfica/andreas-schjelderup.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/benfica/gianluca-prestianni.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/benfica/dodi-lukebakio.jpg',
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
            'img' => "images/entrenadors/mourinho.jpg",
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/marseille/geronimo-rulli.jpg',
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
            'img' => 'images/jugadors/marseille/jeffrey-de-lange.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/marseille/michael-murillo.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/marseille/benjamin-pavard.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/marseille/leonardo-balerdi.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/marseille/emerson.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/marseille/nayef-aguerd.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/marseille/facundo-medina.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/marseille/pierre-emile-hojbjerg.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/marseille/timothy-weah.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/marseille/matt-o-riley.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/marseille/arthur-vermeeren.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/marseille/geoffrey-kondogbia.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/marseille/igor-paixao.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/marseille/pierre-emerick-aubameyang.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/marseille/mason-greenwood.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/marseille/robino-vaz.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/marseille/amine-gouiri.jpg',
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
            'img' => "images/entrenadors/de-zerbi.jpg",
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/pafos/neofytos-michael.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/pafos/jay-gorter.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/pafos/derrick-luckassen.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/pafos/kostas-pileas.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/pafos/david-goldar.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/pafos/bruno-langa.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/pafos/joao-correia.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/pafos/david-luiz.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/pafos/pepe.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/pafos/vlad-dragomir.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/pafos/ivan-sunjic.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/pafos/ken-sema.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/pafos/quina.jpg',
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
            'puntuacio_total' => 43,
            'img' => 'images/jugadors/pafos/mislav-orsic.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/pafos/anderson.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/pafos/jaja.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/pafos/bruno.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/pafos/mons-bassouamina.jpg',
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
            'img' => "images/entrenadors/celades.jpg",
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/union-sg/kjell-scherpen.jpg',
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
            'img' => 'images/jugadors/union-sg/vic-chambaere.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/union-sg/kevin-mac-allister.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/union-sg/christian-burgess.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/union-sg/kamiel-van-de-perre.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/union-sg/fedde-leysen.jpg',
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
            'puntuacio_total' => 17,
            'img' => 'images/jugadors/union-sg/ross-sykes.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/union-sg/louis-patris.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/union-sg/adem-zorgane.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/union-sg/anouar-ait-el-hadj.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/union-sg/rob-schoofs.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/union-sg/ousseynou-niang.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/union-sg/mathias-rasmussen.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/union-sg/anan-khalaili.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/union-sg/promise-david.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/union-sg/kevin-rodriguez.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/union-sg/raul-florucz.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/union-sg/mohammed-fuseini.jpg',
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
            'img' => "images/entrenadors/hubert.jpg",
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/psv/matej-kovar.jpg',
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
            'img' => 'images/jugadors/psv/nick-olij.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/psv/mauro-junior.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/psv/anass-salah-eddine.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/psv/yarek-gasiorowski.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/psv/armando-obispo.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/psv/sergino-dest.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/psv/ryan-flamingo.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/psv/guus-til.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/psv/jerdy-schouten.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/psv/joey-veerman.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/psv/ismael-saibari.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/psv/paul-wanner.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/psv/dennis-man.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/psv/ivan-perisic.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/psv/couhaib-driouech.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/psv/ricardo-pepi.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/psv/esmir-bajraktarevic.jpg',
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
            'img' => "images/entrenadors/bosz.jpg",
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/athletic-club/unai-simon.jpg',
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
            'img' => 'images/jugadors/athletic-club/alex-padilla.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/athletic-club/andoni-gorosabel.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/athletic-club/aitor-paredes.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/athletic-club/daniel-vivian.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/athletic-club/adama-boiro.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/athletic-club/jesus-areso.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/athletic-club/yuri-berchiche.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/athletic-club/alejandro-rego.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/athletic-club/robert-navarro.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/athletic-club/inigo-ruiz-de-galarreta.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/athletic-club/mikel-jauregizar.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/athletic-club/unai-gomez.jpg',
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
            'puntuacio_total' => 39,
            'img' => 'images/jugadors/athletic-club/gorka-guruzeta.jpg',
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
            'puntuacio_total' => 15,
            'img' => 'images/jugadors/athletic-club/nico-serrano.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/athletic-club/inaki-williams.jpg',
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
            'puntuacio_total' => 6,
            'img' => null,
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
            'puntuacio_total' => 6,
            'img' => null,
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
            'img' => "images/entrenadors/valverde.jpg",
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/napoli/vanja-milinkovic-savic.jpg',
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
            'puntuacio_total' => 2,
            'img' => 'images/jugadors/napoli/alex-meret.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/napoli/juan-jesus.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/napoli/giovanni-di-lorenzo.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/napoli/alessandro-buongiorno.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/napoli/leonardo-spinazzola.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/napoli/mathias-olivera.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/napoli/sam-beukema.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/napoli/scott-mctominay.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/napoli/eljif-elmas.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/napoli/stanislav-lobotka.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/napoli/frank-anguissa.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/napoli/billy-gilmour.jpg',
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
            'puntuacio_total' => 29,
            'img' => 'images/jugadors/napoli/rasmus-hojlund.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/napoli/matteo-politano.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/napoli/david-neres.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/napoli/noa-lang.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/napoli/lorenzo-lucca.jpg',
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
            'img' => "images/entrenadors/conte.jpg",
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/copenhagen/dominik-kotarski.jpg',
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
            'img' => 'images/jugadors/copenhagen/runar-runarsson.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/copenhagen/gabriel-pereira.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/copenhagen/marcos-lopez.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/copenhagen/pantelis-hatzidiakos.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/copenhagen/birger-meling.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/copenhagen/junnosuke-suzuki.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/copenhagen/munashe-garananga.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/copenhagen/viktor-claesson.jpg',
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
            'puntuacio_total' => 42,
            'img' => 'images/jugadors/copenhagen/robert.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/copenhagen/lukas-lerager.jpg',
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
            'puntuacio_total' => 22,
            'img' => 'images/jugadors/copenhagen/william-clem.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/copenhagen/mads-emil-madsen.jpg',
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
            'puntuacio_total' => 43,
            'img' => 'images/jugadors/copenhagen/jordan-larsson.jpg',
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
            'puntuacio_total' => 36,
            'img' => 'images/jugadors/copenhagen/mohamed-elyounoussi.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/copenhagen/elias-achouri.jpg',
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
            'puntuacio_total' => 27,
            'img' => 'images/jugadors/copenhagen/youssoufa-moukoko.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/copenhagen/andreas-cornelius.jpg',
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
            'img' => "images/entrenadors/neestrup.jpg",
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/ajax/vitezslav-jaros.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/ajax/remko-pasveer.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/ajax/youri-baas.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/ajax/anton-gaaei.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/ajax/jorthy-mokio.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/ajax/ko-itakura.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/ajax/owen-wijndal.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/ajax/josip-sutalo.jpg',
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
            'puntuacio_total' => 31,
            'img' => 'images/jugadors/ajax/oscar-gloukh.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/ajax/davy-klaassen.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/ajax/youri-regeer.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/ajax/kian-fitz-jim.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/ajax/rayane-bounida.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/ajax/mika-godts.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/ajax/kasper-dolberg.jpg',
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
            'puntuacio_total' => 15,
            'img' => 'images/jugadors/ajax/wout-weghorst.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/ajax/raul-moro.jpg',
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
            'puntuacio_total' => 13,
            'img' => 'images/jugadors/ajax/oliver-edvardsen.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/frankfurt/michael-zetterer.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/frankfurt/kaua-santos.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/frankfurt/robin-koch.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/frankfurt/arthur-theate.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/frankfurt/nathaniel-brown.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/frankfurt/nnamdi-collins.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/frankfurt/aurele-amenda.jpg',
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
            'puntuacio_total' => 13,
            'img' => 'images/jugadors/frankfurt/rasmus-kristensen.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/frankfurt/ansgar-knauff.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/frankfurt/ellyes-skhiri.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/frankfurt/jean-matteo-bahoya.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/frankfurt/mario-gotze.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/frankfurt/ritsu-doan.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/frankfurt/fares-chaibi.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/frankfurt/jonathan-burkardt.jpg',
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
            'puntuacio_total' => 20,
            'img' => 'images/jugadors/frankfurt/can-uzun.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/frankfurt/elye-wahi.jpg',
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
            'puntuacio_total' => 2,
            'img' => null,
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
            'img' => "images/entrenadors/schmitt.jpg",
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/slavia-praha/jindrich-stanek.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/slavia-praha/jakub-markovic.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/slavia-praha/stepan-chaloupek.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/slavia-praha/david-zima.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/slavia-praha/youssoupha-mbodji.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/slavia-praha/david-doudera.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/slavia-praha/murphy-dorley.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/slavia-praha/tomas-vlcek.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/slavia-praha/lukas-provod.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/slavia-praha/michal-sadilek.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/slavia-praha/christos-zafeiris.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/slavia-praha/youssoupha-sanyang.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/slavia-praha/david-moses.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/slavia-praha/vasil-kusej.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/slavia-praha/tomas-chory.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/slavia-praha/mojmir-chytil.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/slavia-praha/muhammed-cham.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/slavia-praha/ivan-schranz.jpg',
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
            'img' => "images/entrenadors/trpisovsky.jpg",
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/villarreal/luiz-junior.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/villarreal/arnau-tenas.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/villarreal/renato-veiga.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/villarreal/sergi-cardona.jpg',
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
            'puntuacio_total' => 12,
            'img' => 'images/jugadors/villarreal/santiago-mourino.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/villarreal/rafa-marin.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/villarreal/juan-foyth.jpg',
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
            'puntuacio_total' => 6,
            'img' => 'images/jugadors/villarreal/pau-navarro.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/villarreal/santiago-comesana.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/villarreal/tani-oluwaseyi.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/villarreal/daniel-parejo.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/villarreal/pape-gueye.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/villarreal/alberto-moleiro.jpg',
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/villarreal/nicolas-pepe.jpg',
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
            'puntuacio_total' => 19,
            'img' => 'images/jugadors/villarreal/georges-mikautadze.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/villarreal/tajon-buchanan.jpg',
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
            'puntuacio_total' => 10,
            'img' => 'images/jugadors/villarreal/ayoze-perez.jpg',
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
            'puntuacio_total' => 4,
            'img' => 'images/jugadors/villarreal/gerard-moreno.jpg',
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
            'img' => "images/entrenadors/marcelino.jpg",
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
            'puntuacio_total' => 16,
            'img' => 'images/jugadors/kairat-almaty/temirlan-anarbekov.jpg',
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
            'puntuacio_total' => 14,
            'img' => 'images/jugadors/kairat-almaty/alexandr-zarutskiy.jpg',
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
            'puntuacio_total' => 37,
            'img' => 'images/jugadors/kairat-almaty/alexandr-mrynskiy.jpg',
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
            'puntuacio_total' => 32,
            'img' => 'images/jugadors/kairat-almaty/egor-sorokin.jpg',
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
            'puntuacio_total' => 30,
            'img' => 'images/jugadors/kairat-almaty/damir-kassabulat.jpg',
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
            'puntuacio_total' => 28,
            'img' => 'images/jugadors/kairat-almaty/luis-mata.jpg',
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
            'puntuacio_total' => 26,
            'img' => 'images/jugadors/kairat-almaty/aleksandr-martynovich.jpg',
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
            'puntuacio_total' => 25,
            'img' => 'images/jugadors/kairat-almaty/ofri-arad.jpg',
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
            'puntuacio_total' => 37,
            'img' => 'images/jugadors/kairat-almaty/valeri-gromyko.jpg',
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
            'puntuacio_total' => 32,
            'img' => 'images/jugadors/kairat-almaty/yerkin-tapalov.jpg',
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
            'puntuacio_total' => 24,
            'img' => 'images/jugadors/kairat-almaty/dan-glazer.jpg',
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
            'puntuacio_total' => 18,
            'img' => 'images/jugadors/kairat-almaty/jug-stanojev.jpg',
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
            'puntuacio_total' => 21,
            'img' => 'images/jugadors/kairat-almaty/adilet-sadybekov.jpg',
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
            'puntuacio_total' => 47,
            'img' => 'images/jugadors/kairat-almaty/jorginho.jpg',
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
            'puntuacio_total' => 35,
            'img' => 'images/jugadors/kairat-almaty/ricardinho.jpg',
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
            'puntuacio_total' => 33,
            'img' => 'images/jugadors/kairat-almaty/edmilson.jpg',
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
            'puntuacio_total' => 44,
            'img' => 'images/jugadors/kairat-almaty/dastan-satpayev.jpg',
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
            'puntuacio_total' => 8,
            'img' => 'images/jugadors/kairat-almaty/ramazan-bagdat.jpg',
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
            'img' => "images/entrenadors/urazbakhtin.jpg",
            'equip_real_id' => $kairat->id,
        ]);
    }
}