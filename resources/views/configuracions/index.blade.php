@extends('layout.layout')
@section('content')
<div align="center"> <img
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJKr_452NePkPuzLw9KykTyaVcK2Re9lRBqzNUwfoLsnmmaMzQ"
        width="200px" heigth="200px"></div>
<br>
<div class="text-center"> <a class="btn btn-warning" href="{{url('perfils/')}}">EDITAR PERFIL</a></div>

<table align="center" class="table-info">

    <?php if (!count($data)) : ?>
    <h2>No hay ningún registro</h2>
    <?php else : ?>
    <table class="report">
        <caption class="caption"><?= $title ?></caption>
        <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Birthdate</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $item) : ?>
            <tr>
                <td><?= $item->first_name ?></td>
                <td><?= $item->last_name ?></td>
                <td><?= $item->email ?></td>
                <td><?= $item->birthdate ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php endif ?>


    </select>
    </td>
    </tr>
    <tr>
        <th scope="row"><img
                src="data:image/png;base64,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"
                width="60px" heigth="60px"></th>
        <td></td>
        <td>PERSONALIZAR COLORIMETRÍA</td>
        <td></td>
        <td><input type="color" value="#ff0000">
        </td> <br>
    </tr>
    </tbody>
</table>

<br><br>
<div class="text-center"><a class="button is-success" href="{{url('home/')}}">CERRAR SESIÓN</a></div>