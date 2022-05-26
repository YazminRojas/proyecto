@extends('layout.layout')
@section('content')

<center>
    <article class="panel is-success">

        <h1 class="panel-heading">Agenda ADAM</h1>
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
                        <center>
                            <h10>Datos del usuario </h10>
                        </center><br>
                      
                         <form action="Perfil.php" method="post"> 
                            <div class="columns">
                                <div class="column">
                                </div>
                                <label>Nombre de usuario:</label><br><br><br><br>
                                <input type="text" class="input is-warning" name="NombrePerfil"
                                    placeholder="Escribe un nombre de usuario">
                                <div class="column">
                                
                                </div>
                                <input type="submit" class="button is-warning" value="Editar">
                                <div class="column">
                                   
                                </div>
                                <input type="submit" class="button is-warning" value="Guardar">
                            </div>





                            <div>
                                <label>Nombre:</label>
                                <input type="text" class="input is-warning" name="NombrePersona">
                                <input type="submit" class="button is-warning" value="Editar">
                                <input type="submit" class="button is-warning" value="Guardar">
                            </div>
                            <div>
                                <label>Apellido Paterno:</label>
                                <input type="text" class="input is-warning" name="ApellidoPaterno">
                                <input type="submit" class="button is-warning" value="Editar">
                                <input type="submit" class="button is-warning" value="Guardar">
                            </div>
                            <div>
                                <label>Apellido Materno:</label>
                                <input type="text" class="input is-warning" name="ApellidoMaterno">
                                <input type="submit" class="button is-warning" value="Editar">
                                <input type="submit" class="button is-warning" value="Guardar">
                            </div>
                            <div>
                                <label>Número telefónico:</label>
                                <input type="tel" class="input is-warning" name="NumeroTelefono"
                                    placeholder="Ingrese su número de teléfono">
                                <input type="submit" class="button is-warning" value="Editar">
                                <input type="submit" class="button is-warning" value="Guardar">
                            </div>
                            <div>
                                <label>Descripción:</label>
                                <textarea name="Descripcion" class="input is-warning"
                                    placeholder="Agregue una descripción">
                            <input type="submit" class="button is-warning" value="Editar">
                            <input type="submit" class="button is-warning" value="Guardar">
                </textarea>
                                <br><br><a class="button is-primary"
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



                                <form action="{{ route('perfils.destroy', $perfil->id) }}" method="POST">
                                    <a class="button is-info is-mall"
                                        href="{{route('perfils.edit' , $perfil->id)}}">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-primary"> eliminar </button>


                                    </tbody>
                                </form>

                                </td>
                                </thead>
                                </table>
    </div>
    <br><br><br>
    <br><br><br>
    <br><br><br>

</html>
@empty

@endforelse

</div>
</section>
@endsection