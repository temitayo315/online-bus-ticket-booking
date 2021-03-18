<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	use Authenticatable;
    
    protected $table = 'payments';

    protected $fillable = [
        'trip_id',
        'customer_id',
        'payment_date',
        'payment_status',
        
    ];

    public function bookings(){

    	return $this->belongTo(Booking::class);
    }

}
