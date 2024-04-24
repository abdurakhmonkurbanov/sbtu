
<!-- Blog Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- BLog Start -->
            <div class="col-lg-9 col-md-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-12">
                        <div class="card blog rounded border-0 shadow">
                            <div class="card-title">

                            </div>
                            <div class="card-body">
                                @isset($journal_page)
                                    @foreach ($journal_page as $item)
                                        <h3 class="card-title text-center">
                                                {!! $item->j_title !!}
                                        </h3>
                                                {!! $item->j_text !!}
                                    @endforeach
                                @endisset
                                @isset($archive)
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Muallif</th>
                                            <th scope="col">Maqola nomi</th>
                                            <th scope="col">Tadqiqot yo'nalishi</th>
                                            <th scope="col">Jurnal soni</th>
                                            <th scope="col">Ko'chirib olish</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                    <?php $i=1;  ?>
                                    @foreach ($archive as $item)
                                            <tr>
                                            <th scope="row">{{$i}} </th>
                                            <td>{{$item->authors}} </td>
                                            <td>{{$item->article_title}} </td>
                                            <td>{{$item->research_field}} </td>
                                            <td>Maqolangiz to'plamning <span class="text-primary">{{$item->name}}</span>  da </td>
                                            <td><a href="/storage/{{$item->pdf_file_name}}" class="btn btn-icon btn-outline-success"><i class="uil uil-save"></i></a></td>
                                          </tr>
                                          <?php $i=$i + 1;  ?>
                                    @endforeach
                                        </tbody>
                                      </table>
                                @endisset

                                @isset($articles)
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Muallif</th>
                                            <th scope="col">Maqola nomi</th>
                                            <th scope="col">Annotatsiya</th>
                                            <th scope="col">Kalit so'zlar</th>
                                            <th scope="col">Tadqiqot yo'nalishi</th>
                                            <th scope="col">Chop etilgan to'plam</th>
                                            <th scope="col">Chop etilgan fayl</th>
                                            <th scope="col">Jo'natilgan fayl</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                    <?php $i=1;  ?>
                                    @foreach ($articles as $item)
                                            <tr>
                                            <th scope="row">{{$i}} </th>
                                            <td>{{$item->authors}} </td>
                                            <td>{{$item->article_title}} </td>
                                            <td>{{Str::limit($item->abstract_uz, 70, " ...");}} </td>
                                            <td>{{Str::limit($item->key_words, 70, " ...");}} </td>
                                            <td>{{$item->research_field}} </td>
                                            @if ($item->published_in_id == -1)
                                                <td><span class="text-info"> Maqola hali chop etilmagan</span></td>
                                                <td><span class="text-info"> Maqola ko'rib chiqilmoqda</span></td>
                                            @else
                                                @if ($item->published_in_id == 0)
                                                <td><span class="text-danger"> Maqolani chop etish rad etilgan </span></td>
                                                <td><span class="text-danger"> Maqolani chop etish rad etilgan </span></td>
                                            @else
                                             <td>Maqolangiz to'plamning<span class="text-primary">{{$item->name}}</span>   da </td>
                                            <td><a href="/storage/{{$item->pdf_file_name}}" class="btn btn-icon btn-outline-success"><i class="uil uil-wordpress-simple"></i> </a></td>
                                            @endif
                                            @endif

                                            <td><a href="/storage/{{$item->file_name}}" class="btn btn-icon btn-outline-success"><i class="uil uil-wordpress-simple"></i></a></td>
                                          </tr>
                                          <?php $i=$i + 1;  ?>
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

            <!-- START SIDEBAR -->
            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 sidebar sticky-bar ms-lg-4">
                    <div class="card-body p-0">
                        <!-- RECENT POST -->
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
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Blog End -->
