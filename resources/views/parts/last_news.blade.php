
        <!-- Blog STart -->
        <section class="section"  data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Oxirgi yangiliklar</h4>

                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($last_news as $item)
                        <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="card blog rounded border-0 shadow overflow-hidden">
                            <div class="position-relative">
                                <img src="{{'/storage/'.$item->img}}" class="card-img" alt="...">
                                <div class="overlay rounded-top"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="{{route('news',$item->page_id)}}" class="card-title title text-dark">{!! $item->title !!} </a></h5>
                                <p>
                                    {{Str::limit(strip_tags($item->page_desc),300,'...')}}

                                </p>
                                <div class="post-meta d-flex justify-content-between mt-3">

                                    <a href="{{route('news',$item->page_id)}}" class="text-primary h6">Batafsil <i class="uil uil-angle-right-b align-middle"></i></a>
                                    @if ($item->file != '')

                                    <a href="{{'/storage/'.$item->file}}" class="text-primary h6"><i class="uil uil-file-download-alt"></i>Biriktirilgan faylni ko'chirish </i></a>
                                    @endif

                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="uil uil-user"></i> {{$item->author}} </small>
                                <small class="text-light date"><i class="uil uil-calendar-alt"></i> {{$item->created_at}} </small>
                            </div>
                        </div>
                    </div><!--end col-->
                    @endforeach
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->
