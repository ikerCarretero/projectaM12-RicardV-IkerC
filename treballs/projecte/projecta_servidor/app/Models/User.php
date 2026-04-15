<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'name',
        'email',
        'password',
        'rol',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }

    // ── Relacions ─────────────────────────────────────────────────

    public function equipFantasy()
    {
        return $this->hasOne(EquipFantasy::class, 'usuari_id');
    }

    public function lliguesPrivades()
    {
        return $this->belongsToMany(
            LligaPrivada::class,
            'usuari_lliga_privada',
            'usuari_id',
            'lliga_privada_id'
        );
    }
}