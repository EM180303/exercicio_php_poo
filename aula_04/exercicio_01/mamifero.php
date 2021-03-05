<?php
require "peixe.php"; 

class Mamifero extends Animal{
public $alimento;

//set
public function setAlimento($alimento){
    $this->alimento = $alimento;
}

//get
public function getAlimento(){
    return$this->alimento;
}

//construtor
public function __construct($nome, $comprimento, $n_patas, $cor, $ambiente, $velocidade_m, $alimento = null)
{
    $this->nome = $nome;
    $this->comprimento = $comprimento;
    $this->n_patas = $n_patas;
    $this->cor = $cor;
    $this->ambiente = $ambiente;
    $this->velocidade_m = $velocidade_m;
    $this->alimento = $alimento;
}

public function dadosMamifero(){
    echo "Nome: $this->nome <br> Comprimento: $this->comprimento <br> Nº patas: $this->n_patas <br> Cor: $this->cor <br> Ambiente: $this->ambiente <br> Velocidade média: $this->velocidade_m <br> Alimento: $this->alimento <hr>";
}

}

?>