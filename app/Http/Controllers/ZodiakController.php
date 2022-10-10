<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiakController extends Controller
{
    public function index(){
        return view('zodiak');
    }

    public function cari(Request $request){
        $tanggal = $request->tanggal;
        $bulan = $request->bulan;

        if($bulan > 0 && $bulan <13 && $tanggal > 0 && $tanggal < 32){
            if($bulan == 10){
                if($tanggal > 0 && $tanggal < 20){
                    $hasil = 'Zodiak Anda Virgo';
                }
            }
        }
        return $hasil;
    }
}
