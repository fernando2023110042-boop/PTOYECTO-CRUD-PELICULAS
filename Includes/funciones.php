<?php
require_once __DIR__ . '/database.php';

function obtenerPeliculas() {
    global $conn;
    return $conn->query("SELECT * FROM peliculas");
}

function crearPelicula($data) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO peliculas 
        (titulo, genero, anio, calificacion) 
        VALUES (?, ?, ?, ?)");

    if(!$stmt){
        die("Error en prepare: " . $conn->error);
    }

    $stmt->bind_param("ssid",
        $data['titulo'],
        $data['genero'],
        $data['anio'],
        $data['calificacion']
    );

    if(!$stmt->execute()){
        die("Error en execute: " . $stmt->error);
    }

    return true;
}

function obtenerPeliculaPorId($id){
    global $conn;
    return $conn->query("SELECT * FROM peliculas WHERE id = $id");
}

function actualizarPelicula($id, $data){
    global $conn;

    $stmt = $conn->prepare("UPDATE peliculas SET
        titulo=?, genero=?, anio=?, calificacion=?
        WHERE id=?");

    $stmt->bind_param("ssidi",
        $data['titulo'],
        $data['genero'],
        $data['anio'],
        $data['calificacion'],
        $id
    );

    return $stmt->execute();
}

function eliminarPelicula($id){
    global $conn;
    return $conn->query("DELETE FROM peliculas WHERE id = $id");
}
?>