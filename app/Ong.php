<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    protected $fillable = [
        'name',
        'industry',
        'city',
        'state',
        'nbr_employees'
    ];
}
