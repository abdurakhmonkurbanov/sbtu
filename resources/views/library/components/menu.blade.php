<ul class="metismenu" id="menu">
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon icon-color-1"><i class="lni lni-code"></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
        <ul>
            <li>
                <a href="{{route('index')}}"><div class="icon-color-3"><i class="bx bx-globe"></i>SBTU.UZ</div>
                </a>
            </li>
            <li>
                <a href="{{route('lib.index')}}"><div class="icon-color-3"><i class="bx bx-home-alt"></i>Bosh sahifa</div>
                </a>
            </li>
            @if(Session::get('user_type') == 3)
            <li>
                <a href="{{route('lib.statistic.index')}}"><div class="icon-color-5"><i class="bx bx-table"></i>Statistika</div>
                </a>
            <li>
                <a href="{{route('lib.book.addform')}}"><div class="icon-color-2"><i class="bx bx-book-add"></i>Kitob qo'shish</div>
                </a>
            </li>
            @endif
        </ul>
    </li>
    <li class="menu-label">Katalog</li>
    @foreach ($menu as $item)
        @if ($item->children->count() > 0)
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon icon-color-3"><i class="bx bx-folder-open"></i>
                    </div>
                    <div class="menu-title">{{$item->catalog_name}}</div>
                </a>
                <ul>
                    @foreach ($item->children as $submenu)
                        <li> <a href="{{route('lib.catalog.show',$submenu->id)}} "><i class="bx bx-right-arrow-alt"></i>{{$submenu->catalog_name}} </a>
                    </li>
                    @endforeach

                </ul>
            </li>

        @else
            <li>
                <a href="chat-box.html">
                    <div class="parent-icon icon-color-3"> <i class="bx bx-conversation"></i>
                        </div>
                        <div class="menu-title">{{$item->catalog_name}} </div>
                </a>
            </li>
        @endif

    @endforeach

    <li class="menu-label">Biz haqiumizda</li>
    <li>
        <a href="#">
            <div class="parent-icon icon-color-9"><i class="bx bx-ghost"></i>
            </div>
            <div class="menu-title">Biz haqiumizda</div>
        </a>
    </li>

    <li>
        <a href="#" target="_blank">
            <div class="parent-icon icon-color-12"><i class="bx bx-folder"></i>
            </div>
            <div class="menu-title">Ishlatish yo'riqnomasi</div>
        </a>
    </li>
    <li>
        <a href="#" target="_blank">
            <div class="parent-icon"><i class="bx bx-support"></i>
            </div>
            <div class="menu-title">Qo'llab quvvatlash</div>
        </a>
    </li>
</ul>
