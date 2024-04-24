@if (Session::has('loginId'))
    @if (Session::get('user_type') == 1)
    <!-- Abiturent va foydalanuvchi -->
        <li class="list-inline-item mb-0 ms-1">
        <div class="dropdown dropdown-primary">
            <button type="button" class="btn btn-soft-light dropdown-toggle p-0 rounded-circle " data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/client/user.png" class="avatar avatar-ex-small rounded" alt=""></button>
            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                    <img src="/assets/images/client/user.png" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                    <div class="flex-1 ms-2">
                        <span class="d-block">{{Session::get('fio')}}</span>
                    </div>
                </a>
                <a class="dropdown-item text-dark" href="profile.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                <a class="dropdown-item text-dark" href="email.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span>Tip: Abiturent</a>
                <div class="dropdown-divider border-top"></div>

                <a class="dropdown-item text-dark" href="{{route('logout')}}"><span class="mb-0 d-inline-block me-1"><i class="uil uil-signout"></i></span>Chiqish</a>
            </div>
        </div>
        </li>
    @endif

    @if (Session::get('user_type') == 2)
    <!-- Abiturent va foydalanuvchi -->
        <li class="list-inline-item mb-0 ms-1">
        <div class="dropdown dropdown-primary">
            <button type="button" class="btn btn-soft-light dropdown-toggle p-0 rounded-circle " data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/client/user.png" class="avatar avatar-ex-small rounded" alt=""></button>
            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                    <img src="/assets/images/client/user.png" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                    <div class="flex-1 ms-2">
                        <span class="d-block">{{Session::get('fio')}}</span>
                    </div>
                </a>
                <a class="dropdown-item text-dark" href="profile.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                <a class="dropdown-item text-dark" href="email.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span>Tip: Oddiy foydalanuvchi</a>
                <div class="dropdown-divider border-top"></div>

                <a class="dropdown-item text-dark" href="{{route('logout')}}"><span class="mb-0 d-inline-block me-1"><i class="uil uil-signout"></i></span>Chiqish</a>
            </div>
        </div>
        </li>
    @endif

    @if (Session::get('user_type') == 3)
     <!-- Yangliklar yozish -->
        <li class="list-inline-item mb-0 ms-1">
        <div class="dropdown dropdown-primary">
            <button type="button" class="btn btn-soft-light dropdown-toggle p-0 rounded-circle " data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/client/writer.png" class="avatar avatar-ex-small rounded" alt=""></button>
            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                    <img src="/assets/images/client/writer.png" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                    <div class="flex-1 ms-2">
                        <span class="d-block">{{Session::get('fio')}}</span>
                    </div>
                </a>
                <a class="dropdown-item text-dark" href="{{route('contentwrite')}}"><span class="mb-0 d-inline-block me-1"><i class="uil uil-edit d-block rounded"></i></span> Kontent yaratish</a>
                <a class="dropdown-item text-dark" href="{{route('contenteditshow')}}"><span class="mb-0 d-inline-block me-1"><i class="uil uil-file-edit-alt"></i></span> Kontentni tahrirlash</a>
                <span class="dropdown-item text-dark"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span>Tip: Kontent menejer</span>
                <div class="dropdown-divider border-top"></div>
                <a class="dropdown-item text-dark" href="{{route('logout')}}"><span class="mb-0 d-inline-block me-1"><i class="uil uil-signout"></i></span> Chiqish</a>
            </div>
        </div>
        </li>
    @endif

    @if (Session::get('user_type') == 4)
     <!-- Super admin -->
        <li class="list-inline-item mb-0 ms-1">
        <div class="dropdown dropdown-primary">
            <button type="button" class="btn btn-soft-light dropdown-toggle p-0 rounded-circle " data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/client/administrator.png" class="avatar avatar-ex-small rounded" alt=""></button>
            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                    <img src="/assets/images/client/administrator.png" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                    <div class="flex-1 ms-2">
                        <span class="d-block">{{Session::get('fio')}}</span>
                    </div>
                </a>
                <a class="dropdown-item text-dark" href="profile.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                <a class="dropdown-item text-dark" href="{{route('abitshow')}}"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Abiturentlar</a>
                <span class="dropdown-item text-dark" ><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span>Tip: Super Admin</span>
                <div class="dropdown-divider border-top"></div>
                <a class="dropdown-item text-dark" href="{{route('logout')}}"><span class="mb-0 d-inline-block me-1"><i class="uil uil-signout"></i></span>Chiqish</a>
            </div>
        </div>
        </li>
    @endif

    @if (Session::get('user_type') == 5)
     <!-- Muharrir -->
        <li class="list-inline-item mb-0 ms-1">
        <div class="dropdown dropdown-primary">
            <button type="button" class="btn btn-soft-light dropdown-toggle p-0 rounded-circle " data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/client/editor.png" class="avatar avatar-ex-small rounded" alt=""></button>
            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                    <img src="assets/images/client/editor.png" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                    <div class="flex-1 ms-2">
                        <span class="d-block">{{Session::get('fio')}}</span>
                    </div>
                </a>
                <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span>Tip: Muharrir</a>

                <a class="dropdown-item text-dark btn btn-outline-success " href="{{route('editor.index')}}"><span class="mb-0 d-inline-block me-1"><i class="uil uil-file-edit-alt"></i></span> Muxarrirlik qilish</a>
                <div class="dropdown-divider border-top"></div>
                <a class="dropdown-item text-dark" href="{{route('logout')}}"><span class="mb-0 d-inline-block me-1"><i class="uil uil-signout"></i></span>Chiqish</a>
            </div>
        </div>
        </li>
    @endif

@else
<li class="list-inline-item ps-1 mb-0">
    <a href="{{route('loginform')}}">
        <div class="login-btn-primary"><span class="btn btn-pills btn-outline-info  btn-sm">Tizimga kirish</span></div>
        <div class="login-btn-light"><span class="btn btn-pills btn-outline-info  btn-sm">Tizimga kirish</span></div>
    </a>
</li>
@endif
