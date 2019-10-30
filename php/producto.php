<?php 
require_once("conexion.php");
class Producto extends Conexion{

	public function alta($nombre,$precio,$imagen){
	$this->sentencia = "INSERT INTO producto VALUES (null,'$nombre','$precio','$imagen');";
	$this->ejecutar_sentencia();
	}

	public function consulta(){
	$this->sentencia = "SELECT * FROM producto;";
	$this->obtener_sentencia();
	}

}
 ?>
