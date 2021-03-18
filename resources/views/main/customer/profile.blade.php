@extends('main.customer.dashboard')
@section('profile')
	<div class="card">
        <div class="card-body">
            <div class="user-avatar text-center d-block">
                <img src="{{url('assets/images/new_logo.png')}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
            </div>
            <div class="text-center">
                <h2 class="font-24 mb-0">{{Auth::user()->getfullname()}}</h2>
                <p>Registered Date: {{\Carbon\Carbon::parse(Auth::user()->created_at)->toFormattedDateString()}}</p>
            </div>
        </div>
        <div class="card-body border-top">
            <h3 class="font-16">Contact Information</h3>
            <div class="">
                <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>{{Auth::user()->email}}</li>
                <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i>{{Auth::user()->phone}}</li>
            </ul>
            </div>
        </div>
       
        <div class="card-body border-top">
            <h3 class="font-16">Edit Profile</h3>
            <div>
                <a href="#" class="btn btn-success mr-1">Edit</a><a href="#" class="badge badge-light mr-1">Delete Account</a>
            </div>
        </div>
    </div>
@endsection