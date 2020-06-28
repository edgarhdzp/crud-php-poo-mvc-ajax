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
<h1>DETALLE </h1>
</div>

<form action="<?php echo constant('URL') ?>nuevo/registrarAlumno" method="POST">

    <p>
        <label for="nombre">nombre</label><br>
        <input type="text" name="nombre" value="<?php echo $this->alumno->nombre; ?>">
    </p>    
    <p>
        <label for="apellido">apellido</label><br>
        <input type="text" name="apellido" value="<?php echo $this->alumno->apellido; ?>">
    </p>
    <p>
        <input type="submit" value="actualizar">
    </p>
</form>

<?php require 'views/footer.php'; ?>

</body>
</html>