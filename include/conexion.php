<?php
$conexion = mysqli_connect ("localhost", "root", "", "databaset1");

if (!$conexion){
    echo 'Error al conectarse a la base de datos';
} else {
     echo 'Conexion a la BD Exelente';
}
?>