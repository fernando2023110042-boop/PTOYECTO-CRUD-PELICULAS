<?php
require_once __DIR__ . '/Includes/funciones.php';

if($_POST){

    $resultado = crearPelicula($_POST);

    if($resultado){
        header("Location: index.php");
        exit;
    } else {
        echo "Error al insertar: ";
        print_r($conn->error);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="build/css/style.css">
<script src="build/js/validations.js"></script>
</head>
<body>

<h2>Agregar Película</h2>

<form method="POST" action="">

Título: <input type="text" name="titulo" id="titulo"><br>
Género: <input type="text" name="genero" id="genero"><br>
Año: <input type="number" name="anio" id="anio"><br>
Calificación (0-10): <input type="number" step="0.1" name="calificacion" id="calificacion"><br><br>

<input type="submit" value="Guardar">

</form>

</body>
</html>