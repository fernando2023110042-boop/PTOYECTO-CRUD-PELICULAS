<?php
require 'Includes/funciones.php';

$id = $_GET['id'];
eliminarPelicula($id);

header("Location: index.php");
?>