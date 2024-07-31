<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bilangan yang habis dibagi 3</title>

  <form method="post" action="">
   <label for="bilangan">Masukkan sebuah bilangan:</label>
    <input type="number" name="bilangan" required>
     <br>
      <input type="submit" value="Submit">
 </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $bilangan = isset($_POST["bilangan"]) ? $_POST["bilangan"] : '';

  
  if (!empty($bilangan) && is_numeric($bilangan)) {
    
    if ($bilangan % 3 == 0) {
      echo "<p>$bilangan habis dibagi 3</p>";
    } else {
      echo "<p>$bilangan tidak habis dibagi 3</p>";
    }
  } else {
    
    echo "<p>Masukkan bilangan yang valid.</p>";
  }
}
?>
