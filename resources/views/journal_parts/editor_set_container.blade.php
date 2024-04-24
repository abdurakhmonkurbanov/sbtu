
<!-- Blog Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- BLog Start -->
            <div class="col-lg-9 col-md-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-12">
                        <div class="card rounded border-0 shadow">
                            <div class="card-title h4 text-center">
                                To'plamlar oynasi
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card rounded border-0 shadow">
                                            <div class="card-title h5 text-center mt-3">
                                                Yangi jurnal to'plami yaratish
                                            </div>
                                            <div class="card-body">
                                                <form action="{{route('set.new')}}" method="post" enctype="multipart/form-data">@csrf

                                                        <input type="text" id="formFile" name="set_name" class="form-control"  required="" placeholder="To'plamga nom kiriting">
                                                        <span class="text-danger">@error('name') {{'To`plam nomini kiriting'}} @enderror</span>

                                                <button type="submit" class="btn btn-success mt-3">Yaratish</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card rounded border-0 shadow">
                                            <div class="card-title h5 text-center mt-3">
                                                To'plamni tayyorlash
                                            </div>
                                            <div class="card-body">
                                                <form action="{{route('set.done')}}" method="post" enctype="multipart/form-data">@csrf
                                                        <h6 class="title mb-0"> To'plamni tanlang </h6>
                                                        <div class="mb-0">
                                                            <select class="form-select form-control" aria-label="Default select example" name="set_name">
                                                                <option selected="" value="0">Qaysi to'plam</option>
                                                                @foreach ($journals_set as $item)
                                                                    <option value="{{$item->id}}">{{$item->name}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="formFile" class="form-label">Taxrirlangan faylni belgilang <span class="text-danger">* (fayl faqat .*pdf formatda)</span></label>
                                                            <input type="file" id="formFile" name="set_file" class="form-control"  required="">
                                                            <span class="text-danger">@error('file_name') {{'Maqola fayilini tanlang tanlang'}} @enderror</span>
                                                          </div>
                                                    <button type="submit" class="btn btn-success mt-3">Saqlash</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                @isset($journals_set)
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">To'plam nomi</th>
                                            <th scope="col">To'plam holati</th>
                                            <th scope="col">To'plam fayli</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                    <?php $i=1;  ?>
                                    @foreach ($journals_set as $item)
                                            <tr>
                                            <th scope="row">{{$i}} </th>
                                            @if ($item->published == 0)
                                                <td>To'plam hali chop etilmadi </td>
                                            @else
                                                <td>To'plam <span class="text-danger"> {{date('d.m.Y', strtotime($item->updated_at))}}</span> da chop etilgan </td>
                                            @endif
                                            <td>{{$item->name}} </td>
                                            <td>{{$item->file}} </td>
                                            <?php $i=$i + 1;  ?>
                                          </tr>
                                    @endforeach
                                        </tbody>
                                      </table>
                                @endisset


                            </div>
                        </div>
                    </div><!--end col-->

                </div><!--end row-->
            </div><!--end col-->
            <!-- BLog End -->

            @include('journal_parts.editor_sitebar')
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Blog End -->
