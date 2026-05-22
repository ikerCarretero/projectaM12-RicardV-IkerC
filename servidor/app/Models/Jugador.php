<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadors';

    protected $fillable = [
        'nom',
        'nacionalitat',
        'posicio_base',
        'dorsal',
        'partits_jugats',
        'gols_marcats',
        'gols_rebuts',
        'img',
        'valor_mercat',
        'puntuacio_total',
        'equip_real_id',
    ];

    public function equipReal()
    {
        return $this->belongsTo(EquipReal::class, 'equip_real_id');
    }

    public function equipsFantasy()
    {
        return $this->belongsToMany(
            EquipFantasy::class,
            'jugador_equips_fantasy',
            'jugador_id',
            'equip_fantasy_id'
        )->withPivot([
            'preu_fitxatge',
        ])->withTimestamps();
    }

    // Alias antic per compatibilitat amb codi existent.
    public function equipsFanstasy()
    {
        return $this->equipsFantasy();
    }

    public function estadistiques()
    {
        return $this->hasMany(EstadisticaJugador::class, 'jugador_id');
    }

    public function alineacions()
    {
        return $this->belongsToMany(
            Alineacio::class,
            'alineacio_jugador',
            'jugador_id',
            'alineacio_id'
        )->withPivot([
            'posicio_alineacio',
            'ordre',
        ])->withTimestamps();
    }
}