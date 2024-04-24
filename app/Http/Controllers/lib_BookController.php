<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\book;
use App\Models\author;
use App\Models\catalog;
use App\Models\historiy;
use Str;
use Session;
use Storage;
use File;

class lib_BookController extends Controller
{
    public function bookaddform(){
        if(Session::get('user_type') == 3)
        {
        $catalogs = catalog::where('submenu','!=',0)
        ->orderBy('catalog_name','ASC')
        ->get();
        $authors = author::all();

        return view('library.bookaddform',[
            'menu' => $this->menu_lib,
            'catalogs' => $catalogs,
            'authors' => $authors
        ]);
    }
    else {
        return redirect(route('login'))->with('message','Siz kontent meneger emassiz!!!');
        }
    }
    public function bookadd(Request $request){
        if(Session::get('user_type') == 3)
        {
            //dd($request->all());
        $request->validate([
            'book_name' => 'required',
            'description' => 'required',
            'catalog' => 'required|numeric|gt:0',
            'fayl' => 'required'

        ]);
        $book_name = $request->book_name;
        $catalog = $request->catalog;
        $author = $request->author;
        $new_author = $request->new_author;
        if($author == 0){
            $author = author::insertGetId([
                'author_name' => $new_author,
             ]);
        }

        if($request->hasFile('fayl')){
            $randomString = Str::random(20);
            $newfilename = strtolower($randomString);
            $ext_file = $request->fayl->extension();
            $fayl_path = $request->fayl->storeAs('library/pdf',$newfilename.'.'.$ext_file,'public');
        }

        if($request->hasFile('img')){

            $randomString = Str::random(20);
            $newfilename = strtolower($randomString);
            $ext_file = $request->img->extension();
            $img_path = $request->img->storeAs('library/img',$newfilename.'.'.$ext_file,'public');
        }
        else{
            $img_path = 'img/noimage.jpg';
        }
        $description = $request->description;
        // Saqlash
        $books = new book;
        $books->catalogs_type = $catalog;
        $books->book_name = $book_name;
        $books->book_description = $description;
        $books->text = '';
        $books->img = $img_path;
        $books->author = $author;
        $books->reader = 0;
        $books->download = 0;
        $books->path = $fayl_path;
        $books->save();
        return back()->with('xabar','Kitob saqlaandi');
    }
        else {
            return redirect(route('login'))->with('message','Siz kontent meneger emassiz!!!');
            }
    }
    public function bookdelete(Request $request){
        if(Session::get('user_type') == 3)
        {
        $book_id = $request->book_id;
        $book_path = book::where('book_id','=',$book_id)->first();
        $del_file_name = storage_path('app/public/'.$book_path->path);

        if(File::exists($del_file_name)){
            File::delete($del_file_name);

            $book_del = book::where('book_id','=',$book_id)->delete();
            $history_del = historiy::where('book_id','=',$book_id)->delete();
        }else{
            dd('File does not exists.');
        }

        return back()->with('xabar','Kitob o`chirildi');
        }
        else {
            return redirect(route('login'))->with('message','Siz kontent meneger emassiz!!!');
            }
    }
}
