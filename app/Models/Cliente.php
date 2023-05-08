<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'address',
        'codi_postal',
        'phone',

    ];

    public function reservas(){

        return $this->hasMany(Reservas::class); 

    }

}
