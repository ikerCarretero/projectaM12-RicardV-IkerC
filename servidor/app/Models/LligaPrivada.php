<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LligaPrivada extends Model
{
    protected $table = 'lligues_privades';

    protected $fillable = [
        'nom',
        'descripcio',
        'codi_acces',
        'pressupost_inicial',
        'maxim_participants',
        'creador_id',
    ];

    public function creador()
    {
        return $this->belongsTo(User::class, 'creador_id');
    }

    public function equipsFantasy()
    {
        return $this->hasMany(EquipFantasy::class, 'lliga_privada_id');
    }

    // Alias antic per compatibilitat amb codi existent.
    public function equipsFanstasy()
    {
        return $this->equipsFantasy();
    }

    public function usuaris()
    {
        return $this->belongsToMany(
            User::class,
            'usuari_lliga_privada',
            'lliga_privada_id',
            'usuari_id'
        )->withTimestamps();
    }

    public function puntuacions()
    {
        return $this->hasMany(Puntuacio::class, 'lliga_privada_id');
    }
}