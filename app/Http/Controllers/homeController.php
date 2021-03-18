<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatedUsers;
use Illuminate\Http\Request;
use Auth;
use App\Trip;
use App\Operator;
use App\Place;
use App\Customer;

class homeController extends Controller
{
    
    public function index(){

        $places = Place::all();
    	$operators = Operator::all();
        return view('main.index', compact('places', 'operators'));
    }

    public function search(Request $req){
    	
        $places = Place::all();
    	$operators = Operator::all();

    	$search_city = $req->input('from_city');
    	$search_dest = $req->input('destination');
    	$date = $req->input('date');

    	$search = Trip::where('departure_date', 'LIKE',"%{$date}%")
    			  ->where('place_id','LIKE',"%{$search_city}%")
    			  ->where('to_destination_id', 'LIKE', "%{$search_dest}%")
                  ->get();

    			  return view('main.search', compact('search','places','operators'));
    }

    public function tripDetails($id){

        $details = Trip::where('id',$id)->get();
        // $checkPaid = Trip::where('id',$id)->first();
        return view('main.tripDetail', compact('details'));
    }

    public function creatAccount(Request $request){


         $this->validate($request,[
            'fname'=> 'required',
            'lname'=>  'required',
            'email'=> 'required|email',
            'password'=> 'required',
            'phone' => 'required|numeric',

        ]);
        //dd($request->all());    

        $insert = new Customer;

        $insert->firstname = $request->input('fname');
        $insert->lastname = $request->input('lname');
        $insert->email = $request->input('email');
        $insert->password = bcrypt($request->input('password'));
        $insert->phone = $request->input('phone');

        $insert->save();
        return redirect('customer-login');
    }

    public function userLogin(Request $request){

        $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        $credentials = $request->only('email','password');

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('customer');
        }
        return redirect('customer-login')->with('Oops! Wrong username or password');
    }

    public function logout(){

        Auth::logout();
        return redirect('/');
    }


 //    public function autosuggest(Request $request){

 //    	if($request->ajax()){

 //    	$result = $request->searchField;
 //    	$suggest = Place::where('state','LIKE', '%{$result}%')
 //    						->orWhere('city', 'LIKE', '%{$result}%')->get();

 //    						dd($suggest);

 //    	if (count($suggest)> 0) {
    			
 //    		return json_encode($suggest);
    		
 //    	}else{

 //    		return "no data found";
 //    	}

 //    	}
	// }
}
