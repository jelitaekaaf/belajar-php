<?php
// mmbuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Jelita", "Hi");

echo "<hr>";

$saya = "Cindy";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);
?>