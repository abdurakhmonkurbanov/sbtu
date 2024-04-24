<!-- Hero Start -->
<section class="bg-half-170 d-table w-100 it-home" style="background: url('/assets/images/it/bg1.jpg') center center;">
    <div class="bg-overlay"></div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="title-heading">
                    <h1 class="fw-bold text-white title-dark mb-3">BARQAROR RIVOJLANISH <br> Ilmiy-amaliy   jurnali </h1>

                    <h4 class="para-desc text-white-50">Universitetimizda tashkil etilgan ommaviy axborot vositasi sifatida "BARQAROR RIVOJLANISH" nomli ilmiy-amaliy jornalida quyidagi yo'nalishlarda. <br>
                        <span class="text-white typewrite" data-period="2000" data-type='[ "01.00.00 – Matematika fanlari", "02.00.00 – Kimyo fanlari", "03.00.00 – Biologiya fanlari", "04.00.00 – Geologiyamineralogiya fanlari", "05.00.00 – Texnika fanlari", "06.00.00 – Qishloq xo‘jaligi fanlari ", "07.00.00 – Tarix fanlari", "08.00.00 – Iqtisodiyot fanlari", "09.00.00 – Falsafa fanlari", "10.00.00 – Filologiya fanlari", "11.00.00 – Geografiya fanlari", "12.00.00 – Yuridik fanlar", "13.00.00 – Pedagogika fanlari", "14.00.00 – Tibbiyot fanlari", "15.00.00 – Farmasevtika fanlari", "16.00.00 – Veterinariya fanlari", "17.00.00 – San’atshunoslik fanlari ", "18.00.00 – Arxitektura ", "19.00.00 – Psixologiya fanlari ", "21.00.00 – Harbiy fanlar", "22.00.00 – Sosiologiya fanlari", "23.00.00 – Siyosiy fanlar ", "24.00.00 – Islomshunoslik fanlari" ]'> <span class="wrap"></span>
                        maqola chop etishingiz mumkin
                    </h4>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6  mt-sm-0 pt-sm-0">
                <div class="card shadow rounded border-0 ms-lg-5">
                    <div class="card-body">
                        <h3 class="card-title fw-bold text-center">Maqola jo'natish</h3>
                        @if (Session::get('user_type') != '2')
                            <h5>Jurnalga maqola yuborish uchun avval oddiy foydanaluvchi bo'lib <a href="{{route('loginform')}}">
                            <span class="btn btn-pills btn-outline-info  btn-sm">Tizimga kirishingiz</span>
                        </a> SHART!</h5>
                        @endif


                        <form class="login-form" action="{{route('article_send')}} " method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Muallif(lar)ning ismi va familiyasi <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control ps-5" placeholder="FIO"  name="authors" required="" value="{{old('authors')}}">
                                            <span class="text-danger">@error('authors') {{'Muallif(lar)ning ismi va familiyasi xato'}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Maqola tituli <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="file-text" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control ps-5" placeholder="Title" name="title" required="" value="{{old('title')}}">
                                            <span class="text-danger">@error('title') {{'Maqola tituli xato'}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Annotatsiya<span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="check-circle" class="fea icon-sm icons"></i>
                                            <textarea class="form-control ps-5" placeholder="Annotatsiya (O'zbek tilida)" name="abstract_uz" required="">{{old('abstract_uz')}}</textarea>
                                            <span class="text-danger">@error('abstract_uz') {{'Annotatsiya xato'}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Аннотация<span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="check-circle" class="fea icon-sm icons"></i>
                                            <textarea class="form-control ps-5" placeholder="Аннотация (Rus tilida)" name="abstract_ru" required="">{{old('abstract_ru')}}</textarea>
                                            <span class="text-danger">@error('abstract_ru') {{'Аннотация xato'}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Abstract<span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="check-circle" class="fea icon-sm icons"></i>
                                            <textarea class="form-control ps-5" placeholder="Abstract (Ingliz tilida)" name="abstract_en" required="">{{old('abstract_en')}}</textarea>
                                            <span class="text-danger">@error('abstract_en') {{'Abstract xato'}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Kalit so'zlar<span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <textarea class="form-control ps-5" placeholder="Kalit so'zlar" name="key_words" required="">{{old('key_words')}}</textarea>
                                            <span class="text-danger">@error('key_words') {{'Kalit so`zlar xato'}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Tadqiqot yo'nalishini tanlang<span class="text-danger">*</span></label>
                                        <select class="form-select form-control" aria-label="Default select example" name="research_field">
                                            <option selected="" value="0">Tadqiqot yo'nalishi</option>
                                            <option value="01.00.00 – Matematika">01.00.00 – Matematika
                                                <option value="02.00.00 – Kimyo fanlari">02.00.00 – Kimyo fanlari
                                                <option value="03.00.00 – Biologiya fanlari">03.00.00 – Biologiya fanlari
                                                <option value="04.00.00 – Geologiyamineralogiya fanlari">04.00.00 – Geologiyamineralogiya fanlari
                                                <option value="05.00.00 – Texnika fanlari">05.00.00 – Texnika fanlari
                                                <option value="06.00.00 – Qishloq xo`jaligi fanlari ">06.00.00 – Qishloq xo‘jaligi fanlari
                                                <option value="07.00.00 – Tarix fanlari">07.00.00 – Tarix fanlari
                                                <option value="08.00.00 – Iqtisodiyot fanlari">08.00.00 – Iqtisodiyot fanlari
                                                <option value="09.00.00 – Falsafa fanlari">09.00.00 – Falsafa fanlari
                                                <option value="10.00.00 – Filologiya fanlari">10.00.00 – Filologiya fanlari
                                                <option value="11.00.00 – Geografiya fanlari">11.00.00 – Geografiya fanlari
                                                <option value="12.00.00 – Yuridik fanlar">12.00.00 – Yuridik fanlar
                                                <option value="13.00.00 – Pedagogika fanlari">13.00.00 – Pedagogika fanlari
                                                <option value="14.00.00 – Tibbiyot fanlari">14.00.00 – Tibbiyot fanlari
                                                <option value="15.00.00 – Farmasevtika fanlari">15.00.00 – Farmasevtika fanlari
                                                <option value="16.00.00 – Veterinariya fanlari">16.00.00 – Veterinariya fanlari
                                                <option value="17.00.00 – San’atshunoslik fanlari ">17.00.00 – San’atshunoslik fanlari
                                                <option value="18.00.00 – Arxitektura ">18.00.00 – Arxitektura
                                                <option value="19.00.00 – Psixologiya fanlari ">19.00.00 – Psixologiya fanlari
                                                <option value="21.00.00 – Harbiy fanlar">21.00.00 – Harbiy fanlar
                                                <option value="22.00.00 – Sosiologiya fanlari">22.00.00 – Sosiologiya fanlari
                                                <option value="23.00.00 – Siyosiy fanlar ">23.00.00 – Siyosiy fanlar
                                                <option value="24.00.00 – Islomshunoslik fanlari">24.00.00 – Islomshunoslik fanlari
                                        </select>
                                        <span class="text-danger">@error('research_field') {{'Tadqiqot yo`nalishini tanlang'}} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Maqola faylini  belgilang  <span class="text-danger">* (maqolalar faqat .*doc,*.docx formatda)</span></label>
                                            <input type="file" id="formFile" name="file_name" class="form-control"  required="">
                                            <span class="text-danger">@error('file_name') {{'Maqola fayilini tanlang tanlang'}} @enderror</span>
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Muharrirga yozing <span class="text-danger"> (muhim emas) </span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <textarea class="form-control ps-5" placeholder="Xabar qoldiring" name="message">{{old('message')}}</textarea>
                                                <span class="text-danger">@error('key_words') {{'Kalit so`zlar xato'}} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                Formani tugat
                                -->

                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Maqolani jo'natish</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- End Hero -->
<!-- Start Features -->
<section class="bg-light">
    <div class="container-fluid px-0">
        <div class="row g-0 align-items-center">
            <div class="col-xl-2 col-lg-6 col-md-6">
                <div class="card features fea-primary text-center rounded-0 px-4 py-5 bg-light bg-gradient position-relative overflow-hidden border-0">
                    <span class="h2 icon2 text-primary">
                        <i class="uil uil-file-check-alt"></i>
                    </span>
                    <div class="card-body p-0 content">
                       <a href="{{route('journal_page',1)}} "> <h5>Maqolaga qo'yilgan talablar</h5></a>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-xl-2 col-lg-6 col-md-6">
                <div class="card features fea-primary text-center rounded-0 px-4 py-5 bg-light bg-gradient position-relative overflow-hidden border-0">
                    <span class="h2 icon2 text-primary">
                        <i class="uil uil-archive"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <a href="{{route('archive')}} "> <h5>Arxiv</h5></a>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-xl-2 col-lg-6 col-md-6">
                <div class="card features fea-primary text-center rounded-0 px-4 py-5 bg-light bg-gradient position-relative overflow-hidden border-0">
                    <span class="h2 icon2 text-primary">
                        <i class="uil uil-file-search-alt"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <a href="{{route('myarticles')}} "> <h5>Mening maqolalarim</h5></a>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-xl-2 col-lg-6 col-md-6">
                <div class="card features fea-primary text-center rounded-0 px-4 py-5 bg-light bg-gradient position-relative overflow-hidden border-0">
                    <span class="h2 icon2 text-primary">
                        <i class="uil uil-usd-circle"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <a href="{{route('journal_page',2)}} "> <h5>To'lov usullari</h5></a>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-xl-2 col-lg-6 col-md-6">
                <div class="card features fea-primary text-center rounded-0 px-4 py-5 bg-light bg-gradient position-relative overflow-hidden border-0">
                    <span class="h2 icon2 text-primary">
                        <i class="uil uil-users-alt"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <a href="{{route('journal_page',4)}} "> <h5>Tahririyat kengashi</h5></a>

                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xl-2 col-lg-6 col-md-6">
                <div class="card features fea-primary text-center rounded-0 px-4 py-5 bg-light bg-gradient position-relative overflow-hidden border-0">
                    <span class="h2 icon2 text-primary">
                        <i class="uil uil-invoice"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <a href="{{route('journal_page',3)}} "> <h5>Jurnal haqida</h5></a>

                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Features -->

