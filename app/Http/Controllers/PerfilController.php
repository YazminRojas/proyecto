<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Http\Requests\StorePerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfils = Perfil::all();
        return view('perfils.index')->with('perfils', Perfil::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePerfilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerfilRequest $request)
    {
        $request->validate([
            'NombrePerfil'      =>  'required',
            'NombrePersona'     =>  'required',
            'ApellidoPaterno'   =>  'required',
            'ApellidoMaterno'   =>  'required',
            'NumeroTelefono'    =>  'required',
            'Descripcion'       =>  'required'
        ]);

        $perfil = new Perfil([
            'NombrePerfil'    =>  $request->get('NombrePerfil'),
            'NombrePersona'   =>  $request->get('NombrePersona'),
            'ApellidoPaterno' =>  $request->get('ApellidoPaterno'),
            'ApellidoMaterno' =>  $request->get('ApellidoMaterno'),
            'NumeroTelefono'  =>  $request->get('NumeroTelefono'),
            'Descripcion'     =>  $request->get('Descripcion')
        ]);

        $perfil->save();

        return redirect()->route('perfils.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        $perfil->edit();
        return redirect()->route('perfils.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerfilRequest  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerfilRequest $request, Perfil $perfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect()->route('perfils.index');
    }
    public function datatable(){
        $Perfils = Perfil::all();
        return view('perfils.datatable', compact('perfils'));
    }
}
