<?php

namespace Database\Seeders;

use App\Models\EstadisticaJugador;
use App\Models\Jugador;
use App\Models\Partit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EstadisticaJugadorSeeder extends Seeder
{
    public function run(): void
    {
        $partits = Partit::with(['equipLocal', 'equipVisitant'])->get();

        foreach ($partits as $partit) {
            $jugadors = Jugador::whereIn('equip_real_id', [
                    $partit->equip_local_id,
                    $partit->equip_visitant_id,
                ])
                ->where('posicio_base', '!=', 'Entrenador')
                ->get();

            foreach ($jugadors as $jugador) {
                $stats = $this->generarStats($jugador, $partit);
                $stats['punts_jornada'] = $this->calcularPuntsJornada($stats);

                EstadisticaJugador::updateOrCreate(
                    [
                        'jugador_id' => $jugador->id,
                        'partit_id' => $partit->id,
                    ],
                    $stats
                );
            }
        }
    }

    private function generarStats(Jugador $jugador, Partit $partit): array
    {
        $posicio = Str::lower(Str::ascii($jugador->posicio_base ?? ''));

        $esPorter = str_contains($posicio, 'porter') || str_contains($posicio, 'portero');
        $esDefensa = str_contains($posicio, 'def');
        $esMigcampista = str_contains($posicio, 'mig') || str_contains($posicio, 'centro');
        $esDavanter = str_contains($posicio, 'dav') || str_contains($posicio, 'delantero') || str_contains($posicio, 'atac');

        $esLocal = (int) $jugador->equip_real_id === (int) $partit->equip_local_id;
        $golsEquip = $esLocal ? $partit->gols_local : $partit->gols_visitant;
        $golsRival = $esLocal ? $partit->gols_visitant : $partit->gols_local;
        $partitGuanyat = $golsEquip > $golsRival;

        $minutsPossibles = [0, 30, 45, 60, 75, 90, 90, 90];
        $minuts = $minutsPossibles[array_rand($minutsPossibles)];

        $stats = [
            'minuts_jugats' => $minuts,
            'partit_guanyat' => $minuts > 0 && $partitGuanyat,
            'gols' => 0,
            'assistencies' => 0,
            'gols_propia' => 0,
            'parades_clau' => 0,
            'parades_normals' => 0,
            'faltes_fetes' => 0,
            'passes_completades' => 0,
            'targetes_grogues' => 0,
            'targetes_vermelles' => 0,
            'penaltis_comesos' => 0,
            'penaltis_provocats' => 0,
        ];

        if ($minuts === 0) {
            return $stats;
        }

        $stats['faltes_fetes'] = rand(0, 4);
        $stats['passes_completades'] = rand(10, 90);
        $stats['targetes_grogues'] = rand(1, 100) <= 16 ? 1 : 0;
        $stats['targetes_vermelles'] = rand(1, 100) <= 3 ? 1 : 0;
        $stats['penaltis_comesos'] = rand(1, 100) <= 4 ? 1 : 0;
        $stats['penaltis_provocats'] = rand(1, 100) <= 6 ? 1 : 0;

        if ($esPorter) {
            $stats['parades_normals'] = rand(0, 7);
            $stats['parades_clau'] = rand(1, 100) <= 35 ? rand(1, 2) : 0;
            $stats['passes_completades'] = rand(12, 35);
            $stats['penaltis_comesos'] = 0;
            $stats['penaltis_provocats'] = 0;
        }

        if ($esDefensa) {
            $stats['gols'] = rand(1, 100) <= 8 ? 1 : 0;
            $stats['assistencies'] = rand(1, 100) <= 12 ? 1 : 0;
            $stats['gols_propia'] = rand(1, 100) <= 3 ? 1 : 0;
            $stats['passes_completades'] = rand(30, 85);
        }

        if ($esMigcampista) {
            $stats['gols'] = rand(1, 100) <= 16 ? 1 : 0;
            $stats['assistencies'] = rand(1, 100) <= 24 ? 1 : 0;
            $stats['passes_completades'] = rand(45, 105);
        }

        if ($esDavanter) {
            $stats['gols'] = rand(1, 100) <= 28 ? 1 : 0;
            $stats['assistencies'] = rand(1, 100) <= 16 ? 1 : 0;
            $stats['passes_completades'] = rand(15, 55);

            if (rand(1, 100) <= 7) {
                $stats['gols']++;
            }
        }

        return $stats;
    }

    private function calcularPuntsJornada(array $stats): int
    {
        $punts = 0;

        $punts += intdiv($stats['minuts_jugats'] ?? 0, 45);
        $punts += !empty($stats['partit_guanyat']) ? 3 : 0;
        $punts += ($stats['gols'] ?? 0) * 5;
        $punts += ($stats['assistencies'] ?? 0) * 3;
        $punts -= ($stats['gols_propia'] ?? 0) * 3;
        $punts += ($stats['parades_clau'] ?? 0) * 2;
        $punts += intdiv($stats['parades_normals'] ?? 0, 2);
        $punts -= intdiv($stats['faltes_fetes'] ?? 0, 2);
        $punts -= ($stats['targetes_grogues'] ?? 0) * 2;
        $punts -= ($stats['targetes_vermelles'] ?? 0) * 3;
        $punts += intdiv($stats['passes_completades'] ?? 0, 5);
        $punts -= ($stats['penaltis_comesos'] ?? 0) * 3;
        $punts += ($stats['penaltis_provocats'] ?? 0) * 2;

        return $punts;
    }
}