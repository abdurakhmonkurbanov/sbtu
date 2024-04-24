<div class="page-content-wrapper">
    <div class="page-content">
@if($path != '')
    <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
            <div class="card bg-secondary radius-15">
                <div class="card-body">
                    <p class="card-text text-white" style="height: 800px">
                        <embed src="{{$path}}#toolbar=0" width="100%" height="100%">

                </p>
                </div>
            </div>
        </div>
    </div>
    @endif
    </div>
</div>
