<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\article;
use App\Models\page;
use App\Models\published_in;
use App\Models\journal_page;
use Illuminate\Support\Facades\DB;


use Str;
use Illuminate\Support\Facades\Storage;



class JournalController extends Controller
{

    public function index(){
        $page = journal_page::where('id','=',3)->get();
        return view('journal',[
            'menu' => $this->menu,
            'published' => $this->published,
            'journal_page' => $page

    ]);
    }

    public function journal_page($id){

        $page = journal_page::where('id','=',$id)->get();
            return view('journal',[
                'menu' => $this->menu,
                'journal_page' => $page,
                'published' => $this->published
        ]);
    }

    public function myarticles(){
        if(Session::get('user_type') == 2)
        {
            $user_id = Session::get('loginId');
            $articles = article::where('user_id','=',$user_id)
            ->leftJoin('published_ins', 'published_ins.id', '=', 'articles.published_in_id')
            ->get();    //  Juda ajoyib yechim bor ekan
           // dd($articles);
            return view('journal',[
                'menu' => $this->menu,
                'published' => $this->published,
                'articles' =>$articles
        ]);
        }
        else {
            return redirect(route('login'))->with('message','Siz oddiy foydalanuvchi bo`lib avtorizatsiyadan o`ting');
        }

    }

    public function archive(){

        $archive = article::where('pdf_file_name','!=','')
                            ->leftJoin('published_ins', 'published_ins.id', '=', 'articles.published_in_id')
                            ->orderby('articles.id','DESC')
                            ->get();
            return view('journal',[
                'menu' => $this->menu,
                'archive' => $archive,
                'published' => $this->published
        ]);
    }


    public function article_send(Request $request){
        if(Session::get('user_type') == 2)
        {
            $request->validate([
                'authors'=>'required',
                'title'=>'required',
                'abstract_uz'=>'required',
                'abstract_ru'=>'required',
                'abstract_en'=>'required',
                'key_words'=>'required',
                'research_field' => 'required|not_in:0',
                'file_name'=>'required',
            ]);
            if($request->hasFile('file_name')){

                $randomString = Str::random(20);
                $newfilename = strtolower($randomString);
                $ext_file = $request->file_name->extension();
                $file_path = $request->file_name->storeAs('journal/doc_files',$newfilename.'.'.$ext_file,'public');
            }
            else{
                $file_path = null;
            }
            $article = new article;
            $article->user_id = Session::get('loginId');
            $article->authors = $request->authors;
            $article->article_title = $request->title;
            $article->abstract_uz = $request->abstract_uz;
            $article->abstract_ru = $request->abstract_ru;
            $article->abstract_en = $request->abstract_en;
            $article->key_words = $request->key_words;
            $article->research_field = $request->research_field;
            $article->published_in_id = -1;

            $article->file_name = $file_path;
            $article->message = $request->message;

            $res = $article->save();

            if ($res){
                return redirect(route('myarticles'))->with('message','Maqola jo`natildi');
            }
            else{
                return back()->with('message','Ma`lumot saqlanmadi');
            }
        }
        else {
            return redirect(route('login'))->with('message','Siz oddiy foydalanuvchi bo`lib avtorizatsiyadan o`ting');
        }

    }
}
