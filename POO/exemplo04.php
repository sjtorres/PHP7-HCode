<?php 

class Endereco {
	private $logadouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logadouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct() {
		// var_dump("DESTRUIR");
	}

	public function __toString() {
		return $this->logadouro . "," . $this->numero . "-" . $this->cidade;
	}
}

$meuEndereco = new Endereco("Rua Luiz Spigolon", "1458", "Paranavaí");
// var_dump($meuEndereco);
// unset($meuEndereco);

echo $meuEndereco;
 ?>