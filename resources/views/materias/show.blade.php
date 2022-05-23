@extends('layouts.app') @section('content') 
<section class="section"> <div class="column"> 
    <div class="column is-one-third"> 
        <a href="/materias/show" class="button">Regresar</a> 
    </div> 

    <div class="column is-one-third"> 
        <p class="title">Detalles de {{$materia->NombreMateria}}</p> 
    </div> 
</div> 
</section> 
    
    <section class="section"> 
        <p class="title">{{$materia->ClaveMateria}}</p> 
        <p class="subtitle">{{$materia->DocenteMateria}}</p> 
    </section>

    @endsection