<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipReal extends Model
{
    protected $table = 'equips_reals';

    protected $fillable = [
        'nom',
        'pais',
        'competicio_id',
    ];

    // Un equip real pertany a una competició
    public function competicio()
    {
        return $this->belongsTo(Competicio::class, 'competicio_id');
    }

    // Un equip real té molts jugadors
    public function jugadors()
    {
        return $this->hasMany(Jugador::class, 'equip_real_id');
    }

    // Partits on aquest equip és local
    public function partitsLocal()
    {
        return $this->hasMany(Partit::class, 'equip_local_id');
    }

    // Partits on aquest equip és visitant
    public function partitsVisitant()
    {
        return $this->hasMany(Partit::class, 'equip_visitant_id');
    }
}