<?php
class Saiyajin{
   public string $clase="Saiyajin";

    public function __construct( public string $nombre, public int $nivel_pelea){
    }
    

    public function Saludar(string $texto=" Hola soy "){
        return $texto. $this ->nombre;

    }

    public function NivelDePelea(){
        return $this->nombre." tiene un nivel de pelea de ".
        $this->nivel_pelea. " y pertenece  la clase ". $this->clase;
    }

}







?>