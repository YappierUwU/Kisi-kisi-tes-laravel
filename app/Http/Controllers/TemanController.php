<?php

namespace App\Http\Controllers;

use App\Models\Teman;
use App\Http\Requests\StoreTemanRequest;
use App\Http\Requests\UpdateTemanRequest;

class TemanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temans = Teman::all();

        return view('teman',['temans'=>$temans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTemanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teman  $teman
     * @return \Illuminate\Http\Response
     */
    public function show(Teman $teman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teman  $teman
     * @return \Illuminate\Http\Response
     */
    public function edit(Teman $teman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemanRequest  $request
     * @param  \App\Models\Teman  $teman
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemanRequest $request, Teman $teman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teman  $teman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teman::find($id)->delete();

        return redirect()->back();
    }
}
