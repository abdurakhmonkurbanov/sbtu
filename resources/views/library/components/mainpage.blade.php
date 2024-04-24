<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="card radius-15 bg-voilet">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h2 class="mb-0 text-white">649 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                </div>
                                <div class="ml-auto font-35 text-white"><i class="lni lni-users"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Foydalanuvchilar</p>
                                </div>
                                <div class="ml-auto font-14 text-white">+4%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">

                    <div class="card radius-15 bg-primary-blue">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h2 class="mb-0 text-white">114 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                </div>
                                <div class="ml-auto font-35 text-white"><i class="lni lni-user"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Faol foydalanuvchilar</p>
                                </div>
                                <div class="ml-auto font-14 text-white">+14.7%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card radius-15 bg-rose">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h2 class="mb-0 text-white">98 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                </div>
                                <div class="ml-auto font-35 text-white"><i class="lni lni-book"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Kataloglar</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card radius-15 bg-sunset">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h2 class="mb-0 text-white">2080 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                </div>
                                <div class="ml-auto font-35 text-white"><i class="bx bx-book-add"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Kitoblar</p>
                                </div>
                                <div class="ml-auto font-14 text-white">6%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="card radius-15">
                <div class="card-header border-bottom-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">Eng yaxshi kitoblar katalogi</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Katalog nomi</th>
                                    <th>Kitob nomi</th>
                                    <th>Kitob muallifi</th>
                                    <th>Kitob haqida</th>
                                    <th>O'qildi</th>
                                    <th>O'qish / Ko'chirish</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @foreach ($result as $item)
                                <tr>
                                    <td>
                                        <h5>{{$i}}</h5>
                                        <?php
                                        $i++;
                                        ?>
                                    </td>
                                    <td>{{$item->catalog_name}} </td>
                                    <td>{{$item->book_name}}</td>
                                    <td>{{$item->author_name}}</td>
                                    <td>

                                    <a tabindex="0" class="btn btn-outline-info m-1" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="{!! Str::limit($item->book_description, 100, " ..."); !!}" data-original-title="Kitob haqida qisqacha"><i class="bx bx-message-detail"></i> </a>
                                    </td>
                                    <td>{{$item->reader}}</td>
                                    <td><a href="{{route('lib.book.file',['action' => 1, 'book_id' => $item->book_id])}}" class="btn btn-outline-success m-1"><i class="bx bx-book-reader"></i></a>

                                    <a href="{{route('lib.book.file',['action' => 2, 'book_id' => $item->book_id])}}"  class="btn btn-outline-danger m-1"><i class="bx bx-download"></i></a>
                                    </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card radius-15">
                <div class="card-header border-bottom-0">
                    <div class="d-lg-flex align-items-center">
                        <div>
                            <h5 class="mb-2 mb-lg-0">Tizimdan foydalanish</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div id="chart1"></div>
                </div>
            </div>


        </div>

    </div>
    <!--end page-content-wrapper-->
</div>
