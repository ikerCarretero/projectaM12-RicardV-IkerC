<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadisticaJugador extends Model
{
    protected $table = 'estadistiques_jugador';

    protected $fillable = [
        'minuts_jugats',
        'partit_guanyat',
        'gols',
        'assistencies',
        'gols_propia',
        'parades_clau',
        'parades_normals',
        'faltes_fetes',
        'passes_completades',
        'targetes_grogues',
        'targetes_vermelles',
        'penaltis_comesos',
        'penaltis_provocats',
        'punts_jornada',
        'jugador_id',
        'partit_id',
    ];

    protected $casts = [
        'partit_guanyat' => 'boolean',
    ];

    public function jugador()
    {
        return $this->belongsTo(Jugador::class, 'jugador_id');
    }

    public function partit()
    {
        return $this->belongsTo(Partit::class, 'partit_id');
    }
}