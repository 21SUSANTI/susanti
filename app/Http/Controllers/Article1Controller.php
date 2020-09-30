<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class Article1Controller extends Controller
{
    public function getAll() {
        $articles = Article::all();
        return view('articles', ['articles=> $articles']);
    }
    public function getById($id) {
        $articles = Article::find($id);
        return view('articles', ['articles=> $articles']);
    }
}