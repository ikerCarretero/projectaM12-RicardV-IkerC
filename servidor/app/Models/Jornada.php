<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table = 'jornades';

    protected $fillable = [
        'numero',
        'nom',
        'data_inici',
        'data_fi',
        'estat',
        'competicio_id',
    ];

    protected $casts = [
        'data_inici' => 'date',
        'data_fi' => 'date',
    ];

    public function competicio()
    {
        return $this->belongsTo(Competicio::class, 'competicio_id');
    }

    public function partits()
    {
        return $this->hasMany(Partit::class, 'jornada_id');
    }

    public function alineacions()
    {
        return $this->hasMany(Alineacio::class, 'jornada_id');
    }

    public function puntuacions()
    {
        return $this->hasMany(Puntuacio::class, 'jornada_id');
    }
}