@extends('main.customer.dashboard')
	@section('changePass')
<section>
<div class="new_section">
    <h3 class="text-center">ALL YOUR BOOKINGS</h3>
</div>
<div class="new_section">
  @foreach($customer_booking as $customer_bookings)
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="media influencer-profile-data d-flex align-items-center p-2">
            <div class="media-body ">
                <div class="influencer-profile-data">
                    <h3 class="m-b-10"> <i class="fas fa-lo"></i></h3>
                    <p>
                      <span class="m-r-20 d-inline-block">Account Used:
                            <span class="m-l-10 text-secondary">{{$customer_bookings->customer->firstname}} {{$customer_bookings->customer->lastname}}</span>
                        </span>
                        <span class="m-r-20 d-inline-block">Booked On:
                            <span class="m-l-10 text-primary">{{\Carbon\Carbon::parse($customer_bookings->created_at)->toFormattedDateString()}}</span>
                        </span>
                            <span class="m-r-20 d-inline-block">Status: <span class="m-l-10  text-info">{{$customer_bookings->payment_status==0?"You didn't complete your bookings":"Payment Order completed"}}</span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="border-top card-footer p-0">
<div class="campaign-metrics d-xl-inline-block">
    <h4 class="mb-0">{{$customer_bookings->trip_id}}</h4>
    <p>Trip name</p>
</div>
<div class="campaign-metrics d-xl-inline-block">
    <h4 class="mb-0">{{$customer_bookings->no_of_travelers}}</h4>
    <p>No of travelers</p>
</div>
<div class="campaign-metrics d-xl-inline-block">
    <h4 class="mb-0 text-danger">@if($customer_bookings->payment_status==0)Unpaid @else Paid @endif</h4>
    <p>Payment Status</p>
</div>
<div class="campaign-metrics d-xl-inline-block">
    <h4 class="mb-0 text-danger">@if($customer_bookings->trip->departure_date < date('y/m/d'))Payment for this trip closed.</h4> @else <a href="">Pay Now!</a> @endif
</div>
</div>
</div>
@endforeach
</div>
</section>
	@endsection