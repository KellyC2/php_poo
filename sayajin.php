<?php
class Saiyajin{
    protected string $nombre;
    private int $nivel_pelea;
    public string $clase="Saiyajin";

    public function __construct( string $nombre, int $nivel_pelea){
        $this->nombre=$nombre;
        $this->nivel_pelea=$nivel_pelea;
    }
    

    protected function Saludar(string $texto=" Hola soy "){
        return $texto. $this ->nombre;

    }

    public function NivelDePelea(){
        return $this->nombre." tiene un nivel de pelea de ".
        $this->nivel_pelea. " y pertenece  la clase ". $this->clase;
    }

}







?>