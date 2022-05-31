@extends('layout.layout')
@section('content')
<h2>EDITAR REGISTROS</h2>

<form action="/materias/{{$materia->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre de la Materia</label>
    <input id="NombreMateria" name="NombreMateria" type="text" class="form-control" value="{{$materia->NombreMateria}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Clave de la Materia</label>
    <input id="ClaveMateria" name="ClaveMateria" type="text" class="form-control" value="{{$materia->ClaveMateria}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Docente que la imparte</label>
    <input id="DocenteMateria" name="DocenteMateria" type="text" class="form-control" value="{{$materia->DocenteMateria}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Edificio</label>
    <input id="Edificio" name="Edificio" type="text" class="form-control" value="{{$materia->Edificio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Salon</label>
    <input id="Salon" name="Salon" type="text" class="form-control" value="{{$materia->Salon}}">
  </div>
  
  <a href="/materias" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection