<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\direction;
use App\Models\User_role;
use Hash;

class RegistrationController extends Controller
{
    public function regform(){
        $direction = direction::all();
        return view('registration',[
            'direction' => $direction
        ]);
    }

    public function registration1(Request $request){
        //dd($request->all());
        $request->validate([
            'full_name' => 'required',
            'phone' => 'required|unique:users|max:255',
            'password' => 'required',
            'repassword' => 'required_with:password|same:password'
        ]);
        $user = new User;
        $user->full_name = $request->full_name;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
            if (($request->role !=1) and ($request->role !=2)) {
                $user->role = 2;
            }
            else{
                $user->role = $request->role;
            }
            if (($request->direction == 0) and ($request->role ==1))
            {
                return back()->with('direc_error','Siz yo`nalishni tanlamadingiz!');
            }
        $user->direction_id = $request->direction;
        $user->img = '/assets/images/client/user.png';
        $res = $user->save();
        if ($res){
            $request->session()->put('loginId',$user->user_id);
            $request->session()->put('fio',$user->full_name);
            $request->session()->put('img',$user->img);
            $role = $user->role;
            $user_role = User_role::where('role_id','=',$role)->first();
            $request->session()->put('user_type',$user_role);

            return redirect(route('index'))->with('message','Siz ro`yxatdan o`tdingiz');
        }
        else{
            return back()->with('message','Siz ro`yxatdan o`tmadingiz');
        }
    }
}
