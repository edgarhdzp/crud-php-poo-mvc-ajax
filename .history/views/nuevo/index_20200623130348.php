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
<h1>NUEVO</h1>
</div>

<form action="<?php echo constant ?>" method="POST">
    <p>
        <label for="matricula">matricula</label><br>
        <input type="text" name="matricula" id="">
    </p>
    <p>
        <label for="nombre">nombre</label><br>
        <input type="text" name="nombre" id="">
    </p>    
    <p>
        <label for="apellido">apellido</label><br>
        <input type="text" name="apellido" id="">
    </p>
    <p>
        <input type="submit" value="registrar">
    </p>
</form>

<?php require 'views/footer.php'; ?>

</body>
</html>