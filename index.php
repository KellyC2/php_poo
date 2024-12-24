<?php
 require_once "./sayajin.php";


$goku = new Sayajin(nivel:1000, nombre:"Goku" );
echo $goku->Saludar();
echo "<br><br>";

$vegueta = new Sayajin("Vegeta", 950);
echo $vegueta->Saludar("Mi nombre es ");
