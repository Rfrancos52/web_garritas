<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM mascotas WHERE Nombres=$id");
    if ($sql==1) {
        echo '<div>Publicación eliminada correctamente</div>';
    } else {
        echo '<div>Error al eliminar publicación: ' . $conexion->error . '</div>';
    }
}   
?>