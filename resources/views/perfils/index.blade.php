@extends('layout.layout')
@section('content')

<center><article class="panel is-success" >
<<<<<<< HEAD
<h1 class="panel-heading">Agenda ADAM</h1></center>

<article class="panel is-warning" >
  <p class="panel-heading">
    Materias
    <div class="tabs is-right  is-toggle is-toggle-rounded">
  <ul>
    <li class="is-active">
      <a class=" is-success" href="{{url('perfils/')}}">Perfil</a></li>
    <li><a class=" is-success" href="{{url('configuracions/')}}">Configuración</a></li>
  </ul>
  </div>
  </p>

  
  <html>
        <body bgcolor="green">
        <center>
        <br><br><br>
    <div>
            
<section class="section">   
    <div class="table-container">
<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
          <tr>
            <th>Nombre del perfil</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            </tr>
            <tbody>
                
            @forelse($perfils as $perfil)

          <tr>
    <th>{{$perfil->NombrePerfil}}</th>
    <td>{{$perfil->NombrePersona}}</td>
    <td>{{$perfil->ApellidoPaterno}}</td>
    <td>{{$perfil->ApellidoMaterno}}</td>
    <td>{{$perfil->NumeroTelefono}}</td>
    <td>{{$perfil->Descripcion}}</td>

    <td>
    <form action="{{ route('perfils.destroy', $perfil->id) }}"  method="POST">
    <a class="button is-info is-mall" href="{{route('perfils.edit' , $perfil->id)}}">Editar</a>
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

@endforelse
        
    </div> 
</section>
@endsection
=======
<h1 class="panel-heading">AGENDA ADAM</h1></center>


</b><center>
  <table class="table-danger">
  <thead>
    <tr><center>
      <th scope="col">CONFIGURACIÓN GENERAL</th>
    </tr></center>
  </thead>
  <tbody>
    <tr>
      <th scope="row">ÍCONO 1</th>
      <td>PERFIL</td>
      <th><button type="button" class="btn btn-outline-info" href="{{url('perfils/')}}">CONFIGURACIÓN</button> </th>
    </tr>
    <tr>
      <th scope="row">ÍCONO 2</th>
      <td>CONFIGURAR FUENTES</td>
      <th><button type="button" class="btn btn-outline-info">CONFIGURACIÓN</button> </th>
    </tr>

    <tr>
      <th scope="row">ÍCONO 3</th>
      <td>CONFIGURAR COLORIMETRÍA</td>
      <th><button type="button" class="btn btn-outline-info">CONFIGURACIÓN</button> </th>
    </tr>
</table>
</center>
>>>>>>> ac3ae5677a3120f37d56f5abb30014e97f9c76cc
