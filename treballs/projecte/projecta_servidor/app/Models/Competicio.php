<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competicio extends Model
{
    protected $table = 'competicions';

    protected $fillable = [
        'nom',
        'temporada',
    ];

    // Una competició té molts equips reals
    public function equipsReals()
    {
        return $this->hasMany(EquipReal::class, 'competicio_id');
    }

    // Una competició té moltes jornades
    public function jornades()
    {
        return $this->hasMany(Jornada::class, 'competicio_id');
    }
}