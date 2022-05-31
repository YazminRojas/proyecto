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

        //$materias = Materia::all();
        //return view('materias.index')->with('materias',$materias);
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

        $materia->saveOrFail();

        return redirect()->route('materias.index')->with(["mensaje" => "Nivel creado",
    ]);;

    //return redirect('/materias');
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


        //$articulo = Articulo::find($id);
        //return view('articulo.edit')->with('articulo',$articulo);

        //return view('materias.edit', ['materias' => $materia,
    //]);
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

        $materia = Articulo::find($materia);
        $materia->NombreMateria = $request->get('NombreMateria');
        $materia->ClaveMateria = $request->get('ClaveMateria');
        $materia->DocenteMateria = $request->get('DocenteMateria');
        $materia->save();
      

        //return redirect('/materias');
        $materia->fill($request->input())->saveOrFail();
        return redirect()->route('materias.index')->with(["mensaje" => "Información actualizada"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //$articulo = Articulo::find($id);        
        //$articulo->delete();

        //return redirect('/articulos');




        $materia->delete();
        return redirect()->route('materias.index')->with(["mensaje" => "Nivel eliminado",
    ]);;
    }
    public function datatable(Materia $materia){
        $materia = Materia::all();
        return view('materias.datatable', compact('materias'));
    }

}
