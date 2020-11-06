<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\staff;

class managecontroller extends Controller
{
    public function guru3(){
        $staffs = staff::all();
        return view('guru3', ['staff' => $staffs]);
    }
    public function addArticle(){
        return view('addArticle');
    }
    
    public function createArticle(Request $request){
        $add = new staff();
            $add->id= $request->no;
            $add->nip=$request->nip;
            $add->nama= $request->nama;
            $add->ttl= $request->ttl;
            $add->alamat=$request->alamat;
            $add->save();
        return redirect('/manage');
    }

    public function editArticle($id){
        $staff = Staff::find($id);
        return view('editArticle', ['staff'=>$staff]);
    }

    public function updateArticle($id, Request $request){
        $staff = Staff::find($id);
        $staff->id=$request->id;
        $staff->NIP=$request->NIP;
        $staff->nama=$request->nama;
        $staff->TTL=$request->TTL;
        $staff->Alamat=$request->Alamat;
        $staff->save();
        return redirect('/manage');
    }

    public function deleteArticle ($id){
        $staff = Staff::find($id);
        $staff->deleteArticle();
        return redirect('/manage');
    }
}

