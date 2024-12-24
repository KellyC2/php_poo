<?php
 require_once "./sayajin.php";


$goku = new Sayajin("Goku", 1000);
echo $goku->Saludar();
echo "<br><br>";

$vegueta = new Sayajin("Vegeta", 950);
echo $vegueta->Saludar("Mi nombre es ");
