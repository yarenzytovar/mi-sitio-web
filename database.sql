CREATE DATABASE sitio_web;

USE sitio_web;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(100),
    password VARCHAR(100)
);