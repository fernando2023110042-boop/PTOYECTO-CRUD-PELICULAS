-- Crear base de datos
CREATE DATABASE peliculas_crud;

-- Mostrar bases de datos
SHOW DATABASES;

-- Usar la base de datos
USE peliculas_crud;

-- Crear tabla
CREATE TABLE peliculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    genero VARCHAR(100) NOT NULL,
    anio YEAR NOT NULL,
    calificacion DECIMAL(2,1) NOT NULL
);

-- Insertar registros
INSERT INTO peliculas (titulo, genero, anio, calificacion) VALUES
('Inception', 'Ciencia Ficción', 2010, 9.0),
('Titanic', 'Romance', 1997, 8.5),
('El Padrino', 'Drama', 1972, 9.5),
('Avengers: Endgame', 'Acción', 2019, 8.8),
('Coco', 'Animación', 2017, 8.9),
('halloween', 'terror', 2018, 9.9),
('us', 'terror', 2019, 9.8),
('batman', 'accion', 2022, 9.9),
('michael', 'biopic', 2026, 9.6),
('baby driver', 'acccion', 2017, 9.6);

-- Consultar datos
SELECT * FROM peliculas;

-- Mostrar tablas
SHOW TABLES;