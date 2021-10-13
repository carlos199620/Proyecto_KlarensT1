<?php 
session_start();
$_SESSION ['user'] = $usuario;
if ($filas>0){
    header("location:../dashboard/index.php");
}else{
    echo '<script language="javascript">alert("ERROR AL LOGUEARSE...");</script>';
    // header("location:.././index.php");
}
?>