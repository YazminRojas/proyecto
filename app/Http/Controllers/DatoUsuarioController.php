<?php

namespace App\Http\Controllers;

use App\Models\DatoUsuario;
use App\Http\Requests\StoreDatoUsuarioRequest;
use App\Http\Requests\UpdateDatoUsuarioRequest;

class DatoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosUsuarios = DatoUsuario::all();
        return view('datosUsuarios.index')->with('datosUsuarios', DatoUsuario::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datosUsuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDatoUsuarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatoUsuarioRequest $request)
    {
        $request->validate([
            'NombrePerfil'      =>  'required',
            'NombrePersona'     =>  'required',
            'ApellidoPaterno'   =>  'required',
            'ApellidoMaterno'   =>  'required',
            'NumeroTelefono'    =>  'required',
            'Descripcion'       =>  'required'
        ]);

        $datoUsuario = new DatoUsuario([
            'NombrePerfil'    =>  $request->get('NombrePerfil'),
            'NombrePersona'   =>  $request->get('NombrePersona'),
            'ApellidoPaterno' =>  $request->get('ApellidoPaterno'),
            'ApellidoMaterno' =>  $request->get('ApellidoMaterno'),
            'NumeroTelefono'  =>  $request->get('NumeroTelefono'),
            'Descripcion'     =>  $request->get('Descripcion')
        ]);

        $datoUsuario->save();

        return redirect()->route('datosUsuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DatoUsuario  $datoUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(DatoUsuario $datoUsuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DatoUsuario  $datoUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit(DatoUsuario $datoUsuario)
    {
        $datoUsuario->edit();
        return redirect()->route('datosUsuarios.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatoUsuarioRequest  $request
     * @param  \App\Models\DatoUsuario  $datoUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDatoUsuarioRequest $request, DatoUsuario $datoUsuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DatoUsuario  $datoUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatoUsuario $datoUsuario)
    {
        $datoUsuario->delete();
        return redirect()->route('datosUsuarios.index');
    }
    public function datatable(){
        $datosUsuarios = DatoUsario::all();
        return view('datosUsuarios.datatable', compact('datosUsuarios'));
    }
}
