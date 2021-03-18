@extends('main.master.master')
@section('index')
<section class="item-grid">
<div class="submit-property__container">
  <div class="container">
  <div class="row">
      <div class="col-md-3">
          <h2 class="bookmarked-listing__headline">You Searched for<br><br>
           <i class="fas fa-location-arrow"></i> {{App\Place::find(Request::input('from_city'))->city}} to 
           <i class="fas fa-location-arrow"></i> {{App\Place::find(Request::input('destination'))->city}}</h2>
          <div class="settings-block">
              <span class="settings-block__title">{{$search->count()}} Result found</span>
              <ul class="settings">
                 
              </ul><!-- settings -->
          </div><!-- .settings-block -->
      <div class="settings-block">
              <ul class="settings">
                  
              </ul><!-- settings -->
          </div><!-- .settings-block -->
      </div><!-- .col -->

      <div class="col-md-9" >
          @if($search->count() ==0)
          <h2>Oh! Snap, We couldn't find any result for your Search. Try Searching through another date.</h2>
            <img src="{{url('assets/images/new_logo.png')}}" width="250" height="250" class="img-responsive" style="margin-top: 100px">
          @else
          <div class="table">
            <h2 class="text-header">No. of Result Found: {{$search->count()}}</h2><br><br>
          <table class="table table-striped table-hover">
              <tr>
                <th class="manage-list__title"> City</th>
                <th class="manage-list__title"> Destination</th>
                <th class="manage-list__title"> Departure Date</th>
                <th class="manage-list__title"> Departure Time</th>
                <th class="manage-list__title"> Amount #</th>
                <th class="manage-list__title"> Action</th>
              </tr>
              @foreach($search as $searches)
              <tr>
              <td>{{$searches->place->state}} ({{$searches->place->city}})</td>
              <td>{{$searches->destinationPlace->state}} ({{$searches->destinationPlace->city}})</td>
              <td>{{\Carbon\Carbon::parse($searches->departure_date)->toFormattedDateString()}}</td>
              <td>{{\Carbon\Carbon::parse($searches->departure_date)->format('h:i A')}}</td>
              <td>{{$searches->amount}}</td>
              <td><a href="{{url('trip/details',$searches->id)}}" class="btn btn-sm btn-outline-brand">View Trip <i class="fas fa-eye"></i></a></td>
            </tr>
            @endforeach   
        </table>
      </div>
        @endif     
      </div><!-- .col -->
    </div>
  </div><!-- .row -->
</div><!-- .my-property__container -->
</section>
@endsection