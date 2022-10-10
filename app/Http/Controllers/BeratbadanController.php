<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeratbadanController extends Controller
{
    public function tambah(Request $request){
        $Kg1 = $request->Kg1;
        $Kg2 = $request->Kg2;

        $hitung = $Kg1+$Kg2;

        return $hitung;
    }

    public function index(){

        return view('beratbedan');
    }
}
