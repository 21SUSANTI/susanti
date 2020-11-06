<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Gate;

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
    public function construct() {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){ 
        if(Gate::allows('manage-articles')) return $next($request); 
        abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addUser(){
        return view('addUser');
    }
    
    public function createUser(Request $request){
        $add = new staff();
            $add->id= $request->no;
            $add->nip=$request->nip;
            $add->nama= $request->nama;
            $add->ttl= $request->ttl;
            $add->alamat=$request->alamat;
            $add->save();
        return redirect('/user');
    }

    public function editUser($id){
        $staff = Staff::find($id);
        return view('editUser', ['staff'=>$staff]);
    }

    public function updateUser($id, Request $request){
        $staff = Staff::find($id);
        $staff->id=$request->id;
        $staff->NIP=$request->NIP;
        $staff->nama=$request->nama;
        $staff->TTL=$request->TTL;
        $staff->Alamat=$request->Alamat;
        $staff->save();
        return redirect('/user');
    }

    public function deleteUser ($id){
        $staff = Staff::find($id);
        $staff->deleteUser();
        return redirect('/user');
    }
}