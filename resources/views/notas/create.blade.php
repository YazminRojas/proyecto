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
        Notas

    </p>
    </section>

    <html>

    <body bgcolor="white">

        <br><br><br>
        <center>

            <form action="{{ route('notas.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="colunm">


                        <select name="tipoNota" id="">

                            <option value="No especificado">Tipo de Nota</option>
                            <option value="Tarea">Tarea</option>
                            <option value="Proyecto">Proyecto</option>
                            <option value="Recordatorio">Recordatorio</option>
                            <option value="Otro">Otro</option>

<<<<<<< HEAD
                <div class="form-group">
                <label for="">Colorimetria: </label>
                <input type="color" value="#88F725">
                </div>

                <div class="form-group">
                    <div>
                    <label for="">Fecha</label>
                    <input type="date" name="fecha">
=======
                        </select>
>>>>>>> 013f40f3003f1b53036746c39cafb7a65d869eb9
                    </div>

                    <div class="form-group">
                        <label for="">Colorimetria: </label>
                        <input type="color" value="#ff0000">
                    </div>

                    <div class="form-group">
                        <div>
                            <label for="">Fecha</label>
                            <input type="date" name="fecha">
                        </div>
                    </div>


                    <div class="form-group">
                        <div>
                            <label for="">Hora de Inicio:</label>
                            <input type="time" name="horaInicial">
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <label for="">Hora de Finalización:</label>
                            <input type="time" name="horaFinal">
                        </div>
                    </div>
                </div>

                <br><br><br>

                <div class="form-group">
                    <div class="mb-50">
                        <label for="" class="form-label">Nota: </label><br>
                        <textarea class="form-control" id="cuerpoNota" rows="15" cols="100"></textarea>
                    </div>
                </div>

                <div class="mt-5">
                    <input class="button is-primary" type="submit" value="Guardar">
                    <a class="button is-success" href="{{url('notas/')}}">Cancelar</a>
                    <button class="button is-link" onclick="print()">Imprimir</button>
                </div>

                <br> <br>


            </form>

        </center>
        <br><br><br><br><br><br><br><br><br><br><br>
    </body>

    </html>

    @endsection