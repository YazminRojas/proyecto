@extends('layout.layout')
@section('content')

<a class="button is-info is-rounded" href="{{route('materias.index')}}">Regresar</a>

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

<br><br>
<div class="text-center"><a class="button is-success" href="{{url('home/')}}">CERRAR SESIÓN</a></div>