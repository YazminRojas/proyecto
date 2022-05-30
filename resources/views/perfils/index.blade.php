@extends('layout.layout')
@section('content')

<center>
    <article class="panel is-link"">

        <h1 class=" panel-heading">Agenda ADAM</h1>
</center>
<html>

<head>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Información del usuario</title>
    <!-- Cargar los estilos -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>

<body bgcolor="#f9e8fc">
    <div>
        <form action="configuracion.php" method="post">
            <section class="hero is-gray">
                <div class="hero-body">
                    <p class="title">Información del usuario</p>
                </div>
            </section>
            <section class="section">
                <p class="subtitle">Ingrese los datos correspondientes</p>
                <section class="column is-half is-offset-one-quarter">
                    <section class="section">


                        <! - Información inferior del
                            molde------------------------------------------------------------------------ ->

                            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                                rel="stylesheet" />

                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
                            </script>

                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
                            </script>

                            <!-- Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Launch demo modal
                            </button>
                            <!-- Modal -->
                            <div class="modal hide fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <!-- Modal -->
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nombre de usuario</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">


                                            <! - Casa de modo ->

                                                <! - Enterprise de entrada ->
                                                    <div class="row cl">
                                                        <label Class="Form-Label COL-XS-3-3"> Ingrese un nombre de
                                                            usuario:
                                                        </label>
                                                        <div class="formControls col-xs-6">
                                                            <input type="text" class="input-text" placeholder=""
                                                                name="shopName" id="perfils" autocomplete="off">
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->

                            <! - Información inferior del
                                molde------------------------------------------------------------------------- ->

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    MODAL 2
                                </button>
                                <div id="addModal" class="modal hide fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">

                                    <! - Información de la cabeza del cuadro de modo ->
                                        <div class="modal-header">
                                            <h4 id="MyModallabel"> Añadir información </h4>
                                            <a class="close" data-dismiss="modal" aria-hidden="true"
                                                href="javascript:void();">×</a>
                                        </div>

                                        <! - Casa de modo ->
                                            <div class="modal-body">
                                                <! - Enterprise de entrada ->
                                                    <div class="row cl">
                                                        <label Class="Form-Label COL-XS-3-3"> Nombre del taller:
                                                        </label>
                                                        <div class="formControls col-xs-6">
                                                            <input type="text" class="input-text" placeholder=""
                                                                name="shopName" id="perfils" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <! - Caja de texto ->
                                                        <div class="row cl">
                                                            <Label Class="Form-Label COL-3"> Note: </ Label>
                                                                <div class="formControls col-6">
                                                                    <textarea name="perfil->NombrePerfil"
                                                                        id="NombrePerfil" cols="" rows=""
                                                                        Clase="TextArea"
                                                                        Placeholder="Enter 100 caracteres"
                                                                        DataType="* 0-100" Dragonfly="True"
                                                                        Errormsg="¡Los comentarios no pueden exceder los 100 caracteres!"
                                                                        onKeyUp="textarealength(this,100)"></textarea>
                                                                    <p class="textarea-numberbar">
                                                                        <em class="textarea-length">0</em>/100
                                                                    </p>
                                                                </div>
                                                        </div>


                                            </div>

                                            <! - Información inferior del molde ->
                                                <div class="modal-footer">
                                                    <div class="col-xs-6">
                                                        <Button Class="BTN BTN-primaria" id="AddConFirm"> OK </ BOTON>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <button class="btn btn-primary" data-dismiss="modal" aria
                                                            hidden="true"> cancelar </ botón>
                                                    </div>
                                                </div>
                                </div>




                                <form action="Perfil.php" method="post">

                                    <! - Información inferior del
                                        molde-----------------------------------------------------------------------------
                                        ->

                                        <div class="container">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><label>Datos del usuario</label></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td><label>Nombre de usuario:</label>
                                                            <input type="text" class="input is-normal"
                                                                name="NombrePerfil" readonly placeholder="Apodo">
                                                        </td>
                                                        <td>
                                                            <!-- Modal -->
                                                            <button type="button" class="button is-link is-light"
                                                                data-toggle="modal" data-target="#exampleModal">
                                                                Editar
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal hide fade" id="exampleModal" tabindex="-1"
                                                                role="dialog" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <!-- Modal -->
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">Nombre de usuario
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">


                                                                            <! - Casa de modo ->

                                                                                <! - Enterprise de entrada ->
                                                                                    <div class="row cl">
                                                                                        <label
                                                                                            Class="Form-Label COL-XS-3-3">
                                                                                            Ingrese un nombre de
                                                                                            usuario:
                                                                                        </label>
                                                                                        <div
                                                                                            class="formControls col-xs-6">
                                                                                            <input type="text"
                                                                                                class="input-text"
                                                                                                placeholder=""
                                                                                                name="shopName"
                                                                                                id="perfils"
                                                                                                autocomplete="off">
                                                                                        </div>
                                                                                    </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Cancelar</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary">Guardar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal -->
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><label>Nombre:</label>
                                                            <input type="text" class="input is-normal"
                                                                name="NombrePersona" readonly>
                                                        </td>
                                                        <td><input type="submit" class="button is-link is-light"
                                                                value="Editar">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>Apellido Paterno:</label>
                                                            <input type="text" class="input is-normal"
                                                                name="ApellidoPaterno" readonly>
                                                        </td>
                                                        <td><input type="submit" class="button is-link is-light"
                                                                value="Editar">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>Apellido Materno:</label>
                                                            <input type="text" class="input is-normal"
                                                                name="ApellidoMaterno" readonly>
                                                        </td>
                                                        <td><input type="submit" class="button is-link is-light"
                                                                value="Editar">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>Número Telefónico:</label>
                                                            <input type="tel" class="input is-normal"
                                                                name="NumeroTelefono"
                                                                placeholder="Ingrese su número de teléfono" readonly>
                                                        </td>
                                                        <td><input type="submit" class="button is-link is-light"
                                                                value="Editar">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td> <label>Descripción:</label>
                                                            <textarea name="Descripcion" class="input is-normal"
                                                                placeholder="Agregue una descripción..."
                                                                readonly></textarea>
                                                        </td>

                                                        <td><input type="submit" class="button is-link is-light"
                                                                value="Editar">
                                                        </td>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <a class="button is-primary"
                                            href="{{route('configuracions.index')}}">Regresar</a>
    </div>




    @forelse($perfils as $perfil)

    <tr>
        <th>{{$perfil->NombrePerfil}}</th>
        <td>{{$perfil->NombrePersona}}</td>
        <td>{{$perfil->ApellidoPaterno}}</td>
        <td>{{$perfil->ApellidoMaterno}}</td>
        <td>{{$perfil->NumeroTelefono}}</td>
        <td>{{$perfil->Descripcion}}</td>




        @csrf
        @method('DELETE')

        @empty

        @endforelse

        </div>
        </section>
        @endsection