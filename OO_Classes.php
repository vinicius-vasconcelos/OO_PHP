<?php 
	//classe pai
	class Pai {
		protected $nome;
		protected $sobrenome;
		protected $humor;

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function __get($atributo) {
			return $this->$atributo;
		}

	}

	//classe herança
	class Filho extends Pai {
		private $cabelo;

		public __constructor() {
			//exibe todos os métodos da classe
			print_r(get_class_methods($this));
		}
	}


	$pai = new Pai();
	$pai->__get($nome);

	//retorna array de métodos internos do obj, não lista protected e nem private
	print_r(get_class_methods($filho));

?>