<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
    <div class="media user-box align-items-center">
        <div class="media-body user-info">
            <p class="user-name mb-0">
                    {{Session::get('fio')}}
            </p>
        </div>
        <img src="{{Session::get('img')}}" class="user-img" alt="user avatar">
    </div>
</a>
<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;"><i
            class="bx bx-user"></i><span>Profile</span></a>
    <a class="dropdown-item" href="javascript:;"><i
            class="bx bx-cog"></i><span>Settings</span></a>

    <div class="dropdown-divider mb-0"></div>
    <a class="dropdown-item" href="{{route('logout')}}">
        <i class="bx bx-power-off"></i><span>Logout</span></a>
</div>
