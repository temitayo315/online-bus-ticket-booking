<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">New Operator</h4>
        <button type="button" class="close" data-dismiss="modal">&times; </button>
        
      </div>
      
      <div class="modal-body">
         <form method="post" action="{{route('operator.store')}}" enctype="multipart/form-data">
         @csrf
            <div class="form-group{{ $errors->has('fullname')? ' has-error':''}}">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                @if($errors->has('fullname'))

                <span class="help-block">{{$errors->first('fullname')}}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email')? ' has-error':''}}">
                <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control" name="email" required="">
                @if($errors->has('email'))

                <span class="help-block">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('address')? ' has-error':''}}">
                <input type="text" placeholder="Residential address" class="form-control" name="address">
                @if($errors->has('address'))

                <span class="help-block">{{$errors->first('address')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="customFile">Upload Picture</label>
                <input type="file" class="form-control" id="customFile" name="photo" required="">
               @if($errors->has('photo'))

                <span class="help-block">{{$errors->first('photo')}}</span>
                @endif 
            </div>
        <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save Operator">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>

  </div>
</div>