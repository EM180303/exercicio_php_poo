<?php

date_default_timezone_set('America/Recife');

class Pessoa{

//atributos
public $nome;
public $data;
public $altura;
public $idade;

//construtor
public function __construct($nome, $data, $altura){
    $this->setNome($nome);
    $this->setData($data);
    $this->setAltura($altura);
    }    

//get
public function getNome(){
    return $this->nome;
}

public function getData(){
    return $this->data;
}

public function getAltura(){
    return $this->altura;
}

public function getIdade(){
    return $this->idade;
}

//set
public function setNome($nome){
    return $this->nome = $nome;
}

public function setData($data){
    return $this->data = $data;
}

public function setAltura($altura){
    return $this->altura = $altura;
}

public function setIdade($idade){
    return $this->idade = $idade;
}

//idade
public function Idade($data){
    $datan = new DateTime($data); 
    $presente = new DateTime();
    $idade = $presente->diff($datan);
    $this->idade = $idade->y;
    return $idade->y;
}

public function Mostrar(){
echo("Nome: $this->nome <br> Idade: $this->idade <br> Altura: $this->altura <br>");
}

}

$objpessoa = new Pessoa("Edu", 20030318, 1.74);
$objpessoa->Mostrar($objpessoa->Idade($objpessoa->getData()));

?>