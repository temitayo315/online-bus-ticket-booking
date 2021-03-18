<html lang="en" class="no-js">
@include('main.inc.head')
<body>
 @include('main.master.header')

 <section class="item-grid">
<div class="container">
<form class="splash-container" method="post" action="{{route('create-account')}}">
    @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1"><i class="fas fa-bus"></i> Sign up to Smart Transit</h3><br>
                <p>Please provide your user information.</p>
               
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="fname" required="" placeholder="First Name">
                    @if($errors->has('fname'))
                    <div class="alert alert-danger"> {{$errors->first('fname')}} </div>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="lname" required="" placeholder="Last Name">
                    @if($errors->has('lname'))
                    <div class="alert alert-danger"> {{$errors->first('lname')}} </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('email')? 'has-error': ''}}">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                    @if($errors->has('email'))
                    <div class="alert alert-danger"> {{$errors->first('email')}} </div>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" required=""name="password" placeholder="Password">
                    @if($errors->has('password'))
                    <div class="alert alert-danger"> {{$errors->first('password')}} </div>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Phone Number" type="number" name="phone">
                    @if($errors->has('phone'))
                    <div class="alert alert-danger"> {{$errors->first('phone')}} </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" required=""><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
                <div class="form-group pt-2">
                    <input class="btn btn-block btn-primary" type="submit" value="Register my Account">
                </div>
                
                <div class="form-group row pt-0">
                    <h2 style="text-align:center;">OR</h2>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Login with Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-google-plus" type="button">Login with Gmail</button>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="{{url('customer-login')}}" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</div>
</section>
    @include('main.master.footer')
<!-- JS Files -->
@include('layouts.script')
</body>
</html>