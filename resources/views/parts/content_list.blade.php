<!-- Start Privacy -->
<section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <table class="table mb-0 table-center invoice-tb">
                                    <thead class="bg-light">
                                        <tr>
                                            <th scope="col" class="border-bottom text-start">Bo'lim</th>
                                            <th scope="col" class="border-bottom text-start">Mavzu</th>
                                            <th scope="col" class="border-bottom">Qisqa matn</th>
                                            <th scope="col" class="border-bottom">Yaratilgan vaqti</th>
                                            <th scope="col" class="border-bottom">Muallif</th>
                                            <th scope="col" class="border-bottom">Maqolani o'chirish</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contents as $item)
                                            <tr>
                                                <td  style="text-align:justify">{{$item->name}} </td>
                                                <td  style="text-align:justify">{!!$item->title!!} </td>
                                                <td  style="text-align:justify">{!!Str::limit($item->page_desc,300,'...')!!} </td>
                                                <td>{{$item->created_at}} </td>
                                                <td>{{$item->author}} </td>
                                                <td>
                                                    <!--
                                                    <a href="#" class="btn btn-icon btn-pills btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Kontentni o`zgartirish" alt=""><i class="uil uil-edit"></i></a>
                                                    -->
                                                    <a href="{{route('contentdelete',$item->page_id)}}" class="btn btn-icon btn-pills btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Kontentni o`chirish" alt=""><i class="uil uil-trash-alt"></i></a>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Privacy -->
