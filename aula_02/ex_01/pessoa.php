<?php
class Pessoa{
    public $nome;
    private $cpf;
    private $rg;
    private $data_Nasc;

    public function __construct($nome, $cpf, $rg)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setRg($rg);
    }

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

$peaple = new Pessoa("Eduardo", "108.777.634.10", "9516867");
echo $peaple-> getNome();
echo "<br>";
echo $peaple-> getCpf();
echo "<br>";
echo $peaple-> getRg();
echo "<br>";
$peaple-> setData_Nasc("18/03/2003");
echo $peaple-> setData_Nasc("18/03/2003");
echo "<br>";
?>