<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

use App\Models\book;
use App\Models\historiy;
use Session;

class lib_PageController extends Controller
{

    public function index(){
        $res = book::join('catalogs','catalogs.id','=','books.catalogs_type')
        ->join('authors','authors.id', '=','books.author')
        -> orderBy('books.reader','DESC')
        ->limit(2)
        ->get();
        return view('library.index',[
            'menu' => $this->menu_lib,
            'result' => $res
        ]);
    }
    public function show($catalog_id){

        $books = DB::select("select * from books where catalogs_type = $catalog_id");
        return view('library.show',[
            'menu' => $this->menu_lib,
            'books' => $books
        ]);
    }

    public function search(){
        if (isset($_GET['word']) and $_GET['word'] != '')
        {
        $word = $_GET['word'];
        $res = book::join('catalogs','catalogs.id','=','books.catalogs_type')->join('authors','authors.id', '=','books.author') -> where('book_name','like','%'.$word.'%')->orwhere('book_description','like','%'.$word.'%')->orwhere('text','like','%'.$word.'%')->get();
            //dd($res);
        return view('library.search',[
            'menu' => $this->menu_lib,
            'result' => $res
        ]);
        }
        else{
            return view('library.index',[
                'menu' => $this->menu_lib
            ]);
        }

    }
    public function openfile($action,$book_id){
        if(Session()->has('loginId'))
        {

            $book = book::where('book_id','=',$book_id)->increment('reader');
            $book = book::where('book_id','=',$book_id)->first();
            $filePath ='/storage/'.$book->path;
            $filename = basename($filePath);
            if($action == 1){
                $his = new historiy;
                    $his->user_id = Session()->get('loginId');
                    $his->book_id = $book_id;
                    $his->action = 1;
                    $his->comments = $filename.' nomli kitob o`qildi';
                    $his_save = $his->save();

                return back()->with('path',$filePath);
            }
            if($action == 2){
                $book = book::where('book_id','=',$book_id)->increment('download');
                $book = book::where('book_id','=',$book_id)->first();
                $his = new historiy;
                    $his->user_id = Session()->get('loginId');
                    $his->book_id = $book_id;
                    $his->action = 2;
                    $his->comments = $filename.' nomli kitob ko`chirib olindi';
                    $his_save = $his->save();
                    return response()->download(public_path($filePath));
            }
        }
        else{
            return back()->with('xabar','Kitobni o`qish yoki ko`chirish uchun ro`yxatdan o`ting');
        }
    }

    public function open_book($book_id){
        //dd(Session()->all());
        if(Session()->has('loginId'))
        {
            $book = book::where('id','=',$book_id)->first();
            $book->increment('reader');
            $filePath = $book->path ;
            $filename = basename($filePath);
                $his = new historiy;
                    $his->user_id = Session()->get('loginId');
                    $his->book_id = $book_id;
                    $his->action = 1;
                    $his->comments = $filename.' nomli kitob o`qildi';
                    $his_save = $his->save();

                return view('open_book',[
                    'menu' => $this->menu,
                    'path' => $filePath
                ]);
        }
        else{
            return  redirect(route('loginform'))->with('xato','Kechirasiz siz ro`yxatdan o`tmadingiz!!!');
        }

    }
}
