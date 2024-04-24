<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\book;
use App\Models\author;
use App\Models\catalog;
use App\Models\historiy;

class lib_StatisticController extends Controller
{
    public function index(){
        $stat = historiy::join('users','users.user_id','=','historiys.user_id')
                        ->join('books','books.book_id','=','historiys.book_id')
                        ->join('authors','authors.id','=','books.author')
                        ->get();
        //dd($stat);
        return view('library.statistic',[
            'stat' => $stat,
            'menu' => $this->menu_lib
        ]);
    }
}
