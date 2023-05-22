<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;

    protected $fillable = [
        'event',
        'email',
        'company_name',
        'space',
        'start_date',
        'end_date',
        'n_attendees',
        'n_bus_pass',
        'n_staff_pass',
        'n_parking_pass',
        'accepted',
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
