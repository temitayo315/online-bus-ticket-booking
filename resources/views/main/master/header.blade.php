 <header class="header header--blue header--top">
    <div class="container">
      <div class="topbar">
        <ul class="topbar__contact">
          <li><i class="fas fa-phone"></i><a href="tel:7034650880" class="topbar__link">+2347062168861, +2349020341360</a></li>
          <li><i class="fas fa-envelope"></i><a href="smartrip@support.com" class="topbar__link">SmartTransit@support.com</a></li>
        </ul><!-- .topbar__contact -->
    </div><!-- .topbar -->

    <div class="header__main">
      <div class="header__logo">
        <a href="{{url('/')}}">
          <h1 class="nav-brand"><span style="color: #ff5c33">Smart</span> Transit</h1>
        </a>
      </div><!-- .header__main -->

      <div class="nav-mobile">
        <a href="#" class="nav-toggle">
          <span></span>
        </a><!-- .nav-toggle -->
      </div><!-- .nav-mobile -->

      <div class="header__menu header__menu--v1">
        <ul class="header__nav navbar-right">
          <li class="header__nav-item">
            <a href="{{url('/')}}" class="header__nav-link">Home</a>
          </li>
          <li class="header__nav-item">
            <a href="#" class="header__nav-link">About</a>
          </li>
          <li class="header__nav-item"><a href="#" class="header__nav-link">Contact</a></li>
          <li class="header__nav-item"><a href="#" class="header__nav-link header__cta--outline">&plus; Offers</a></li>
          @if(!Auth::check())
          <li class="header__nav-item"><a href="#" class="header__nav-link">SIGN UP | JOIN</a></li>
          @endif
            <li class="header__nav-item">
              @if(Auth::check())
              <a href="#" class="header__nav-link">Hi {{Auth::user()->getfirstname()}}</a>
              @else
              <a href="#" class="header__nav-link">Hi Welcome</a>
              @endif
            <ul>
              <li class="setting"><a href="my_profile.php" class="setting__link"><i class="ion-ios-person-outline setting__icon"></i>My Profile</a></li>
              <li class="setting"><a href="my_property.php" class="setting__link"><i class="ion-ios-home-outline setting__icon"></i>Bookings</a></li>
              <li class="setting"><a href="" class="setting__link"><i class="ion-ios-unlocked-outline setting__icon"></i>Change Password</a></li>
              <li class="setting"><a href="{{'/logout'}}" class="setting__link"><i class="ion-ios-undo-outline setting__icon"></i>Log Out</a></li>
          </ul>
          </li>
        </ul><!-- .header__nav -->
      </div><!-- .header__menu -->

    </div><!-- .header__main -->
  </div><!-- .container -->
</header><!-- .header -->