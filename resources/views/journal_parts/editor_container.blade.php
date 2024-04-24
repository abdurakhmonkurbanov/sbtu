
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
                                Maqolalar oynasi
                            </div>
                            <div class="card-body">
                                @isset($article)
                                    <?php $i=1;  ?>
                                    @foreach ($article as $item)
                                    Maqola muallifi: <b>{{$item->authors}}</b><hr>
                                    Maqola nomi: <b>{{$item->article_title}}</b><hr>
                                    Annotatsiya: <b>{{$item->abstract_uz}}</b><hr>
                                    Tadqiqot yo'nalishi: <b>{{$item->research_field}}</b><hr>
                                    Jo'natilgan fayl: <a href="/storage/{{$item->file_name}}" class="btn btn-outline-success"><i class="uil uil-file-download-alt"></i> ko'chirib olish</a><hr>
                                    Maqola talab darajasida bo'lmasa <br>
                                    <a href="{{route('article.cancel',$item->id)}}" class="btn btn-danger">Maqola qabul qilinmadi</a>
                                    <div class="card rounded border-0 shadow">
                                        <div class="card-title h4 text-center mt-4">
                                            Maqolani to'plamga joylashtirish
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('editor.store')}}" method="post" enctype="multipart/form-data">@csrf
                                                <input type="hidden" name="article_id" value="{{$item->id}}">
                                                    <h6 class="title mb-0"> To'plamni tanlang </h6>
                                                    <div class="mb-0">
                                                        <select class="form-select form-control" aria-label="Default select example" name="published_in_id">
                                                            <option selected="" value="0">Qaysi to'plamga joylashtirasiz</option>
                                                            @foreach ($pub_in as $item)
                                                                <option value="{{$item->id}}">{{$item->name}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label for="formFile" class="form-label">Taxrirlangan faylni belgilang <span class="text-danger">* (fayl faqat .*pdf formatda)</span></label>
                                                        <input type="file" id="formFile" name="pdf_file_name" class="form-control"  required="">
                                                        <span class="text-danger">@error('file_name') {{'Maqola fayilini tanlang tanlang'}} @enderror</span>
                                                      </div>
                                                <button type="submit" class="btn btn-success mt-3">Saqlash</button>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                                @endisset

                                @isset($articles)
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Muallif</th>
                                            <th scope="col">Maqola nomi</th>
                                            <th scope="col">Annotatsiya</th>
                                            <th scope="col">Tadqiqot yo'nalishi</th>
                                            <th scope="col">Tekshirish</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                    <?php $i=1;  ?>
                                    @foreach ($articles as $item)
                                            <tr>
                                            <th scope="row">{{$i}} </th>
                                            <td>{{$item->authors}} </td>
                                            <td>{{$item->article_title}} </td>
                                            <td>{{Str::limit($item->abstract_uz, 100, " ...");}} </td>
                                            <td>{{$item->research_field}} </td>
                                            <td><a href="{{route('edit.article',$item->id)}} " class="btn btn-icon btn-outline-success"><i class="uil uil-file-check-alt"></i></a></td>
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

            @include('journal_parts.editor_sitebar')
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Blog End -->
