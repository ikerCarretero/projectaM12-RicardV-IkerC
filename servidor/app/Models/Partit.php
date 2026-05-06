<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partit extends Model
{
    protected $table = 'partits';

    protected $fillable = [
        'data_hora',
        'resultat',
        'jornada_id',
        'equip_local_id',
        'equip_visitant_id',
    ];

    protected $casts = [
        'data_hora' => 'datetime',
    ];

    // Un partit pertany a una jornada
    public function jornada()
    {
        return $this->belongsTo(Jornada::class, 'jornada_id');
    }

    // Equip local
    public function equipLocal()
    {
        return $this->belongsTo(EquipReal::class, 'equip_local_id');
    }

    // Equip visitant
    public function equipVisitant()
    {
        return $this->belongsTo(EquipReal::class, 'equip_visitant_id');
    }

    // Un partit té moltes estadístiques de jugadors
    public function estadistiques()
    {
        return $this->hasMany(EstadistiqueJugador::class, 'partit_id');
    }
}