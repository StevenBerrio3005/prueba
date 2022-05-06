<?php 

class Persona{
	public $cedula;
	private $nombre;
	private $edad;

	public function cantar(){
		echo "despachito";
	}

	public function imprimir(){
		echo" Esto es una impresion";
	}

	public function construir(){
		echo "construcion";
	}

	public function sumar($v1,$v2){
		$suma= $v1.$v2;

		return $suma;
	}
}

$objPEr1 = new Persona();
$objPEr1->imprimir();
$objPEr1->cedula=123456;
echo $objPEr1->sumar("<br>juliana"," natalia ") .$objPEr1->sumar(" aguila" , " perror");

 ?>