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
            'ApellidoPaterno'     =>  'required',
            'ApellidoMaterno'     =>  'required',
            'Edificio'     =>  'required',
            'Salon'     =>  'required'
        ]);

        $materia = new Materia([
            'NombreMateria'     =>  $request->get('NombreMateria'),
            'ClaveMateria'     =>  $request->get('ClaveMateria'),
            'DocenteMateria'     =>  $request->get('DocenteMateria'),
            'ApellidoPaterno'     =>  $request->get('ApellidoPaterno'),
            'ApellidoMaterno'     =>  $request->get('ApellidoMaterno'),
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
<<<<<<< HEAD
    public function edit($id){
        $materias=Materia::findOrFail($id);

        return view('materias.edit', compact('materias'));
=======
<<<<<<< HEAD
    public function edit($materias)
    {
        $materias = Materia::all($materias);
        return view('materias.edit')->with('materias', Materia::all());


        //$articulo = Articulo::find($id);
        //return view('articulo.edit')->with('articulo',$articulo);

        //return view('materias.edit', ['materias' => $materia,
    //]);
=======
    public function edit(Materia $id){
        $materias = Materia::findOrFail($id);
        return view('materias.edit', compact('materia'));
>>>>>>> 013f40f3003f1b53036746c39cafb7a65d869eb9
>>>>>>> 8798ebc0052ac32159f33d771df624721b111742
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMateriaRequest  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        


        $materias=Materia::findOrFail($id);

        return view('materias.edit', compact('materias'));
=======

        $materia = Articulo::find($materia);
        $materia->NombreMateria = $request->get('NombreMateria');
        $materia->ClaveMateria = $request->get('ClaveMateria');
        $materia->DocenteMateria = $request->get('DocenteMateria');
        $materia->save();
      

        //return redirect('/materias');
        $materia->fill($request->input())->saveOrFail();
        return redirect()->route('materias.index')->with(["mensaje" => "Información actualizada"]);
>>>>>>> 8798ebc0052ac32159f33d771df624721b111742
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
