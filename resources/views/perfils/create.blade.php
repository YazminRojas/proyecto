@extends('layout.layout')
@section('content')


<center><article class="panel is-success" >
<h1 class="panel-heading">Agenda ADAM</h1></center>

<article class="panel is-warning" >
    
  <p class="panel-heading">
    Perfil
    
  </p>
    </section>

    <html>
        <body bgcolor="pink">
        <center>
        <br><br><br>
    <div>

    <form action="{{ route('perfils.store') }}"  method="post" >
            @csrf
            <fieldset>
                
            <div class="form-group">
                <label for="">Nombre del perfil:</label>
                <input type="text" name="NombrePerfil" id="" size="40" required>
                </div>
            </div>
<br>
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" name="NombrePersona" id="" size="37" required>
            </div>
<br>
            <div class="form-group">
                <label for="">Apellido Paterno:</label>
                <input type="text" name="ApellidoPaterno" id="" size="30" required>
            </div>

            <br>
            <div class="form-group">
                <label for="">Apellido Materno:</label>
                <input type="text" name="ApellidoMaterno" id="" size="30" required>
            </div>

            <br>
            <div class="form-group">
                <label for="">Número de teléfono:</label>
                <input type="text" name="NumeroTelefono" id="" size="30" required>
            </div>

            <br>
            <div class="form-group">
                <label for="">Descripción:</label>
                <textarea name="Descripcion" id="" cols="30" rows="5" placeholder="Escriba una descripción..."></textarea>
            </div>

<br> <br>
            <div class="mt-5">
                <input class="btn btn-primary" type="submit" value="Guardar"
                <a class="button is-success" href="{{url('materias/')}}">Cancelar</a>
            </div>
    </form>
        </body>
    </html>
   
@endsection