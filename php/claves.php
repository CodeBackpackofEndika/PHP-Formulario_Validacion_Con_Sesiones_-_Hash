






<?php

session_start();


if($_SESSION["CORRECTO"]==1){

echo  "<H2><u><strong> <a href='../extras/claves.txt'>Descargar Claves</a> </strong></u></H2> <br>";

}else{
    header("location:index.php");
}

echo "<H2><u><strong> <a href='../index.php'>SALIR</a> </strong></u></H2> <br>";

?>