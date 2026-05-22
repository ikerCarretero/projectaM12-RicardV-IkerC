<?php

namespace Database\Seeders;

use App\Models\Competicio;
use App\Models\Jornada;
use Illuminate\Database\Seeder;

class JornadaSeeder extends Seeder
{
    public function run(): void
    {
        $competicions = Competicio::all();

        foreach ($competicions as $competicio) {
            for ($i = 1; $i <= 5; $i++) {
                Jornada::updateOrCreate(
                    [
                        'competicio_id' => $competicio->id,
                        'numero' => $i,
                    ],
                    [
                        'nom' => 'Jornada ' . $i,
                        'data_inici' => now()->subWeeks(5 - $i)->toDateString(),
                        'data_fi' => now()->subWeeks(5 - $i)->addDays(2)->toDateString(),
                        'estat' => $i <= 4 ? 'tancada' : 'oberta',
                    ]
                );
            }
        }
    }
}