@extends('main.customer.dashboard')
	@section('changePass')
<section>
<div class="new_section">
<h3 class="text-center">Change Password</h3>
</div>
<div class="new_section">
<div class="row">
  <div class="col-sm-3"> </div>
  <div class="col-sm-6">
    <div class="form-horizontal">
      <form role="form" action="{{'/user/updatePassword'}}" method="post">
        @csrf
        @method('PATCH')
        @include('admin.inc.alert')
        <div class="form-group">
          <input type="password" name="currentPass" class="form-control currentPass" placeholder="Current Password">
          <span class="help-block"></span>
        </div>
        <div class="form-group">
          <input type="password" name="newPassword" class="form-control newPass" placeholder="New Password" value="{{Request::old('newPassword')?: ''}}">
          @if($errors->has('newPassword'))
           <p class="help" style="color: red">{{$errors->first('newPassword')}}</p>
           @endif
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Confirm Password" value="{{Request::old('password')?: ''}}">
            @if($errors->has('password'))
           <p class="help" style="color: red">{{$errors->first('password')}}</p>
           @endif
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-success" value="Update Password">
          </div>
      </form>
    </div>
  </div>
  <div class="col-sm-3"></div>
</div>
</div>
</section>
	@endsection