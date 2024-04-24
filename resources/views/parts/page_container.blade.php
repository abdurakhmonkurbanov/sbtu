<!-- Start Privacy -->
<section class="section">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="card shadow rounded border-0">
                            <div class="card-body">
                                @foreach ($pages as $item)
                                    <h5 class="card-title">{!!$item->title!!} </h5>
                                    <p class="text-muted">
                                        {!! $item->page_text !!}
                                    </p>
                                    <div class="post-meta d-flex justify-content-between mt-3">
                                        <a href="javascript:window.print()" class="btn btn-soft-primary d-print-none"><i class="uil uil-print"></i> Chop etish</a>
                                        @if ($item->file != '')
                                        <a href="{{'/storage/'.$item->file}}" class="btn btn-soft-primary d-print-none"><i class="uil uil-file-download-alt"></i> Maqolaga biriktirilgan faylni ko'chirish </i></a>
                                        @endif

                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Privacy -->
