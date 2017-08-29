<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'ong_id',
        'category_id',
        'title',
        'description',
        'city',
        'state',
        'country'
    ];

    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
