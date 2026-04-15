<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadors';

    protected $fillable = [
        'nom',
        'posicio_base',
        'valor_mercat',
        'puntuacio_total',
        'equip_real_id',
    ];

    // Un jugador pertany a un equip real
    public function equipReal()
    {
        return $this->belongsTo(EquipReal::class, 'equip_real_id');
    }

    // Un jugador pertany a molts equips fantasy (pivot)
    public function equipsFanstasy()
    {
        return $this->belongsToMany(EquipFantasy::class, 'jugador_equips_fantasy', 'jugador_id', 'equip_fantasy_id');
    }

    // Un jugador té moltes estadístiques (una per partit)
    public function estadistiques()
    {
        return $this->hasMany(EstadistiqueJugador::class, 'jugador_id');
    }

    // Un jugador apareix en moltes alineacions (pivot)
    public function alineacions()
    {
        return $this->belongsToMany(Alineacio::class, 'alineacio_jugador', 'jugador_id', 'alineacio_id')
                    ->withPivot('posicio_alineacio', 'ordre');
    }
}