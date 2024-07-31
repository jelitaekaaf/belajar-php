<?php

$kelas = 0;
$kelastambah = 1; 
$makskelas = 5;

echo $kelas;
echo "<br>";
echo $kelastambah . "<br>";
for($i =0; $i <= $makskelas; $i ++) {
    $hasil = $kelas + $kelastambah;
    $kelas = $kelastambah;
    $kelastambah = $hasil;
    echo $hasil . "<br>";
}

?>


