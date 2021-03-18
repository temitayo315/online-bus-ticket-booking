<!DOCTYPE html>
<html>
@include('layouts.head')
<body>
	<div class="dashboard-main-wrapper">
	@include('layouts.nav')
	@include('layouts.sidebar')
	 <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container dashboard-content">
                	
                	@yield('content')
                	@yield('operator')
                    @yield('destination')
                    @yield('schedule')
                    @yield('profile')
                    @yield('newTrip')
                </div>
            </div>

	@include('layouts.footer')      
     </div>
 	</div>
	@include('layouts.script')
   
</body>
</html>