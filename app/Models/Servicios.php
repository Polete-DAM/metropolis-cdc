<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'available',
        'supplier',
    ];

    public function Recursos(){

        return $this->belongsToMany(Recursos::class);

    }

}
