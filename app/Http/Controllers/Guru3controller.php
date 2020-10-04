<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\staff;

class Guru3controller extends Controller
{
    public function Guru3(){
        //$teacher = DB::table('guru')->get();
        //dump($teacher);
        $teacher = staff::all();
        return view('guru3', ['guru' => $teacher]);
    }
}
