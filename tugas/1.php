<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
    <body>
        
        <h1>Body Mass Index</h1>
        <form method="POST" action="">
        <table>
        <tr>
            <td>Tinggi Badan</td>
            <td>:</td>
            <td> <input type="number" name="tinggi"></td>
        </tr>
        <tr>
             <td>Berat Badan</td>
             <td>:</td>
             <td>
                <input type="number" name="berat">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="Submit"></td>
        </tr>
        </table>
        </form>
        

        <?php 
        if(isset($_POST["proses"])){

            $b =$_POST['berat'];
            $a =$_POST['tinggi'];


            $convert_tinggi = $a /100;

            $bmi = $b / ($convert_tinggi*$convert_tinggi);

            echo "Tinggi Badan Anda : $a<br>";
            echo "Berat Badan Anda : $b<br>";
            echo "Nilai BMI : $bmi <br>";
            echo "<b>";

            if($bmi < 18){
                echo "Badan kurus";
            }else if($bmi <= 25){
                echo "Badan ideal";
            }else if($bmi > 25){
                echo "Badan obesitas";
            }else{
                echo "tidak valid";
            }
            echo "</b>";
        }
        ?>
  </body>
</html>