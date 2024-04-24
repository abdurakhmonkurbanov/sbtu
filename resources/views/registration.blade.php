@extends('layouts.main')

@section('css')
    @include('parts.css')
@endsection

@section('container')
    <!-- Hero Start -->
    <section class="bg-auth-home bg-circle-gradiant d-table w-100">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <a href="{{route('index')}}"><img src="/assets/images/logo-dark.png" class="l-dark mb-4 d-block mx-auto" height="24" alt="">
                            </a>
                        <h5 class="mb-3 text-center">Yangi foydalanuvchini ro'yxatga olish</h5>
                            <form class="login-form mt-4" method="POST" action="{{route('registration1')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">To'liq familiyangiz va ismingiz<span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="input" class="form-control ps-5" placeholder="FIO" name="full_name"  value="{{old('full_name')}}"/>
                                                <span class="text-danger">@error('full_name') {{'To`liq familiyangiz va ismingiz'}} @enderror</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label"> <span class="badge rounded-pill bg-danger">Telefon raqamingizni  +998AABBBCCDD formatda kiriting</span><span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input type="tel" class="form-control ps-5"  placeholder="+998901234567"  pattern="[+]{1}[0-9]{12}" name="phone" value="{{old('phone')}}">
                                                <span class="text-danger">@error('phone') {{'Telefon nomer xato yoki bu nomer ro`yxatdan o`tgan'}} @enderror</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tanlagan parol <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control ps-5" placeholder="Pasword" name="password">
                                                <span class="text-danger">@error('password') {{'Parol kiriting'}} @enderror</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Parolni qayta tering <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control ps-5" placeholder="Repassword" name="repassword">
                                                <span class="text-danger">@error('repassword') {{'Parolni bir hil kiriting'}} @enderror</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="p-4">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" checked="" type="radio" name="role" id="flexRadioDefault1" value="1"  onclick="myFunction2()">
                                                <label class="form-check-label" for="flexRadioDefault1">Abiturent bo'lib kirish</label>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="2" onclick="myFunction()">
                                                <label class="form-check-label" for="flexRadioDefault2">Odiiy foydalanuvchi bo'lib kirish</label>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                @if(Session::has('direc_error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{Session::get('direc_error')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                                    </div>
                                @endif
                                <div class="col mb-4 pt-2" id="select-box">
                                    <div class="component-wrapper rounded shadow">
                                        <div class="p-2 border-bottom">
                                            <h6 class="title mb-0"> Qaysi yo'nalishga xujjat topshirasiz?</h6>
                                        </div>

                                        <div class="p-2">
                                            <div class="mb-0">
                                                <select class="form-select form-control" aria-label="Default select example" name="direction" id="direction">
                                                    <option selected="" value="0">yo'nalishni tanlang</option>
                                                    @foreach ($direction as $item)
                                                    <option value="{{$item->direct_id}}">{{$item->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Ro'yxatdan o'tish</button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Agar sizda allaqachon akkaunt bo'lsa?</small> <a href="{{route('loginform')}}" class="btn btn-pills btn-soft-primary ">Kirish</a></p>
                                    </div>
                                </div><!--end row-->
                            </form>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <script>
        function myFunction() {
        document.getElementById("select-box").style.display = "none";
        document.getElementById("direction").value = "0";
        }
        function myFunction2() {
        document.getElementById("select-box").style.display = "block";
        }
        </script>
@endsection

@section('footer')
    @include('parts.footer')
@endsection

@section('js')
    @include('parts.js')
@endsection
