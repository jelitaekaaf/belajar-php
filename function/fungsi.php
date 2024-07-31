<?php

// luas persegi
function persegi(){
    
$a = 5;
$b = 8;
$d = 3;
$c = $a * $b;
echo "Luas Persegi  <br>";
echo "Rumus : sisi x sisi<br>";
echo "$a * $b = $c";
echo "<hr>";
}

// luas segitiga
function segitiga(){

$a = 5;
$b = 8;
$d = 3;
$c = $a * $b /2;
echo "Luas Segitiga  <br>";
echo "Rumus : alas x tinggi : 2<br>";
echo "$a * $b / 2 = $c";
echo "<hr>";
}

// luas jajargenjang
function jajargenjang(){

$a = 5;
$b = 8;
$d = 3;    
$c = $a * $b;
echo "Luas Jajargenjang  <br>";
echo "Rumus : alas x tinggi<br>";
echo "$a * $b = $c";
echo "<hr>";
}

// volume balok
function balok(){

$a = 5;
$b = 8;
$d = 3;    
$c = $a * $b * $d;
echo "Volume Balok  <br>";
echo "Rumus : panjang x lebar x tinggi<br>";
echo "$a * $b * $d = $c";
echo "<hr>";
}

// luas trapesium
function trapesium(){

$a = 5;
$b = 8;
$d = 3;    
$c = $a + $b * $d / 2;
echo "Luas Trapesium  <br>";
echo "Rumus : 1/2 + (a + b) x t<br>";
echo "$a + $b * $d / 2= $c";
echo "<hr>";
}

persegi();
segitiga();
jajargenjang();
balok();
trapesium();