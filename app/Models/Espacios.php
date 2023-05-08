<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacios extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area',
        'available',
        'capacity',
    ];

    public function reservas(){

        return $this->belongsToMany(Reservas::class);

    }

    public function recursos(){

        return $this->belongsToMany(Recursos::class);

    }

}   
