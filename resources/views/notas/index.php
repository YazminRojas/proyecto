<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Generar archivo PDF a partir de MySQL usando PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
//Incluimos el fichero de conexion
include_once("dbconect.php");
?>
</head>
<body>
<div class="container" style="padding-top:50px">
<h2>Generar archivo PDF a partir de MySQL usando PHP</h2>
<form class="form-inline" method="post" action="crear_pdf.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>
Exportar PDF</button>
</form>
</fieldset>
<hr>
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">Nombre</th>
<th scope="col">Edad</th>
<th scope="col">Salario</th>
<th scope="col">Fecha</th>
</tr>
</thead>
<tbody>

<?php
$db = new dbConexion();
$connString = $db->getConexion();

$result = mysqli_query($connString, "SELECT idp, personal_nombre, personal_edad, personal_salario, fecha FROM personal") or die("database error:". mysqli_error($connString));
foreach($result as $row)
{
echo '<tr>
<th scope="row">'.$row['idp'].'</th>
<td>'.$row['personal_nombre'].'</td>
<td>'.$row['personal_edad'].'</td>
<td>'.number_format($row['personal_salario']).'</td>
<td>'.$row['fecha'].'</td>
</tr>';
}
?>
</tbody>
</table>
</div>
</body>
</html>