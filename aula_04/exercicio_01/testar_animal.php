<?php

require "mamifero.php";

class TestarAnimal extends Animal {
    public $mamifero;
    public $peixe;

//set
public function setMamifero($mamifero){
    $this->mamifero = $mamifero;
}

public function setPeixe($peixe){
    $this->peixe = $peixe;
}

//get
public function getmamifero(){
    return $this->mamifero;
}

public function getPeixe(){
   return $this->peixe;
}

public function menu(){
echo"Peixe: $this->peixe";
echo"Mamifero: $this->mamifero";
}

}

$objtesteanimal = new TestarAnimal ("a", "b", "c", "d", "e", "f");
$objpeixe = new Peixe ("Tubarão", "300 Cm", "0", "Cinzento", "Mar", "1.5 m/s", "Barbatanas e cauda");
$objmamifero = new Mamifero ("Camelo", "150 Cm", "4", "Amarelo", "Terra", "2.0 m/s", "Grama");
$objtesteanimal->setMamifero($objmamifero->dadosMamifero());
$objtesteanimal->setPeixe($objpeixe->dadosPeixe());

?>