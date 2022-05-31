@extends('layout.layout')
@section('content')



<div class="row">
    <div class="col-12">
        <form action="{{ route('perfils.store') }}" method="post">

            @csrf
            <div class="form-group">
                <label class="label">Nombre</label>
                <input required autocomplete="off" name="nombre" class="form-control" type="text" placeholder="Nombre">
            </div>

            @include('modal')
            <button class="btn btn-success">Guardar</button>
            <a class="btn btn-primary" href="{{route(perfils.index')}}">Volver al listado</a>
        </form>
    </div>
</div>



@endsection