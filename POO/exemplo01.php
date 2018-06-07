<?php

class Pessoa {

	public $nome;

	public function falar() {
		return "Meu nome é " . $this->nome;
	}
}

$sandro = new Pessoa();
$sandro->nome = "Sandro Torres";
echo $sandro->falar();

?>