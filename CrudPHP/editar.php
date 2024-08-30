<?php

include "modelo/conexion.php";

$id=$_GET["id"];

$sql=$conexion->query("SELECT * FROM mascotas WHERE Nombres='$id'");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar crud php mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-3 p-3 m-auto" method="POST">
        <h3 class="text-right text-secondary">Modificar Datos de perfil</h3>
        <input type="hidden" name="id" value="<?= $_GET["$Nombres"]?>">
        <?php
        include "control/editar.php";
        while ($datos=$sql->fetch_object()) { ?>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="Nombres" value="<?= $datos->Nombres ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="Apellidos" value="<?= $datos->Apellidos ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Número cel/tel</label>
                <input type="text" class="form-control" name="Numcel" value="<?= $datos->NumCel ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="Correo" value="<?= $datos->Correo ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Documento de identificación</label>
                <input type="number" class="form-control" name="Identificacion" value="<?= $datos->Identificacion ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del animal</label>
                <input type="text" class="form-control" name="Animal" value="<?= $datos->Animal ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto imagen referencia</label>
                <input type="file" name="Foto" accept="image/*" value="<?= $datos->Foto ?>">
            </div>
        <?php } 
        ?>
        <button type="submit" class="btn btn-primary" name="registrar" value="ok"><a href="crud.php">Modificar</button>
    </form>
</body>
</html>