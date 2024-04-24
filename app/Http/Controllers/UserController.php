<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\direction;
use App\Models\menu;
use App\Models\page;
use Session;
use Str;

class UserController extends Controller
{
    public function abitshow(){
        if (Session::get('user_type') == 4)
        {
            $abit = user::where('role','=',1)
            ->join('directions','directions.direct_id','=','users.direction_id')
            ->get();
            return view('abiturent',[
                'menu' => $this->menu,
                'abiturent' => $abit
                    ]);
        }
        else{
            return redirect()->route('index');
        }
    }
}
