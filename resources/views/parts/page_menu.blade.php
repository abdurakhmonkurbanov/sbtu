<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky  d-print-none">
    <div class="container">
        <!-- Logo container-->

        <a class="logo" href="{{route('index')}}">
            <img src="/assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
            <img src="/assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
        </a>
        <!-- End Logo container-->

        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item ps-1 mb-0">
                <a href="{{route('regform')}}">
                    <div class="login-btn-primary"><span class="btn btn-pills btn-outline-success btn-sm ">Ariza qoldiring</span></div>
                    <div class="login-btn-light"><span class="btn btn-pills btn-outline-success btn-sm ">Ariza qoldiring</span></div>

                </a>
            </li>
            @include('part_user.user_header')
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu <?php echo $menu_color;  ?>">

                @foreach ($menu as $item)
                    @if ($item->children->count() > 0)
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="#">{{$item->name}} </a><span class="menu-arrow"></span>
                                <ul class="submenu">
                                    @foreach ($item->children as $submenu)
                                        @if ($submenu->children->count() > 0)
                                        <li class="has-submenu parent-parent-menu-item">
                                            <a href="#">{{$submenu->name}} </a><span class="submenu-arrow"></span>
                                                <ul class="submenu">
                                                    @foreach ($submenu->children as $submenu2)
                                                        @if ($submenu2->link == '#')
                                                        <li><a href="{{route('page',$submenu2->id)}}" class="sub-menu-item"> {{$submenu2->name}}</a></li>
                                                        @else
                                                        <li><a href="{{$submenu2->link}}" class="sub-menu-item"> {{$submenu2->name}}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                        </li>
                                        @else
                                            @if ($submenu->link == '#')
                                                <li><a href="{{route('page',$submenu->id)}}" class="sub-menu-item"> {{$submenu->name}}</a></li>
                                            @else
                                            <li><a href="{{$submenu->link}}" class="sub-menu-item"> {{$submenu->name}}</a></li>
                                            @endif
                                        @endif

                                    @endforeach
                                </ul>
                        </li>
                    @else
                        <li><a href="{{route('page',$item->id)}}" class="sub-menu-item">{{$item->name}}</a></li>
                    @endif

                @endforeach
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</header>
<!--end header-->
<!-- Navbar End -->
