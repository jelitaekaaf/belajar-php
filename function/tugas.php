<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <br>
    <center>
        <h2>Form Latihan</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td><b>Nama<b></td>
                <td>:</td>
                <td><input type='text' name='nama' value=""></td>
            </tr>
            <tr>
                <td><b>Alamat<b></td>
                <td>:</td>
                <td><input type='text' name='alamat' value=""></td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin<b> </td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki <br></td>
                <td><input type="radio" name="jk" value="Perempuan"> Perempuan <br></td>  
            </tr>    
            <tr>
                <td><b>Tes Akademik<b> </td>
                <td>:</td>
                <td><input type='number' name='tes' value=""></td>
            </tr>
            <tr>
                <td><b>Tes Atletik<b> </td>
                <td>:</td>
                <td><input type='number' name='tess' value=""></td>
            </tr>
            <tr>
                <td><b>Kepribadian<b></td>
                <td>:</td>
                <td><input type="radio" name="kp" value="Introvert"> Introvert <br></td>
                <td><input type="radio" name="kp" value="Extrovert"> Ekstrovert <br></td>  
                
            </tr> 
            <tr>
                <td></td>
                <td></td>
                <td><input type='submit' name='save' value="Proses"></td>
            </tr>
            </table>
    </form>
    </center>
</body>
</html>   
 

<?php

if(isset($_POST['save'])){

    $a = $_POST['nama'];
    $b = $_POST['alamat'];
    $c = $_POST['jk'];
    $d = $_POST['tes'];
    $e = $_POST['tess'];
    $f = $_POST['kp'];
    $value = $d + $e;

    function hitunghasil($d, $e){
        $value = $d + $e;
        if ($value < 75) {
            return "Kamu Tidak Lulus";
        } else {
            return "Kamu Lulus";
        }
    }

    echo "<hr>";
    echo "<center>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Nama<td>";
    echo "<td>:<td>";
    echo "<td>$a<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Alamat<td>";
    echo "<td>:<td>";
    echo "<td>$b<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin<td>";
    echo "<td>:<td>";
    echo "<td>$c<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tes Akademik<td>";
    echo "<td>:<td>";
    echo "<td>$d<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tes Atletik<td>";
    echo "<td>:<td>";
    echo "<td>$e<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Kepribadian<td>";
    echo "<td>:<td>";
    echo "<td>$f<td>";
    echo "</tr>";
    echo "<table>"; 
    echo "</center>";
    
}