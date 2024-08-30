<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud php mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/47f0d32471.js" crossorigin="anonymous"></script>
</head>
<body> 
    <h1 class="text-center p-3">Añadir adopción</h1>
    <?php
    include "control/eliminar.php";
    ?>
    <div class="container-fluid row">
        <form class="col-3 p-3" method="POST">
            <h3 class="text-right text-secondary">Registro de perfiles añadidos</h3>
            <?php
            include "modelo/conexion.php";
            include "control/añadir.php";

            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="Nombres">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="Apellidos">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Número cel/tel</label>
                <input type="text" class="form-control" name="NumCel">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="Correo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Documento de identificación</label>
                <input type="text" class="form-control" name="Identificacion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del animal</label>
                <input type="text" class="form-control" name="Animal">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto imagen referencia</label>
                <input type="file" name="Foto" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary" name="registrar" value="ok">Registrar</button>
        </form>
        <div class="col-9 p-4">
            <table class="table">
                <thead class="bg-primary.bg-gradient">
                    <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">#Cel</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Animal</th>
                    <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM mascotas");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?php echo $datos->Nombres; ?></td>
                            <td><?php echo $datos->Apellidos; ?></td>
                            <td><?php echo $datos->NumCel; ?></td>
                            <td><?php echo $datos->Correo; ?></td>
                            <td><?php echo $datos->Identificacion; ?></td>
                            <td><?php echo $datos->Animal; ?></td>
                            <td><?php echo $datos->Foto; ?></td>
                            <td>
                                <a href="editar.php?id=<?= $datos->Nombres ?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="eliminar.php?id=<?= $datos->Nombres ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
                            </td>
                        </tr>
                    <?php } 
                    ?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>