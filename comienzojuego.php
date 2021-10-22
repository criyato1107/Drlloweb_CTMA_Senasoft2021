<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilojuego.css">
    
	<title>encuentra el bug</title>

<body background="imagenes/fondo.jpg">



<img  src="imagenes/jugador1.png"width="180" height="180"/>
<h2 style="color: white; font-size: xx-large;"> jugador 1</h2>
<table>
        <tr> 
          <td id="0" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="1" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="2" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="3" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
        </tr>
</table>

<hr>
<br>
<img src="imagenes/jugador4.png"width="180" height="180"/>
<h2 style="color: white; font-size: xx-large; "> jugador 2</h2>
<table>
        <tr>
          <td id="4" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="5" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="6" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="7" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
        </tr>
</table>
<hr>
<br>
<img src="imagenes/jugador3.png"width="180" height="180"/>
<h2 style="color: white; font-size: xx-large;"> jugador 3</h2>
<table >
        <tr>
          <td id="8" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="9" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="10" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="11" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
        </tr>
</table>
<hr>
<img src="imagenes/jugador5.png"width="180" height="180"/>
<h2 style="color: white; font-size: xx-large;"> jugador 4</h2>
<table>
        <tr>
          <td id="12" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="13" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="14" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="15" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
        </tr>
</table>
<hr>
<h1 style="text-align: center; color: white; font-size:7rem">CARTAS OCULTAS</h1>
<table>
        <tr>
          <td id="16" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="17" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
          <td id="18" class="letra" onclick="girarCarta()" data-valor="valor">?</td>
        </tr>
</table>
<hr>
<div>
    <table>
    <tr>
    <td><input type="button" value="preguntar" onclick="iniciarjuego()" style="size:  40; width: 700px; height: 40;"/></td>
    <td><input type="text" value="" placeholder="pregunta 1"   style="size:  40; width: 700px;"> </td>
    <td><input type="text" value="" placeholder="pregunta 2"  style="size:  40; width: 700px;"></td>
    <td><input type="text" value="" placeholder="pregunta 3"  style="size:  40; width: 700px;"></td>
    </tr>
    </table>
</div>
<div>
    <table>
    <tr>
    <td><input type="button" value="acusar" onclick="resetearJuego()" style="size:  40; width: 700px;"/></td>
    <td><input type="text" value="" placeholder="acusacion 1"   style="size:  40; width:700px;"> </td>
    <td><input type="text" value="" placeholder="acusacion 2"  style="size:  40; width: 700px;"></td>
    <td><input type="text" value="" placeholder="acusacion 3"  style="size:  40; width: 700px;"></td>
    </tr>
    </table>
</div>


<script src="funtionjuego.js"></script>
</body>
</html>
