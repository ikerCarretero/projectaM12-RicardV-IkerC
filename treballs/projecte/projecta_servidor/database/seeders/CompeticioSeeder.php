<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competicio;

class CompeticioSeeder extends Seeder
{
    public function run(): void
    {
        Competicio::create(['nom' => 'Premier League', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'La Liga', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Serie A', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Bundesliga', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Ligue 1', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Liga Portugal', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Eredivisie', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Belgian Pro League', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Super Lig', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Super League Greece', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Cyprus First Division', 'temporada' => '2025-2026']);
        Competicio::create(['nom' => 'Kazakhstan Premier League', 'temporada' => '2025-2026']);
    }
}
