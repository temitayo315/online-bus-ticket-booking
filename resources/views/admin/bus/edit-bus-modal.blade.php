<div id="myModal_{{$bus->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Bus Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times; </button>
        
      </div>
      
      <div class="modal-body">
         <form method="post" action="{{route('bus.update',$bus->id)}}">
          @method("PATCH")
         @csrf
            <div class="form-group{{ $errors->has('bus_name')? ' has-error':''}}">
                <input type="text" class="form-control" name="bus_name" placeholder="Bus Name" value="{{Request::old('bus_name')?: $bus->bus_name}}">
                @if($errors->has('bus_name'))

                <span class="help-block">{{$errors->first('bus_name')}}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('bus_code')? ' has-error':''}}">
                <input type="text" placeholder="Bus Code" class="form-control" name="bus_code" required="" value="{{Request::old('bus_code')?: $bus->bus_code}}">
                @if($errors->has('bus_code'))

                <span class="help-block">{{$errors->first('bus_code')}}</span>
                @endif
            </div>

            <div class="form-group">
              <label>Select Operator</label>
              <select name="operator" class="form-control">
                <option disabled="">Choose Operator</option>
                @foreach($operators as $operator)
                  <option selected="{{$operator->operator_name}}" value="{{$operator->id}}">{{$operator->operator_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group{{ $errors->has('seat')? ' has-error':''}}">
                <input type="number" placeholder="Total Seat" class="form-control" name="seat" value="{{Request::old('seat')?: $bus->total_seats}}">
                @if($errors->has('seat'))

                <span class="help-block">{{$errors->first('seat')}}</span>
                @endif
            </div>
        <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Update">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>

  </div>
</div>