<div class="page-content-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">Statistik ma'lumotlar</h4>
                </div>
                <hr>
                <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4"> <div class="row"><div class="col-sm-12"><table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 162px;">№</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 247px;">Foydalanuvchilar</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 106px;">Izoh</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 119px;">Kitob nomi</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 53px;">Kitob muallifi</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 53px;">Holat</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 91px;">Sana</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($stat as $item)
                                <tr role="row" class="odd">
                                    <td class="sorting_1" width=5%>{{$i}}</td>
                                    <td>{{$item->fio}} </td>
                                    <td>{{$item->adress}} </td>
                                    <td>{{$item->book_name}} </td>
                                    <td>{{$item->author_name}} </td>
                                    <td>@if ($item->action == 1)
                                        {{'Kitob o`qildi'}}
                                        @else
                                        {{'Kitob ko`chirib olindi'}}
                                        @endif </td>
                                    <td>{{$item->created_at}} </td>
                                </tr>
                                <?php $i++;  ?>
                            @endforeach


                            </tbody>

                    </table></div></div> </div>
                </div>
            </div>
        </div>

    </div>
</div>
