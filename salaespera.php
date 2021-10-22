<?php
session_start();
if (!isset($_SESSION['codigo_hex'])) {
	header("location:inicio.php");
}

$codigo=$_SESSION['codigo_hex'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="imagenes/lupo.png"> 
	<title>sala de espera </title>

	
<body background="imagenes/fondo.jpg" style="background-size: cover; width: 100%; height: 100%;">
<h1 class="mb-5" style="color: white;font-family: cursive; ">ENCUENTRA EL BUG</h1>
			<h2 style="color: white;font-family: cursive; ">Codigo de Acceso:<?php echo $_SESSION['codigo_hex']  ?></h2>
		<hr>


	
<table class="table">
			<thead>
				<tr>
				<th scope="col" style="color: white;font-family: cursive; font-size: 3rem; ">PJ</th>
				<th scope="col" style="color: white;font-family: cursive; font-size: 3rem; ">id</th>
				<th scope="col" style="color: white;font-family: cursive; font-size: 3rem; ">nombre</th>
				<th scope="col" style="color: white;font-family: cursive; font-size: 3rem; ">codigo</th>
				<th></th>
				</tr>
			</thead>
			
			<tbody>
	<?php
	

		require_once 'conexion.php';
		$consulta = "SELECT `id_jugador`, `nombre_jugador`, `codigo_hex` FROM `jugador`WHERE codigo_hex = '$codigo' ";
		$respuesta =$con->query($consulta);
		while ($datos = $respuesta->fetch_object()){
	?>

		
				<tr>
					
					<td style="color: white;font-family: cursive; "> <?php echo $datos->id_jugador;?></td>
				</tr>
				<tr>
					<td style="color: white;font-family: cursive; "><?php echo $datos->nombre_jugador;?></td>
				</tr>
				<tr>
					<td style="color: white;font-family: cursive; "><?php echo $datos->codigo_hex;?></td>
				</tr>
				</tr>
		
 	<?php 
	 }
	?>	
</body>
</html>