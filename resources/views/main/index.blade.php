@extends('main.master.master')
@section('index')
<section class="item-grid">
  <div class="container">
  	<div class="row">
      <div class="col-md-12 col-sm-12">
        	<div class="new-listing__header">
            <h2 class="section__title section__title--b-margin">Ready to plan your trip with Smart Transit?</h2>
          </div>
          <p class="intro">Smart Transit is Nigeria's leading online travel agency. Based in Maryland Lagos, we have offices across State where hundreds of Travelstarters are dedicated to rocking your travel world. We want our customers to spend less time planning their travels and more time on holiday. Our mission is to save you time, money and stress with our simple online booking platform. You can search, compare and book your travel all in one place.
          </p>
          </div>
  	</div>
  </div>
  <div class="container new_section">
    <div class="row">
      <div class="col-md-6 item-grid__container">
        <div class="listing">
          <div class="card">
          	<div class="card-header">
          		<h1 class="section__title header-title">What does Smart Transit do?</h1>
      		</div>
      		<div class="card-body">
      			<img src="{{url('assets/images/img_big_1.jpg')}}" class="card-img" alt="image">
      			<p class="intro"> Forget browsing the streets or the web for the latest flight deals. vehicle hire options from top car rental companies and hotel reservations bookable for properties on every continent, we offer something for every traveller’s budget.</p>
      		</div>
      		<div class="card-footer">
      		<a href="#" class="btn btn-outline-success btn-rounded" style="float: right;width: 150px">Read More</a>
      		</div>
          </div>

        </div><!-- .listing -->
      </div><!-- .col -->

      <div class="col-md-6 item-grid__container">
        <div class="listing">
          <div class="card">
          	<div class="card-header">
          		<h1 class="section__title header-title">Why book with Smart Transit?</h1>
      		</div>
      		<div class="card-body">
      			<img src="{{url('assets/images/hero_2.jpg')}}" class="card-img" alt="image">
      			<p class="intro"> Forget browsing the streets or the web for the latest flight deals. Vehicle hire options from top car rental companies and hotel reservations bookable for properties on every continent, we offer something for every traveller’s budget.</p>
      		</div>
      		<div class="card-footer">
      			<a href="#" class="btn btn-outline-success btn-rounded" style="float: right;width: 150px">Read More</a>
      		</div>
          </div>
          
        </div><!-- .listing -->
      </div><!-- .col -->

    </div><!-- .row -->

  </div><!-- .container -->
</section><!-- .item-grid-3 -->
<section class="new-listing">
  <div class="container">
    <div class="new-listing__header">
      <h2 class="section__title section__title--b-margin">Our Parks & Destinations</h2>
      <a href="#" class="new-listing__all">View all Our Destinations <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </div>

    <div class="new-listing__container">
      <div class="new-listing--col-md-6">
        <div class="new-listing__block">
          <a href="#">
            <div class="new-listing__bg new-listing__bg--new-york-1 new-listing--large" style="background-image: {{url('assets/images/images (4).jpg')}}"></div><!-- .new-listing__child -->

            <div class="new-listing__content">  
              <h3 class="new-listing__title">Kano</h3>
              <p class="new-listing__desc">25 Destinations</p>
            </div><!-- .new-listing__content -->
          </a>
        </div><!-- .new-listing__block -->
      </div><!-- .col -->

      <div class="new-listing--col-md-6">
        <div class="new-listing__block">
          <a href="#">
            <div class="new-listing__bg new-listing__bg--ohio-1 new-listing--wide"></div><!-- .new-listing__bg -->

            <div class="new-listing__content">  
              <h3 class="new-listing__title">Lagos</h3>
              <p class="new-listing__desc">23 Destination</p>
            </div><!-- .new-listing__content -->
          </a>
        </div><!-- .new-listing__block -->

        <div class="new-listing__parent">
          <div class="row">
            <div class="col-md-6">
              <div class="new-listing__block">
                <a href="#">
                  <div class="new-listing__bg new-listing__bg--san-diego-1 new-listing--small"></div><!-- .new-listing__bg -->

                  <div class="new-listing__content">  
                    <h3 class="new-listing__title">Kaduna</h3>
                    <p class="new-listing__desc">15 Destinations</p>
                  </div><!-- .new-listing__content -->
                </a>
              </div><!-- .new-listing__block -->
            </div><!-- .col-md-6 -->

            <div class="col-md-6">
              <div class="new-listing__block">
                <a href="#">
                  <div class="new-listing__bg new-listing__bg--new-jersey-1 new-listing--small"></div><!-- .new-listing__bg -->

                  <div class="new-listing__content">  
                    <h3 class="new-listing__title">Port Harcourt</h3>
                    <p class="new-listing__desc">20 Destinations</p>
                  </div><!-- .new-listing__content -->
                </a>
              </div><!-- .new-listing__block -->
            </div><!-- .col-md-6 -->
          </div><!-- .row -->
        </div><!-- .new-listing__parent -->
      </div><!-- .col -->
    </div><!-- .new-listing__container -->
  </div><!-- .container -->
</section><!-- .new-listing -->
@endsection