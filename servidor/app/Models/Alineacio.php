<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alineacio extends Model
{
    protected $table = 'alineacions';

    protected $fillable = [
        'esquema',
        'equip_fantasy_id',
        'jornada_id',
    ];

    // Una alineació pertany a un equip fantasy
    public function equipFantasy()
    {
        return $this->belongsTo(EquipFantasy::class, 'equip_fantasy_id');
    }

    // Una alineació pertany a una jornada
    public function jornada()
    {
        return $this->belongsTo(Jornada::class, 'jornada_id');
    }

    // Una alineació té molts jugadors (pivot)
    public function jugadors()
    {
        return $this->belongsToMany(Jugador::class, 'alineacio_jugador', 'alineacio_id', 'jugador_id')
                    ->withPivot('posicio_alineacio', 'ordre');
    }
}