<?php

namespace Database\Seeders;

use App\Models\EquipFantasy;
use App\Models\Jugador;
use App\Models\LligaPrivada;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CompeticioSeeder::class,
            EquipRealSeeder::class,
            JugadorSeeder::class,
            JornadaSeeder::class,
            PartitSeeder::class,
            EstadisticaJugadorSeeder::class,
        ]);

        $admin = User::updateOrCreate(
            ['email' => 'admin@fantasy.com'],
            [
                'nom' => 'Admin',
                'name' => 'Admin',
                'password' => Hash::make('123456'),
                'rol' => 'admin',
            ]
        );

        $ricard = User::updateOrCreate(
            ['email' => 'ricard@fantasy.com'],
            [
                'nom' => 'Ricard Vergés',
                'name' => 'Ricard Vergés',
                'password' => Hash::make('123456'),
                'rol' => 'usuari',
            ]
        );

        $iker = User::updateOrCreate(
            ['email' => 'iker@fantasy.com'],
            [
                'nom' => 'Iker Carretero',
                'name' => 'Iker Carretero',
                'password' => Hash::make('123456'),
                'rol' => 'usuari',
            ]
        );

        $lligaAmics = LligaPrivada::updateOrCreate(
            ['codi_acces' => 'AMICS123'],
            [
                'nom' => 'Lliga dels Amics',
                'descripcio' => 'Lliga privada de prova per a la demo.',
                'pressupost_inicial' => 250000000,
                'maxim_participants' => 10,
                'creador_id' => $ricard->id,
            ]
        );

        $lligaDaw = LligaPrivada::updateOrCreate(
            ['codi_acces' => 'DAW2BEST'],
            [
                'nom' => 'Lliga DAW2',
                'descripcio' => 'Lliga de prova del projecte final.',
                'pressupost_inicial' => 250000000,
                'maxim_participants' => 12,
                'creador_id' => $admin->id,
            ]
        );

        $lligaAmics->usuaris()->syncWithoutDetaching([
            $ricard->id,
            $iker->id,
        ]);

        $lligaDaw->usuaris()->syncWithoutDetaching([
            $ricard->id,
            $iker->id,
            $admin->id,
        ]);

        $equipRicard = EquipFantasy::updateOrCreate(
            [
                'usuari_id' => $ricard->id,
                'lliga_privada_id' => $lligaAmics->id,
            ],
            [
                'nom_equip' => 'Els Cracks de Ricard',
                'pressupost' => 100000000,
            ]
        );

        $equipIker = EquipFantasy::updateOrCreate(
            [
                'usuari_id' => $iker->id,
                'lliga_privada_id' => $lligaAmics->id,
            ],
            [
                'nom_equip' => 'Iker FC',
                'pressupost' => 85000000,
            ]
        );

        $jugadorsRicard = Jugador::where('posicio_base', '!=', 'Entrenador')
            ->orderByDesc('valor_mercat')
            ->take(11)
            ->pluck('id')
            ->toArray();

        $jugadorsIker = Jugador::where('posicio_base', '!=', 'Entrenador')
            ->orderByDesc('valor_mercat')
            ->skip(11)
            ->take(11)
            ->pluck('id')
            ->toArray();

        $equipRicard->jugadors()->sync($jugadorsRicard);
        $equipIker->jugadors()->sync($jugadorsIker);
    }
}