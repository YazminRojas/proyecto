@extends('layout.layout')
@section('content')

<center><article class="panel is-success" >
<h1 class="panel-heading">Agenda ADAM</h1></center>

<article class="panel is-warning" >
    
  <p class="panel-heading">
    Docentes
  <div class="tabs is-right  is-toggle is-toggle-rounded">
  <ul>
      <li><a class=" is-success" href="{{url('materias/')}}">Materias</a></li>
    <li class="is-active"><a class=" is-success" href="{{url('docentes/')}}">Docentes</a></li>
    <li><a>Calendario</a></li>
    <li><a>Configuración</a></li>
  </ul>
</div>
</p>
  <html>
        <body bgcolor="white">
        <center>
        <br><br><br>
    <div>
  <center><img class="is-rounded" src="data:image/jpeg;base64,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
  qKiaMYiliAAAB//9k=" width="200px" height="301px" ></center>

  <br><br>
            <center>
                <a class="button is-danger is-light" href="/docentes/create" >+ Docente</a>
            </center>
            
<section class="section">   
    <div class="table-container">
<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>ApellidoPaterno</th>
                <th>ApellidoMaterno</th>
            </tr>
            <tbody>
                
@forelse($docentes as $docente)

    <tr>
        <th>{{$docente->Nombre}}</th>
        <td>{{$docente->ApellidoPaterno}}</td>
        <td>{{$docente->ApellidoMaterno}}</td>

        <td>


        <form action="{{ route('docentes.destroy', $docente->id) }}"  method="POST">
        <a class="button is-info is-mall" href="{{route('docentes.edit' , $docente->id)}}">Editar</a>
        @csrf
        @method('DELETE')
         <button type="submit" class="button is-primary"> eliminar </button>
         </form>
         </td>
    </tr>
             </tbody>
  
        </html>
@empty

<style type="title/css">
 p { color: red; }
 
</style>
<h2><p>Aun no a registrado algun Docente</p></h2>

@endforelse
        
    </div> 
</section>
@endsection
