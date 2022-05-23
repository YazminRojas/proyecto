@extends('layout.layout')
@section('content')

<center><article class="panel is-success" >
<h1 class="panel-heading">Agenda ADAM</h1></center>

<article class="panel is-warning" >
    
  <p class="panel-heading">
    Eventos
    
  </p>
  <div class="tabs is-right  is-toggle is-toggle-rounded">
  <ul>
      <li><a class=" is-success" href="{{url('eventos/')}}">Eventos</a></li>
    <li class="is-active"><a class=" is-success" href="{{url('salons/')}}">Eventos</a></li>
    <li><a>Calendario</a></li>
    <li><a>Perfil</a></li>
  </ul>
</div>
  
  <html>
        <body bgcolor="orange">

  <br><br>
            <center>
                <a class="button is-danger is-light" href="/docentes/create" >+ Evento</a>
            </center>
            
<section class="section">   
    <div class="table-container">
<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
            <tr>
                <th>fecha</th>
                <th>horaInicio</th>
                <th>horaFin</th>
            </tr>
            <tbody>
                
@forelse($eventos as $evento)

    <tr>
        <th>{{$evento->fecha}}</th>
        <td>{{$evento->horaInicio}}</td>
        <td>{{$evento->horaFin}}</td>

        <td>


        <form action="{{ route('eventos.destroy', $evento->id) }}"  method="POST">
        <a class="button is-info is-mall" href="{{route('eventos.edit' , $evento->id)}}">Salón</a>
        @csrf
        @method('DELETE')
         <button type="submit" class="button is-primary"> eliminar </button>

         </form>
         </table>
         </td>
         
         
             </tbody>
             </div>
             <br><br><br>
        </html>
@empty

<style type="title/css">
 p { color: red; }
 
</style>
<h2><p>Aun no a registrado algun evento</p></h2>

@endforelse
        
    </div> 
</section>
@endsection
