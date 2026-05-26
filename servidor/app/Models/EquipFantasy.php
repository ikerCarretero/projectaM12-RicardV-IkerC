<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipFantasy extends Model
{
    protected $table = 'equips_fantasy';

    protected $fillable = [
        'nom_equip',
        'pressupost',
        'usuari_id',
        'lliga_privada_id',
    ];

    public function usuari()
    {
        return $this->belongsTo(User::class, 'usuari_id');
    }

    public function lligaPrivada()
    {
        return $this->belongsTo(LligaPrivada::class, 'lliga_privada_id');
    }

    public function jugadors()
    {
        return $this->belongsToMany(
            Jugador::class,
            'jugador_equips_fantasy',
            'equip_fantasy_id',
            'jugador_id'
        )->withPivot([
            'preu_fitxatge',
        ])->withTimestamps();
    }

    public function alineacions()
    {
        return $this->hasMany(Alineacio::class, 'equip_fantasy_id');
    }

    public function puntuacions()
    {
        return $this->hasMany(Puntuacio::class, 'equip_fantasy_id');
    }
}