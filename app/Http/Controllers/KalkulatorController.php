<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function coba(){
        return 'coba';
    }

    public function index(){
        return view('form');
    }

    public function hitung(Request $request){

        $bil1 = $request->bil1 ;
        $bil2 = $request->bil2 ;

        $hasil = $bil1 + $bil2;
        return $hasil;

    }




}
