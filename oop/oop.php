<?php

//buat class
class Manusia{

    //buat properti / atribut
    public $nama = "Jelita ekafadila";
    public $menyapa = "haiiii";

    //buat method / function
    public function makan(){
        echo $this->menyapa ."<br>";            //memanggil properti sm method didalam class
        echo "jelita suka makan rendang <br>";
    }
    public function minum(){
        echo $this->makan();
        echo "jelita suka minum jus apel";      //memanggil method didalam class
    }
}

//buat object
$cetak = new Manusia();

echo $cetak->makan();            //memanggil method
echo "<br>";               
echo $cetak->minum();

echo "<br>";
echo $cetak->nama;              //memanggil properti

?> 