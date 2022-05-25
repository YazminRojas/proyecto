@extends('layout.layout')
@section('content')

<center><article class="panel is-success" >
<h1 class="panel-heading">Agenda ADAM</h1></center>

<article class="panel is-warning" >
  <p class="panel-heading">
    Materias
    <div class="tabs is-right  is-toggle is-toggle-rounded">
  <ul>
    <li class="is-active">
      <a class=" is-success" href="{{url('materias/')}}">Materias</a></li>
    <li><a class=" is-success" href="{{url('docentes/')}}">Docentes</a></li>
    <li><a>Calendario</a></li>
    <li><a class=" is-success" href="{{url('perfils/')}}">Configuración</a></li>
  </ul>
  </div>
  </p>

  
  <html>
        <body bgcolor="orange">
        <center>
        <br><br><br>
    <div>
            <center>
                <a class="button is-danger is-light" href="/materias/create" >+ Materia</a>
            </center>
            
<section class="section">   
    <div class="table-container">
<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
          <tr>
            <th>Nombre de la materia</th>
            <th>Clave</th>
            <th>Docente</th>
            </tr>
            <tbody>
                
            @forelse($materias as $materia)

          <tr>
    <th>{{$materia->NombreMateria}}</th>
    <td>{{$materia->ClaveMateria}}</td>
    <td>{{$materia->DocenteMateria}}</td>

    <td>
    <form action="{{ route('materias.destroy', $materia->id) }}"  method="POST">
    <a class="button is-info is-mall" href="{{route('materias.edit' , $materia->id)}}">Editar</a>
    @csrf
    @method('DELETE')
     <button type="submit" class="button is-primary"> eliminar </button>


     </tbody>
         </form>
         
    </td>
         </thead>
         </table>
             </div>
             <br><br><br>
             <br><br><br>
             <br><br><br>
        </html>
@empty

<h2><b></b>Aun no a registrado alguna Materia<p></p></h2>
<br><br>
<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzrGmf0HAE7dG0d7XRVrXNhTRXf-rd0w1Ddw&usqp=CAU" width="400px" height="200px"></center>


@endforelse
        
    </div> 
</section>
@endsection
