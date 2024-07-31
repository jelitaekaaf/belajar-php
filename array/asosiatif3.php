<?php

$biodata = [
    [
        "nis" => 1,
        "nama" => "Jelita",
        "kelas" => "11 RPL 1",
        "eskul" => [
            ["namaeskul" => "Seni Tari"],
            ["namaeskul" => "Jurnalistik"],
            ["namaeskul" => "Futsal"]
        ]
    ],
    [
        "nis" => 2,
        "nama" => "Ekafadila",
        "kelas" => "11 RPL 1",
        "eskul" => [
            ["namaeskul" => "English Club"],
            ["namaeskul" => "Rohis"],
            ["namaeskul" => "Volly"]
        ]
    ]
];

foreach($biodata as $data){ 
    echo "NIS :" .$data["nis"]. "<br>";
    echo "Nama :" .$data["nama"]. "<br>";
    echo "Kelas :" .$data["kelas"]. "<br>";
    echo "Eskul :"   ;
   
    
echo "<ul>";
foreach($data['eskul'] as $data2){
    echo "<li>" .$data2['namaeskul']. "</li>";
   
}
echo "</ul>";
}   

?>