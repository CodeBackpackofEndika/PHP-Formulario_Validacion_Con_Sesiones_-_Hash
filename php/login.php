<?php

//Variables de Datos
$login = $_POST["user"];
$password = $_POST["password"];
$hash = md5($password);

if ($login === "admin" && $hash == "21232f297a57a5a743894a0e4a801fc3") {

    // Variables de Sesion

    session_start();
    $_SESSION["CORRECTO"]=1;

    echo "<a href='claves.php'><H2><u><strong>Acceder a Claves</strong></u></H2></a> <br>";

} else {
    header("location:../index.php");
}

echo "<a href='../index.php'><H2><u><strong>SALIR</strong></u></H2></a>";

?>