<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\staff;

class Guru3controller extends Controller
{
    public function guru3(){
        $staffs = staff::all();
        return view('guru3', ['staff' => $staffs]);
    }
    
    public function add(){
        return view('add');
    }
    
    public function create(Request $request){
        $add = new staff();
            $add->id= $request->no;
            $add->nip=$request->nip;
            $add->nama= $request->nama;
            $add->ttl= $request->ttl;
            $add->alamat=$request->alamat;
            $add->save();
        return redirect('/guru3');
    }

    public function edit($id){
        $staff = Staff::find($id);
        return view('edit', ['staff'=>$staff]);
 }

    public function update($id, Request $request){
        $staff = Staff::find($id);
        $staff->id=$request->id;
        $staff->NIP=$request->NIP;
        $staff->nama=$request->nama;
        $staff->TTL=$request->TTL;
        $staff->Alamat=$request->Alamat;
        $staff->save();
        return redirect('/guru3');
    }

    public function delete ($id){
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('/guru3');
    }
}


