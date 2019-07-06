<?php

	//classes PHP
	class Funcionarios {

		//atributos
		private $nome;
		private $telefone;
		private $numFilhos;
		private $cargo;
		private $salario;

		//construtor
		function __construct($nome, $telefone, $numFilhos, $cargo, $salario) {
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->numFilhos = $numFilhos;
			$this->cargo = $cargo;
			$this->salario = $salario;
		}

		function __destruct() {

		}


		//métodos GET e SET (overloading / sobrecarga)
		function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		function __get($atributo) {
			return $this->$atributo;
		}


		//métodos
		function resumirCadFun(){
			return $this->__get('nome') . " possui" . $this->__get('numFilhos');

		}

		function modificarNumFilhos(){
			
		}
	}

	//instânciando objs
	$funcionario = new Funcionarios();
	

	//acessar métodos e atributos
	echo $funcionario ->resumirCadFun();

	//removendo da memória com o unset, que chama o destruct
	unset($funcionario) 
?>