<?php

if(isset($_FILES['archivo'])){

    $nombre =
    $_FILES['archivo']['name'];

    $temporal =
    $_FILES['archivo']['tmp_name'];

    move_uploaded_file(
        $temporal,
        "../uploads/" . $nombre
    );

    echo "<h1>
            Archivo subido correctamente
          </h1>";

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Subir Archivo</title>

</head>

<body>

    <h1>Subir Archivo</h1>

    <form method="POST"
          enctype="multipart/form-data">

        <input type="file"
               name="archivo">

        <button type="submit">
            Subir
        </button>

    </form>

</body>

</html>