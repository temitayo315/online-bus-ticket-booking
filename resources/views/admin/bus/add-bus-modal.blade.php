<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Available Buses</h4>
        <button type="button" class="close" data-dismiss="modal">&times; </button>
        
      </div>
        @include('admin.inc.alert')
      <div class="modal-body">
         <form method="post" action="{{route('bus.store')}}" enctype="multipart/form-data">
         @csrf
            <div class="form-group{{ $errors->has('bus_name')? ' has-error':''}}">
                <input type="text" class="form-control" name="bus_name" placeholder="Bus Name">
                @if($errors->has('bus_name'))

                <span class="help-block">{{$errors->first('bus_name')}}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('bus_code')? ' has-error':''}}">
                <input type="text" placeholder="Bus Code" class="form-control" name="bus_code" required="">
                @if($errors->has('bus_code'))

                <span class="help-block">{{$errors->first('bus_code')}}</span>
                @endif
            </div>

            <div class="form-group">
              <label>Select Operator</label>
              <select name="operator" class="form-control">
                <option selected="selected" disabled="">Choose Operator</option>
                @foreach($operators as $operator)
                  <option value="{{$operator->id}}">{{$operator->operator_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group{{ $errors->has('seat')? ' has-error':''}}">
                <input type="number" placeholder="Total Seat" class="form-control" name="seat">
                @if($errors->has('seat'))

                <span class="help-block">{{$errors->first('seat')}}</span>
                @endif
            </div>
        <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>

  </div>
</div>