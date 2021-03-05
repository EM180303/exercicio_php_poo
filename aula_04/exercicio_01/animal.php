<?php

class Animal{

public $nome;
public $comprimento;
public $n_patas;
public $cor;
public $ambiente;
public $velocidade_m;

//set
public function setNome($nome){
    $this->nome = $nome;
}

public function setComprimento($comprimento){
    $this->comprimento = $comprimento;
}

public function setN_patas($n_patas){
    $this->n_patas = $n_patas;
}

public function setCor($cor){
    $this->cor = $cor;
}

public function setAmbiente($ambiente){
    $this->ambiente = $ambiente;
}

public function setVelocidade_m($velocidade_m){
    $this->velocidade_m = $velocidade_m;
}

//get
public function getNome(){
    return$this->nome;
}

public function getComprimento(){
    return$this->comprimento;
}

public function getN_patas(){
    return$this->n_patas;
}

public function getCor(){
    return$this->cor;
}

public function getAmbiente(){
    return$this->ambiente;
}

public function getVelocidade_m(){
    return$this->velocidade_m;
}

//construtor
public function __construct($nome, $comprimento, $n_patas, $cor, $ambiente, $velocidade_m)
{
    $this->nome = $nome;
    $this->comprimento = $comprimento;
    $this->n_patas = $n_patas;
    $this->cor = $cor;
    $this->ambiente = $ambiente;
    $this->velocidade_m = $velocidade_m;
}

public function dados(){
    echo "Nome: $this->nome <br> Comprimento: $this->comprimento <br> Nº patas: $this->n_patas <br> Cor: $this->cor <br> Ambiente: $this->ambiente <br> Velocidade média: $this->velocidade_m <hr>";
}

}
/*
$objanimal = new Animal ("Thor", "1.5", "4","Preta", "Urbano", "45 km/h");
$objanimal->dados();
*/

?>