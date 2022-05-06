<?php 

class Matricula{

	private $codigo;
	private $nombre;
	private $asignatura;
	private $valor;

	function crearMatricula($cod,$nom,$asig,$val){

		$this->codigo=$cod;
		$this->nombre=$nom;
		$this->asignatura=$asig;
		$this->valor=$val;
	}

	function imprimirPedido(){
		echo "<br>el usuario con codigo $this->codigo $this->nombre a la asignatura  $this->asignatura ha sido matriculado";
	}

	function cancelarPedido(){
		echo "<br>la matricula con codigo $this->codigo ha sido cancelada";

	}
}

$usuario = new Matricula();
$usuario ->crearMatricula(1234, "Steven", "Ingenieria Sistemas", "1800000");
$usuario->imprimirPedido();
$usuario->cancelarPedido();


 ?>