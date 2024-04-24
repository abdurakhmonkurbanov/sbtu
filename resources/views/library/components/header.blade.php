<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="left-topbar d-flex align-items-center">
            <a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
            </a>
        </div>
        <form action="{{route('lib.search')}}" method="get" class="flex-grow-1 search-bar">

        <div class="flex-grow-1 search-bar">
            <div class="input-group">
                <div class="input-group-prepend search-arrow-back">
                    <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
                    </button>
                </div>
                <input type="text" name="word" class="form-control" placeholder="search" />
                <div class="input-group-append">
                    <button class="btn btn-search" type="submit"><i class="lni lni-search-alt"></i>
                    </button>
                </div>
            </div>
        </div>
        </form>
        <div class="right-topbar ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item search-btn-mobile">
                    <a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
                    </a>
                </li>

                <li class="nav-item dropdown dropdown-lg">
                    @if (Session::has('loginId'))
                        @include('library.components.notification')
                    @else
                    <a href="{{route('loginform')}}" class="btn btn-outline-primary m-1 px-2">Kirish</a>
                    @endif

                </li>
                <li class="nav-item dropdown dropdown-user-profile">
                    @if (Session::has('loginId'))
                        @include('library.components.user_header')
                    @else
                    <a href="{{route('regform')}}" class="btn btn-outline-success m-1 px-2">Ro'yxatdan o'tish</a>
                    @endif
                </li>
                <li class="nav-item dropdown dropdown-language">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
                        <div class="lang d-flex">
                            <div><i class="flag-icon flag-icon-uz"></i>
                            </div>
                            <div><span>Uzb</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:;"><i
                                class="flag-icon flag-icon-um"></i><span>English</span></a>
                        <a class="dropdown-item" href="javascript:;"><i
                                class="flag-icon flag-icon-ru"></i><span>Rus</span></a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
