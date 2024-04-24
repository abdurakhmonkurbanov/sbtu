<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title my-4" data-aos="fade-up" data-aos-duration="1400">Mavjud ta'lim yo'nalishlar</h4>
                    <p class="text-muted mb-0 mt-3" data-aos="fade-up" data-aos-duration="1400">(Kunduzgi va sirtqi ta'lim shakllari)</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories text-center rounded border-0">
                    <div class="card-body">
                        <img src="/assets/images/icon/eng.png" class="avatar avatar-small mb-3" alt="">
                        <h5><a href="javascript:void(0)" class="text-dark">60111800-Xorijiy til va adabiyot:  (Ingliz tili) </a></h5>
                        <p class="text-muted mb-0 mt-3">Akademik daraja - BAKALAVR	<br>
                            O‘qish muddati - 4 yil <br>
                            Ta’lim shakli - kunduzgi					<br>
                            Kvalifikatsiya: Pedagog. Ingliz tili fani o‘qituvchisi
                            </p>
                    </div>
                </div>
            </div>
            <!--end col-->

            @foreach ($directions as $item)

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories text-center rounded border-0">
                    <div class="card-body">
                        <img src="/assets/images/icon/{{$item->icon}} " class="avatar avatar-small mb-3" alt=""  style="width: 100px; height: 100px">
                        <h5><a href="javascript:void(0)" class="text-dark"> {{$item->name}} </a></h5>
                        <p class="text-muted mb-0 mt-3">
                            {!!$item->direction_text!!}
                        </p>
                    </div>
                </div>
            </div>
            <!--end col-->

            @endforeach





        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Biz bilan talaba bo'ling</h4>
                    <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">Biz bilan bog'laning yiki <a href="{{route('regform')}}" class="text-primary fw-bold">online ariza </a>topshiring talaba bo'ling </p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
                <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" data-aos="fade-up" data-aos-duration="1200" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded active" id="community-tab" data-bs-toggle="pill" href="/assets/#pills-community" role="tab" aria-controls="pills-community" aria-selected="false">
                            <div class="text-center py-2">
                                <h6 class="mb-0">Ariza yozish</h6>
                            </div>
                        </a>
                        <!--end nav link-->
                    </li>
                    <!--end nav item-->

                    <li class="nav-item">
                        <a class="nav-link rounded" id="selfservice-tab" data-bs-toggle="pill" href="/assets/#pills-self" role="tab" aria-controls="pills-self" aria-selected="false">
                            <div class="text-center py-2">
                                <h6 class="mb-0">Sinov</h6>
                            </div>
                        </a>
                        <!--end nav link-->
                    </li>
                    <!--end nav item-->

                    <li class="nav-item">
                        <a class="nav-link rounded" id="teamwork-tab" data-bs-toggle="pill" href="/assets/#pills-teamwork" role="tab" aria-controls="pills-teamwork" aria-selected="false">
                            <div class="text-center py-2">
                                <h6 class="mb-0">Siz talabasiz!</h6>
                            </div>
                        </a>
                        <!--end nav link-->
                    </li>
                    <!--end nav item-->
                </ul>
                <!--end nav pills-->
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-community" role="tabpanel" aria-labelledby="community-tab">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="/assets/images/saas/classic02.png" data-aos="fade-up" data-aos-duration="1400" class="img-fluid mx-auto d-block shadow rounded" alt="">
                            </div>
                            <!--end col-->

                            <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="section-title ms-md-4">
                                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Online hujjat topshirish</h4>
                                    <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">Elektron tizim orqali <a href="{{route('regform')}}"  class="btn btn-pills btn-outline-success  ">
                                        Ariza qoldiring
                                    </a> tugmasi orqali xujjat topshiring</p>

                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end teb pane-->

                    <div class="tab-pane fade" id="pills-self" role="tabpanel" aria-labelledby="selfservice-tab">
                        <div class="row align-items-center">
                            <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="section-title me-md-4">
                                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Sinovdan o'tish</h4>
                                    <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">Sinov test suhbat asosida o'tkaziladi</p>

                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6 order-1 order-md-2">
                                <img src="/assets/images/saas/customer.svg" data-aos="fade-up" data-aos-duration="1400" class="img-fluid mx-auto d-block shadow rounded" alt="">
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end teb pane-->

                    <div class="tab-pane fade" id="pills-teamwork" role="tabpanel" aria-labelledby="teamwork-tab">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="/assets/images/saas/classic03.png" data-aos="fade-up" data-aos-duration="1400" class="img-fluid mx-auto d-block shadow rounded" alt="">
                            </div>
                            <!--end col-->

                            <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="section-title ms-md-4">
                                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Siz talabasiz!</h4>
                                    <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">O'zingiz tanlagan yo'nalish talabasi bo'lasiz</p>

                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end teb pane-->
                </div>
                <!--end tab content-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <div class="container mt-100 mt-60"  data-aos="fade-up" data-aos-duration="1000">
        <div class="row align-items-end mb-4 pb-2">
            <div class="col-md-8">
                <div class="section-title text-center text-md-start">

                    <h4 class="title mb-4">Universitet tuzilishi</h4>
                    <p class="text-muted mb-0 para-desc">Universitetning tashkiliy tuzilmasi</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-4 mt-4 pt-2">
                <ul class="nav nav-pills nav-justified flex-column bg-white rounded shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded active" id="dentalcare" data-bs-toggle="pill" href="#dental" role="tab" aria-controls="dental" aria-selected="false">
                            <div class="text-start py-1 px-2">
                                <h6 class="mb-0">Tashkiliy tuzilma</h6>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->

                    <li class="nav-item mt-2">
                        <a class="nav-link rounded" id="cardeography" data-bs-toggle="pill" href="#cardeo" role="tab" aria-controls="cardeo" aria-selected="false">
                            <div class="text-start py-1 px-2">
                                <h6 class="mb-0">Kunduzgi ta'lim fakulteti</h6>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->

                    <li class="nav-item mt-2">
                        <a class="nav-link rounded" id="eyecare" data-bs-toggle="pill" href="#eye" role="tab" aria-controls="eye" aria-selected="false">
                            <div class="text-start py-1 px-2">
                                <h6 class="mb-0">Sirtqi ta'lim fakulteti</h6>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->

                    <li class="nav-item mt-2">
                        <a class="nav-link rounded" id="general-serve" data-bs-toggle="pill" href="#general" role="tab" aria-controls="general" aria-selected="false">
                            <div class="text-start py-1 px-2">
                                <h6 class="mb-0">Aniq va tabiy fanlar kefedrasi</h6>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->

                    <li class="nav-item mt-2">
                        <a class="nav-link rounded" id="medicine" data-bs-toggle="pill" href="#medical" role="tab" aria-controls="medical" aria-selected="false">
                            <div class="text-start py-1 px-2">
                                <h6 class="mb-0">Ijtimoiy fanlar kafedrasi</h6>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->
                </ul><!--end nav pills-->
            </div><!--end col-->

            <div class="col-md-8 col-12 mt-4 pt-2">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade bg-white show active p-4 rounded shadow" id="dental" role="tabpanel" aria-labelledby="dentalcare">
                        <div class="mt-4">
                            <h5>Universitetning tashkiliy tuzilmasi</h5>
                        </div>
                        <img src="/assets/images/structure/main.png" class="img-fluid rounded shadow" alt="">
                    </div><!--end teb pane-->

                    <div class="tab-pane fade bg-white p-4 rounded shadow" id="cardeo" role="tabpanel" aria-labelledby="cardeography">
                        <div class="mt-4">
                            <h5>Kunduzgi ta'lim fakulteti</h5>
                            <p class="text-muted my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, fugit. Error doloribus debitis, maxime ullam dolorem optio et dolor quisquam maiores consequuntur animi iusto deleniti aliquam architecto voluptas veniam? Ipsam.</p>
                            <a href="javascript:void(0)" class="text-primary">Batafsil <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                        <img src="/assets/images/medical/cardio.jpg" class="img-fluid rounded shadow" alt="">
                    </div><!--end teb pane-->

                    <div class="tab-pane fade bg-white p-4 rounded shadow" id="eye" role="tabpanel" aria-labelledby="eyecare">
                        <div class="mt-4">
                            <h5>Sirtqi ta'lim fakulteti</h5>
                            <p class="text-muted my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos nostrum quidem magni mollitia, vitae aliquam perspiciatis cupiditate praesentium velit culpa earum voluptates beatae veritatis. Nihil sapiente suscipit accusantium. Asperiores, quisquam?</p>
                            <a href="javascript:void(0)" class="text-primary">Batafsil <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                        <img src="/assets/images/medical/eyecare.jpg" class="img-fluid rounded shadow" alt="">
                    </div><!--end teb pane-->

                    <div class="tab-pane fade bg-white p-4 rounded shadow" id="general" role="tabpanel" aria-labelledby="general-serve">
                        <div class="mt-4">
                            <h5>"Pedagogika va ijtimoiy fanlar" kaderasi</h5>
                            <p class="text-muted my-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, quo et? Mollitia animi, unde doloribus alias sed, perspiciatis velit necessitatibus aut nemo voluptates eos numquam nobis quas! Quo, cum voluptates?</p>
                            <a href="javascript:void(0)" class="text-primary">Batafsil <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                        <img src="/assets/images/medical/general.jpg" class="img-fluid rounded shadow" alt="">
                    </div><!--end teb pane-->

                    <div class="tab-pane fade bg-white p-4 rounded shadow" id="medical" role="tabpanel" aria-labelledby="medicine">
                        <div class="mt-4">
                            <h5>Ijtimoiy fanlar kafedrasi</h5>
                            <p class="text-muted my-3">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                            <a href="javascript:void(0)" class="text-primary">Batafsil <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                        <img src="/assets/images/medical/medicine.jpg" class="img-fluid rounded shadow" alt="">
                    </div><!--end teb pane-->

                </div><!--end tab content-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- Testi Start -->
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Bizning professor-o'qituvchilar</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Biz sizga <span class="text-primary fw-bold">sifatli ta'lim</span> beraolamiz</p>
                </div>
            </div>
        </div>
        <!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4 pt-2">
                <div class="tiny-three-item">
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2">
                            <img src="/assets/images/client/01.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                <h6 class="text-primary">- Thomas  <small class="text-muted">C.E.O</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" >
                            <img src="/assets/images/client/02.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2">
                            <img src="/assets/images/client/03.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" >
                            <img src="/assets/images/client/04.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2">
                            <img src="/assets/images/client/05.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2">
                            <img src="/assets/images/client/06.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- Testi end -->



</section>
<!--end section-->
@include('parts.last_news')
