<?php
class Endereço{
    protected $rua;
    protected $bairro;
    protected $cidade;
    protected $estado;
    protected $cep;
    protected $complemento;

    public function getRua(){
        return $this->rua;
    }

    public function setRua($rua){
        return $this->rua = $rua;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        return $this->bairro = $bairro;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        return $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        return $this->estado = $estado;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        return $this->cep = $cep;
    }

    public function getComplemento(){
        return $this->complemento;
    }

    public function setComplemento($complemento){
        return $this->complemento = $complemento;
    }
 
}

?>