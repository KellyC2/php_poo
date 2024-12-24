<?php
class Sayajin{
    public string $nombre;
    public int $nivel_pelea;

    public function __construct(string $nombre, int $nivel_pelea){
        $this->nombre=$nombre;
        $this->nivel_pelea=$nivel_pelea;
    }
    

    public function Saludar(string $texto=" Hola soy "){
        return $texto. $this ->nombre;

    }

    public function NivelDePelea(){
        return $this->nombre." tiene un nivel de pelea de ".
        $this->nivel_pelea;
    }

}

$goku=new Sayajin("Goku", 1000);
echo $goku->Saludar();
echo "<br><br>";

$vegueta = new Sayajin("Vegeta", 950);
echo $vegueta->Saludar("Mi nombre es ");

?>