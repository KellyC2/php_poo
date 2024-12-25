<?php
require_once "App/Traits/TecnicasSimples.php";
require_once "App/Traits/TecnicasEspeciales.php";
require_once "App/Traits/TecnicasCombinadas.php";
require_once "App/Clases/Saiyajin.php";
require_once "App/Clases/SuperSaiyajin.php";
require_once "App/Otras/Saiyajin.php";


use App\Clases\Saiyajin;
use App\Clases\SuperSaiyajin;
use App\Otras\Saiyajin as OtroSaiyajin;

$goku = new OtroSaiyajin(nivel_pelea: 1000, nombre: "Goku");
echo $goku->Saludar();
echo "<br><br>";

$gothen = new Saiyajin("Gothen", 2000);
echo $gothen->Saludar();

echo "<br><br>";

$vegeta = new Saiyajin("Vegeta", 950);
echo $vegeta->MostrarColorCabello();

echo "<br><br>";

$gohan = new SuperSaiyajin(nombre: "Gohan", nivel_pelea: 2000);
echo $gohan->UsarKameHameHa();