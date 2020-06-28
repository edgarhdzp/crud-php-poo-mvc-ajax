<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php require 'views/header.php'; ?>

<div id="main">
<h1>CONSULTA</h1>
</div>

<table>
<thead>
<tr>
<th>nombre</th>
<th>apellido</th>
<th>editar</th>
<th>eliminar</th>
</tr>
</thead>
<tbody>
<?php foreach($this->alumnos as $row){
    $alumno = new Alumno();
    $alumno = $row;
} ?>

<tr>
<td><</td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<?php require 'views/footer.php'; ?>

</body>
</html>