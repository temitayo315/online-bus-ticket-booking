<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use Authenticatable;
    
    protected $table = 'trips';

    protected $fillable = [
        'bus_id',
        'operator_id',
        'place_id',
        'to_destination_id',
        'departure_date',
        'depart_time',
        'amount',
        'pickup_address',
        'dropoff_address',
        
    ];

    public function operator(){

    	return $this->belongsTo(Operator::class);
    }

    public function bus(){
    	return $this->belongsTo(Bus::class);
    }

    public function place(){
        return $this->belongsTo(Place::class);
    }

     public function destinationPlace(){
        return $this->belongsTo('App\Place','to_destination_id','id');
    }

    // This function calculates the distance between two points given the longitude and latitude. It is being used to calculate distance between two locations using GEODATASOURCE(TM)
    public function distance($lat1, $long1, $lat2, $long2, $unit ){

        if (($lat1 == $lat2) && ($long1 == $long2)) {
            
            return 0;
        }else{
            $theta = $long1 - $long2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + 
                    cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            if ($unit == "K") {
                return round(($miles * 1.609344));
            }elseif ($unit == "N") {
                return round(($miles * 0.8684));
            }else{
                return $miles;
            }
        }
    }

    public function bookings(){

        return $this->hasMany('App\Booking','trip_id','id');
    }

    public function payments(){

        return $this->hasOneThrough('App\Payment','App\Booking','trip_id','booking_id');   
    }

    public function get_no_of_travelers($tripID){

        $trip = Trip::first();
        $isPaid = $trip->payments->payment_status;

        if ($isPaid == true) {
            
        $results = Booking::where('trip_id',$tripID)->sum('no_of_travelers');
        return $results;

        }
    }

}
