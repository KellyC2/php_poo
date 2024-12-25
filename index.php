<?php
require_once "autoload.php";
use App\Clases\Saiyajin;
use App\Clases\SuperSaiyajin;

$goku = new Saiyajin(nivel_pelea: 1000, nombre: "Goku");
echo $goku->Saludar();
echo "<br><br>";

$vegeta = new Saiyajin("Vegeta", 950);
echo $vegeta->MostrarColorCabello();

echo "<br><br>";

$gohan = new SuperSaiyajin(nombre: "Gohan", nivel_pelea: 2000);
echo $gohan->UsarKameHameHa();