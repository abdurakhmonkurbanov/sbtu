<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\page;
use Session;
use Str;

class ContentController extends Controller
{

    public function contentwrite(){

        if (Session::get('user_type') == 3)
        {
            return view('contentwrite',[
                'menu' =>$this->menu,
                'contents_part' => $this->content_part
            ]);
        }
        else{
            return redirect()->route('index');
        }

    }
    public function contentstore(Request $request){
        if (Session::get('user_type') == 3)
        {
            $request->validate([
                'menu_id' => 'required|not_in:0',
            ]);
            if($request->hasFile('img')){
                $randomString = Str::random(20);
                $newimgname = strtolower($randomString);
                $ext = $request->img->extension();
                $img_path = $request->img->storeAs('img',$newimgname.'.'.$ext,'public');

            }
            else{
                $img_path = 'img/noimage.jpg';
            }

            if($request->hasFile('fayl')){
                $randomString = Str::random(20);
                $newfilename = strtolower($randomString);

                $ext_file = $request->fayl->extension();
                $file_path = $request->fayl->storeAs('files',$newfilename.'.'.$ext_file,'public');
            }
            else{
                $file_path = null;
            }
            $content = new page;
            $content->menu_id = $request->menu_id;
            $content->title = $request->title;
            $content->img = $img_path;
            $content->file = $file_path;
            $content->page_desc = $request->page_desc;
            $content->page_text = $request->page_text;
            $content->author = Session::get('fio');
            $res = $content->save();

            if ($res){
                return redirect(route('contentwrite'))->with('message','Ma`lumot saqlandi');
            }
            else{
                return back()->with('message','Ma`lumot saqlanmadi');
            }
        }
        else{
            return redirect()->route('index');
        }

    }  ///  Yangi kontent  yozish

    public function contenteditshow(){
        if (Session::get('user_type') == 3)
        {

            //dd($contents);
            return view('contentedit',[
                'menu' =>$this->menu,
                'contents_part' => $this->content_part,
                'contents' => $this->contents
            ]);
        }
        else{
            return redirect()->route('index');
        }
    }  ////  KOntentlarni o'zgartirish

    public function contentdelete($id){
        if (Session::get('user_type') == 3)
        {
            ////    Lekin fayllar qolayapti
            $del = page::where('page_id','=',$id)->delete();

            return redirect()->route('contenteditshow')->with('message','Ma`lumot O`chirildi');
        }
        else{
            return redirect()->route('index');
            }
    }

}
