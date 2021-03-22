<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Carrito de compra</title>
<link rel="stylesheet" href="estilos.css">
<style>
	h1 {
    text-align: center;
    color: #B95359;
    margin-bottom: 20px;
    }
	.contenedor{
	position: absolute;
    top:200px;
    left: 500px;
	}
	.contfooter{
		top:700px
	}
	
</style>
</head>
<body>
<header class="header">
	<a href="compra.html"><img class="logo" src="imagenes/logo.png"  alt="Inico" name="Inicio"></a>

	<div class="perfil">
	<a href="#"><img class ="separation" src="imagenes/cesta.png" width="35px" alt="Cesta de compra" title="Cesta de compra"></a>
	<a href="#"><img class ="separation" src="imagenes/usuario.png" width="35px" alt="Perfil" title="Perfil"></a>
	</div>
</header>

<br>
<br>
<h1>Resumen de la compra</h1>

<?php

 $cantidadjer=$_GET ['cantidadjer'];
 $preciojer=$_GET ['preciojer'];

 $cantidadpan=$_GET ['cantidadpan'];
 $preciopan=$_GET ['preciopan'];

 $cantidadabr=$_GET ['cantidadabr'];
 $precioabr=$_GET ['precioabr'];

 $total = ($preciopan * $cantidadpan) + ($preciojer * $cantidadjer) + ($precioabr * $cantidadabr);
 ?>

<div class='contenedor'>
	<div><img src='imagenes/jersey.jpg' title='jersey' width='80px'> 
	<b>Cantidad:</b>  <?php echo($cantidadjer." x ".$preciojer." €"); ?>
	<br>
	</div>

	
	<div><img src='imagenes/pants.jpg' title='pantalones' width='80px'> 
	<b>Cantidad:</b>  <?php echo ($cantidadpan." x ".$preciopan." €" ); ?>
	<br></div>

	<div><img src='imagenes/ropa.jpg' title='abrigo' width='80px'> 
	<b>Cantidad:</b> <?php echo ($cantidadabr." x ".$precioabr." €" ); ?>
	<br></div>
	<div>
	<br>

	<h4>Total a pagar:  <?php echo($total) ?> euros</h4>
	<br>
</div>
<form method="get" action="pago.php">
<input type="hidden" name="total" value="<?php echo($total)?>">
<br>
<button type="submit" name="comprar" value="comprar" class="button button2">Comprar</button>
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