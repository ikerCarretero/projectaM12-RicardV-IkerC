<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puntuacio extends Model
{
    protected $table = 'puntuacions';

    protected $fillable = [
        'punts_total',
        'equip_fantasy_id',
        'lliga_privada_id',
        'jornada_id',
    ];

    public function equipFantasy()
    {
        return $this->belongsTo(EquipFantasy::class, 'equip_fantasy_id');
    }

    public function lligaPrivada()
    {
        return $this->belongsTo(LligaPrivada::class, 'lliga_privada_id');
    }

    public function jornada()
    {
        return $this->belongsTo(Jornada::class, 'jornada_id');
    }
}