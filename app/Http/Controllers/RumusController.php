<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumusController extends Controller
{
    public function index(){
        return view('rumus');
    }

    public function hitung(Request $request){
        $jari = $request->jari;
        $tinggi = $request->tinggi;

        $hasil = 3.14 * $jari * $jari * $tinggi;
        return $hasil;
    }
}
