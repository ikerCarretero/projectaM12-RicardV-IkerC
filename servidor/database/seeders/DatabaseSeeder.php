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
        /*
        |--------------------------------------------------------------------------
        | Seeders principals
        |--------------------------------------------------------------------------
        |
        | Important:
        | Només cridem seeders que existeixen realment dins de database/seeders.
        | Ara mateix tenim:
        | - CompeticioSeeder
        | - EquipRealSeeder
        | - JugadorSeeder
        |
        */

        $this->call([
            CompeticioSeeder::class,
            EquipRealSeeder::class,
            JugadorSeeder::class,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Usuaris de prova
        |--------------------------------------------------------------------------
        */

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

        /*
        |--------------------------------------------------------------------------
        | Lligues privades de prova
        |--------------------------------------------------------------------------
        */

        $lligaAmics = LligaPrivada::updateOrCreate(
            ['codi_acces' => 'AMICS123'],
            [
                'nom' => 'Lliga dels Amics',
            ]
        );

        $lligaDaw = LligaPrivada::updateOrCreate(
            ['codi_acces' => 'DAW2BEST'],
            [
                'nom' => 'Lliga DAW2',
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

        /*
        |--------------------------------------------------------------------------
        | Equips fantasy de prova
        |--------------------------------------------------------------------------
        */

        $equipRicard = EquipFantasy::updateOrCreate(
            ['usuari_id' => $ricard->id],
            [
                'nom_equip' => 'Els Cracks de Ricard',
                'pressupost' => 100000000,
                'lliga_privada_id' => $lligaAmics->id,
            ]
        );

        $equipIker = EquipFantasy::updateOrCreate(
            ['usuari_id' => $iker->id],
            [
                'nom_equip' => 'Iker FC',
                'pressupost' => 85000000,
                'lliga_privada_id' => $lligaAmics->id,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | Assignació de jugadors als equips fantasy
        |--------------------------------------------------------------------------
        |
        | Agafem jugadors ja creats pel JugadorSeeder.
        | Així no depenem de noms concrets i evitem errors si canvia algun jugador.
        |
        */

        $jugadorsRicard = Jugador::orderByDesc('valor_mercat')
            ->take(11)
            ->pluck('id')
            ->toArray();

        $jugadorsIker = Jugador::orderByDesc('valor_mercat')
            ->skip(11)
            ->take(11)
            ->pluck('id')
            ->toArray();

        $equipRicard->jugadors()->sync($jugadorsRicard);
        $equipIker->jugadors()->sync($jugadorsIker);
    }
}
