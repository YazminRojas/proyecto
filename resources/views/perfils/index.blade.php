@extends('layout.layout')
@section('content')

<center>
    <article class="panel is-info">
        <h1 class="panel-heading">
            <img src="https://cdn-icons-png.flaticon.com/512/830/830573.png" width="50px" heigth="50px">AGENDA ADAM
        </h1>
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

<body>
    <div>
        <form action="configuracion.php" method="post">
            <article class="panel is-success">
                <p class="panel-heading">
                    Información del usuario
                <div class="tabs is-right  is-toggle is-toggle-rounded">
                    <a class="button is-info is-warning" href="{{url('configuracions/')}}">Regresar</a>
                </div>
<<<<<<< HEAD
            </section>
            <section class="section">
                                                                                
                
                <section class="column is-half is-offset-one-quarter">
                    <section class="section">
=======
                </section>
                <section class="section">
>>>>>>> 013f40f3003f1b53036746c39cafb7a65d869eb9

                    <section class="column is-half is-offset-one-quarter">
                        <section class="section">


                            <! - Información inferior del
<<<<<<< HEAD
                                molde------------------------------------------------------------------------- ->
                
                                <form action="Perfil.php" method="post">
                                <a class="button is-link" href="{{route('configuracions.index')}}">Regresar</a>
=======
                                molde------------------------------------------------------------------------ ->
>>>>>>> 013f40f3003f1b53036746c39cafb7a65d869eb9

                                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                                    rel="stylesheet" />

                                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
                                </script>

                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
                                </script>

                                <! - Información inferior del
                                    molde------------------------------------------------------------------------- ->

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
                                                                <div class="modal hide fade" id="exampleModal"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <!-- Modal -->
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Nombre de
                                                                                    usuario
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
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
                                                        <br>

                                                        <tr>
                                                            <td><label>Nombre:</label>
                                                                <input type="text" class="input is-normal"
                                                                    name="NombrePersona" readonly>
                                                            </td>
                                                            <td>
                                                                <!-- Modal -->
                                                                <button type="button" class="button is-link is-light"
                                                                    data-toggle="modal" data-target="#exampleModal">
                                                                    Editar
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal hide fade" id="exampleModal"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <!-- Modal -->
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Nombre
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">


                                                                                <! - Casa de modo ->

                                                                                    <! - Enterprise de entrada ->
                                                                                        <div class="row cl">
                                                                                            <label
                                                                                                Class="Form-Label COL-XS-3-3">
                                                                                                Ingrese su nombre:
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
                                                            <td><label>Apellido Paterno:</label>
                                                                <input type="text" class="input is-normal"
                                                                    name="ApellidoPaterno" readonly>
                                                            </td>
                                                            <td>
                                                                <!-- Modal -->
                                                                <button type="button" class="button is-link is-light"
                                                                    data-toggle="modal" data-target="#exampleModal">
                                                                    Editar
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal hide fade" id="exampleModal"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <!-- Modal -->
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Apellido
                                                                                    Paterno
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">


                                                                                <! - Casa de modo ->

                                                                                    <! - Enterprise de entrada ->
                                                                                        <div class="row cl">
                                                                                            <label
                                                                                                Class="Form-Label COL-XS-3-3">
                                                                                                Ingrese su apellido
                                                                                                paterno:
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
                                                            <td><label>Apellido Materno:</label>
                                                                <input type="text" class="input is-normal"
                                                                    name="ApellidoMaterno" readonly>
                                                            </td>
                                                            <td>
                                                                <!-- Modal -->
                                                                <button type="button" class="button is-link is-light"
                                                                    data-toggle="modal" data-target="#exampleModal">
                                                                    Editar
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal hide fade" id="exampleModal"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <!-- Modal -->
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Apellido
                                                                                    Materno
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">


                                                                                <! - Casa de modo ->

                                                                                    <! - Enterprise de entrada ->
                                                                                        <div class="row cl">
                                                                                            <label
                                                                                                Class="Form-Label COL-XS-3-3">
                                                                                                Ingrese su apellido
                                                                                                materno:
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
                                                            <td><label>Número Telefónico:</label>
                                                                <input type="tel" class="input is-normal"
                                                                    name="NumeroTelefono"
                                                                    placeholder="Ingrese su número de teléfono"
                                                                    readonly>
                                                            </td>
                                                            <td>
                                                                <!-- Modal -->
                                                                <button type="button" class="button is-link is-light"
                                                                    data-toggle="modal" data-target="#exampleModal">
                                                                    Editar
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal hide fade" id="exampleModal"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <!-- Modal -->
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Número de
                                                                                    teléfono
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">


                                                                                <! - Casa de modo ->

                                                                                    <! - Enterprise de entrada ->
                                                                                        <div class="row cl">
                                                                                            <label
                                                                                                Class="Form-Label COL-XS-3-3">
                                                                                                Ingrese su número
                                                                                                telefónico
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
                                                            <td> <label>Descripción:</label>
                                                                <textarea name="Descripcion" class="input is-normal"
                                                                    placeholder="Agregue una descripción..."
                                                                    readonly></textarea>
                                                            </td>

                                                            <td>
                                                                <!-- Modal -->
                                                                <button type="button" class="button is-link is-light"
                                                                    data-toggle="modal" data-target="#exampleModal">
                                                                    Editar
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal hide fade" id="exampleModal"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <!-- Modal -->
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Descripción
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">


                                                                                <! - Casa de modo ->

                                                                                    <! - Enterprise de entrada ->
                                                                                        <div class="row cl">
                                                                                            <label
                                                                                                Class="Form-Label COL-XS-3-3">
                                                                                                Ingrese una descripción:
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


<<<<<<< HEAD
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
=======
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
>>>>>>> 013f40f3003f1b53036746c39cafb7a65d869eb9
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