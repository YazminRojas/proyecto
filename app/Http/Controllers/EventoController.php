<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Http\Requests\StoreEventoRequest;
use App\Http\Requests\UpdateEventoRequest;

class EventoController extends Controller
{

    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index')->with('eventos', Evento::all());;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventoRequest $request)
    {
        $request->validate([
            'Fecha'       =>  'required',
            'HoraInicio'  =>  'required',
            'HoraFin'     =>  'required'
        ]);

        $evento = new Evento([
            'Fecha'       =>  $request->get('Fecha'),
            'HoraInicio'  =>  $request->get('HoraInicio'),
            'HoraFin'     =>  $request->get('HoraFin')
        ]);

        $evento->save();

        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        $eventos=Evento::findOrFail($id);
        return view('eventos.edit',compact('eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventoRequest  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventoRequest $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('evento.index');
    }
    public function datatable(){
        $Eventos = Evento::all();
        return view('eventos.datatable', compact('eventos'));
    }
}

