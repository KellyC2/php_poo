<?php
require_once "./traits/tecnicasSimples.php";
require_once "./traits/tecnicasEspeciales.php";
require_once "./traits/tecnicasCombinadas.php";
require_once "./sayajin.php";
require_once "./supersaiyajin.php";


$goku = new Saiyajin(nivel_pelea: 1000, nombre: "Goku");
echo $goku->AumentarVelocidad();
echo "<br><br>";

$vegeta = new Saiyajin("Vegeta", 950);
echo $vegeta->MostrarColorCabello();

echo "<br><br>";

$gohan = new SuperSaiyajin(nombre: "Gohan", nivel_pelea: 2000);
echo $gohan->UsarKameHameHa();