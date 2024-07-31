<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <p>
    <center>  
    <img src="logo.png" style="width: 200px;border-radius: 20px;" />
    </center>  
    <h3><center>PENGGAJIHAN</center></h3>
    <P><h3><center>GURU/KARYAWAN YAYASAN ASSALAAM</center></h3></P>
    </p>

<!--content-->
    <div class="container">
    <div class="card mt-5 ml-5 mr-5">
  <div class="card-header text-white bg-success">
    Data Penggajihan
  </div>
  <div class="card-body text-white bg-dark">
  <form method="POST" action="">
  <div class="form-group">
    <label>No</label>
    <input type="text" class="form-control" name="no" placeholder="Masukan Nomor">
  </div>
  <div class="form-group text-white">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukan Masukan Nama anda">
  </div>
  <div class="form-group ">
    <label>Unit Pendidikan</label>
      <select name="unit_pendidikan" id="inputState" class="form-control">
        <option >Pilih Unit Pendidikan</option>
        <option>TK</option>
        <option>SD</option>
        <option>SMP</option>
        <option>SMA</option>
        <option>SMK</option>
      </select>
    </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Tanggal Gaji</label>
    <input type="date" class="form-control" name="tanggal_gaji">
  </div>
  <div class="row">
    <div class="col">
        <p class="italic"><h4><center>Gaji</center></h4></p>
    <label>Jabatan</label>
    <select name="jabatan" class="form-control">
    <option>Pilih jabatan</option>
        <option>Kepala sekolah</option>
        <option>Wakasek</option>
        <option>Guru</option>
        <option>Karyawan</option>
    </select>
    </div>
<br>
    <div class="col">
    <p class="italic"><h4><center>Potongan</center></h4></p>
    <label>BPJS</label>
      <input type="text" name="bpjs"class="form-control" placeholder="BPJS">
    </div>
  </div>
<br>
  <div class="row">
    <div class="col">
    <label>Lama Kerja</label>
      <input type="text" name="lama_kerja"class="form-control" placeholder="Lama Kerja">
    </div>
<br>
    <div class="col">
    <label>Pinjaman</label>
      <input type="text" name="pinjaman"class="form-control" placeholder="Pinjaman">
    </div>
  </div>
<br>
  <div class="row">
    <div class="col">
    <label>Status Kerja</label>
    <select name="status_kerja" class="form-control">
    <option>Pilih Status Kerja</option>
        <option>Tetap</option>
        <option>Kontrak</option>
    </select>
 </div>
 <br>
    <div class="col">
    <label for="exampleInputPassword1">Cicilan</label>
      <input type="text" name="cicilan" class="form-control" placeholder="Cicilan">
    </div>
    </div>
<br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Infaq</label>
      <input type="text" name="infaq" class="form-control" placeholder="Infaq">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Gaji</label>
      <input type="text" name="gaji" class="form-control" placeholder="Infaq">
    </div>
</div>
<center>
  <button type="submit" class="btn btn-primary" name="simpan" value="PROSES">Proses</button>
</center>
</form>
</div>
</div>
</div>
<!--/content-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
       <!--card-->
  <center>
<div class="card text-white bg-dark mb-3 mt-5 ml-5 mr-5" style="max-width: 30rem;">
<div class="card-header">Hasil Pendaftaran</div>
<div class="card-body ">
  <b>Pendaftaran sukses!</b>
<!--/card-->
<!-- php -->
<?php
                    
if (isset($_POST['simpan'])) {
$no = $_POST["no"];
$nama = $_POST["nama"];
$unit_pendidikan = $_POST["unit_pendidikan"];
$tanggal_gaji = $_POST["tanggal_gaji"];
$jabatan = $_POST["jabatan"];
$lama_kerja = $_POST["lama_kerja"];
$status_kerja = $_POST["status_kerja"];
$bpjs = $_POST["bpjs"];
$pinjaman = $_POST["pinjaman"];
$cicilan = $_POST["cicilan"];
$infaq = $_POST["infaq"];
$gaji = $_POST["gaji"];

if($jabatan == "Kepala Sekolah"){
$gaji = 5000000;
}elseif($jabatan == "Wakasek"){
                            $gaji = 4000000;
                        }elseif($jabatan == "Guru"){
                            $gaji = 3000000;
                        }elseif($jabatan == "Karyawan"){
                            $gaji = 2000000;
                        }

                        if($status_kerja == "Tetap"){
                            $bonus = 1000000;
                        }else{
                            $bonus = 0;
                        }
                        $gaji_bersih = ($gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);

                        class Tampil{
                            public function struk($no2, $nama2, $unit_pendidikan2, $tanggal_gaji2, $jabatan2, $lama_kerja2, $status_kerja2, $bpjs2, $pinjaman2, $cicilan2, $infaq2, $gaji2, $bonus2, $gaji_bersih2){
                            
                            // no
                            echo "<table>";
                            echo "<tr>";
                            echo "<td>No</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$no2</td>";
                            echo "</tr>";

                            // nama
                            echo "<tr>";
                            echo "<td>Nama</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$nama2</td>";
                            echo "</tr>";

                            // unit pendidikan
                            echo "<tr>";
                            echo "<td>Unit Pendidikan</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$unit_pendidikan2</td>";
                            echo "</tr>";

                            // tanggal gaji
                            echo "<tr>";
                            echo "<td>Tanggal Gaji</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$tanggal_gaji2</td>";
                            echo "</tr>";

                            // jabatan
                            echo "<tr>";
                            echo "<td>Jabatan</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$jabatan2</td>";
                            echo "</tr>";

                            // gaji
                            echo "<tr>";
                            echo "<td>Gaji</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$gaji2</td>";
                            echo "</tr>";

                            // lama kerja
                            echo "<tr>";
                            echo "<td>Lama Kerja</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$lama_kerja2</td>";
                            echo "</tr>";

                            // lama kerja
                            echo "<tr>";
                            echo "<td>Status Kerja</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$status_kerja2</td>";
                            echo "</tr>";

                            // Bonus
                            echo "<tr>";
                            echo "<td>Bonus</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$bonus2</td>";
                            echo "</tr>";

                            // Bpjs
                            echo "<tr>";
                            echo "<td>BPJS</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$bpjs2</td>";
                            echo "</tr>";

                            // pinjaman
                            echo "<tr>";
                            echo "<td>Pinjaman</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$pinjaman2</td>";
                            echo "</tr>";

                            // cicilan
                            echo "<tr>";
                            echo "<td>Cicilan</td>";
                            echo "<td>";
                            echo " :";
                            echo "<td>$cicilan2</td>";
                            echo "</tr>";

                            // infaq
echo "<tr>";
echo "<td>infaq</td>";
 echo "<td>";
  echo " :";
echo "<td>$infaq2</td>";
echo "</tr>";

// gaji bersih
echo "<tr>";
echo "<td>Gaji Bersih</td>";
echo "<td>";                                                
echo " :";                           
echo "<td>$gaji_bersih2</td>";
echo "</tr>";

  }
}
$cetak = new Tampil();
                          
echo $cetak->struk($no, $nama, $unit_pendidikan, $tanggal_gaji, $jabatan, $lama_kerja, $status_kerja, $bpjs, $pinjaman, $cicilan, $infaq, $gaji, $bonus, $gaji_bersih);
}
?>
</div>
</div>
</center>