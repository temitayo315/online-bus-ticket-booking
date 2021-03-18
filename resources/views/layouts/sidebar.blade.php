<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="/admin">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider border-bottom">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{'/admin'}}" data-toggle="" aria-expanded="false" data-target="" aria-controls=""><i class="fas fa-fw fa-building"></i>Dashboard<span class=""></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('operator')}}" data-toggle="" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-user fa-user"></i>Operators Profile(Driver)</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('bus')}}"  aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-bus"></i>Bus</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-building"></i>All State/City</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-eye"></i>View Trips</a>
                        <div id="submenu-3" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('newTrip')}}" ><i class="fas fa-location-arrow"></i>Schedule a Trip</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('schedule')}}" ><i class="fas fa-exchange-alt"></i>Active Trip</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('suspended')}}" ><i class="fas fa-dot-circle"></i>Suspended Schedule</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-cogs"></i>Account Settings</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('admin/profile')}}">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Change Password</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('logout')}}">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->