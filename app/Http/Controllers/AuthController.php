<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
	//returns the admin profile details
	public function profile(){

		$userid = Auth::user()->id;
		$profile = User::where('id',$userid)->get();
		return view('admin.profile', compact('profile'));
	}

    public function login(Request $request){

    	$request->validate([
    		'email' => 'required|email',
    		'password' => 'required',

    	]);
    	if (Auth::guard('admin')->attempt($request->only(['email','password']),$request->has('remember'))) {
    		$request->session()->regenerate();
    		return redirect('/admin');
    	}
    	return redirect('/login')->with('danger','Wrong login details');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}
