<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Pasarela de pago</title>
<link rel="stylesheet" href="estilos.css">
<style>
	h1 {
    text-align: center;
    color: #B95359;
    margin-bottom: 20px;
    }
	h3{
	text-align: center;
	}
	.contpago{
	position: absolute;
	top:250px;
	left: 500px;
	border: 1px solid;
	padding: 10px;
	color: black; 
	}
    .pagoimg{
    align-items: center;
    }
</style>
</head>
<body>
<header  class="header">
	<a href="compra.html"><img class="logo" src="imagenes/logo.png"  alt="logo"></a>

	<div class="perfil">
		<a href="#"><img class ="separation" src="imagenes/cesta.png" width="35px" alt="Cesta de compra" title="Cesta de compra"></a>
		<a href="#"><img class ="separation" src="imagenes/usuario.png" width="35px" alt="Perfil" title="Perfil"></a>
	</div>
</header>

<br>
<br>
<h1>Pagar con Tarjeta</h1>

<?php

$total = $_GET ['total'];

echo("<h3>Total a pagar: ".$total."</h3>");
?>

<div class="contpago">
<form method="get" action="mensaje.php">
<br>
    
    <div class="pagoimg">
    <img src="imagenes/visa1.png" alt="visa" name="visa">
    <img src="imagenes/mastercard.png" alt="visa" name="visa">
    <img src="imagenes/paypal1.png" alt="visa" name="visa">
    </div>

    <input type="radio" name="tt" value="visa">VISA
    <input type="radio" name="tt" value="mastercard">MasterCard
    <input type="radio" name="tt" value="paypal">Paypal

	<br>
	<br>
    Número de tarjeta:<input type="text" name="numtarjeta" required>
	<br>
	<br>
	Nombre del titular:<input type="text" name="nombre" required>
	<br>
	<br>
	Fecha de vencimiento:<input type="month" name="fecha" required>
	<br>
	<br>
	Código de seguridad:<input type="number" name="seguridad"  required>
	<br>
	<br>
	<button type="submit" name="comprar" class="button button2">Pagar</button>
	<input type="hidden" name="total" value="<?php echo($total)?>">
</form>
</div>

<footer class="contfooter">
	<div class="padd">
		<a href="#"><img class ="separation" src="imagenes/instagram.png" width="35px" alt="logo de instagram" title="instagram"></a>
		<a href="#"><img class ="separation" src="imagenes/facebook.png" width="35px" alt="logo de instagram" title="facebook"></a>
		<a href="#"><img class ="separation" src="imagenes/twitter.png" width="35px" alt="logo de instagram" title="twitter"></a>
		<br>
		<br>
		<p> &copy; Todos los derechos reservados</p>
	</div>
</footer>


</body>
</html>

