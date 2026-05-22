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
            'bandera' => 'images/ligas/inglesa.png',
        ]);

        Competicio::create([
            'nom' => 'La Liga',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/espanyola.png',
        ]);

        Competicio::create([
            'nom' => 'Serie A',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/italiana.png',
        ]);

        Competicio::create([
            'nom' => 'Bundesliga',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/alemana.png',
        ]);

        Competicio::create([
            'nom' => 'Ligue 1',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/francesa.png',
        ]);

        Competicio::create([
            'nom' => 'Liga Portugal',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/portuguesa.png',
        ]);

        Competicio::create([
            'nom' => 'Eredivisie',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/holandesa.png',
        ]);

        Competicio::create([
            'nom' => 'Belgian Pro League',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/belga.png',
        ]);

        Competicio::create([
            'nom' => 'Super Lig',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/turca.png',
        ]);

        Competicio::create([
            'nom' => 'Super League Greece',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/griega.png',
        ]);

        Competicio::create([
            'nom' => 'Cyprus First Division',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/chipre.png',
        ]);

        Competicio::create([
            'nom' => 'Kazakhstan Premier League',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/kazakhstan.png',
        ]);
        Competicio::create([
            'nom' => 'Chance Liga',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/checa.png',
        ]);
        Competicio::create([
            'nom' => 'Eliteserien',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/noruega.png',
        ]);
        Competicio::create([
            'nom' => 'Premyer Liqa',
            'temporada' => '2025-2026',
            'bandera' => 'images/ligas/azerbaidjan.png',
        ]);
    }
}
