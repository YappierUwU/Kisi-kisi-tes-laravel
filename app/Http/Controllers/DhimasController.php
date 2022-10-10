<?php

namespace App\Http\Controllers;

use App\Models\Dhimas;
use App\Http\Requests\StoreDhimasRequest;
use App\Http\Requests\UpdateDhimasRequest;

class DhimasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dhimas = Dhimas::all();

        return view('dhimas',['dhimas'=>$dhimas]);
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
     * @param  \App\Http\Requests\StoreDhimasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDhimasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dhimas  $dhimas
     * @return \Illuminate\Http\Response
     */
    public function show(Dhimas $dhimas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dhimas  $dhimas
     * @return \Illuminate\Http\Response
     */
    public function edit(Dhimas $dhimas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDhimasRequest  $request
     * @param  \App\Models\Dhimas  $dhimas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDhimasRequest $request, Dhimas $dhimas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dhimas  $dhimas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dhimas $dhimas)
    {
        //
    }
}
