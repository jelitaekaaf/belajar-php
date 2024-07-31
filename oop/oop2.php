<?php

//buat class
class Bangundatar{

    //buat properti / atribut
    public $nama = "Bangun Datar";

    //buat method / function
    public function lingkaran(){
        $a = 3.14;
        $b = 7;
        $d = 7;
        $c = $a * $b *$d;
        echo "Luas Lingkaran  <br>";
        echo "Rumus : phi  x  r  x  r <br>";
        echo "phi = 3.14 <br>";
        echo "r = 7 <br>";
        echo "$a * $b *$d = $c";
        echo "<hr>";
    }
    public function persegi(){
        $a = 5;
        $b = 5;
        $c = $a * $b;
        echo "Luas Persegi  <br>";
        echo "Rumus : sisi  x  sisi<br>";
        echo "sisi = 5 <br>";
        echo "$a * $b = $c";
        echo "<hr>";   
        
    }
    public function segitiga(){
        $a = 10;
        $b = 3;
        $c = $a * $b /2;
        echo "Luas Segitiga  <br>";
        echo "Rumus : alas  x  tinggi : 2<br>";
        echo "alas = 10 <br>";
        echo "tinggi = 3 <br>";
        echo "$a * $b / 2 = $c";
        echo "<hr>";
    }
    public function persegipanjang(){
        $a = 10;
        $b = 4;
        $c = $a * $b ;
        echo "Luas Persegi Panjang  <br>";
        echo "Rumus : panjang  x  lebar<br>";
        echo "panjang = 10 <br>";
        echo "lebar = 4 <br>";
        echo "$a * $b = $c";
        echo "<hr>";
    }

}

//buat object
$cetak = new Bangundatar();

echo $cetak->persegi();           
echo "<br>";               
echo $cetak->segitiga();
echo "<br>";               
echo $cetak->lingkaran();
echo "<br>";               
echo $cetak->persegipanjang();


            

?> 