<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puntuacio extends Model
{
    protected $table = 'puntuacions';

    protected $fillable = [
        'nom',
        'punts_total',
        'lligues_privada_id',
        'jornada_id',
    ];

    // Una puntuació pertany a una lliga privada
    public function lligaPrivada()
    {
        return $this->belongsTo(LligaPrivada::class, 'lligues_privada_id');
    }

    // Una puntuació pertany a una jornada
    public function jornada()
    {
        return $this->belongsTo(Jornada::class, 'jornada_id');
    }
}