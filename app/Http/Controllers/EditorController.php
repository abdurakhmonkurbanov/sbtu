<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\article;
use App\Models\page;
use App\Models\published_in;
use App\Models\journal_page;

use Illuminate\Support\Facades\DB;
use Session;
use Str;

class EditorController extends Controller
{
    public function index(){
        if(Session::get('user_type') == 5)
        {
            $articles = DB::table('articles')
            ->where('published_in_id','=','-1')

            ->get();
        return view('editor',[
            'menu' => $this->menu,
            'published' => $this->published,
            'articles' => $articles
            ]);
        }
        else {
            return redirect(route('login'))->with('message','Siz muxarrir emssiz!!!');
                }
    }


    public function edit_article($article_id){   //  Jo'natish formasi ham shu yerda
        if(Session::get('user_type') == 5)
        {
            $article = DB::table('articles')
            ->where('id','=',$article_id)
            ->get();
            $pub_in = published_in::where('file','=',NULL)->get();
        return view('editor',[
            'menu' => $this->menu,
            'published' => $this->published,
            'pub_in' => $pub_in,
            'article' => $article
            ]);
        }
    else {
             return redirect(route('login'))->with('message','Siz muxarrir emassiz!!!');
        }
    }

    public function store(Request $request){
        if(Session::get('user_type') == 5)
        {
            $request->validate([
                'article_id'=>'required',
                'published_in_id' => 'required|not_in:0',
                'pdf_file_name'=>'required',
            ]);
            if($request->hasFile('pdf_file_name')){
                $randomString = Str::random(20);
                $newfilename = strtolower($randomString);
                $ext_file = $request->pdf_file_name->extension();
                $file_path = $request->pdf_file_name->storeAs('journal/pdf_files',$newfilename.'.'.$ext_file,'public');
            }
            $article = article::find($request->article_id);
            //dd(article_id)
            $article->published_in_id = $request->published_in_id;
            $article->pdf_file_name = $file_path;

            $res = $article->update();
            if ($res){
                return redirect(route('editor.index'))->with('message','Ma`lumotlar saqlandi');
            }
            else{
                return back()->with('message','Ma`lumot saqlanmadi');
            }

        }
        else {
            return redirect(route('editor.index'))->with('message','Siz muxarrir emassiz!!!');
                }
    }

    public function article_cancel($article_id){
        if(Session::get('user_type') == 5)
        {
            $article = article::find($article_id);
            $article->published_in_id = 0;
            $article->updated_at = date('Y-m-d H:i:s');
            $res = $article->update();
            if ($res){
                return redirect(route('editor.index'))->with('message','Ma`lumotlar saqlandi');
            }
            else{
                return back()->with('message','Ma`lumot saqlanmadi');
            }

        }
        else {
            return redirect(route('login'))->with('message','Siz muxarrir emssiz!!!');
            }
    }

    public function set_index(){
        if(Session::get('user_type') == 5)
        {
            $journals_set = published_in::orderBy('created_at','DESC')->get();
            return view('editor_set',[
                'journals_set' => $journals_set,
                'menu' => $this->menu,
                'published' => $this->published
            ]);
        }
        else {
            return redirect(route('login'))->with('message','Siz muxarrir emssiz!!!');
            }
    }

    public function set_new(Request $request){
        if(Session::get('user_type') == 5)
        {
            $request->validate([
                'set_name'=>'required',
            ]);
            $journals_set = new published_in;
            $journals_set->name = $request->set_name;
            $journals_set->published = 0;
            $res = $journals_set->save();

            if ($res){
                return redirect(route('set.index'))->with('message','Ma`lumot saqlandi');
            }
            else{
                return back()->with('message','Ma`lumot saqlanmadi');
            }


        }
        else {
            return redirect(route('login'))->with('message','Siz muxarrir emassiz!!!');
            }
    }

    public function set_done(Request $request){
        if(Session::get('user_type') == 5)
        {
            $request->validate([
                'set_name'=>'required|not_in:0',
                'set_file'=>'required',
            ]);

            if($request->hasFile('set_file')){
                $randomString = Str::random(20);
                $newfilename = strtolower($randomString);
                $ext_file = $request->set_file->extension();
                $file_path = $request->set_file->storeAs('journal/journal_set_files',$newfilename.'.'.$ext_file,'public');
            }
            $journals_set = published_in::find($request->set_name);
            $journals_set->file = $file_path;
            $journals_set->published = 1;
            $journals_set->updated_at = date('Y-m-d H:i:s');
            $res = $journals_set->update();
            if ($res){
                return redirect(route('set.index'))->with('message','Ma`lumotlar saqlandi');
            }
            else{
                return back()->with('message','Ma`lumot saqlanmadi');
            }
        }
        else {
            return redirect(route('login'))->with('message','Siz muxarrir emassiz!!!');
            }
    }

}
