<?php

require "televisao.php";

class Controle_Remoto extends Televisao{

//muda o canal para o desejado
public function setCanal($canal){
    return $this->canal = $canal;
}
//exibe o canal
public function getCanal()
{
    return $this->canal;
}

//muda o volume para o desejado
public function setVolume($volume)
{
    return $this->volume = $volume;
}
    

//exibe o volume
public function getVolume()
{
    return $this->volume;
}

}

$controle = new Controle_Remoto();
$controle->setVolume(50);
echo "volume: ". $controle->getVolume();
echo "<br>";

$controle->setCanal(13);
echo "Canal: ". $controle->getCanal();
echo "<br>";

?>