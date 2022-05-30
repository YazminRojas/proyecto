<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Http\Requests\StoreMateriaRequest;
use App\Http\Requests\UpdateMateriaRequest;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all();
        return view('materias.index')->with('materias', Materia::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMateriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMateriaRequest $request)
    {
        $request->validate([
            'NombreMateria'     =>  'required',
            'ClaveMateria'     =>  'required',
            'DocenteMateria'     =>  'required',
            'Edificio'     =>  'required',
            'Salon'     =>  'required'
        ]);

        $materia = new Materia([
            'NombreMateria'     =>  $request->get('NombreMateria'),
            'ClaveMateria'     =>  $request->get('ClaveMateria'),
            'DocenteMateria'     =>  $request->get('DocenteMateria'),
            'Edificio'     =>  $request->get('Edificio'),
            'Salon'     =>  $request->get('Salon')
        ]);

        $materia->save();

        return redirect()->route('materias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($materias)
    {
        $materias = Materia::all($materias);
        return view('materias.edit')->with('materias', Materia::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMateriaRequest  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMateriaRequest $request, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index');
    }
    public function datatable(Materia $materia){
        $materia = Materia::all();
        return view('materias.datatable', compact('materias'));
    }

}
