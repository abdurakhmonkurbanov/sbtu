<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\page;
use Session;
use Str;

class PageController extends Controller
{
    public function index(){
        return view('index',[
            'menu' => $this->menu,
            'last_news' =>$this->last_news,
            'directions' =>$this->directions
    ]);
    }

    public function show($menu_id){
        $pages = page::where('menu_id','=',$menu_id)
                ->join('menus','menus.id','=','pages.menu_id')
                ->get();
        return view('page',[
            'menu' => $this->menu,
            'pages' => $pages
    ]);
    }

    public function show2($page_id){
        $pages = page::where('page_id','=',$page_id)
                ->join('menus','menus.id','=','pages.menu_id')
                ->get();
        return view('page',[
            'menu' => $this->menu,
            'pages' => $pages
    ]);
    }


}
