<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::all();

        return view('buku',['book'=>$bukus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $bukubaru = new Buku();

            $bukubaru->id = $request->id;
            $bukubaru->judul = $request->judul;
            $bukubaru->pengarang = $request->pengarang;
            $bukubaru->penerbit = $request->penerbit;

            if(isset($bukubaru->id)){
                $update = Buku::find($bukubaru->id);
                $update->judul = $request->judul;
                $update->pengarang = $request->pengarang;
                $update->penerbit = $request->penerbit;
                $update->save();
            }else{
                $bukubaru->save();
            }


            return redirect('/buku');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Buku::find($id);
        $bukus = Buku::all();

        return view('buku', ['edit'=>$edit,'book'=>$bukus]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBukuRequest  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::find($id)->delete();

        return redirect()->back();
    }
}
