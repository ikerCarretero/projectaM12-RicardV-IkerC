<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LligaPrivada extends Model
{
    protected $table = 'lligues_privades';

    protected $fillable = [
        'nom',
        'codi_acces',
    ];

    // Una lliga privada té molts equips fantasy
    public function equipsFanstasy()
    {
        return $this->hasMany(EquipFantasy::class, 'lliga_privada_id');
    }

    // Una lliga privada té molts usuaris (pivot)
    public function usuaris()
    {
        return $this->belongsToMany(User::class, 'usuari_lliga_privada', 'lliga_privada_id', 'usuari_id');
    }

    // Una lliga privada té moltes puntuacions
    public function puntuacions()
    {
        return $this->hasMany(Puntuacio::class, 'lligues_privada_id');
    }
}