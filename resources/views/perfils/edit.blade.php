@extends('layout.layout')
@section("titulo", "Editar nivel")
@section('content')
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('perfils.update' , [$perfil])}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="label">Nombre del perfil:</label>
                    <input required value="{{$perfil->NombrePerfil}}" autocomplete="off" name="NombrePerfil" class="form-control"
                           type="text" placeholder="Alias">
                </div>

                @include('notification')
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route( 'perfils.index' )}}">Volver</a>
            </form>
        </div>
    </div>
@endsection