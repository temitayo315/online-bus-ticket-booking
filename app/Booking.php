<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use Authenticatable;
    
    protected $table = 'bookings';

    protected $fillable = [
        'customer_id',
        'trip_id',
        'no_of_travelers',
        'cancelation',
        'booking_date',
        
    ];

    public function trip(){

    	return $this->belongsTo(Trip::class);
    }

    public function payments(){

    	return $this->hasMany('App\Payment','booking_id', 'id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}
