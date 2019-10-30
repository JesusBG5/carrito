<?php 
	class Conexion{

		private $host = "localhost";
		private $base = "carrito";
		private $usuario = "root";
		private $password = "";
		public $sentencia = "";
		public $conexion;

		private function abrir_conexion(){
			$this->conexion = new mysqli(
				$this->host,$this->usuario,
				$this->password,$this->base);
		}

		private function cerrar_conexion(){
			$this->conexion->close();
		}
		//ALTA BAJA MODIFICACION
		public function ejecutar_sentencia(){
		$this->abrir_conexion();
		$this->conexion->query($this->sentencia);
		$this->cerrar_conexion();
		}
		//CONSULTA
		public function obtener_sentencia(){
		$this->abrir_conexion();
		$res = $this->conexion->query($this->sentencia);
		return $res;
		}
	}

 ?>