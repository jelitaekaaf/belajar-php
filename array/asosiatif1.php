<?php
// membuat array asosiatif
$artikel = [
    "Judul" => "Belajar Pemrograman PHP",
    "Penulis" => "Petani Kode",
    "Penerbit" => " Jelita",
    "Tahun Terbit" => "1903",
    "Halaman" => "128 halaman"
];

// mencetak isi array assosiatif
echo "<h2>Judul :".$artikel["Judul"]."</h2>";
echo "<p>Penulis :".$artikel["Penulis"]."</p>";
echo "<p>Penerbit :".$artikel["Penerbit"]."</p>";
echo "<p>Tahun Terbit :".$artikel["Tahun Terbit"]."</p>";
echo "<p>Halaman :".$artikel["Halaman"]."</p>";

?>