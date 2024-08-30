<?php

if (!empty($_POST["registrar"])) {
    if (!empty($_POST["Nombres"]) && !empty($_POST["Apellidos"]) && !empty($_POST["NumCel"]) && !empty($_POST["Correo"]) && !empty($_POST["Identificacion"]) && !empty($_POST["Animal"]) && !empty($_POST["Foto"])) {
        $id = $_POST["id"]; // Asegúrate de que el ID esté siendo enviado desde el formulario
        $Nombres = $_POST["Nombres"];
        $Apellidos = $_POST["Apellidos"];
        $NumCel = $_POST["NumCel"];
        $Correo = $_POST["Correo"];
        $Identificacion = $_POST["Identificacion"];
        $Animal = $_POST["Animal"];
        $Foto = $_POST["Foto"];

        $sql = $conexion->query("UPDATE mascotas SET Nombres='$Nombres', Apellidos='$Apellidos', Numcel='$NumCel', Correo='$Correo', Identificacion='$Identificacion', Animal='$Animal', Foto='$Foto' WHERE Nombre=$id");
        

        if ($sql==1) {
            header("Location:crud.php");
            echo '<div class="alert alert-success">Cambios aplicados exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al actualizar los datos</div>';
        }
    } 
}

?>