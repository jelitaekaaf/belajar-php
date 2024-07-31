<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generasi Berdasarkan Tahun Kelahiran</title>

<form method="post" action="">
  <label for="nama">Masukan nama anda</label>
   <input type="text" name="nama" required>
    <br>
     <label for="tahunKelahiran">Tahun berapa anda lahir?</label>
      <input type="number" name="tahunKelahiran" required>
       <br>
        <input type="submit" value="Submit">
</form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $nama = $_POST["nama"];
  $tahunKelahiran = isset($_POST["tahunKelahiran"]) ? $_POST["tahunKelahiran"] : '';

  
  if (!empty($tahunKelahiran) && is_numeric($tahunKelahiran)) {
    
    if ($tahunKelahiran >= 1944 && $tahunKelahiran <= 1964) {
      $generasi = " Baby boomer";
    } elseif ($tahunKelahiran >= 1965 && $tahunKelahiran <= 1979) {
      $generasi = " Generasi X";
    } elseif ($tahunKelahiran >= 1980 && $tahunKelahiran <= 1994) {
      $generasi = " Generasi Y (Millennials)";
    } elseif ($tahunKelahiran >= 1995 && $tahunKelahiran <= 2015) {
      $generasi = " Generasi Z";
    } else {
      $generasi = "generasi tahun kelahiran anda tidak diketahui.";
    }

    
    echo "<p>$nama, berdasarkan tahun lahir anda tergolong  $generasi </p>";
    } else {
    
    echo "<p>Masukkan tahun kelahiran yang valid.</p>";
 }
}
?>