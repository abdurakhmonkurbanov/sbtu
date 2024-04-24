<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            @if ($books != null)
            @foreach ($books as $item)
                <div class="col-12 col-lg-4 col-xl-4">

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{'/storage/'.$item->img}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->book_name}}</h5>
                                    <p class="card-text"> {!! Str::limit($item->book_description, 300, " ..."); !!}</p>
                                    <div style="text-align: right">
                                        <div class="d-inline"><a href="{{route('lib.book.file',['action' => 1, 'book_id' => $item->book_id])}}" class="btn btn-outline-primary m-1"><i class="bx bx-book-open"></i>
                                        </a></div>
                                        <div class="d-inline"><a href="{{route('lib.book.file',['action' => 2, 'book_id' => $item->book_id])}}" class="btn btn-outline-info m-1"><i class="bx bx-cloud-download"></i>
                                        </a></div>
                                        @if(Session::get('user_type') == 3)
                                        <div class="d-inline">
                                            <form class="d-inline" action="{{route('lib.book.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="book_id" value="{{$item->book_id}}">
                                            <button type="submit"class="btn btn-outline-danger m-1 d-inline"><i class="bx bx-trash"></i></button>
                                        </form></div>
                                        @endif
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
         @else
            <div class="col-12 col-lg-12 col-xl-12">
                    <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">Oops!</h4>
                                    <p>Bu bo'limda kitob mavjud emas</p>
                                    <hr>
                                    <p class="mb-0">Iltimos boshqa bo'limdan izlab ko'ring</p>
                            </div>
                    </div>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-lg round-pagination">
                    <li class="page-item disabled"><a class="page-link" href="javascript:;">Orqaga</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:;javascript:;">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:;">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:;">3</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:;">Oldinga</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    @if(Session()->has('path'))
    <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
            <div class="card bg-secondary radius-15">
                <div class="card-body">
                    <p class="card-text text-white" style="height: 600px">
                        <embed src="{{Session()->get('path')}}#toolbar=0" width="100%" height="100%">
                            <!--<iframe src="https://docs.google.com/viewerng/viewer?url=https://library.samdu.uz/files/970ab9bff3e76581471dc93fb557b19f_O%60tkan%20kunlar%20(roman)-209.pdf&embedded=true" frameborder="0" height="100%" width="100%"></iframe>
                            -->
                </p>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

