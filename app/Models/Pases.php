<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pases extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'buisness',
        'phone',
        'time_start',
        'time_end',
    ];

}
