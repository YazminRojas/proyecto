<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Http\Requests\StoreNotaRequest;
use App\Http\Requests\UpdateNotaRequest;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::all();
        return view('notas.index')->with('notas', Nota::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotaRequest $request)
    {
        $request->validate([
            'cuerpoTexto'     =>  'required',
            'tipoNota'     =>  'required',
            'colorimetria'     =>  'required',
            'horaInicial'     =>  'required',
            'horaFinal'     =>  'required'
        ]);

        $nota = new Nota([
            'cuerpoTexto'     =>  $request->get('cuerpoNota'),
            'tipoNota'     =>  $request->get('tipoNota'),
            'colorimetria'     =>  $request->get('colorimetria'),
            'horaInicial'     =>  $request->get('horaInicial'),
            'horaFinal'     =>  $request->get('horaFinal')
        ]);

        $nota->save();

        return redirect()->route('notas.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit(Nota $nota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotaRequest  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotaRequest $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        $nota->delete();
        return redirect()->route('notas.index');
    }
    public function datatable(){
        $Materias = Nota::all();
        return view('notas.datatable', compact('notas'));
    }
}