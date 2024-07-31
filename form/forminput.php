<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <br><br><br><br><br><br>
    <center>
        <h2>Form Data Diri</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama' value=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type='text' name='tempat' value=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type='date' name='tanggal' value=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki <br></td>
                <td><input type="radio" name="jk" value="Perempuan"> Perempuan <br></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select class="form-select form-select-lg mb-5 " aria-label=".form-select-lg example" name="agama">
                <option selected></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Kristen">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Kristen">Atheis</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type='text' name='alamat' value=""></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>:</td>
                <td><input type='number' name='telepon' value=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type='text' name='email' value=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type='submit' name='save' value="PROSES"></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

<?php

if(isset($_POST['save'])){

    $a = $_POST['nama'];
    $b = $_POST['tempat'];
    $c = $_POST['tanggal'];
    $d = $_POST['jk'];
    $e = $_POST['agama'];
    $f = $_POST['alamat'];
    $g = $_POST['telepon'];
    $h = $_POST['email'];



    echo "<hr>";
    echo "<center>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Nama<td>";
    echo "<td>:<td>";
    echo "<td>$a<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tempat Lahir<td>";
    echo "<td>:<td>";
    echo "<td>$b<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tanggal Lahir<td>";
    echo "<td>:<td>";
    echo "<td>$c<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin<td>";
    echo "<td>:<td>";
    echo "<td>$d<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Agama<td>";
    echo "<td>:<td>";
    echo "<td>$e<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>alamat<td>";
    echo "<td>:<td>";
    echo "<td>$f<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>telepon<td>";
    echo "<td>:<td>";
    echo "<td>$g<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>email<td>";
    echo "<td>:<td>";
    echo "<td>$h<td>";
    echo "</tr>";
    echo "<table>"; 
    echo "</center>";
}
?>