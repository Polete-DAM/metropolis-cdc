<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'area',
        'capacidad',
        'disponibilidad',
        'imagen_url',
    ];

    public $timestamps = false;

    public function reservas(){

        return $this->belongsToMany(Reservas::class);

    }

    public function recursos(){

        return $this->belongsToMany(Recursos::class);

    }

}   
