<!DOCTYPE html>
<html lang="es">
<head>
	<title>Amazon UPVT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<h1 id="encabezado">
			Amazon UPVT
		</h1>
	</header>
	<section id="principal">
	<?php 
		require_once("php/producto.php");
		$obj = new Producto();
		$res = $obj->consulta();
		while($fila = $res->fetch_assoc()){
	echo "<article>";
	echo "<img src='img/".$fila["imagen"]."' >";
	echo "<br>";
	echo "<figcaption>".$fila["nombre"]."</figcaption>";
	echo "<input type='button' value='Agregar'>";
	echo "</article>";
		}
	 ?>
	 </section>
</body>
</html>