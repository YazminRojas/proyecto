@extends('layout.layout')
@section('content')


<center><article class="panel is-success" >
<h1 class="panel-heading">Agenda ADAM</h1></center>

<article class="panel is-warning" >
    
  <p class="panel-heading">
    Materias
    
  </p>
    </section>

    <html>
        <body bgcolor="white">
        <center>
        <br><br><br>
    <div>

    <form action="{{ route('materias.store') }}"  method="post" >
            @csrf
            <fieldset>
                
            <div class="form-group">
                <div class="column">
                <label for="" class="has-text-black-bis">Nombre de la materia:</label>
                <input type="text" name="NombreMateria" id="" size="40">
                </div>
            </div>
<br>
            <div class="form-group">
                <label for=""><b>Clave de la materia:</b></label>
                <input type="text" name="ClaveMateria" id="" size="37">
            </div>
<br>
            <div class="form-group">
                <label for=""><b>Docente que imparte la materia:</b></label>
                <input type="text" name="DocenteMateria" id="" size="30">
            </div>
            
<br> <br>
<div class="form-group">
<select name="Edificio" id="">

<option value="No especificado">Elige el Edificio</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="G">G</option>
<option value="H">H</option>
<option value="I">I</option>
<option value="J">J</option>

</select>
                    </div>
<br><br>
<div class="form-group">
                <label for=""><b>   Salón:</b></label>
                <input type="text" name="Salon" id="" size="30">
            </div>
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

