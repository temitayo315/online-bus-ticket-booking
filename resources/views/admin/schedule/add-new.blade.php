@extends('admin.inc.master')
@section('newTrip')

    <!-- Modal content-->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
      <div class="card-header">
        <h4 class="card-title">Generate New Trip Schedule</h4>
       </div>
      
      <div class="card-body">
        <form method="post" action="{{route('storeSchedule')}}">
         @csrf
          <div class="form-group">
              <label>Select Operator</label>
              <select name="operator" class="form-control" id="operator">
                <option selected="selected" disabled>Choose Operator</option>
                @foreach($operator as $op)
                  <option value="{{$op->id}}">{{$op->operator_name}}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
             <label>Select Bus</label>
              <select name="bus" class="form-control" id="bus">
                <option selected="selected" disabled>Bus to drive</option>
               
              </select>
               @if($errors->has('bus'))
                <span class="help-block">{{$errors->first('bus')}}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('city')? ' has-error':''}}">
                <label>Select City</label>
              <select name="city" class="form-control selectpicker" data-live-search="true">
                <option selected="selected" disabled>Choose City</option>
                @foreach($places as $city)
                  <option value="{{$city->id}}">{{$city->state}} ({{$city->city}})</option>
                @endforeach
              </select>
              @if($errors->has('city'))
                <span class="help-block">{{$errors->first('city')}}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('destination')? ' has-error':''}}">
              <label>Select Destination</label>
              <select name="destination" class="form-control selectpicker" data-live-search="true">
                <option selected="selected" disabled>Choose Destination</option>
                 @foreach($places as $city)
              <option value="{{$city->id}}">{{$city->state}} ({{$city->city}})</option>
                @endforeach
              </select>
                @if($errors->has('destination'))

                <span class="help-block">{{$errors->first('destination')}}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="date">Departure Date & Time</label>
                <input type="datetime-local" name="date" class="form-control" required="" autocomplete="off" min="<?php echo date('Y-m-d');  ?>">
                 @if($errors->has('date'))
                <span class="help-block">{{$errors->first('date')}}</span>
                @endif
            </div>
            
            <div class="form-group">
              <label for="date">Departure Station</label>
                <input type="text" name="pickoff" class="form-control" required="" autocomplete="off">
                 @if($errors->has('pickoff'))
                <span class="help-block">{{$errors->first('pickoff')}}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="Dropoff">Dropoff Station</label>
                <input type="text" name="dropoff" class="form-control" required="" autocomplete="off">
                 @if($errors->has('dropoff'))
                <span class="help-block">{{$errors->first('dropoff')}}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="Dropoff">Trip Amount (#)</label>
                <input type="number" name="price" class="form-control" required="">
                 @if($errors->has('price'))
                <span class="help-block">{{$errors->first('price')}}</span>
                @endif
            </div>
        <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save Trip">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    
@endsection