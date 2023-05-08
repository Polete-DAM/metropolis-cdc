<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pases extends Model
{
    use HasFactory;

    protected $fillable = [
        'reserva_id',
        'name',
        'buisness',
        'phone',
        'time_start',
        'time_end',
    ];

    public function reservas(){

        return $this->belongsToMany(Reservas::class);

    }

}
