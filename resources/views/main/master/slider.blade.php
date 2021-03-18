
<section class="main-slider">
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{url('assets/images/bus park.jpg')}}" alt="Chania" width="1920" height="820">
      <div class="carousel-caption">
        <h3 class="header-title">SEARCH AND BOOK YOUR TRIP</h3>
        <p>You don't have to worry when you need to travel.<br> Stay at the comfort of your home and wait for the trip date.</p>
        <button class="btn btn-success btn-rounded btn_learn">Learn More..</button>
      </div>
    </div>

  </div>
  
</div>

  <section class="main-search main-search--absolute">
    <div class="container">
      <div class="main-search__container">
        <section class="listing-search">
          <form action="{{'/search'}}" method="get" class="listing-search__form">
            
            <div class="row">
              <div class="col-sm-3">
                <label for="listing-type" class="listing-search__label">From City</label>
                <div class="input-group mb-3">
                  <span class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-location-arrow" style="color: orange"></i></span>
                  </span>
                  <select name="from_city" class="form-control selectpicker" data-live-search="true">
                <option selected="selected" disabled>From Which city</option>
                 @foreach($places as $place)
              <option value="{{$place->id}}">{{$place->state}} ({{$place->city}})</option>
                @endforeach
              </select>
              </div>
              </div><!-- .col -->

              <div class="col-sm-3">
                <label for="offer-type" class="listing-search__label">To Destination</label>
                <div class="input-group mb-3">
                  <span class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-location-arrow" style="color: orange"></i></span>
                  </span>
                <select name="destination" class="form-control selectpicker" data-live-search="true">
                <option selected="selected" disabled>Choose Destination</option>
                 @foreach($places as $place)
              <option value="{{$place->id}}">{{$place->state}} ({{$place->city}})</option>
                @endforeach
              </select>
              </div>
              </div><!-- .col -->

              <div class="col-sm-3">
                <div class="form-group date">
                <label for="date" class="listing-search__label">Date</label>
                <input type="date" name="date" min="<?php echo date('Y-m-d'); ?>">
                </div>
              </div><!-- .col -->

              <div class="col-sm-3">
                <button type="submit" class="btn btn-success btn-lg" style="background-color: #1fc341; margin-top: 20px">Search</button>
              </div><!-- .col -->
            </div><!-- row -->

            
          </form><!-- .listing-search__form -->
        </section><!-- .listing-search -->

        <section class="listing-sort">
          <div class="listing-sort__inner">
            <ul class="listing-sort__list">
              <li class="listing-sort__item"><a href="#" class="listing-sort__link"><i class="fa fa-th-list" aria-hidden="true" class="listing-sort__icon"></i></a></li>
              <li class="listing-sort__item"><a href="#" class="listing-sort__link"><i class="fa fa-th" aria-hidden="true" class="listing-sort__icon"></i></a></li>
              <li class="listing-sort__item"><a href="#" class="listing-sort__link listing-sort__link--active"><i class="fa fa-th-large" aria-hidden="true" class="listing-sort__icon"></i></a></li>
            </ul>

            <span class="listing-sort__result">1-9 of 25 results</span>

            <p class="listing-sort__sort">
              <label for="sort-type" class="listing-sort__label"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Sort by </label>
              <select name="sort-type" id="sort-type" class="ht-field listing-sort__field">
                <option value="default">Default</option>
                <option value="low-price">Lowest Price</option>
                <option value="high-price">Date</option>
              </select>
            </p>
          </div><!-- .listing-sort__inner -->
        </section><!-- .listing-sort -->
      </div><!-- .main-search__container -->
    </div><!-- .container -->
  </section><!-- .main-search -->
</section><!-- .main-slider -->
