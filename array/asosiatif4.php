<?php

$diri = [
    [
        "nama" => "Jelita",
        "tl" => "08 Jully 2007",
        "jk" => "perempuan",
        "hobi" => [
            ["nama_hobi" => "Membaca Novel"],
            ["nama_hobi" => "Mewarnai"]
        ],
        "cita-cita" => [
            ["nama_cita-cita2" => "Pramugari"],
            ["nama_cita-cita2" => "Dokter"]
        ]
    ],
   
];

   foreach($diri as $data){
    echo "Nama : ".$data["nama"]."<br>";
    echo "Tanggal lahir: ".$data["tl"]."<br>";
    echo "Jenis Kelamin: ".$data["jk"]."<br>";
    echo "Hobi : ";

    echo "<ol>";
    foreach($data['hobi'] as $data2){
        echo "<li>".$data2['nama_hobi']."</li>";
    }
    echo "</ol>";


    echo "cita-cita: ";

    echo "<ol>";
    foreach($data['cita-cita'] as $data3){
        echo "<li>".$data3['nama_cita-cita2']."</li>";
    };

    echo "</ol>";
}
?>