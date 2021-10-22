<!-- incluir controllador de incio para registro de usuario y codigo hexadecimal-->
<?php
$accion = @$_POST['accion'];
if ($accion == "Jugar") {
    include 'iniciocontroller.php';
} else if ($accion == "IR") {
    include 'unirmecontroller.php';
}

//funcion para generar el codigo hexadecimal
function hexadecimal($caracteres)
{

    $caracteresPosibles = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $azar = '';

    for ($i = 0; $i < $caracteres; $i++) {

        $azar .= $caracteresPosibles[rand(0, strlen($caracteresPosibles) - 1)];
    }

    return $azar;
}




?>


<!--MENU DE ENTRADA DE LOS JUGADORES DONDE SE REALIZA EL INGRESO A LA SALA -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--ICONO DE PESTAÑA DEL NAVEGADOR-->
    <link rel="icon" href="imagenes/lupo.png"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--TITULO PESTAÑA DEL NAVEGADOR--->
    <title>Encuentra el BUG</title>
</head>
<!--- FONDO DE PANTALLA--->
<body background="imagenes/fondo.jpg" style="background-size: cover; width: 100%; height: 100%;">

<!--FORMULARIO POR METODO POST AL CONTROLLER DE INICIO PARA CREAR EL INGRESO DE LOS JUGADORES--->
    <form action="" method="POST">
        <div class="container mt-5">
            <img class="mb-4 rounded mx-auto d-block" src="imagenes/lupo.png" width="200" height="200">
            <h1 class="mb-3 fw-normal" style="text-align: center; color: white; font-family: cursive; font-size:300%;">Encuentra el Bug en el sistema</h1>
            <hr>
<!--CAMPO DE FORMULARIO DE INGRESO DEL NOMBRE--->
            <div style="text-align: center; color: white;">
                <h3>Usuario</h3>
                <input type="text" name="nombre" placeholder="Ingrese su Nombre">

            </div>
            <br>
            <div style="text-align: center; color: white;">
<!--GENERACION DE CODIGO HEXADECIMAL PROPORCIONADO POR EL SISTEMA-->
                <h3>codigo acceso</h3>
                <input type="text" name="codigo" value="<?php echo hexadecimal(5); ?>" readonly="readonly">
            </div>
            <br>
<!---MENSAJE DE VALIDACION SI FALTA ALGUN CAMPO-->
            <?php echo @$mensaje; ?>
            <div style="text-align: center;">
                <input style="background-color: rgb(0,255,0);" class="btn  center-block" name="accion" type="submit" value="Jugar" />
            </div>
        </div>
        <br>
        <div class="container mt-5" style="text-align: center; color: white;">
            <div>
<!--SI ESTA BUSCANDO UNIRSE A UNA SALA INGRESAR POR ES LUGAR--->
                <h3>Unirme a Partida</h3>
                <input type="text" name="unirme" placeholder="Encontrar">
                <br> <br>
                <input type="submit" class="  btn btn-primary" name="accion" value="IR">
            </div>

        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>