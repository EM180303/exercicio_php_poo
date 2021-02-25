<?php

class Boletim{

//atributos
public $nome;
public $matricula;
private $nota1;
private $nota2;

//construtor
public function __construct($nome, $matricula, $nota1, $nota2)
{
    $this->setNome($nome);
    $this->setMatricula($matricula);
    $this->setNota1($nota1);
    $this->setNota2($nota2);

}

//get
public function getNome(){
    return $this->nome;
}

public function getMatricula(){
    return $this->matricula;
}

public function getNota1(){
    return $this->nota1;
}

public function getNota2(){
    return $this->nota2;
}

//set
public function setNome($nome){
    return $this->nome = $nome;
}

public function setMatricula($matricula){
    return $this->matricula = $matricula;
}

public function setNota1($nota1){
    return $this->nota1 = $nota1;
}

public function setNota2($nota2){
    return $this->nota2 = $nota2;
}

//media
public function media($nota1, $nota2){
    $soma = $nota1 + $nota2;
    $media = $soma / 2;
    return $media;
}

//exibir 
public function exibir(){
    echo" Nome: $this->nome <br> Matrícula: $this->matricula <br> Nota 1: $this->nota1 <br> Nota 2: $this->nota2";
}

}

$boletim = new Boletim("Edu", 123, 9, 7 );
echo $boletim->exibir();
echo"<br>";
echo $boletim->media($boletim->getNota1(),$boletim->getNota2());
echo"<br>";
?>