<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">
@include('main.inc.head')
<body>
 @include('main.master.header')

  @include('main.master.slider')

  @yield('index')


<section class="features">
  <div class="features__overlay">
    <h1 style="color:#ffffff; font-weight:bold;" align="center"> Why Choose Us!</h1><p></p>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="feature">
            <i class="fas fa-box testimonial__icon"></i>
            <h3 class="feature__title">No delay Trip</h3>
            <p class="feature__desc">
              Our extensive database of listings and market info provide you the all the information you reequire at the convinience of your finger tips.
            </p>
          </div><!-- .feature -->
        </div><!-- .col -->

        <div class="col-sm-4">
          <div class="feature">
           <i class="fas fa-money-bill-alt testimonial__icon"></i>
            <h3 class="feature__title">Cheap fares</h3>
            <p class="feature__desc">
              We can serve you with the best agents in the market that would gurantee your housing needs.
            </p>
          </div><!-- .feature -->
        </div><!-- .col -->
        <div class="col-sm-4">
          <div class="feature">
            <i class="fas fa-globe testimonial__icon"></i>
            <h3 class="feature__title">Connecting You..</h3>
            <p class="feature__desc">
              We bring buyers and sellers together.
            </p>
          </div><!-- .feature -->
        </div><!-- .col -->  
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .features__overlay -->
</section><!-- .features -->
<section class="famous-agents">
  <div class="container">
    <div class="famous-agents__title">
      <h2 class="section__title">Our Drivers</h2>
      <ul class="slick__navigation famous-agents__navigation">
        <li class="slick-prev famous-agents__navigation-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></li>
        <li class="slick-next famous-agents__navigation-next"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
      </ul>
    </div><!-- .famous-agents__title -->
    <div class="row">
      @foreach($operators as $operator)
      <div class="col-md-4">
        <div class="famous-agents__header">
          <img src="{{url('uploads/'.$operator->operator_logo)}}" height="200" width="170"><br><br>
           <h4 class="famous-agents__name">{{$operator->operator_name}}</h4>
         </div>
      </div>
      @endforeach
    </div><!-- .famous-agents__wrapper -->
  </div><!-- .container -->
  </section><!-- .famous_agents -->

<section class="testimonial">
  <div class="container">
    <div class="testimonial__container testimonial--b-border">
      <div class="testimonial--centered">
        <h2 class="section__title section__title--large">&plus;Customer Testimonials</h2>
        <i class="fas fa-chat"></i>
        <div class="testimonial__content">
          <div class="testimonial__slider testimonial__slider--top">
            
          </div><!-- .testimonial__slider -->

          <ul class="testimonial__slider testimonial__list testimonial__slider--middle">
            <li><img src="{{url('assets/images/person_1.jpg')}}" alt="Mary Jane"></li>
            <li><img src="{{url('assets/images/person_3.jpg')}}" alt="Karty & Will"></li>
            <li><img src="{{url('assets/images/person_4.jpg')}}" alt="Jim Kay"></li>
          </ul><!-- .testimonial__slider --> 

          <div class="testimonial__slider testimonial__slider--bottom">
            <div class="testimonial__slider-wrapper">
              <h4 class="testimonial__customer-name">Driver name</h4>
              <p class="testimonial__customer-company">Location</p>
              <img src="images/rating.png" alt="Five Stars Rating">
            </div><!-- .testimonial__slider-wrapper -->

        </div><!-- .testimonial__content -->
      </div><!-- .testimonial--center --> 
    </div><!-- .testimonial__container -->
  </div><!-- .container -->
</section>

<!-- partners and popular links were here -->


@include('main.master.footer')
<a href="#" class="back-to-top"><span class="ion-ios-arrow-up"></span></a>

<!-- JS Files -->
@include('layouts.script')
</body>
</html>