@extends('layout.layout')
@section('content')


<center>
    <article class="panel is-info">
        <h1 class="panel-heading">
            <img src="https://cdn-icons-png.flaticon.com/512/830/830573.png" width="50px" heigth="50px">AGENDA ADAM
        </h1>
</center>
<article class="panel is-success">
    <p class="panel-heading">
        Materia
    <div class="tabs is-right  is-toggle is-toggle-rounded"><br><br>
        <a class="button is-info is-warning" href="{{url('home/')}}">Regresar</a>
        <ul>
            <li class="is-active">
                <a class=" is-success" href="{{url('materias/')}}">Materias</a>
            </li>
            <li><a class=" is-success" href="{{url('calendarios/')}}">Calendario</a></li>
            <li><a class=" is-success" href="{{url('configuracions/')}}">Configuración</a></li>
        </ul>
    </div>
    </p>

    <center>

        <center>
            <a class="button is-danger is-light" href="/materias/create">+Materia</a>
        </center>
        <div>

            <section class="section">
                <div class="table-container">
                    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                        <thead>
                            <tr class="is-size-6" font-size="1.25rem" class="has-text-weight-semibold">
                                <th class="has-text-centered">Id</th>
                                <th class="has-text-centered">Nombre de la materia</th>
                                <th class="has-text-centered">Clave</th>
                                <th class="has-text-centered">Docente</th>
                                <th class="has-text-centered">Apellido Paterno</th>
                                <th class="has-text-centered">Apellido Materno</th>
                                <th class="has-text-centered">Edificio</th>
                                <th class="has-text-centered">Salón</th>
                                <th class="has-text-centered">Acciones</th>
                            </tr>
                        <tbody>

                            @forelse($materias as $materia)

                            <tr>
                                <th>{{ $materia->id }}</th>
                                <th>{{$materia->NombreMateria}}</th>
                                <td>{{$materia->ClaveMateria}}</td>
                                <td>{{$materia->DocenteMateria}}</td>
                                <td>{{$materia->ApellidoPaterno}}</td>
                                <td>{{$materia->ApellidoMaterno}}</td>
                                <td>{{$materia->Edificio}}</td>
                                <td>{{$materia->Salon}}</td>

                                <td>
                                    <form action="{{ route('materias.destroy', $materia->id) }}" method="POST">

                                        <a class="button is-info is-mall" <a class="button is-info is-mall"
                                            href="/materias/{{$materia->id}}/edit">Editar</a>
                                        <a href="{{url('compartirs/')}}" class="button is-success is-mall">Compartir</a>


                                        <a class="button is-info is-mall"
                                            href="{{route('materias.edit' , $materia->id)}}">Editar</a>
                                        <a href="edit.blade.php" class="button is-success is-mall">Compartir</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button is-primary"> eliminar </button>

                                        <a class="button is-warning is-mall"
                                            href="{{route('materias.edit' , $materia->id)}}">Editar</a>
                                        <a href="{{url('compartirs/')}}" class="button is-success is-mall">Compartir</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="button is-primary"> Eliminar </button>

                                        <button type="submit" class="button is-danger"> Eliminar </button>

                                        <a class="button is-info is-mall" href="/notas">Agregar nota</a>
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