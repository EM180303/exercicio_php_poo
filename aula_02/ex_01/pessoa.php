<?php
class Pessoa{
    public $nome;
    public $cpf;
    public $rg;
    public $data_Nasc;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        return $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        return $this->cpf = $cpf;
    }

    public function getRg(){
        return $this->rg;
    }

    public function setRg($rg){
        return $this->rg = $rg;
    }

    public function getData_Nasc(){
        return $this->data_Nasc;
    }

    public function setData_Nasc($data_Nasc){
        return $this->data_Nasc = $data_Nasc;
    }
 
}

?>