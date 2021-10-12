<?php

$usuario = $_POST['user'];
$pass = $_POST['psw'];

$conexion=mysqli_connect('localhost','root','','databaset1');
$consulta="SELECT FROM usuario where idUsuario='$usuario' and Password_usuario='$pass'";
$res=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($res);
if ($filas>0){
    header("location:../dashboard/index.php");
}else{
    echo "ERROR DE CONEXION";
}
mysqli_free_result($res);
mysqli_close($conexion);
?>