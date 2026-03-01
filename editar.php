<?php
require 'Includes/funciones.php';

$id = $_GET['id'];
$resultado = obtenerPeliculaPorId($id);
$pelicula = $resultado->fetch_assoc();

if($_POST){
    actualizarPelicula($id, $_POST);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="build/css/style.css">
</head>
<body>

<h2>Editar Película</h2>

<form method="POST">

Título: <input type="text" name="titulo" value="<?= $pelicula['titulo']; ?>"><br>
Género: <input type="text" name="genero" value="<?= $pelicula['genero']; ?>"><br>
Año: <input type="number" name="anio" value="<?= $pelicula['anio']; ?>"><br>
Calificación: <input type="number" step="0.1" name="calificacion" value="<?= $pelicula['calificacion']; ?>"><br><br>

<input type="submit" value="Actualizar">

</form>

</body>
</html>