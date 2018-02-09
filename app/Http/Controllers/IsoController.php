<?php

namespace App\Http\Controllers;

use App\iso;
use Illuminate\Http\Request;

class IsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('iso.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\iso  $iso
     * @return \Illuminate\Http\Response
     */
    public function show(iso $iso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\iso  $iso
     * @return \Illuminate\Http\Response
     */
    public function edit(iso $iso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\iso  $iso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, iso $iso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\iso  $iso
     * @return \Illuminate\Http\Response
     */
    public function destroy(iso $iso)
    {
        //
    }
}
