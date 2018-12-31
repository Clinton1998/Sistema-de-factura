<?php 

	class Producto{

		//atributos
		private $descripcion;
		private $cantidad;
		private $pre_unit;
		private $valor_venta;
		private $conexion;


		//metodos

		//aqui implementaremos al metodo contrusctor
		//un constructor con patametro obligatorio y una opcional

		public function __construct($conexion,$producto="s"){
			if($this-validar_conexion($conexion)){
				$this->conexion = $conexion;
			}
			$this->descripcion = $producto['descripcion'];
			$this->cantidad = $producto['cantidad'];
			$this->pre_unit = $producto['pre_unit'];
			$this->valor_venta = $producto['valor_venta'];
		}
		public function validar_conexion($cn){
			if(isset($cn) && !empty($cn){
				return true;
			}else{
				return false;
			}
		}
		public function registrar_producto(){
			try {
				
			} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."\n";
			}
		}
		public function obtener_producto(){

		}
		public function modificar_producto(){

		}
		public function eliminar_producto(){

		}

	}
 ?>