<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'service_id',
        'mobiliary',
    ];

    public function espacios(){

        return $this->belongsToMany(Espacios::class);

    }

    public function servicios(){

        return $this->belongsToMany(Servicios::class);

    }

}
