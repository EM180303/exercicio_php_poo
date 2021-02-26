<?php

class Elevador{

//atributos
public $andar_Atual;
public $total_Andares;
public $capacidade;
public $pessoas_Dentro;

//get
public function getAndar_Atual(){
    return  $this->andar_Atual;
}

public function getTotal_Andares(){
    return  $this->total_andares;
}

public function getCapacidade(){
    return  $this->capacidade;
}

public function getPessoas_Dentro(){
    return  $this->pessoas_Dentro;
}

//set
public function setAndar_Atual($andar_Atual){
    return  $this->andar_Atual = $andar_Atual;
}

public function setTotal_Andares($total_Andares){
    return  $this->total_andares = $total_Andares;
}

public function setCapacidade($capacidade){
    return  $this->capacidade = $capacidade;
}

public function setPessoas_Dentro($pessoas_Dentro){
    return  $this->pessoas_Dentro = $pessoas_Dentro;
}

//construtor
public function __construct($total_Andares, $capacidade)
{
    $this->setTotal_Andares($total_Andares);
    $this->setCapacidade($capacidade);
}

//funções
public function Iniciar($capacidade, $totalA){
    if(($capacidade >= $this->pessoas_Dentro) && ($totalA >= $this->andar_Atual)){
        echo "Elevador em atividade";
        echo"<br>";
        if($this->andar_Atual == 0){
            echo"Andar atual: T";
        }
    }
}

public function Entrar($capacidade, $pessoas_Dentro){
    if($capacidade > $pessoas_Dentro){
        $pessoas_Dentro += 1;
        $this->pessoas_Dentro = $pessoas_Dentro;
        echo"Entrou uma pessoa";
        echo"<br>";
    }else{
        echo"Elevador cheio";
        echo"<br>";
    }

    echo "Quantidade de pessoas: $pessoas_Dentro";
}

public function Sai($pessoas_Dentro){
    if($pessoas_Dentro || 0 ){
        $this->pessoas_Dentro -= 1; 
        echo "Saiu uma pessoa";
        echo "<br>";
        echo"Quantidade de pessoas: $this->pessoas_Dentro";
    }else{
        echo"Não há nimguém para sair";
    }

}

public function Sobe($andar_Atual, $total_Andares){
    if($andar_Atual < $total_Andares){
        $this->andar_Atual += 1;
        echo"<br>";
        echo"Elevador subindo";
        echo"<br>";
        echo"Andar atual: $this->andar_Atual º";
    }else{
        echo"O elevador já se encontra no andar mais alto";
    }
}

public function Desce($andar_Atual){
    if($andar_Atual > 0){
        $this->andar_Atual -= 1;
        echo"<br>";
        echo"Elevador descendo";
        echo"<br>";
        if($this->andar_Atual == 0){
            echo"Andar atual: T";
        }else{
        echo"Andar atual: $this->andar_Atual";
        }
    } else{
        echo"<br>";
        echo"Elevador já está no térrio";
    }
}

}

$objelevador = new Elevador(5, 6);
$objelevador->setPessoas_Dentro(1);
$objelevador->setAndar_Atual(0);
echo"<hr>";
$objelevador->Iniciar($objelevador->getCapacidade(), $objelevador->getTotal_Andares());
echo"<hr>";
$objelevador->Entrar($objelevador->getCapacidade(), $objelevador->getPessoas_Dentro());
$objelevador->Sobe($objelevador->getAndar_Atual(), $objelevador->getTotal_Andares());
echo"<hr>";
$objelevador->Entrar($objelevador->getCapacidade(), $objelevador->getPessoas_Dentro());
$objelevador->Sobe($objelevador->getAndar_Atual(), $objelevador->getTotal_Andares());
echo"<hr>";
$objelevador->Entrar($objelevador->getCapacidade(), $objelevador->getPessoas_Dentro());
$objelevador->Sobe($objelevador->getAndar_Atual(), $objelevador->getTotal_Andares());
echo"<hr>";
$objelevador->Entrar($objelevador->getCapacidade(), $objelevador->getPessoas_Dentro());
$objelevador->Sobe($objelevador->getAndar_Atual(), $objelevador->getTotal_Andares());
echo"<hr>";
$objelevador->Entrar($objelevador->getCapacidade(), $objelevador->getPessoas_Dentro());
$objelevador->Sobe($objelevador->getAndar_Atual(), $objelevador->getTotal_Andares());
echo"<hr>";
$objelevador->Sai($objelevador->getPessoas_Dentro());
$objelevador->Desce($objelevador->getAndar_Atual());
echo"<hr>";
$objelevador->Desce($objelevador->getAndar_Atual());
echo"<hr>";
$objelevador->Desce($objelevador->getAndar_Atual());
echo"<hr>";
$objelevador->Desce($objelevador->getAndar_Atual());
echo"<hr>";
$objelevador->Desce($objelevador->getAndar_Atual());
echo"<br>";
echo "Saiu todo mundo";
?>