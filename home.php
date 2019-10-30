<!DOCTYPE html>
<html lang="es">
<head>
	<title>Sistema de Carrito</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
	Nombre: <input type="text" name="nombre"> <br>
	Precio: <input type="number" name="precio"><br>
	Imagen: <input type="file" name="imagen"><br>
	<input type="submit" name="alta" value="Guardar">
	<?php 
		if(isset($_POST["alta"])){
		$nombre = $_POST["nombre"];
		$precio = $_POST["precio"];
		$temporal = $_FILES["imagen"]["tmp_name"];
		$nombreIm = $_FILES["imagen"]["name"];
		move_uploaded_file($temporal,"img/".$nombreIm);
		require_once("php/producto.php");
		$obj = new Producto();
		$obj->alta($nombre,$precio,$nombreIm);
		echo "<h2>Producto agregado</h2>";
		}
	 ?>
	</form>
</body>
</html>