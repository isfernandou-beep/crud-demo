<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

echo "Fecha actual: " . Carbon::now();

?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Demo</title>
</head>
<body>

    <h2>Registrar Monosilabas</h2>

    <form action="guardar.php" method="POST">

        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="correo" required><br><br>

        <button type="submit">Guardar</button>

    </form>
    <hr>

        <h2>Monosilabas Registradas</h2>

        <?php

        include("conexion.php");

        $sql = "SELECT * FROM usuarios";

        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {

            while($fila = $resultado->fetch_assoc()) {

                echo "ID: " . $fila["id"] .
                " | Nombre: " . $fila["nombre"] .
                " | Correo: " . $fila["correo"] . "<br>";

            }

        } else {

            echo "No hay usuarios registrados";

        }

        ?>

</body>
</html>