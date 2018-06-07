<?php

class Carro
{

    private $modelo;
    private $motor;
    private $ano; // Atributos

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getMotor(): float
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibir()
    {
        return [
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno(),
        ];
    }

}

$polo = new Carro();
$polo->setModelo("Polo Hach");
$polo->setMotor("1.6");
$polo->setAno("2005");

print_r($polo->exibir());
var_dump($polo->exibir());
