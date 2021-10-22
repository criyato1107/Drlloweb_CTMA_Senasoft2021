
<?php
// INGRESO DE CAMPOS DESDE INICIO.PHP QUE SON GUARDADOS EN VARIABLES
$mensaje = "";
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];

//VALIDACION DE CAMPO DE NOMBRE
if (empty($nombre)) {
    $mensaje = '<div class="alert alert-danger" role="alert">
    Ingrese su nombre!
    </div>';
}
//VALIDACION QUE EL NOMBRE SE MAYOR A TRES CAMPOS
if (strlen($nombre)<3) {
    $mensaje .= '<div class="alert alert-danger" role="alert">
    su nombre debe de contener minimo tres letras!
    </div>';
}
//SI NO HAY PROBLEMAS CON LAS VALIDACIONES INGRESAR LOS CAMPOS EN LA BASE DE DATOS
if(empty($mensaje)){
require_once 'conexion.php';
$consulta="INSERT INTO `jugador`(`id_jugador`, `nombre_jugador`, `codigo_hex`) VALUES (DEFAULT,'$nombre','$codigo')";
$respuesta = $con->query($consulta);

//SI SE LOGRA LA INSERCION DE DATOS A LA BASE DE DATOS, LO DIRIGE A LA SALA DE ESPERA
if($respuesta==1){

   
    session_start();
    $_SESSION['codigo_hex']= $codigo;
    header("location:salaespera.php");
}else{

// SI NO DA UNA ALERTA DE QUE NO SE LOGRO
    $mensaje = '<div class="alert alert-danger" role="alert">
    ususario no registrado
    </div>';
}
}