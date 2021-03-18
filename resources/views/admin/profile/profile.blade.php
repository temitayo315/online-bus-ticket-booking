@extends('admin.inc.master')
@section('profile')
	<!-- card profile -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <div class="user-avatar text-center d-block">
                    <img src="{{url('assets/images/profile-pic.png')}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                </div>
                <div class="text-center">
                    <h2 class="font-24 mb-0">{{Auth::user()->name}}</h2>
                    <p>Smart Transit Admin Manager </p>
                </div>
            </div>
            <div class="card-body border-top">
                <h3 class="font-16">Contact Information</h3>
                <div class="">
                    <ul class="list-unstyled mb-0">
                    <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>{{Auth::user()->email}}</li>
                    <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i>(900) 123 4567</li>
                </ul>
                </div>
            </div>
            <div class="card-body border-top">
                <h3 class="font-16">Rating</h3>
                <h1 class="mb-0">4.8</h1>
                <div class="rating-star">
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <p class="d-inline-block text-dark">14 Reviews </p>
                </div>
            </div>
            <div class="card-body border-top">
                <h3 class="font-16">Social Channels</h3>
                <div class="">
                    <ul class="mb-0 list-unstyled">
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-facebook-square mr-1 facebook-color"></i>fb.me/michaelchristy</a></li>
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-twitter-square mr-1 twitter-color"></i>twitter.com/michaelchristy</a></li>
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-instagram mr-1 instagram-color"></i>instagram.com/michaelchristy</a></li>
                    <li class="mb-1"><a href="#"><i class="fas fa-fw fa-rss-square mr-1 rss-color"></i>michaelchristy.com/blog</a></li>
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-pinterest-square mr-1 pinterest-color"></i>pinterest.com/michaelchristy</a></li>
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-youtube mr-1 youtube-color"></i>youtube/michaelchristy</a></li>
                </ul>
                </div>
            </div>
            <div class="card-body border-top">
                <h3 class="font-16">Category</h3>
                <div>
                    <a href="#" class="badge badge-light mr-1">Transport</a><a href="#" class="badge badge-light mr-1">Technology</a><a href="#" class="badge badge-light mr-1">Booking</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end card profile -->
        <!-- ============================================================== -->
@endsection