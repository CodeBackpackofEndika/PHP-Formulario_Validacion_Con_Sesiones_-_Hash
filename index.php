<?php

session_start();
session_destroy();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Autentificación</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<main>
    <h1>
        FORMULARIO AUTENTIFICACIÓN
    </h1>



    <form action="php/login.php" method="POST">
        <div>
            <label for="user"><strong>Usuario</strong></label>
            <br>
            <input type="text" name="user" id="user" placeholder="User">
        </div>
        <div>
            <label for="pass"><strong>Contraseña</strong></label>
            <br>
            <input type="password" name="password" id="pass" placeholder="Password">
        </div>
        <br>
        <div>
            <div class="boton">
                <button>ENVIAR</button>
            </div>
        </div>
    </form>

</main>

</body>
</html>