<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Customer;
use App\Place;
use App\Trip;
use App\Booking;
use Auth;

class customerController extends Controller
{
    public function __Construct(){

        $this->middleware('auth:web');
    }
    
    public function tripBookings($id){

        $places = Place::all();

        $booking = Trip::where('id',$id)->get();
        return view('main.customer.SearchTrip', compact('booking','places'));
    }

    public function profile(){

        return view('main.customer.profile');

    }

    public function getAllBookings(){

        $user = auth()->user()->id;
        $customer_booking = Booking::where('customer_id',$user)->get();
        //$trips = Trip::where('id', $customer_booking->trip_id);
        return view('main.customer.all-bookings', compact('customer_booking'));
    }

    public function changePasswordPage(){

        return view('main.customer.change-password');
    }

    public function checkCurrentPassword(Request $request){

        $password = $request->current;
        $getCurrent = Customer::where('id',auth()->user()->id)->first();
        if (Hash::check($password, $getCurrent->password)) {
            
            return "Match";
        }else{
            return "notMatch";
        }

    }

    public function updatePassword(Request $request){

        $this->validate($request,[

            'currentPass'=>'required',
            'newPassword'=>'required',
            //'password'=>'required|confirmed',
        ]);

        $currentPass = $request->input('currentPass');
        $newPass = bcrypt($request->input('newPassword'));
        $loginUser = Customer::where('email',auth()->user()->email)->first();
        if (Hash::check($currentPass, $loginUser->password)) {
            
            $update = Customer::where('id',auth()->user()->id)
            ->update(['password'=>$newPass]);

            return redirect()->back()->with('info','Your password updated successfully');
    }else{
        return redirect()->back()->with('error','Oops!Something went wrong');
        }  
    }     
}
