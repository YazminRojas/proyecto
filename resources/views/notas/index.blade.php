@extends('layout.layout')
@section('content')


<center>
    <article class="panel is-link">
        <h1 class="panel-heading">AGENDA ADAM</h1>
</center>

<article class="panel is-grey">
    <p class="panel-heading">
        Notas
    <div class="tabs is-right  is-toggle is-toggle-rounded">
        <ul>
            <li class="is-active">
                <a class=" is-success" href="{{url('materias/')}}">Materias</a>
            </li>
            <li><a class=" is-success" href="{{url('calendarios/')}}">Calendario</a></li>
            <li><a class=" is-success" href="{{url('perfils/')}}">Configuración</a></li>
        </ul>
    </div>
    </p>


    <center>

        <center>
            <a class="button is-danger is-light" href="/notas/create">+ Nota</a>
        </center>
        <br><br><br>

        <div>


            <section class="section">
                <div class="table-container">
                    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth table-red">
                        <thead>
                            <tr>
                                <th>Nota</th>
                                <th>Tipo de nota</th>
                                <th>Hora Inicial</th>
                                <th>Hora Final</th>
                                
                            </tr>
                        <tbody>

                            @forelse($notas as $nota)

                            <tr>
                                <th>{{ $nota->id }}</th>
                                <th>{{$nota->cuerpoTexto}}</th>
                                <td>{{$nota->tipoNota}}</td>
                                <td>{{$nota->horaInicial}}</td>
                                <td>{{$nota->horaFinal}}</td>

                                <td>
                                    <form action="{{ route('notas.destroy', $nota->id) }}" method="POST">
                                        <a class="button is-info is-mall" href="{{route('notas.edit' , $nota->id)}}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button is-danger"> eliminar </button>
                                        <a href="{{url('compartirs/')}}" class="button is-success is-mall">Compartir</a>
                                        <a href="{{url('compartirs/')}}" class="button is-info is-mall">Pdf</a>
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                        @empty

                        <h2><b></b>Aún no a registrado nota<p></p>
                        </h2>
                        <br><br>

                        @endforelse

                        </html>
                </div>
            </section>
            @endsection

            <body bgcolor="white">

            </body>

            </html>