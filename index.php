<?php
include("conexion.php");
$con = conexion();

$sql = "SELECT * FROM USUARIO";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>USUARiO</title>
</head>

<body>
    <div >
        <h1>Crear usuario</h1>
       <form>
    <input type="text" name="nom" placeholder="Nombre">
    <input type="text" name="ap_paterno" placeholder="Apellido Paterno">
    <input type="text" name="ap_materno" placeholder="Apellido Materno">
    <input type="text" name="ci" placeholder="CI">
    <input type="text" name="genero" placeholder="Género">
    <input type="text" name="estado_civil" placeholder="Estado Civil">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="text" name="telefono_de_emergencia" placeholder="Teléfono de Emergencia">
    <input type="text" name="fecha_nac" placeholder="Fecha de Nacimiento">
    <input type="password" name="password" placeholder="Contraseña">
    
    <input type="submit" value="Agregar">
</form>

    </div>

    <div >
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Id_Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>CI</th>
                    <th>Género</th>
                    <th>Estado Civil</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Teléfono de Emergencia</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Contraseña</th>
                  
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>

            <tr>
            <th><?= $row['Id_Usuario'] ?></th>
            <th><?= $row['nom'] ?></th>
            <th><?= $row['ap_paterno'] ?></th>
            <th><?= $row['ap_materno'] ?></th>
            <th><?= $row['ci'] ?></th>
            <th><?= $row['genero'] ?></th>
            <th><?= $row['estado_civil'] ?></th>
            <th><?= $row['email'] ?></th>
            <th><?= $row['telefono'] ?></th>
            <th><?= $row['telefono_de_emergencia'] ?></th>
            <th><?= $row['fecha_nac'] ?></th>
            <th><?= $row['password'] ?></th>

            <th><a href="">Editar</a></th><th><a href="">Eliminar</a></th>
            </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>
