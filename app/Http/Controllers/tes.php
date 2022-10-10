<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tes extends Controller
{

    public function index(){
        return view('tes');
    }

    public function tambah(Request $request){
        $bil1 = $request->bil1;
        $bil2 = $request->bil2;

        $hasil = $bil1+$bil2;

        return $hasil;
    }
}
