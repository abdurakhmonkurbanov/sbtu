<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\direction;
use App\Models\User_role;
use Hash;

class LoginController extends Controller
{
    public function loginform(){
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('phone','=',$request->phone)->first();
        if ($user){
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->user_id);
                $request->session()->put('fio',$user->full_name);
                $request->session()->put('img',$user->img);
                $role = $user->role;
                $user_role = User_role::where('role_id','=',$role)->first();
                $request->session()->put('user_type',$user_role->role_id);


                return redirect(route('index'))->with('message','Hurmatli '.$user->full_name.' <br> HUSH KELIBSIZ!');

            }
            else{
                return back()->with('message','Parol xato!!!');
            }
           }
        else{
                return back()->with('message','Login xato!!!');
            }
    }


    public function logout(){
        session()->flush();
        return redirect(route('index'));
    }

}
