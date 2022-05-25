@extends ('layout.loyout')
@section ('content')

<center><article class="panel is-success" >
<h1 class="panel-heading">Agenda ADAM</h1></center>

<article class="panel is-warning" >
    
  <p class="panel-heading">
    Eventos
    
  </p>
    </section>

    <html>
        <body bgcolor="orange">
        <center>
        <br><br><br>
    <div>
    <fieldset>

<div>
<form action="{{ route ('eventos.store')}}" method="post">
    @csrf 

<div class="form-group">
    <larbel for="">Fecha: </label>
    <input class= "form-control" type="date" name="fecha" id="">
</div>

<div class="at-5">
    <input class= "btn bbtn-primary" type="submit" value="Guardar">
</div>
</fieldset>
</form>
        
        </center>
        <br><br><br><br><br><br><br><br><br><br><br>
            </body>
        </html>
@endSection

