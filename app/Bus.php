<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
	use Authenticatable;
    
    protected $table = 'buses';

    protected $fillable = [
        'bus_name',
        'bus_code',
        'operator_id',
        'total_seats',
        
    ];

    public function operator()
    {
    	return $this->belongsTo(Operator::class);
    }
}
