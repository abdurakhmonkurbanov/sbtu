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
                                            <th scope="col" class="border-bottom text-start">FIO</th>
                                            <th scope="col" class="border-bottom text-start">Telefon</th>
                                            <th scope="col" class="border-bottom">Passport</th>
                                            <th scope="col" class="border-bottom">Diplom</th>
                                            <th scope="col" class="border-bottom">Tanlanagn yo'nalishi</th>
                                            <th scope="col" class="border-bottom">Ro'yxatdan o'tgan vaqti</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($abiturent as $item)
                                            <tr>
                                                <td  style="text-align:justify">{{$item->full_name}} </td>
                                                <td  style="text-align:justify">{{$item->phone}} </td>
                                                <td  style="text-align:justify">{{$item->passport_sn}} </td>
                                                <td>{{$item->diplom}} </td>
                                                <td>{{$item->name}} </td>
                                                <td>{{$item->created_at}} </td>

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
