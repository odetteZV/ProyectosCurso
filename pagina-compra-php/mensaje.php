<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Mensaje Final</title>
<link rel="stylesheet" href="estilos.css">
<style>
	h3{
		text-align: center;
		color: #B95359;
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

<?php

$total=$_GET['total'];

if((150 - $total) <0) {
echo ("<h3>No tienes saldo suficiente</h3>");
}

else{
echo ("<h3>Te quedan ".(150-$total)." Euros</h3>");
}

?>

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