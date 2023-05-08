<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'event',
        'day',
        'estado',
    ];

    public function cliente(){

        return $this->belongsTo(cliente::class);

    }

    public function pases(){

        return $this->belongsToMany(Pases::class);

    }

    public function espacios(){

        return $this->belongsToMany(Espacios::class);

    }

}
