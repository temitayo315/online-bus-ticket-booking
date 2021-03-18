<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use Authenticatable;
    
    protected $table = 'places';

    protected $primary_key = 'id';
    

    protected $fillable = [
        'state',
        'city',
        
        
        
    ];

    // public function trips(){

    // 	return $this->belongsTo(Trip::class);
    // }
}
