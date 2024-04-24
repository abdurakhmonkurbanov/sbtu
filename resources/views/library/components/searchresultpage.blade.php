<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">

            <div class="card radius-15">
                <div class="card-header border-bottom-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">Qidirish natijalari</h5>
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
                                    <td><a href="{{route('lib.book.open',['book_id' => $item->id])}}" class="btn btn-outline-success m-1"><i class="bx bx-book-reader"></i></a>

                                    <a href="{{route('lib.book.file',['action' => 2, 'book_id' => $item->id])}}"  class="btn btn-outline-danger m-1"><i class="bx bx-download"></i></a>
                                    </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
