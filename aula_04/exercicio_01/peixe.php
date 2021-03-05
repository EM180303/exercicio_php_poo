<?php
require "animal.php"; 

class Peixe extends Animal{
public $caracteristica;

//set
public function setCaracteristica($caracteristica){
    $this->caracteristica = $caracteristica;
}

//get
public function getCaracteristica(){
    return$this->caracteristica;
}

//construtor
public function __construct($nome, $comprimento, $n_patas, $cor, $ambiente, $velocidade_m, $caracteristica)
{
    $this->nome = $nome;
    $this->comprimento = $comprimento;
    $this->n_patas = $n_patas;
    $this->cor = $cor;
    $this->ambiente = $ambiente;
    $this->velocidade_m = $velocidade_m;
    $this->caracteristica = $caracteristica;
}

public function dadosPeixe(){
    echo "Nome: $this->nome <br> Comprimento: $this->comprimento <br> Nº patas: $this->n_patas <br> Cor: $this->cor <br> Ambiente: $this->ambiente <br> Velocidade média: $this->velocidade_m <br> Característica: $this->caracteristica <hr>";
}

}


?>