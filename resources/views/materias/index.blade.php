@extends('layout.layout')
@section('content')

<center><article class="panel is-info" >
<h1 class="panel-heading">AGENDA ADAM</h1></center>

<article class="panel is-success" >
  <p class="panel-heading">
    Materia
    <div class="tabs is-right  is-toggle is-toggle-rounded">
  <ul>
    <li class="is-active">
      <a class=" is-success" href="{{url('materias/')}}">Materias</a></li>
    <li><a class=" is-success" href="{{url('docentes/')}}">Docentes</a></li>
    <li><a class=" is-success" href="{{url('calendarios/')}}">Calendario</a></li>
    <li><a class=" is-success" href="{{url('configuracions/')}}">Configuración</a></li>
  </ul>
  </div>
</p>
            
    <center>

        <center>
            <a class="button is-danger is-light" href="/materias/create">+ Materia</a>
        </center>
        <br><br><br>
        <div>

            <section class="section">
                <div class="table-container">
                    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" bgcolor=#990000>
                        <thead>
                            <tr>
                                <th>Nombre de la materia</th>
                                <th>Clave</th>
                                <th>Docente</th>
                                <th>Edificio</th>
                                <th>Salon</th>
                            </tr>
                        <tbody>

                            @forelse($materias as $materia)

                            <tr>
                                <th>{{$materia->NombreMateria}}</th>
                                <td>{{$materia->ClaveMateria}}</td>
                                <td>{{$materia->DocenteMateria}}</td>
                                <td>{{$materia->Edificio}}</td>
                                <td>{{$materia->Salon}}</td>

                                <td>
                                    <form action="{{ route('materias.destroy', $materia->id) }}" method="POST">
                                        <a class="button is-info is-mall"
                                            href="{{route('materias.edit' , $materia->id)}}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button is-primary"> eliminar </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                        @empty

                        <h2><b></b>Aun no a registrado alguna Materia<p></p>
                        </h2>
                        <br><br>
                        @endforelse

                        </html>
                </div>
            </section>
            @endsection

            <body bgcolor="white">

            </body>
            </table>

            </html>