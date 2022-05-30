<?php

namespace App\Http\Controllers;

use App\Models\Compartir;
use App\Http\Requests\StoreCompartirRequest;
use App\Http\Requests\UpdateCompartirRequest;

class CompartirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compartirs = Compartir::all();
        return view('compartirs.index')->with('compartirs', Compartir::all());
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
     * @param  \App\Http\Requests\StoreCompartirRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompartirRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compartir  $compartir
     * @return \Illuminate\Http\Response
     */
    public function show(Compartir $compartir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compartir  $compartir
     * @return \Illuminate\Http\Response
     */
    public function edit(Compartir $compartir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompartirRequest  $request
     * @param  \App\Models\Compartir  $compartir
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompartirRequest $request, Compartir $compartir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compartir  $compartir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compartir $compartir)
    {
        //
    }
}
