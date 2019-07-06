<?php 
	//homogenidade de classes, as classes tem que implementar quando heradam

	interface EquipamentosEletronicos {

		public function ligar();
		public function desligar();

	}

	//classes de herança

	class Geladeira implements EquipamentosEletronicos {

		public function abrirPorta() {

		}

		public function ligar() {

		}

		public function desligar() {

		}

	}

	class Tv implements EquipamentosEletronicos{

		public function trocarCanal() {
			
		}

		public function ligar() {

		}

		public function desligar() {

		}
		
	}
?>

<?php
	//herando interface de interface

	interface AnimalInterface {
		public comer();
	}

	interface AveInterface extends AnimalInterface {
		public voar();
	}

	
	class Papagaio implements AveInterface {
		public comer() {

		}

		public voar() {
			
		}
	}

?>