<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">
@include('main.inc.head')
<body>
 @include('main.master.header')

<section class="item-grid">
  <div class="submit-property__container">
    <div class="container">
      <div class="row">
      <div class="col-md-3">
        <h2 class="bookmarked-listing__headline">COVID'19 INSTRUCTION UPDATES</h2>
        <div class="settings-block">
          <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div><!-- .col -->
  <div class="col-md-9">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h2 class="header-text">Trip Details</h2>
      </div>
    </div>
    @foreach($details as $tripDetail)
    <div class="row" style="margin-bottom: 15px;margin-top: 15px">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                Journey
            </div>

            <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                   <span><i class="fas fa-bus"></i> From </span><br><br>
                   <h3 style="text-transform: uppercase;">
                    <i class="fas fa-location-arrow"></i> {{$tripDetail->place->city}}
                   </h3><br>
                  </div>
                  <div class="col-md-4"><i class="fas fa-long-arrow-alt-right"></i> To <i class="fas fa-long-arrow-alt-right"></i><br></div>
                  <div class="col-md-4">
                    <span><i class="fas fa-bus"></i> Destination </span><br><br>
                    <h3 style="text-transform: uppercase;"><i class="fas fa-location-arrow"></i>
                    {{$tripDetail->destinationPlace->city}}
                   </h3><br>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-bottom: 15px;margin-top: 15px">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                Trip Info
            </div>

            <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                   <span><i class="fas fa-money-bill-alt"></i> Trip Fare </span><br>
                   <h4>
                     # {{$tripDetail->amount}}
                   </h4><br>
                  </div>
                  <div class="col-md-4">
                    <span><i class="fas fa-map-marker-alt"></i> Distance Covered </span><br>
                   <h4>
                     Approx: {{$tripDetail->distance($tripDetail->place->latitude,$tripDetail->place->longitude,$tripDetail->destinationPlace->latitude, $tripDetail->destinationPlace->longitude, "K") }} Kilometers
                   </h4><br>
                  </div>
                  <div class="col-md-4">
                    <span><i class="fas fa-list"></i> Number of seats left </span><br>
                    <h4>
                    {{$tripDetail->bus->total_seats - $tripDetail->get_no_of_travelers($tripDetail->id)}} 
                   </h4><br>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
     <div class="row" style="margin-bottom: 15px;margin-top: 15px">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                Date/Time Info
            </div>

            <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                   <span><i class="fas fa-calendar-alt"></i> Trip Date </span><br>
                   <h4>
                     {{\Carbon\Carbon::parse($tripDetail->departure_date)->toFormattedDateString()}}
                   </h4><br>
                  </div>
                  <div class="col-md-6">
                    <span><i class="fas fa-clock"></i> Departure Time </span><br>
                    <h4>
                    {{\Carbon\Carbon::parse($tripDetail->departure_date)->format('h:i A')}}
                   </h4><br>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  
    <div class="row" style="margin-bottom: 15px;margin-top: 15px">
      <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
      <!-- ============================================================== -->
      <!-- card profile -->
      <!-- ============================================================== -->
      <div class="card">
          <div class="card-body">
              <div class="user-avatar text-center d-block">
                  <img src="{{url('uploads',$tripDetail->operator->operator_logo)}}" alt="Card image cap" class="rounded-circle user-avatar-xxl">
              </div>
              <div class="text-center">
                  <h2 class="font-24 mb-0">{{$tripDetail->operator->operator_name}}</h2>
                  <p>Driver @Smart Transit</p>
              </div>
          </div>
          <div class="card-body border-top">
              <h3 class="font-16">Contact Information</h3>
              <div class="">
                  <ul class="list-unstyled mb-0">
                  <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>{{$tripDetail->operator->operator_email}}</li>
              </ul>
              </div>
          </div>
          <div class="card-body border-top">
              <h3 class="font-16">Rating</h3>
              <h1 class="mb-0">4.8</h1>
              <div class="rating-star">
                  <i class="fas fa-fw fa-star"></i>
                  <i class="fas fa-fw fa-star"></i>
                  <i class="fas fa-fw fa-star"></i>
                  <i class="fas fa-fw fa-star"></i>
                  <i class="fas fa-fw fa-star"></i>
                  <p class="d-inline-block text-dark">14 Reviews </p>
              </div>
          </div>
                
        </div>
            <!-- ============================================================== -->
            <!-- end card profile -->
            <!-- ============================================================== -->
        </div>
          <div class="col-md-5 col-sm-12">
            <div class="card">
                  <div class="card-header">
                      <h3>{{$tripDetail->bus->bus_name}}</h3>
                      <p>Vehicle No: {{$tripDetail->bus->bus_code}}</p>
                  </div>
                  <div class="card-body">
                      <p class="card-text">{{$tripDetail->bus->total_seats}} Seater</p>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <a href="{{url('trip/booking',$tripDetail->id)}}" class="btn btn-outline-primary" style="margin-top: 70px;float: right; padding: 20px">Proceed to Booking <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>
        </div>
      @endforeach
  </div>
  </div>
  </div>
</div>
</section>

@include('main.master.footer')
<a href="#" class="back-to-top"><span class="ion-ios-arrow-up"></span></a>

<!-- JS Files -->
@include('layouts.script')
</body>
</html>