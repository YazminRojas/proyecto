@extends('layout.layout')
@section('content')

    

<<<<<<< HEAD
            <div class="row">
        <div class="col-12">
        <form action="{{ route('perfils.store') }}"  method="post" >
            
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>

                @include('modal')
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route(perfils.index')}}">Volver al listado</a>
            </form>
        </div>
    </div>
            
            
    
=======
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
                <a class="button is-success" href="{{url('perfils/')}}">Cancelar</a>
            </div>
    </form>
        </body>
    </html>
   
>>>>>>> 4dbc02e4540224b01bddddddef82e3bc1e41e9cd
@endsection