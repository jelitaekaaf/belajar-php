<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Bubur Ayam</title>
<form method="post" action="">
  <p>Apakah Anda suka bubur ayam?</p>
  <select name="likeBuburAyam" required>
    <option value="">Pilih</option>
    <option value="ya">Ya</option>
    <option value="tidak">Tidak</option>
  </select>
<break>
  <input type="submit" value="Submit">
  <break>
</form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $likeBuburAyam = isset($_POST["likeBuburAyam"]) ? $_POST["likeBuburAyam"] : '';

  if ($likeBuburAyam == "ya") {
    
    echo "<p>Apakah Anda suka bubur ayam yang diaduk?</p>";

    
    echo '<form method="post" action="">';
    echo '  <select name="adukBubur" required>';
    echo '    <option value="suka">Suka</option>';
    echo '    <option value="tidak_suka">Tidak Suka</option>';
    echo '  </select>';
    echo '  <br>';
    echo '  <input type="submit" value="Submit">';
    echo '</form>';

  } elseif ($likeBuburAyam == "tidak") {
    
    echo "<p>Cobain lagi deh kapan-kapan, sehat dan bergizi, siapa tahu jadi suka!</p>";

  } else {
    
    echo "<p>Silakan pilih apakah Anda suka atau tidak suka bubur ayam.</p>";
  }

  if (isset($_POST["adukBubur"])) {
    
    $adukBubur = $_POST["adukBubur"];

    if ($adukBubur == "suka") {
      
      echo "<p>Beuh, kalau diaduk buburnya jadi mirip ??!</p>";
    } elseif ($adukBubur == "tidak_suka") {
      
      echo "<p>Anda ternyata manusia beradab.</p>";
    } else {
      
      echo "<p>Silakan pilih apakah Anda suka atau tidak suka bubur ayam yang diaduk.</p>";
    }
  }
}
?>
