@extends('layout.layout')
@section('content')


<center><article class="panel is-primary" >
<h1 class="panel-heading">Agenda ADAM</h1></center>

<article class="panel is-warning" >
    
  <p class="panel-heading">
    Docentes
    
  </p>
    </section>

    <html>
        <body bgcolor="white">
        <center>
        <br><br><br>
    <div>

        <form action="{{ route('docentes.store') }}"  method="post" >
            @csrf
            <fieldset>

            <div class="form-group">
                <div class="column">
                <label for=""><b>Nombre:</b>  </label>
                <input type="text" name="Nombre" id="" size="40">
                </div>
            </div>
<br>
            <div class="form-group">
                <label for=""><b>Apellido Paterno:</b></label>
                <input type="text" name="ApellidoPaterno" id="" size="37">
            </div>
<br>
            <div class="form-group">
                <label for=""><b>Apellido Materno:</b></label>
                <input type="text" name="ApellidoMaterno" id="" size="30">
            </div>
<br> <br>
            <div class="mt-5">
                <input class="button is-primary" type="submit" value="Guardar">
                <a class="button is-success" href="{{url('materias/')}}">Cancelar</a>
            </div>

            </fieldset>
        </form>
        
    </center>
    <br><br><br><br><br><br><br><br><br><br><br>
        </body>
    </html>
   
@endsection

