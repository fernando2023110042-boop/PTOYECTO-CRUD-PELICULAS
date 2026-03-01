<?php require 'Includes/funciones.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Películas Favoritas</title>
    <link rel="stylesheet" href="build/css/style.css">
</head>
<body>

<h1 class="glitch" data-text="🎬 Registro de Películas Favoritas">
    🎬 Registro de Películas Favoritas
</h1>

<br>

<a href="crear.php" style="
    display:inline-block;
    padding:10px 15px;
    background:#00ffff;
    color:black;
    text-decoration:none;
    font-weight:bold;
    border-radius:6px;">
    + Agregar Película
</a>

<br><br>

<table border="1">
<tr>
    <th>ID</th>
    <th>Título</th>
    <th>Género</th>
    <th>Año</th>
    <th>Calificación</th>
    <th>Acciones</th>
</tr>

<?php 
$resultado = obtenerPeliculas();
while($pelicula = $resultado->fetch_assoc()):
?>

<tr>
    <td><?= $pelicula['id']; ?></td>
    <td><?= $pelicula['titulo']; ?></td>
    <td><?= $pelicula['genero']; ?></td>
    <td><?= $pelicula['anio']; ?></td>
    <td><?= $pelicula['calificacion']; ?></td>
    <td>
        <a href="editar.php?id=<?= $pelicula['id']; ?>">Editar</a>
        <a href="eliminar.php?id=<?= $pelicula['id']; ?>">Eliminar</a>
    </td>
</tr>

<?php endwhile; ?>

</table>
</body>
</html>