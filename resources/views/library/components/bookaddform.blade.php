<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">

            <div class="col-12 col-lg-12">
                <div class="card border-lg-top-danger">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user mr-1 font-24 text-danger"></i>
                            </div>
                            <h4 class="mb-0 text-danger">Kitob joylash</h4>
                        </div>
                        <hr><form action="{{route('lib.book.add')}}" method="post" class="form-group" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kitob nomi</label>
                                        <h5 class="text-danger d-inline">@error('book_name') {{'Kitob nomini kiriting'}} @enderror</h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class="bx bx-book"></i></span>
                                            </div>
                                            <input type="text" name="book_name" class="form-control border-left-0" placeholder="Kitob nomini kiriting">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Qaysi katalog uchun</label>
                                        <h5 class="text-danger d-inline">@error('book_name') {{'Birini tanlang'}} @enderror</h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Katalogni tanlang</label>
                                            </div>
                                            <select name="catalog" class="custom-select" id="inputGroupSelect01">
                                                <option selected="" value="0">Choose...</option>
                                                @foreach ($catalogs as $item)
                                                    @if ($item->submenu != 0)
                                                        <option value="{{$item->id}}">{{$item->catalog_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Muallif</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Muallif tanlang</label>
                                            </div>
                                            <select name="author" class="custom-select" id="inputGroupSelect01">
                                                <option selected="" value="0">Choose...</option>
                                                @foreach ($authors as $item)
                                                        <option value="{{$item->id}}">{{$item->author_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><b class="text-primary">Agar muallif nomi ro'yxatda bo'lmasa</b> </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class=" bx bx-user-plus"></i></span>
                                        </div>
                                        <input name="new_author" type="text" class="form-control border-left-0" placeholder="Muallif nomini kiriting">
                                    </div>
                                </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label><b class="text-success"> Faylni yuklash</b> </label>
                                        <h5 class="text-danger d-inline">@error('fayl') {{'Faylni ko\'rsating'}} @enderror</h5>
                                        <div class="custom-file">
                                            <input type="file" name="fayl" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label><b class="text-info"> Rasmni yuklash</b> </label>

                                        <div class="custom-file">
                                            <input type="file" name="img" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-secondary">
                                        <label><b> Kitob haqida qisqacha</b></label>
                                        <h5 class="text-danger d-inline">@error('description') {{'Izoh yozing'}} @enderror</h5>
                                    </div>
                                    <textarea id="mytextarea" name="description" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-danger px-5">Saqlash</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>

</div>

