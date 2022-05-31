@extends('layout.layout')
@section('content')
<center>
    <article class="panel is-info">
        <h1 class="panel-heading">
            <img src="https://cdn-icons-png.flaticon.com/512/830/830573.png" width="50px" heigth="50px">AGENDA ADAM
        </h1>
</center>
<a class="button is-info is-warning" href="{{url('materias/')}}">Regresar</a>

<div align="center"> <img
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJKr_452NePkPuzLw9KykTyaVcK2Re9lRBqzNUwfoLsnmmaMzQ"
        width="200px" heigth="200px"></div>
<br>
<div class="text-center"> <a class="btn btn-warning" href="{{url('perfils/')}}">EDITAR PERFIL</a></div>

<table align="center" class="table-info">
    <tr>
        <th scope="row">
            <img src="https://cdn-icons.flaticon.com/png/512/3772/premium/3772228.png?token=exp=1653941204~hmac=346ae2cce5760175fe77cdcb682867f7"
                width="60px" heigth="60px">
        </th>
        <td> PERSONALIZAR COLORIMETRÍA</td>
        <td>
            <input type="color" value="#ff0000">
        </td> <br>
    </tr>

    <tr>
        <th scope="row">
            <img src="https://cdn-icons.flaticon.com/png/512/3772/premium/3772228.png?token=exp=1653941204~hmac=346ae2cce5760175fe77cdcb682867f7"
                width="60px" heigth="60px">
        </th>
        <td class="has-text-centered">PERSONALIZAR FUENTE</td>
        <td>
            <select name="Fuente" id="" required>
                <option value="" class="is-italic">Italic</option>
                <option value="" class="has-text-weight-bold">Bold</option>
                <option value="" style=" font-family: 'Times New Roman'">Time New Roman</option>
                <option value="" style=" font-family: 'Arial'">Arial</option>
            </select>
        </td>
        <br>
    </tr>
    </tbody>
</table>

<div class="text-center"><a class="button is-success" href="{{url('home/')}}">CERRAR SESIÓN</a></div>