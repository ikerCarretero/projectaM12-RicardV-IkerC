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

        // Porteros
        Jugador::create([
            'nom' => 'David Raya',
            'posicio_base' => 'Porter',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Kepa Arrizabalaga',
            'posicio_base' => 'Porter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'William Saliba',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Gabriel Magalhães',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Riccardo Calafiori',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Jurriën Timber',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Ben White',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Declan Rice',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 100000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Martin Ødegaard',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Mikel Merino',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Martín Zubimendi',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Eberechi Eze',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Bukayo Saka',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 140000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Gabriel Martinelli',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Gabriel Jesus',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Viktor Gyökeres',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);

        Jugador::create([
            'nom' => 'Noni Madueke',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $arsenal->id,
        ]);
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — LIVERPOOL FC (2025-2026)
        // ───────────────────────────────────────────────
        $liverpool = EquipReal::where('nom', 'Liverpool FC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Alisson Becker',
            'posicio_base' => 'Porter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Caoimhín Kelleher',
            'posicio_base' => 'Porter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Virgil van Dijk',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Ibrahima Konaté',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Joe Gomez',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Andrew Robertson',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Trent Alexander-Arnold',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Alexis Mac Allister',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Dominik Szoboszlai',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Curtis Jones',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Wataru Endo',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Ryan Gravenberch',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Mohamed Salah',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Luis Díaz',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Darwin Núñez',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Diogo Jota',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

        Jugador::create([
            'nom' => 'Cody Gakpo',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $liverpool->id,
        ]);

                // ───────────────────────────────────────────────
        // PREMIER LEAGUE — TOTTENHAM HOTSPUR FC (2025-2026)
        // ───────────────────────────────────────────────
        $tottenham = EquipReal::where('nom', 'Tottenham Hotspur FC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Guglielmo Vicario',
            'posicio_base' => 'Porter',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Fraser Forster',
            'posicio_base' => 'Porter',
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Cristian Romero',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Micky van de Ven',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Pedro Porro',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Destiny Udogie',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Radu Drăgușin',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'James Maddison',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Rodrigo Bentancur',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Pape Matar Sarr',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Yves Bissouma',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Son Heung-min',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Richarlison',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Dejan Kulusevski',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Brennan Johnson',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);

        Jugador::create([
            'nom' => 'Timo Werner',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $tottenham->id,
        ]);
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — CHELSEA FC (2025-2026)
        // ───────────────────────────────────────────────
        $chelsea = EquipReal::where('nom', 'Chelsea FC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Djordje Petrović',
            'posicio_base' => 'Porter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Robert Sánchez',
            'posicio_base' => 'Porter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Reece James',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Ben Chilwell',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Wesley Fofana',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Levi Colwill',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Marc Cucurella',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Enzo Fernández',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Moisés Caicedo',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Conor Gallagher',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Carney Chukwuemeka',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Christopher Nkunku',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Nicolas Jackson',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Raheem Sterling',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Mykhaylo Mudryk',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);

        Jugador::create([
            'nom' => 'Cole Palmer',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $chelsea->id,
        ]);
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — MANCHESTER CITY FC (2025-2026)
        // ───────────────────────────────────────────────
        $mancity = EquipReal::where('nom', 'Manchester City FC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Ederson Moraes',
            'posicio_base' => 'Porter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Stefan Ortega',
            'posicio_base' => 'Porter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Rúben Dias',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'John Stones',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Manuel Akanji',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Nathan Aké',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Joško Gvardiol',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Kyle Walker',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Rodri Hernández',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 110000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Kevin De Bruyne',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Bernardo Silva',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Mateo Kovačić',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Matheus Nunes',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Erling Haaland',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 180000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Phil Foden',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 150000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Julián Álvarez',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Jérémy Doku',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);

        Jugador::create([
            'nom' => 'Jack Grealish',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $mancity->id,
        ]);
        // ───────────────────────────────────────────────
        // PREMIER LEAGUE — NEWCASTLE UNITED FC (2025-2026)
        // ───────────────────────────────────────────────
        $newcastle = EquipReal::where('nom', 'Newcastle United FC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Nick Pope',
            'posicio_base' => 'Porter',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Martin Dúbravka',
            'posicio_base' => 'Porter',
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Kieran Trippier',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Sven Botman',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Fabian Schär',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Tino Livramento',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Lewis Hall',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Bruno Guimarães',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 85000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Sandro Tonali',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Joelinton',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Sean Longstaff',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Lewis Miley',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Alexander Isak',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Callum Wilson',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Anthony Gordon',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Harvey Barnes',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);

        Jugador::create([
            'nom' => 'Miguel Almirón',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $newcastle->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — FC BARCELONA (2025-2026)
        // ───────────────────────────────────────────────
        $barca = EquipReal::where('nom', 'FC Barcelona')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Joan García',
            'posicio_base' => 'Porter',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Marc-André ter Stegen',
            'posicio_base' => 'Porter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Iñaki Peña',
            'posicio_base' => 'Porter',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Ronald Araújo',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Jules Koundé',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Pau Cubarsí',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Alejandro Balde',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Andreas Christensen',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Pedri',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Gavi',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 75000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Frenkie de Jong',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Ilkay Gündogan',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 9000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Fermín López',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Robert Lewandowski',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Lamine Yamal',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Raphinha',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Ferran Torres',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);

        Jugador::create([
            'nom' => 'Marcus Rashford',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $barca->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — REAL MADRID CF (2025-2026)
        // ───────────────────────────────────────────────
        $madrid = EquipReal::where('nom', 'Real Madrid CF')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Thibaut Courtois',
            'posicio_base' => 'Porter',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Andriy Lunin',
            'posicio_base' => 'Porter',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Éder Militão',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Antonio Rüdiger',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'David Alaba',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Ferland Mendy',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Dani Carvajal',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Fran García',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Jude Bellingham',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 180000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Federico Valverde',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 120000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Aurélien Tchouaméni',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Eduardo Camavinga',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 85000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Toni Kroos',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Luka Modrić',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Vinícius Júnior',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 180000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Rodrygo Goes',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 100000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Kylian Mbappé',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 180000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);

        Jugador::create([
            'nom' => 'Endrick',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $madrid->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — ATLÉTICO DE MADRID (2025-2026)
        // ───────────────────────────────────────────────
        $atleti = EquipReal::where('nom', 'Atlético de Madrid')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Jan Oblak',
            'posicio_base' => 'Porter',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Horatiu Moldovan',
            'posicio_base' => 'Porter',
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'José María Giménez',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Mario Hermoso',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Axel Witsel',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Nahuel Molina',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Reinildo Mandava',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Koke',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Rodrigo de Paul',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Saúl Ñíguez',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Pablo Barrios',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Antoine Griezmann',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Álvaro Morata',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Memphis Depay',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);

        Jugador::create([
            'nom' => 'Ángel Correa',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atleti->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — ATHLETIC CLUB (2025-2026)
        // ───────────────────────────────────────────────
        $athletic = EquipReal::where('nom', 'Athletic Club')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Unai Simón',
            'posicio_base' => 'Porter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Julen Agirrezabala',
            'posicio_base' => 'Porter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Íñigo Lekue',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Yeray Álvarez',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Dani Vivian',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Aitor Paredes',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Yuri Berchiche',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Oihan Sancet',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Iker Muniain',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Beñat Prados',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Mikel Vesga',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Nico Williams',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Iñaki Williams',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);

        Jugador::create([
            'nom' => 'Gorka Guruzeta',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $athletic->id,
        ]);
        // ───────────────────────────────────────────────
        // LALIGA — VILLARREAL CF (2025-2026)
        // ───────────────────────────────────────────────
        $villarreal = EquipReal::where('nom', 'Villarreal CF')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Filip Jörgensen',
            'posicio_base' => 'Porter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Pepe Reina',
            'posicio_base' => 'Porter',
            'valor_mercat' => 500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Raúl Albiol',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Jorge Cuenca',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Juan Foyth',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Alfonso Pedraza',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Dani Parejo',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Álex Baena',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Santi Comesaña',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Gerard Moreno',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Alexander Sørloth',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);

        Jugador::create([
            'nom' => 'Yeremy Pino',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $villarreal->id,
        ]);
        // ───────────────────────────────────────────────
        // SERIE A — ATALANTA BC (2025-2026)
        // ───────────────────────────────────────────────
        $atalanta = EquipReal::where('nom', 'Atalanta BC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Marco Carnesecchi',
            'posicio_base' => 'Porter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Juan Musso',
            'posicio_base' => 'Porter',
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Giorgio Scalvini',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Sead Kolašinac',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Berat Djimsiti',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Teun Koopmeiners',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Éderson',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Mario Pašalić',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Ademola Lookman',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Gianluca Scamacca',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);

        Jugador::create([
            'nom' => 'Charles De Ketelaere',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $atalanta->id,
        ]);
        // ───────────────────────────────────────────────
        // SERIE A — JUVENTUS FC (2025-2026)
        // ───────────────────────────────────────────────
        $juve = EquipReal::where('nom', 'Juventus FC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Wojciech Szczęsny',
            'posicio_base' => 'Porter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Mattia Perin',
            'posicio_base' => 'Porter',
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Gleison Bremer',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Danilo',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Federico Gatti',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Manuel Locatelli',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Weston McKennie',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Adrien Rabiot',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Dušan Vlahović',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Federico Chiesa',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);

        Jugador::create([
            'nom' => 'Kenan Yıldız',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $juve->id,
        ]);
        // ───────────────────────────────────────────────
        // SERIE A — FC INTERNAZIONALE MILANO (2025-2026)
        // ───────────────────────────────────────────────
        $inter = EquipReal::where('nom', 'FC Internazionale Milano')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Yann Sommer',
            'posicio_base' => 'Porter',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Emil Audero',
            'posicio_base' => 'Porter',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Alessandro Bastoni',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Benjamin Pavard',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Francesco Acerbi',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Nicolò Barella',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 80000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Hakan Çalhanoğlu',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Davide Frattesi',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Lautaro Martínez',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 110000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Marcus Thuram',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);

        Jugador::create([
            'nom' => 'Marko Arnautović',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $inter->id,
        ]);
        // ───────────────────────────────────────────────
        // BUNDESLIGA — FC BAYERN MÜNCHEN (2025-2026)
        // ───────────────────────────────────────────────
        $bayern = EquipReal::where('nom', 'FC Bayern München')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Manuel Neuer',
            'posicio_base' => 'Porter',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Daniel Peretz',
            'posicio_base' => 'Porter',
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Matthijs de Ligt',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Dayot Upamecano',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Kim Min-jae',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Alphonso Davies',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Noussair Mazraoui',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 28000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Joshua Kimmich',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Leon Goretzka',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Jamal Musiala',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 120000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Aleksandar Pavlović',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Harry Kane',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 90000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Leroy Sané',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 70000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Serge Gnabry',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);

        Jugador::create([
            'nom' => 'Kingsley Coman',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $bayern->id,
        ]);
        // ───────────────────────────────────────────────
        // BUNDESLIGA — BORUSSIA DORTMUND (2025-2026)
        // ───────────────────────────────────────────────
        $dortmund = EquipReal::where('nom', 'Borussia Dortmund')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Gregor Kobel',
            'posicio_base' => 'Porter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Nico Schlotterbeck',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Mats Hummels',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Julian Ryerson',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Emre Can',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Marcel Sabitzer',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Julian Brandt',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Karim Adeyemi',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Youssoufa Moukoko',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);

        Jugador::create([
            'nom' => 'Donyell Malen',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $dortmund->id,
        ]);
        // ───────────────────────────────────────────────
        // BUNDESLIGA — BAYER 04 LEVERKUSEN (2025-2026)
        // ───────────────────────────────────────────────
        $leverkusen = EquipReal::where('nom', 'Bayer 04 Leverkusen')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Lukáš Hrádecký',
            'posicio_base' => 'Porter',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $leverkusen->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Jonathan Tah',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Piero Hincapié',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Jeremie Frimpong',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $leverkusen->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Granit Xhaka',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Exequiel Palacios',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $leverkusen->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Florian Wirtz',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 130000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Victor Boniface',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $leverkusen->id,
        ]);

        Jugador::create([
            'nom' => 'Amine Adli',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $leverkusen->id,
        ]);
        // ───────────────────────────────────────────────
        // BUNDESLIGA — EINTRACHT FRANKFURT (2025-2026)
        // ───────────────────────────────────────────────
        $eintracht = EquipReal::where('nom', 'Eintracht Frankfurt')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Kevin Trapp',
            'posicio_base' => 'Porter',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $eintracht->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Robin Koch',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Tuta',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $eintracht->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Ellyes Skhiri',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Mario Götze',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $eintracht->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Omar Marmoush',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $eintracht->id,
        ]);

        Jugador::create([
            'nom' => 'Ansgar Knauff',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $eintracht->id,
        ]);
        // ───────────────────────────────────────────────
        // LIGUE 1 — PARIS SAINT‑GERMAIN (2025-2026)
        // ───────────────────────────────────────────────
        $psg = EquipReal::where('nom', 'Paris Saint-Germain')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Gianluigi Donnarumma',
            'posicio_base' => 'Porter',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Arnau Tenas',
            'posicio_base' => 'Porter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Marquinhos',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Milan Škriniar',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Achraf Hakimi',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Nuno Mendes',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Vitinha',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Warren Zaïre-Emery',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 65000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Fabián Ruiz',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Manuel Ugarte',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Ousmane Dembélé',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 50000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Randal Kolo Muani',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 60000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Gonçalo Ramos',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);

        Jugador::create([
            'nom' => 'Bradley Barcola',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 40000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psg->id,
        ]);
        // ───────────────────────────────────────────────
        // LIGUE 1 — AS MONACO FC (2025-2026)
        // ───────────────────────────────────────────────
        $monaco = EquipReal::where('nom', 'AS Monaco FC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Philipp Köhn',
            'posicio_base' => 'Porter',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $monaco->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Guillermo Maripán',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Thilo Kehrer',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Caio Henrique',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $monaco->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Youssouf Fofana',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Mohamed Camara',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $monaco->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Wissam Ben Yedder',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Takumi Minamino',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $monaco->id,
        ]);

        Jugador::create([
            'nom' => 'Breel Embolo',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $monaco->id,
        ]);
        // ───────────────────────────────────────────────
        // LIGUE 1 — OLYMPIQUE DE MARSEILLE (2025-2026)
        // ───────────────────────────────────────────────
        $marseille = EquipReal::where('nom', 'Olympique de Marseille')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Pau López',
            'posicio_base' => 'Porter',
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $marseille->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Chancel Mbemba',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Leonardo Balerdi',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Jonathan Clauss',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $marseille->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Jordan Veretout',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Geoffrey Kondogbia',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $marseille->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Pierre-Emerick Aubameyang',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Ismaïla Sarr',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $marseille->id,
        ]);

        Jugador::create([
            'nom' => 'Amine Harit',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $marseille->id,
        ]);
        // ───────────────────────────────────────────────
        // LIGA PORTUGAL — SPORTING CP (2025-2026)
        // ───────────────────────────────────────────────
        $sporting = EquipReal::where('nom', 'Sporting CP')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Antonio Adán',
            'posicio_base' => 'Porter',
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Franco Israel',
            'posicio_base' => 'Porter',
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Gonçalo Inácio',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Ousmane Diomande',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Jeremiah St. Juste',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Hidemasa Morita',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Pedro Gonçalves',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 35000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Morten Hjulmand',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Viktor Gyökeres',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Paulinho',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);

        Jugador::create([
            'nom' => 'Francisco Trincão',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $sporting->id,
        ]);
        // ───────────────────────────────────────────────
        // LIGA PORTUGAL — SL BENFICA (2025-2026)
        // ───────────────────────────────────────────────
        $benfica = EquipReal::where('nom', 'SL Benfica')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Anatoliy Trubin',
            'posicio_base' => 'Porter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Nicolás Otamendi',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Morato',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Alexander Bah',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'João Neves',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 55000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Florentino Luís',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Orkun Kökçü',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Ángel Di María',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Rafa Silva',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);

        Jugador::create([
            'nom' => 'Arthur Cabral',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $benfica->id,
        ]);
        // ───────────────────────────────────────────────
        // EREDIVISIE — PSV EINDHOVEN (2025-2026)
        // ───────────────────────────────────────────────
        $psv = EquipReal::where('nom', 'PSV Eindhoven')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Walter Benítez',
            'posicio_base' => 'Porter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Joël Drommel',
            'posicio_base' => 'Porter',
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Olivier Boscagli',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'André Ramalho',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Sergiño Dest',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Patrick van Aanholt',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Joey Veerman',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Guus Til',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Ismael Saibari',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Luuk de Jong',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Johan Bakayoko',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 45000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);

        Jugador::create([
            'nom' => 'Hirving Lozano',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $psv->id,
        ]);
        // ───────────────────────────────────────────────
        // EREDIVISIE — AFC AJAX (2025-2026)
        // ───────────────────────────────────────────────
        $ajax = EquipReal::where('nom', 'AFC Ajax')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Gerónimo Rulli',
            'posicio_base' => 'Porter',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Diant Ramaj',
            'posicio_base' => 'Porter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Jorrel Hato',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 30000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Devyne Rensch',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Jakov Medić',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Kenneth Taylor',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Benjamin Tahirović',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Jordan Henderson',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Steven Bergwijn',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Brian Brobbey',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 25000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);

        Jugador::create([
            'nom' => 'Chuba Akpom',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $ajax->id,
        ]);
        // ───────────────────────────────────────────────
        // BELGIAN PRO LEAGUE — CLUB BRUGGE KV (2025-2026)
        // ───────────────────────────────────────────────
        $brugge = EquipReal::where('nom', 'Club Brugge KV')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Simon Mignolet',
            'posicio_base' => 'Porter',
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Senne Lammens',
            'posicio_base' => 'Porter',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Brandon Mechele',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Bjorn Meijer',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Joel Ordóñez',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Raphaël Onyedika',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Casper Nielsen',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Hugo Vetlesen',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 10000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Andreas Skov Olsen',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Ferran Jutglà',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);

        Jugador::create([
            'nom' => 'Roman Yaremchuk',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $brugge->id,
        ]);
        // ───────────────────────────────────────────────
        // BELGIAN PRO LEAGUE — UNION SAINT‑GILLOISE (2025-2026)
        // ───────────────────────────────────────────────
        $usg = EquipReal::where('nom', 'Union Saint-Gilloise')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Anthony Moris',
            'posicio_base' => 'Porter',
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $usg->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Christian Burgess',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Koki Machida',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Ross Sykes',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $usg->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Cameron Puertas',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Noah Sadiki',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $usg->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Mohamed Amoura',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Gustaf Nilsson',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $usg->id,
        ]);

        Jugador::create([
            'nom' => 'Dennis Eckert Ayensa',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $usg->id,
        ]);
        // ───────────────────────────────────────────────
        // SUPER LIG — GALATASARAY SK (2025-2026)
        // ───────────────────────────────────────────────
        $galatasaray = EquipReal::where('nom', 'Galatasaray SK')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Fernando Muslera',
            'posicio_base' => 'Porter',
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Günay Güvenç',
            'posicio_base' => 'Porter',
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Davinson Sánchez',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Victor Nelsson',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Sacha Boey',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Angeliño',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Lucas Torreira',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Kerem Demirbay',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Sérgio Oliveira',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Mauro Icardi',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 18000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Wilfried Zaha',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 15000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);

        Jugador::create([
            'nom' => 'Kerem Aktürkoğlu',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 20000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $galatasaray->id,
        ]);
        // ───────────────────────────────────────────────
        // SUPER LEAGUE GREECE — OLYMPIACOS FC (2025-2026)
        // ───────────────────────────────────────────────
        $olympiacos = EquipReal::where('nom', 'Olympiacos FC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Konstantinos Tzolakis',
            'posicio_base' => 'Porter',
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Alexandros Paschalakis',
            'posicio_base' => 'Porter',
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Panagiotis Retsos',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Andreas Ndoj',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Quini',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Francisco Ortega',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 5000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'André Horta',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 6000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Chiquinho',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 4000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Gustavo Scarpa',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 7000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Ayoub El Kaabi',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 8000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Daniel Podence',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 12000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);

        Jugador::create([
            'nom' => 'Konstantinos Fortounis',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $olympiacos->id,
        ]);
        // ───────────────────────────────────────────────
        // CYPRUS FIRST DIVISION — PAFOS FC (2025-2026)
        // ───────────────────────────────────────────────
        $pafos = EquipReal::where('nom', 'Pafos FC')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Ivica Ivušić',
            'posicio_base' => 'Porter',
            'valor_mercat' => 3000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Artur Rudko',
            'posicio_base' => 'Porter',
            'valor_mercat' => 800000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Willy Semedo',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Josef Kvída',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 1200000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Paulus Arajuuri',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Jairo',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 1000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Bruno Tavares',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Onni Valakari',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 2500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Muamer Tanković',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 2000000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Mamadou Kané',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 1200000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);

        Jugador::create([
            'nom' => 'Ailton',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 800000,
            'puntuacio_total' => 0,
            'equip_real_id' => $pafos->id,
        ]);
        // ───────────────────────────────────────────────
        // KAZAKHSTAN PREMIER LEAGUE — KAIRAT ALMATY (2025-2026)
        // ───────────────────────────────────────────────
        $kairat = EquipReal::where('nom', 'Kairat Almaty')->first();

        // Porteros
        Jugador::create([
            'nom' => 'Stas Pokatilov',
            'posicio_base' => 'Porter',
            'valor_mercat' => 800000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Danil Ustimenko',
            'posicio_base' => 'Porter',
            'valor_mercat' => 600000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        // Defensas
        Jugador::create([
            'nom' => 'Nuraly Alip',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 1500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Rade Dugalić',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 700000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Yerkebulan Seydakhmet',
            'posicio_base' => 'Defensa',
            'valor_mercat' => 500000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        // Centrocampistas
        Jugador::create([
            'nom' => 'Artur Shushenachev',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 1200000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Konstantin Kucheryavy',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 700000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Ramazan Orazov',
            'posicio_base' => 'Migcampista',
            'valor_mercat' => 900000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        // Delanteros
        Jugador::create([
            'nom' => 'Vágner Love',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 300000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'Aybar Zhaksylykov',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 600000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);

        Jugador::create([
            'nom' => 'João Paulo',
            'posicio_base' => 'Davanter',
            'valor_mercat' => 800000,
            'puntuacio_total' => 0,
            'equip_real_id' => $kairat->id,
        ]);
