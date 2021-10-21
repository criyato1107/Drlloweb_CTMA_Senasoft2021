<!-- conexion a la base de datos-->
<?php
$con = new mysqli("localhost","root","","juego") or die("Error de conexion");
$con->query("SET NAMES UTF8");