<?php
	
	//classe pai
	class Veiculo {
		private $placa;
		private $cor;

	    public function __construct($placa, $cor) {
	        $this->placa = $placa;
	        $this->cor = $cor;
	    }

	    function __set($atributo, $valor){
	    	$this->$atributo = $valor;
	    }

	    function __get($atributo) {
	    	return $this->$atributo;
	    }

	    function acelerar() {
	    	echo 'Acelerou !!!';
	    }

	    function freiar() {
	    	echo 'Freiou !!!';
	    }

	    function trocarMarcha() {
	    	echo 'Trocou a marcha !!!';
	    }
	}

	/************************* Classes extends
	----------------------------------------------------------------------------*/
	class Carro extends Veiculo {
		private $teto_solar

	    public function __construct($placa, $cor, $teto_solar) {
	    	$this->placa = $placa;
	        $this->cor = $cor;
	        $this->teto_solar = $teto_solar;
	    }

	    //método GET E SET
	    function __set($atributo, $valor){
	    	$this->$atributo = $valor;
	    }

	    function __get($atributo) {
	    	return $this->$atributo;
	    }

	    //métodos
	    function abrirTetoSolar() {
	    	echo 'Abriu !!!';
	    }

	    //override
	    function trocarMarcha() {
	    	echo 'Trocou a marca na mão !!!';
	    }
	}

	class Moto extends Veiculo {
		private $contra_peso_guidao;

	    public function __construct($placa, $cor, $contra_peso_guidao) {
	    	$this->placa = $placa;
	        $this->cor = $cor;
	        $this->contra_peso_guidao = $contra_peso_guidao;
	    }

	    //método GET E SET
	    function __set($atributo, $valor){
	    	$this->$atributo = $valor;
	    }

	    function __get($atributo) {
	    	return $this->$atributo;
	    }
	    
	    //métodos
	    function empinar() {
	    	echo 'Empinou !!!';
	    }

	    //override
	    function trocarMarcha() {
	    	echo 'Trocou a marca no pé !!!';
	    }
	}
?>