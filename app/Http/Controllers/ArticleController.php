<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

//use Illuminate\Support\Facades\Cache;
//use Illuminate\Support\Facades\Gate;
//use PDF;


class ArticleController extends Controller
{
    public function article(){
        $articles = article::all();
        //$articles = DB:: all;
        return view('article', ['article' => $articles]);
    }

    public function add(){
        return view('addArticle');
    }

    public function create(Request $request){
            $add= new article();
            $add->id= $request->id;
            $add->title=$request->title;
            $add->content= $request->content;
            $add->imageurl= $request->imageurl;
            $add->save();
        return redirect('/article');
    }

    public function edit($id){
        $article = article::find($id);
        return view('edit', ['article'=>$article]);
    }

    public function update($id, Request $request){
        $article = article::find($id);
        $article->id= $request->id;
            $article->title=$request->title;
            $article->content= $request->content;
            $article->imageurl= $request->imageurl;
        $article->save();
        return redirect('/article');
    }

    public function delete ($id){
        $article = article::find($id);
        $article->delete();
        return redirect('/article');
    }
}
    