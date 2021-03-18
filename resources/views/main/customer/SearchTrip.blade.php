@extends('main.customer.dashboard')
	@section('search')
<section class="listing-search">
      <form action="{{'/search'}}" method="get" class="listing-search__form">
        
        <div class="row">
          <div class="col-sm-3">
            <label for="listing-type" class="listing-search__label">From City</label>
            <div class="input-group mb-3">
              <span class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-location-arrow" style="color: orange"></i></span>
              </span>
              <select name="from_city" class="form-control selectpicker" data-live-search="true">
            <option selected="selected" disabled>From Which city</option>
           @foreach($places as $place)
            <option value="{{$place->id}}">{{$place->state}} ({{$place->city}})</option>
          @endforeach
          </select>
        </div>
      </div><!-- .col -->

          <div class="col-sm-3">
            <label for="offer-type" class="listing-search__label">To Destination</label>
            <div class="input-group mb-3">
              <span class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-location-arrow" style="color: orange"></i></span>
              </span>
            <select name="destination" class="form-control selectpicker" data-live-search="true">
            <option selected="selected" disabled>Choose Destination</option>
        @foreach($places as $place)
              <option value="{{$place->id}}">{{$place->state}} ({{$place->city}})</option>
        @endforeach
          </select>
          </div>
          </div><!-- .col -->

          <div class="col-sm-3">
            <div class="form-group date">
            <label for="date" class="listing-search__label">Date</label>
            <input type="date" name="date" min="<?php echo date('Y-m-d'); ?>">
            </div>
          </div><!-- .col -->

          <div class="col-sm-3">
            <button type="submit" class="btn btn-success btn-lg" style="background-color: #1fc341; margin-top: 20px">Search</button>
          </div><!-- .col -->
        </div><!-- row -->
       </form><!-- .listing-search__form -->
  </section><!-- .listing-search -->
<section>
<div class="new_section">
  <div class="card">
    <div class="card-body">
  <div class="row">
    @foreach($booking as $bookings)
    <div class="col-md-8">    
      <h3>              
       <i class="fas fa-location-arrow"></i> 
       {{$bookings->place->city}} &nbsp;&nbsp;&nbsp;&nbsp;
       <i class="fas fa-long-arrow-alt-right" style="margin-right: 40px;margin-left: 40px"></i>&nbsp;&nbsp;
       <i class="fas fa-location-arrow"></i>
       {{$bookings->destinationPlace->city}}
      </h3>
    </div>
    <div class="col-md-4">
     <span> Approximately: {{$bookings->distance($bookings->place->latitude,$bookings->place->longitude,$bookings->destinationPlace->latitude, $bookings->destinationPlace->longitude, "K")}} Kilometers
     </span>
    </div>
    @endforeach
    </div>
  </div>
</div>
</div>
<div class="new_section">
  <div class="row">
      <div class="col-md-4">
      <div class="form-group">
      <input type="number" class="form-control" name="number" placeholder="Enter Number of Travelers" id="number">
      </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
        <label class="form-label"> Booking for self</label>&nbsp;&nbsp;
        <input type="checkbox" id="self">
      </div>
    </div>
      <div class="col-md-4">
        @foreach($booking as $booking)
        <span>#{{$bookings->amount}} per person</span>
       @endforeach
    </div>
  </div>
</div>
<div class="new_section">
  <div class="row">
    <div class="col-sm-8">
      <input type="hidden" value="{{$bookings->amount}}" class="hidden">
      <h3 id="self_amount"></h3>
    </div>
    <div class="col-sm-4">
      <a href="" id="proceed" class="btn btn-outline-primary btn-lg"><i class="fas fa-long-arrow-alt-right"></i></a>
    </div>
  </div>
</div>
<div class="new_section" id="travelers_section">
    <h2 class="header_title text-primary">Provide Travelers Information Details Below</h2>
    <form method="post" role="form" id="createform">
      
      
    </form>
</div>
</section>
	@endsection