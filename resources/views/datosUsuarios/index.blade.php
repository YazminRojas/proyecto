index de datos del usuario :)

@extends('layout.layout')
@section('content')

<center><article class="panel is-success" >

<h1 class="panel-heading">Agenda ADAM</h1></center>

<article class="panel is-warning" >
  <p class="panel-heading">
    Datos Usuario
    <div class="tabs is-right  is-toggle is-toggle-rounded">
  <ul>
    <li class="is-active">
      <a class=" is-success" href="{{url('datosUsuarios/')}}">Perfil</a></li>
    <li><a class=" is-success" href="{{url('perfils/')}}">Configuración</a></li>
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
                
            @forelse($datosUsuarios as $datoUsuario)

          <tr>
    <th>{{$perfil->NombrePerfil}}</th>
    <td>{{$perfil->NombrePersona}}</td>
    <td>{{$perfil->ApellidoPaterno}}</td>
    <td>{{$perfil->ApellidoMaterno}}</td>
    <td>{{$perfil->NumeroTelefono}}</td>
    <td>{{$perfil->Descripcion}}</td>

    <td>
    <form action="{{ route('datosUsuarios.destroy', $datoUsuario->id) }}"  method="POST">
    <a class="button is-info is-mall" href="{{route('datosUsuarios.edit' , $datoUsuario->id)}}">Editar</a>
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



