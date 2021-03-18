@extends('admin.inc.master')
@section('schedule')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
          <div class="page-breadcrumb">
                <h2>Trip Schedule Page</h2>
            </div>
        </div>
    </div>
</div>
 <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="page header-title text-center">
                <!-- Trigger the modal with a button -->
                        <a href="{{url('newTrip')}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Add New Trip Schedule</a>
            </h2>
            
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Schedule Journey</li>
                    </ol>
                </nav>
            </div>
        </div>
        
    </div>
</div>
 <!-- hoverable table -->
            <!-- ============================================================== -->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">All Schedule</h5>
        <div class="card-body">
            @include('admin.inc.alert')
            @if(count($schedule)== 0)
            
                <h5 style="text-align: center;color: green">
                    Oh Snap!..No Schedule for journey yet!
                </h5>
                
                @else

        <div class="table table-responsive">
            <table class="table table-hover table-bordered" id="myDatatable">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Operator Name</th>
                        <th scope="col">Bus</th>
                        <th scope="col">City name</th>
                        <th>Destination</th>
                        <th>Departure Date</th>
                        <th>Departure Time</th>
                        <th>Pickoff Station</th>
                        <th>Dropoff Destination</th>
                        <th>Trip Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach($schedule as $trip)
                    <tr>
                        <td scope="row">{{$count++}}</td>
                        <td>{{$trip->operator->operator_name}}</td>
                        <td>{{$trip->bus->bus_name}}</td>
                        <td>{{$trip->place->state}} ({{$trip->place->city}})</td>
                        <td>{{$trip->destinationPlace->state}} ({{$trip->destinationPlace->city}})</td>
                        <td>{{\Carbon\Carbon::parse($trip->departure_date)->toFormattedDateString()}}</td>
                        <td>{{\Carbon\Carbon::parse($trip->departure_date)->format('h:i A')}}</td>
                        <td>{{$trip->pickup_address}}</td>
                        <td>{{$trip->dropoff_address}}</td>
                         <td style="color: green">#{{$trip->amount}}</td>
                        <td><button type="button" class="btn btn-warning btn-xs suspend" id="{{$trip->id}}"> Suspend Trip</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end hoverable table -->
</div>
@endsection