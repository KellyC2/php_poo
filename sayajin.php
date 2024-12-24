<?php
class Sayajin{
    public $nombre;
    public  $nivel_pelea;

    public function __construct( $nombre, $nivel){
        $this->nombre=$nombre;
        $this->nivel_pelea=$nivel;
    }
    

    public function Saludar(string $texto=" Hola soy "){
        return $texto. $this ->nombre;

    }

    public function NivelDePelea(){
        return $this->nombre." tiene un nivel de pelea de ".
        $this->nivel_pelea;
    }

}

?>