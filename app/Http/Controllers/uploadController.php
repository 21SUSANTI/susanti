<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\upload;

class uploadController extends Controller
{
    function index(){
        return view('uploadfile');
    }

    function insert(Request $request){
        $upload = "N";
        if($request->hasFile('filename'))
        {
            $destination = "upload";
            $filename = $request -> file('filename');
            $filename -> move($destination, $filename->getClientOriginalName());
            $upload = "Y";
        }
        if($upload=="Y"){
            $upload=new upload;
            $upload->nama = $request->nama;
            $upload->filename = $filename->getClientOriginalName();
            $upload->save();
    
        return redirect('/uploadfile');
    }
}
}
