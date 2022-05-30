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
        //$perfils = Perfil::all();
        //return view('perfils.index')->with('perfils', Perfil::all());
        return view('perfils.index', ["perfils"=>Perfil::all()]);
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
        $perfil = new Perfil($request->input());
        $perfil->saveOrFail();
        return redirect()->route('perfils.index')->with(["mensaje" => "Nivel creado",
        ]);

        //$perfil->save();

        //return redirect()->route('perfils.index');
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
        //$perfil->edit();
        //return redirect()->route('perfils.index');

        return view("perfils.edit", ["perfil" => $perfil,
    ]);
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
    $perfil->fill($request->input())->saveOrFail();
    return redirect()->route('perfils.index')->with(["mensaje" => "Información actualizada"]);
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
        return redirect()->route('perfils.index')->with(["mensaje" => "Nivel eliminado",
    ]);
    }
    //public function datatable(){
      //  $perfils = Perfil::all();
        //return view('perfils.datatable', compact('perfils'));
    //}
}