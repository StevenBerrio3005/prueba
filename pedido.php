<?php 
 class Pedido{

 	private $codigo;
 	private $fecha;
 	private $producto;
 	private $valor;

 	public function crearPedido($parCod, $parFec, $parPro, $parVal){

 		$this->codigo=$parCod;
 		$this->fecha=$parFec;
 		$this->producto=$parPro;
 		$this->valor=$parVal;
 	}

 	public function cancelarPedido(){
 		echo "<br>el pedido numero $this->codigo ha sido cancelado";
 	}

 	public function imprimirPedido(){

 		echo "<br>el producto con codigo : $this->codigo con la fecha: $this->fecha fecha se realizo";
 	}

 }

 	$objPer1= new Pedido();
 	$objPer1-> crearPedido(123, "01/03/2022", "platano", 6000);
 	$objPer1->imprimirPedido();
 	$objPer1->cancelarPedido();

 ?>