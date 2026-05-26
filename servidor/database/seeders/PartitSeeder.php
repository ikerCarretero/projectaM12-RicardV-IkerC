<?php

namespace Database\Seeders;

use App\Models\EquipReal;
use App\Models\Jornada;
use App\Models\Partit;
use Illuminate\Database\Seeder;

class PartitSeeder extends Seeder
{
    public function run(): void
    {
        $jornades = Jornada::all();

        foreach ($jornades as $jornada) {
            $equips = EquipReal::where('competicio_id', $jornada->competicio_id)
                ->inRandomOrder()
                ->take(8)
                ->get();

            if ($equips->count() < 2) {
                continue;
            }

            $parelles = $equips->chunk(2);

            foreach ($parelles as $index => $parella) {
                if ($parella->count() < 2) {
                    continue;
                }

                $local = $parella->first();
                $visitant = $parella->last();
                $golsLocal = rand(0, 4);
                $golsVisitant = rand(0, 4);

                Partit::updateOrCreate(
                    [
                        'jornada_id' => $jornada->id,
                        'equip_local_id' => $local->id,
                        'equip_visitant_id' => $visitant->id,
                    ],
                    [
                        'data_hora' => now()
                            ->subWeeks(5 - $jornada->numero)
                            ->addDays($index)
                            ->setTime(20, 0, 0),
                        'gols_local' => $golsLocal,
                        'gols_visitant' => $golsVisitant,
                        'resultat' => $golsLocal . '-' . $golsVisitant,
                        'estat' => $jornada->estat === 'tancada' ? 'finalitzat' : 'pendent',
                    ]
                );
            }
        }
    }
}