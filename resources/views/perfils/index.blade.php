@extends('layout.layout')
@section('content')

<center><article class="panel is-success" >
<h1 class="panel-heading">AGENDA ADAM</h1></center>


</b><center>
  <table class="table-danger">
  <thead>
    <tr><center>
      <th scope="col">CONFIGURACIÓN GENERAL</th>
    </tr></center>
  </thead>
  <tbody>
    <tr>
      <th scope="row">ÍCONO 1</th>
      <td>PERFIL</td>
      <th><button type="button" class="btn btn-outline-info" href="{{url('perfils/')}}">CONFIGURACIÓN</button> </th>
    </tr>
    <tr>
      <th scope="row">ÍCONO 2</th>
      <td>CONFIGURAR FUENTES</td>
      <th><button type="button" class="btn btn-outline-info">CONFIGURACIÓN</button> </th>
    </tr>

    <tr>
      <th scope="row">ÍCONO 3</th>
      <td>CONFIGURAR COLORIMETRÍA</td>
      <th><button type="button" class="btn btn-outline-info">CONFIGURACIÓN</button> </th>
    </tr>
</table>
</center>
