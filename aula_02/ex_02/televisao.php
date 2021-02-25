<?php

class Televisao {

public $canal;
public $volume;

public function getCanal(){
    return $this->canal;
}

public function setCanal($canal){
    return $this->canal = $canal;
}

public function getVolume(){
    return $this->volume;
}

public function setVolume($volume){
    return $this->volume = $volume;
}

}

?>