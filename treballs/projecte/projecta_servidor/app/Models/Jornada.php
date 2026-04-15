<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table = 'jornades';

    protected $fillable = [
        'numero',
        'data_inici',
        'data_fi',
        'competicio_id',
    ];

    protected $casts = [
        'data_inici' => 'date',
        'data_fi'    => 'date',
    ];

    // Una jornada pertany a una competició
    public function competicio()
    {
        return $this->belongsTo(Competicio::class, 'competicio_id');
    }

    // Una jornada té molts partits
    public function partits()
    {
        return $this->hasMany(Partit::class, 'jornada_id');
    }

    // Una jornada té moltes alineacions
    public function alineacions()
    {
        return $this->hasMany(Alineacio::class, 'jornada_id');
    }

    // Una jornada té moltes puntuacions
    public function puntuacions()
    {
        return $this->hasMany(Puntuacio::class, 'jornada_id');
    }
}