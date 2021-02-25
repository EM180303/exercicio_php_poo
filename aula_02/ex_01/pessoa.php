<?php
require "endereco.php";

class Pessoa extends Endereço{
    public $nome;
    private $cpf;
    private $rg;
    private $data_Nasc;

    public function __construct($nome, $cpf, $rg, $rua, $bairro, $cidade, $estado, $cep, $complemento)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setRg($rg);
        $this->setRua($rua);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setCep($cep);
        $this->setComplemento($complemento);
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

$peaple = new Pessoa("Eduardo", "108.777.634.10", "9516867", "Rua 04", "Curado 1", "Jaboatão dos Guararapes", "PE", "54240-030", "75-C");
echo $peaple-> getNome();
echo "<br>";
echo $peaple-> getCpf();
echo "<br>";
echo $peaple-> getRg();
echo "<br>";
$peaple-> setData_Nasc("18/03/2003");
echo $peaple-> setData_Nasc("18/03/2003");
echo "<br>";
echo $peaple-> getRua();
echo "<br>";
echo $peaple-> getBairro();
echo "<br>";
echo $peaple-> getCidade();
echo "<br>";
echo $peaple-> getEstado();
echo "<br>";
echo $peaple-> getCep();
echo "<br>";
echo $peaple-> getComplemento();
echo "<br>";

?>