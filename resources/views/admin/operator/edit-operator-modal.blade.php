<div id="myModal_{{$operator->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Operator</h4>
        <button type="button" class="close" data-dismiss="modal">&times; </button>
        
      </div>
      
      <div class="modal-body">
         <form method="POST" action="{{route('operator.update', $operator->id)}}" enctype="multipart/form-data">
          @method("PATCH")
         @csrf
            <div class="form-group{{ $errors->has('fullname')? ' has-error':''}}">
                <input type="text" class="form-control" name="fullname" value="{{Request::old('fullname')?: $operator->operator_name}}" >
                @if($errors->has('fullname'))

                <span class="help-block">{{$errors->first('fullname')}}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email')? ' has-error':''}}">
                <input id="inputEmail" type="email"  value="{{Request::old('email')?: $operator->operator_email}}" class="form-control" name="email" required="">
                @if($errors->has('email'))

                <span class="help-block">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('address')? ' has-error':''}}">
                <input type="text"  value="{{Request::old('address')?: $operator->operator_address}}" class="form-control" name="address">
                @if($errors->has('address'))

                <span class="help-block">{{$errors->first('address')}}</span>
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