<?php

namespace App\Otras;
class Saiyajin{
    //use TecnicasSimples, TecnicasEspeciales;
    use \App\Traits\TecnicasCombinadas;

    private string $nombre;
    private int $nivel_pelea;
    public string $clase="Saiyajin";
    public static string $cabello="Negro";
    const VELOCIDAD="Normal";

    public function __construct( string $nombre, int $nivel_pelea){
        $this->nombre=$nombre;
        $this->nivel_pelea=$nivel_pelea;
    }

    public static function MostrarColorCabello(){
        return "Tengo el cabello de color ".self::$cabello;    
    }
    

    public function Saludar(string $texto=" Hola desde otras soy "){
        return $texto. $this ->nombre;

    }

    public function NivelDePelea(){
       // return $this->nombre." tiene un nivel de pelea de ".$this->nivel_pelea. " y pertenece  la clase ". $this->clase;
        return self::$cabello;
    }


    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNivelPelea(){
        return $this->nivel_pelea;
    }
    public function setNivelPelea($nivel_pelea){
        $this->nivel_pelea=$nivel_pelea;
    }

}







?>