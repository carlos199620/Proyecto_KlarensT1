<?php
  error_reporting(0);
  // se importa el archivo de la conexion
  include('conexion.php');
  // Se inicia la secion
  session_start();

  // Variables para recibir los datos del formulario y guardarlos.
  $usuario=$_POST['user'];
  $password=$_POST['psw'];

  /* Se raliza la consulta con la bd, donde el contenido de los campos del formulario 
  sean iguales al contenido de la bd*/  
  $consulta="SELECT idUsuario,Nombre_usuario,Tipo_usuario,Password_usuario FROM usuario WHERE idUsuario='$usuario' AND Password_usuario='$password'";
  // Se ejecuta la consulta, recibe la conexion a la bd y la consulta
  $result = mysqli_query($conexion,$consulta);
  
  // Obtenemos el numero de filas que coinciden al realizar la consulta, si los datos coinciden arrojara 1 o mas fila, si no, no arrojara ningun resultado.
  $filas =  mysqli_fetch_assoc($result);
  
    // Validacion para usuarios
    if($filas ['Tipo_usuario'] == 1){ //admin

        // se crean los inicios de sesion  
        $_SESSION ['user'] = $filas['idUsuario'];
        $_SESSION ['psw'] = $filas['Password_usuario'];
        header("location: ../dashboard/index.php");
    }else 
    if($filas ['Tipo_usuario'] == 2){ //Consultor T1, Legalizaciones y Vehiculos
       
        // se crean los inicios de secion  
        $_SESSION ['user'] = $filas['idUsuario'];
        $_SESSION ['psw'] = $filas['Password_usuario'];
        header("location:../dashboard/usuariosexternos/registrat1/home.php");

    }else 
    if($filas ['Tipo_usuario'] == 3){ //Legalizaciones
       
        // se crean los inicios de secion  
        $_SESSION ['user'] = $filas['idUsuario'];
        $_SESSION ['psw'] = $filas['Password_usuario'];
        header("location:../dashboard/usuariosexternos/legalizaciones/home.php");

    }else{
      echo '<script>
      alert("Datos errados, intentelo de nuevo");
      window.history.go(-1)
      </script>';
    }

// liberamos los resultado de la memoria
mysqli_free_result($result);
// se cierra la conexion
mysqli_close($conexion);