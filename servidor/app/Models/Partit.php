<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partit extends Model
{
    protected $table = 'partits';

    protected $fillable = [
        'data_hora',
        'resultat',
        'gols_local',
        'gols_visitant',
        'estat',
        'jornada_id',
        'equip_local_id',
        'equip_visitant_id',
    ];

    protected $casts = [
        'data_hora' => 'datetime',
    ];

    public function jornada()
    {
        return $this->belongsTo(Jornada::class, 'jornada_id');
    }

    public function equipLocal()
    {
        return $this->belongsTo(EquipReal::class, 'equip_local_id');
    }

    public function equipVisitant()
    {
        return $this->belongsTo(EquipReal::class, 'equip_visitant_id');
    }

    public function estadistiques()
    {
        return $this->hasMany(EstadisticaJugador::class, 'partit_id');
    }
}