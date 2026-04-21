<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\LligaPrivada;
use App\Models\EquipFantasy;
use App\Models\Jornada;
use App\Models\Partit;
use App\Models\Alineacio;
use App\Models\Puntuacio;
use App\Models\EstadistiqueJugador;
use App\Models\Competicio;
use App\Models\EquipReal;
use App\Models\Jugador;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ── Seeders de dades base ─────────────────────────────────
        $this->call([
            CompeticioSeeder::class,
            EquipRealSeeder::class,
            JugadorSeeder::class,
        ]);

        // ── Usuaris ───────────────────────────────────────────────
        $admin = User::create([
            'nom'      => 'Admin',
            'name'     => 'Admin',
            'email'    => 'admin@fantasy.com',
            'password' => Hash::make('password'),
            'rol'      => 'admin',
        ]);

        $ricard = User::create([
            'nom'      => 'Ricard Vergés',
            'name'     => 'Ricard Vergés',
            'email'    => 'ricard@fantasy.com',
            'password' => Hash::make('password'),
            'rol'      => 'usuari',
        ]);

        $iker = User::create([
            'nom'      => 'Iker Carretero',
            'name'     => 'Iker Carretero',
            'email'    => 'iker@fantasy.com',
            'password' => Hash::make('password'),
            'rol'      => 'usuari',
        ]);

        // ── Lligues Privades ──────────────────────────────────────
        $lliga1 = LligaPrivada::create([
            'nom'        => 'Lliga dels Amics',
            'codi_acces' => 'AMICS123',
        ]);

        $lliga2 = LligaPrivada::create([
            'nom'        => 'Lliga DAW2',
            'codi_acces' => 'DAW2BEST',
        ]);

        $lliga1->usuaris()->attach([$ricard->id, $iker->id]);
        $lliga2->usuaris()->attach([$ricard->id, $iker->id, $admin->id]);
    }
}