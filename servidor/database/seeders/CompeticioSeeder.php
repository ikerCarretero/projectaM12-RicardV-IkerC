<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competicio;

class CompeticioSeeder extends Seeder
{
    public function run(): void
    {
        Competicio::create([
            'nom' => 'Premier League',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/ENG.png',
        ]);

        Competicio::create([
            'nom' => 'La Liga',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/ESP.png',
        ]);

        Competicio::create([
            'nom' => 'Serie A',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/ITA.png',
        ]);

        Competicio::create([
            'nom' => 'Bundesliga',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/GER.png',
        ]);

        Competicio::create([
            'nom' => 'Ligue 1',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/FRA.png',
        ]);

        Competicio::create([
            'nom' => 'Liga Portugal',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/POR.png',
        ]);

        Competicio::create([
            'nom' => 'Eredivisie',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/NED.png',
        ]);

        Competicio::create([
            'nom' => 'Belgian Pro League',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/BEL.png',
        ]);

        Competicio::create([
            'nom' => 'Super Lig',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/TUR.png',
        ]);

        Competicio::create([
            'nom' => 'Super League Greece',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/GRE.png',
        ]);

        Competicio::create([
            'nom' => 'Cyprus First Division',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/CYP.png',
        ]);

        Competicio::create([
            'nom' => 'Kazakhstan Premier League',
            'temporada' => '2025-2026',
            'bandera' => 'https://img.uefa.com/imgml/flags/18x18/KAZ.png',
        ]);
    }
}
