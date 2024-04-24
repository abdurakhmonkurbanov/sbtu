<!-- Start Privacy -->
<section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <form action="{{route('contentstore')}}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="col" id="select-box">
                                        <div class="component-wrapper rounded shadow">
                                            <div class="p- border-bottom">
                                                <h4 class="title mb-0">Kontent yaratish: </h4>
                                            </div>

                                            <div class="p-4">
                                                <div class="mb-0">
                                                    <select class="form-select form-control" aria-label="Default select example" name="menu_id">
                                                        <option selected="" value="0">Qaysi bo'lim uchun</option>
                                                        @foreach ($contents_part as $a_item)
                                                        <option value="{{$a_item->id}}">{{$a_item->name}} </option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger">@error('menu_id') {{'Bo`limni tanlang'}} @enderror</span>
                                                </div>
                                            </div>

                                            <div class="p-4">
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Kontent mavzusi" id="floatingTextarea" style="height: 100px" name="title">{{old('title')}}</textarea>
                                                    <label for="floatingTextarea" >Kontent mavzusi</label>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider border-top"></div>
                                            <div class="p-4">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Rasm faylni belgilang  <span class="badge rounded-pill bg-danger"> (agar mavjud bo'lsa) </span></label>
                                                    <input type="file" id="formFile" name="img" class="form-control" >
                                                  </div>
                                            </div>
                                            <div class="dropdown-divider border-top"></div>
                                            <div class="p-4">
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Kontent mavzusi" id="floatingTextarea1"  name="page_desc" style="height: 100px">{{old('page_desc')}}</textarea>
                                                    <label for="floatingTextarea1">Kontent haqida qisqacha</label>
                                                </div>

                                            </div>
                                            <div class="dropdown-divider border-top"></div>
                                            <div class="p-4">
                                                    <label class="form-label">Kontentning to'liq bayoni</label>
                                                    <div class="form-icon position-relative">
                                                        <textarea name="page_text" id="page_text" rows="4"  class="content3" placeholder="To`liq matn">{{old('page_text')}}</textarea>
                                                    </div>
                                            </div>
                                            <div class="dropdown-divider border-top"></div>
                                            <div class="p-4">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Faylni  belgilang  <span class="badge rounded-pill bg-danger"> (agar mavjud bo'lsa) </span></label>
                                                    <input type="file" id="formFile" name="fayl" class="form-control" >
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-4 mx-auto">
                                        <button class="btn btn-outline-info w-70" type="submit">Saqlash</button>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Privacy -->
