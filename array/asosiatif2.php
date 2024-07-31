<?php

// membuat array asosiatif
$buku = [
    [
        "judul" => "Sisksa Neraka",
        "penerbit" => "Jelita"
    ],
    [
        "judul" => "Indahnya Surga",
        "penerbit" => "Eka"
    ],
];

foreach($buku as $data){
    echo "Judul :" .$data["judul"]. "<br>";
    echo "Penerbit :" .$data["penerbit"]. "<br>";
    echo "<hr>";
}
?>