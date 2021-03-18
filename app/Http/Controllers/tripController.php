<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use App\Trip;
use App\Bus;
use App\Place;

class tripController extends Controller
{
    public function __Construct(){

     $this->middleware('auth:admin');
    }
    
    public function index(){

    	$places = Place::all();
    	$operator = Operator::all();
    	$schedule = Trip::where('suspend',0)->get();

    	return view('admin.schedule.schedule-list', compact('places','operator','schedule'));

    }
    //displays bus dynamically asociated with an operator
    public function displayBus($id){

    	$findBus = Bus::where('operator_id',$id)->pluck('bus_name','id');
    	return json_encode($findBus);
    }

    public function newTrip(){
        $places = Place::all();
        $operator = Operator::all();
        return view('admin.schedule.add-new', compact('operator','places'));
    }


    public function store(Request $request){

        $this->validate($request,[
            'bus' => 'required',
            'operator' => 'required',
            'city' => 'required',
            'destination' => 'required',
            'date'=> 'required',
            'pickoff' => 'required',
            'dropoff' => 'required',
            'price'=> 'required|numeric',
        ]);

        $trip = Trip::create([

            'bus_id' => $request['bus'],
            'operator_id' => $request['operator'],
            'place_id' => $request['city'],
            'to_destination_id' => $request['destination'],
            'departure_date' => $request['date'],
            'pickup_address' => $request['pickoff'],
            'dropoff_address' => $request['dropoff'],
            'amount' => $request['price'],
        ]);

        return redirect()->back()->with('info', 'You Scheduled a New Trip');
    }

    //when the suspend button is clicked, it updates the status
    public function suspend($id){

        $suspend = Trip::where('id',$id);
        $suspend->update([
            'suspend' => 1,
        ]);
    }

    public function suspended(){
       
        $schedule = Trip::where('suspend',1)->get();

        return view('admin.schedule.schedule-suspend', compact('schedule'));
    }
      
}
