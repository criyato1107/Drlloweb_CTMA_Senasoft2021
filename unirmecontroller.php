<?php
// INGRESO DE CAMPOS DESDE INICIO.PHP QUE SON GUARDADOS EN VARIABLES
$mensaje = "";
$nombre = $_POST['nombre'];
$unirme = $_POST['unirme'];

if (empty($nombre)) {
    $mensaje = '<div class="alert alert-danger" role="alert">
    Ingrese su nombre por favor.!
    </div>';
}
if (empty($unirme)) {
    $mensaje .= '<div class="alert alert-danger" role="alert">
    Ingrese un codigo por favor!
    </div>';
}
if (empty($mensaje)) {
    require_once 'conexion.php';
    $consulta="SELECT * FROM `jugador` WHERE codigo_hex = '$unirme' ";
    $respuesta = $con->query($consulta);

    if($respuesta==1){
        require_once 'conexion.php';
        $consulta2="INSERT INTO `jugador`(`id_jugador`, `nombre_jugador`, `codigo_hex`) VALUES (DEFAULT,'$nombre','$unirme')";
        $respuesta2 = $con->query($consulta2);
      
   
        
    
        if($respuesta2==1){
            session_start();
            $_SESSION['codigo_hex']=$unirme;
            header("location:salaespera.php");
        }


    }
}

    