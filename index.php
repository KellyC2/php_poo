<?php
require_once "./sayajin.php";


$goku = new Saiyajin(nivel_pelea:1000, nombre:"Goku" );
echo $goku->Saludar();
echo "<br><br>";

$vegeta = new Saiyajin("Vegeta", 950);
echo $vegeta->Saludar();
