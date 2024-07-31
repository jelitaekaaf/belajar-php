<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sapaan Berdasarkan Jenis Kelamin</title>
</head>
</body>
</html>

<form method="post" action="">
  <label for="nama">Masukkan Nama Anda</label>
   <input type="text" name="nama" required>
    <br>
     <label for="jeniskelamin">Anda Pria/Wanita?</label>
      <select name="jeniskelamin" required>
       <option value="pria">Pria</option>
        <option value="wanita">Wanita</option>
         </select>
 </br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $nama = isset($_POST["nama"]) ? $_POST["nama"] : '';
  $jeniskelamin = isset($_POST["jeniskelamin"]) ? $_POST["jeniskelamin"] : '';
  
  
  
  $salam = '';
  if ($jeniskelamin == "pria") {
    $salam = "Halo bro $nama";
  } elseif ($jeniskelamin == "wanita") {
    $salam = "Halo sis $nama";
  }

  echo "<p>$salam</p>";
}
?>