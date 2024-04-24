<!-- START SIDEBAR -->
<div class="col-lg-3 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
    <div class="card border-0 sidebar sticky-bar ms-lg-4">
        <div class="card-body p-0">
            <div class="widget mt-4">
                <a href="{{route('editor.index')}}" class="btn btn-soft-success mb-3"> Maqolalar oynasi </a>
                <br>
                <a href="{{route('set.index')}} " class="btn btn-soft-info"> To'plamlar oynasi </a>
            </div>
            <div class="widget mt-4">
                <span class="bg-light d-block py-2 rounded shadow text-center h3 mb-0">
                    Jurnal to'plamlar
                </span>

                <div class="mt-1">
                    @foreach ($published as $item)
                        <div class="d-flex align-items-center p-1">
                            <a href="/storage/{{$item->file}}" class="btn btn-soft-primary"> {{$item->name}} </a>
                        </div>
                    @endforeach



                </div>
            </div>
            <!-- RECENT POST -->


        </div>
    </div>
</div><!--end col-->
<!-- END SIDEBAR -->
