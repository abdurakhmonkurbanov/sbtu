@extends('layouts.main')

@section('css')
    @include('parts.css')
@endsection

@section('container')
    <!-- Hero Start -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card login-page bg-white shadow rounded border-0">
                        <div class="card-body">
                            <a href="{{route('index')}}"><img src="/assets/images/logo-dark.png" class="l-dark mb-4 d-block mx-auto" height="24" alt="">
                            </a>
                            <h4 class="card-title text-center">Tizimga kirish</h4>
                            <form class="login-form mt-4" method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label"> <span class="badge rounded-pill bg-danger">Telefon raqamingizni  +998AABBBCCDD formatda kiriting</span><span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input type="tel" class="form-control ps-5"  placeholder="+998901234567"  pattern="[+]{1}[0-9]{12}" name="phone" value="{{old('phone')}}">
                                                <span class="text-danger">@error('phone') {{'Telefon nomer xato'}} @enderror</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Parol <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control ps-5" placeholder="Password" required="" name="password">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Tizimga kirish</button>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Yangi foydalanuvchini ro'yxatdan o'rkazish</small> <a href="{{route('regform')}}" class="btn btn-pills btn-soft-primary ">Registratsiya</a></p>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div><!---->
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
@endsection

@section('footer')
    @include('parts.footer')
@endsection

@section('js')
    @include('parts.js')
@endsection
