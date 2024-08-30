<?php

if (!empty($_POST["registrar"])){
    if (!empty($_POST["Nombres"]) && !empty($_POST["Apellidos"]) && !empty($_POST["NumCel"]) && !empty($_POST["Correo"]) && !empty($_POST["Identificacion"]) && !empty($_POST["Animal"]) && !empty($_POST["Foto"])) {
        echo "Datos ingresados correctamente";

        $Nombres=$_POST["Nombres"];
        $Apellidos=$_POST["Apellidos"];
        $NumCel=$_POST["NumCel"];
        $Correo=$_POST["Correo"];
        $Identificacion=$_POST["Identificacion"];
        $Animal=$_POST["Animal"];
        $Foto=$_POST["Foto"];

        $sql = $conexion->query("INSERT INTO mascotas (Nombres, Apellidos, NumCel, Correo, Identificacion, Animal, Foto) 
         VALUES ('$Nombres', '$Apellidos', '$NumCel', '$Correo', '$Identificacion', '$Animal', '$Foto')");

        if ($sql==1) {
            echo '<div class="alert alert-success">Adopción publicada exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger">Adopción fallo en publicar</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Falta un campo por diligenciar</div>';
    }
}

?>