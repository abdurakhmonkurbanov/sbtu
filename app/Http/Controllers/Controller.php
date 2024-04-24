<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

use App\Models\menu;
use App\Models\page;
use App\Models\published_in;
use App\Models\catalog;
use App\Models\direction;

use Session;
use Str;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $content_part;
    public $lasn_news;
    public $published;


    use AuthorizesRequests, ValidatesRequests;
    public function __construct(){
        $menu = menu::with('children')->where('submenu','=',0)->get();
        $this->content_part = menu::all();
        $this->menu = $menu;

        $directions =direction::all();
        $contents = menu::join('pages','pages.menu_id','=','menus.id')
                            ->orderBy('pages.created_at','DESC')
                            ->get();
        $last_news = page::where('menu_id','=',16)
                            ->orderBy('created_at','DESC')
                            ->limit(6)
                            ->get();
        $this->last_news = $last_news;
        $this->contents = $contents;
        $this->directions = $directions;
        $published  = published_in::where('published','=',1)
                                    ->orderby('id','DESC')
                                    ->get();
        $this->published = $published;

        ////  Lib
        $menu_lib = catalog::with('children')->where('submenu','=',0)->get();
        $this->menu_lib = $menu_lib;

    }
}
