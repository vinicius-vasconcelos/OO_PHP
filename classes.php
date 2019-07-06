<?php

	//classes PHP
	class Funcionarios {

		//atributos
		private $nome;
		private $telefone;
		private $numFilhos;


		//métodos GET e SET
		function setNome($nome) {
			$this->nome = $nome;
		}

		function getNome() {
			return $this->$nome;
		}

		function setTelefone($telefone) {
			$this->telefone = $telefone;
		}

		function getNome() {
			return $this->$telefone;
		}

		function setNumFilhos($numFilhos) {
			$this->numFilhos = $numFilhos;
		}

		function getNome() {
			return $this->$numFilhos;
		}



		//métodos
		function resumirCadFun(){
			return 'teste';

		}

		function modificarNumFilhos(){
			
		}
	}

	//instânciando objs
	$funcionarios = new Funcionarios();
	

	//acessar métodos e atributos
	echo $funcionarios ->resumirCadFun(); 
?>