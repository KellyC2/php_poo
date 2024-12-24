<?php
require_once "./sayajin.php";
require_once "./supersaiyajin.php";

$goku = new Saiyajin(nivel_pelea: 1000, nombre: "Goku");
echo $goku->NivelDePelea();
echo "<br><br>";

$vegeta = new Saiyajin("Vegeta", 950);
echo $vegeta->NivelDePelea();

echo "<br><br>";

$gohan = new SuperSaiyajin(nombre: "Gohan", nivel_pelea: 2000);
echo $gohan->Transformación();
echo "<br>";

echo $gohan->getNivelPelea();
echo "<br>";

echo $gohan->setNivelPelea(5000);
echo "<br>";

echo $gohan->getNivelPelea();
echo "<br>";