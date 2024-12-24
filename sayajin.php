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

class SuperSaiyajin extends Saiyajin{
    public string $clase = "Super saiyajin";
    public function Transformación(){
        if($this->nivel_pelea>=1500){
            $texto=$this->nombre. " se transformo en  ". $this->clase;

        }else{
            $texto=$this->nombre. " No se transformo  en " . $this->clase;
        }

        return $texto;
    }

}
$goku = new Saiyajin(nivel_pelea: 1000, nombre: "Goku");
echo $goku->NivelDePelea();
echo "<br><br>";

$vegeta = new Saiyajin("Vegeta", 950);
echo $vegeta->NivelDePelea();

echo "<br><br>";

$gohan=new SuperSaiyajin(nombre:"Gphan", nivel_pelea:2000);
echo $gohan->Transformación();






?>