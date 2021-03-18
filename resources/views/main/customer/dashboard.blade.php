<!DOCTYPE html>
<html>
@include('main.inc.head')
<body>
	@include('main.master.header')

	<section class="item-grid">
    <div class="container">
        <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
            <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
            <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Pages</span></a></li>
            <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">User Dashboard</span></li>
        </ul><!-- .ht-breadcrumb -->

        <div class="submit-property__container">
            <div class="row">
                <div class="col-md-3">
                    @if(Auth::check())
                    <h2 class="bookmarked-listing__headline">Welcome, <strong>{{Auth::user()->getfirstname()}}</strong></h2>
                    @else
                    <h2 class="bookmarked-listing__headline">Hello,<strong>Your name</strong></h2>
                    @endif
                    <div class="settings-block">
                        <span class="settings-block__title">Manage Account</span>
                        <ul class="settings">
                            <li class="setting"><a href="{{url('user/profile')}}" class="setting__link"><i class="fas fa-user-circle"></i> My Profile</a></li>
                        </ul><!-- settings -->
                    </div><!-- .settings-block -->

                    <div class="settings-block">
                        <span class="settings-block__title"> Manage Trip</span>
                        <ul class="settings">
                            <!-- <li class="setting"><a href="{{url('/searchTrip')}}" class="setting__link"><i class="fas fa-search"></i> Search for Trips</a></li> -->
                             <li class="setting"><a href="{{url('user/all-bookings')}}" class="setting__link"><i class="fas fa-list"></i> All Bookings</a></li>
                            <li class="setting"><a href="" class="setting__link"><i class="fas fa-comment-dots"></i> Notifications</a></li>
              <li class="setting"><a href="" class="setting__link"><i class="fas fa-exclamation-circle"></i> Pending</a></li>
                            <li class="setting"><a href="" class="setting__link"><i class="fas fa-dollar-sign"></i> Payment & Refund</a></li>
                            <li class="setting"><a href="" class="setting__link"><i class="fas fa-list"></i> My Packages</a></li>
                        </ul><!-- settings -->
                    </div><!-- .settings-block -->

                    <div class="settings-block">
                        <ul class="settings">
                            <li class="setting"><a href="{{url('user/change-password')}}" class="setting__link"><i class="fas fa-wrench"></i> Change Password</a></li>
                            <li class="setting"><a href="{{'logout'}}" class="setting__link"><i class="fas fa-power-off"></i> Log Out</a></li>
                        </ul><!-- settings -->
                    </div><!-- .settings-block -->
                </div><!-- .col -->
                
            <div class="col-md-9">
                <div class="submit-property__block">
                    <h3 class="submit-property__headline">Travelers Dashboard</h3>
                </div>

           @yield('search')
           @yield('profile')
           @yield('changePass')
            <!-- .col -->
        </div>
       </div> <!-- .row -->
    </div><!-- .submit-property__container -->
</div><!-- .container -->
</section><!-- .submit-property -->

	@include('main.master.footer')

@include('layouts.script')
</body>
</html>