<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadistiqueJugador extends Model
{
    protected $table = 'estadistiques_jugador';

    protected $fillable = [
        'minuts_jugats',
        'gols',
        'assistencies',
        'targetes_grogues',
        'targetes_vermelles',
        'punts_jornada',
        'jugador_id',
        'partit_id',
    ];

    // Les estadístiques pertanyen a un jugador
    public function jugador()
    {
        return $this->belongsTo(Jugador::class, 'jugador_id');
    }

    // Les estadístiques pertanyen a un partit
    public function partit()
    {
        return $this->belongsTo(Partit::class, 'partit_id');
    }
}