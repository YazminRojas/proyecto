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
      <a class=" is-success" href="{{url('materias/')}}">Perfil</a></li>
    <li><a class=" is-success" href="{{url('configuracions/')}}">Configuración</a></li>
  </ul>
  </div>
  </p>

  
  <html>
        <body bgcolor="white">
        <center>
        <br><br><br>
    <div>
            
<section class="section">   
    <div class="table-container">
<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <center><h10>Datos del usuario </h10></center><br><br>

    <div>
				<label>Nombre del perfil:</label>
				<input type="text" class="input is-warning" name="NombrePerfil" placeholder="Escribe un nombre de perfil">
			</div>
			<div>
				<label>Descripción:</label>
				<textarea name="Descripcion" class="input is-warning" placeholder="Agregue una descripción">
                </textarea>
			</div>

            @forelse($perfils as $perfil)

          <tr>
    <th>{{$perfil->NombrePerfil}}</th>
    <td>{{$perfil->NombrePersona}}</td>
    <td>{{$perfil->ApellidoPaterno}}</td>
    <td>{{$perfil->ApellidoMaterno}}</td>
    <td>{{$perfil->NumeroTelefono}}</td>
    <td>{{$perfil->Descripcion}}</td>



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
