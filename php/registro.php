<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];

if(
    preg_match("/^[a-zA-Z ]+$/", $nombre)
){

    $sql = "INSERT INTO usuarios
            (nombre, correo, password)

            VALUES
            (:nombre, :correo, :password)";

    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':password', $password);

    $stmt->execute();

    session_start();

    $_SESSION['usuario'] = $nombre;

    setcookie(
        "usuario",
        $nombre,
        time()+3600
    );

    echo "<h1>
            Usuario registrado correctamente
          </h1>";

    echo "<a href='../pages/php.html'>
            Volver
          </a>";

}else{

    echo "<h1>Nombre inválido</h1>";

}

?>