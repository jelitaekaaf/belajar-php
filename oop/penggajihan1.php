<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>penggajihan guru</title>
  </head>
  <body>

  <img src="ya-removebg-preview.png" class="rounded mx-auto d-block" alt="..."  max-width: 50%;>
  <h3><center>PENGGAJIHAN</center></h3>
  <P><h3><center>GURU/KARYAWAN YAYASAN ASSALAAM</center></h3></P>

  <!-- content -->
  <div class="container">
    <div class="card mt-5 ml-5 mr-5">
  <div class="card-header text-dark bg-white">
    Data Penggajihan
  </div>
  <div class="card-body text-dark bg-white">
  <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">No</label>
    <input type="text" class="form-control" name="no">
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Nama</label>
    <input type="text" class="form-control" name="nama" >
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Unit Pendidikan</label>
      <select name="unit_pend" id="inputState" class="form-control">
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
    <input type="date" class="form-control" name="tanggal_gaji" id="namabelakang">
  </div>
  <div class="row">
    <div class="col">
        <h4><center>Gaji</center></h4>
    <label for="exampleInputPassword1">Jabatan</label>
    <select name="jabatan" id="inputState" class="form-control">
    <option>Pilih Jabatan</option>
    <option>Kepala Sekolah</option>
        <option>Wakasek</option>
        <option>Guru</option>
        <option>Karyawan</option>
    </select>
    </div>
<div class="col">
    <h4><center>Potongan</center></h4>
<label for="exampleInputPassword1">BPJS</label>
      <input type="text" name="bpjs"class="form-control" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label for="exampleInputPassword1">Lama Kerja</label>
      <input type="text" name="lama_kerja"class="form-control" placeholder="Lama Kerja">
    </div>
    <div class="col">
    <label for="exampleInputPassword1">Pinjaman</label>
      <input type="text" name="pinjaman"class="form-control" placeholder="Pinjaman">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label for="exampleInputPassword1">Status Kerja</label>
    <select name="status_kerja" id="inputState" class="form-control">
    <option>Pilih Status Kerja</option>
    <option>Tetap</option>
        <option>Kontrak</option>
    </select>
 </div>
    <div class="col">
    <label for="exampleInputPassword1">Tabungan</label>
      <input type="text" name="tabungan" class="form-control" placeholder="Tabungan">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Lainnya</label>
      <input type="text" name="lainnya" class="form-control">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="simpan" value="PROSES">Proses</button>

</form>
   
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


<?php

if(isset($_POST['simpan'])){

  $no = $_POST['no'];
  $nama= $_POST['nama'];
  $unit_pend = $_POST['unit_pend'];
  $tanggal_gaji = $_POST['tanggal_gaji'];
  $jabatan = $_POST['jabatan'];
  $bpjs = $_POST['bpjs'];
  $lama_kerja = $_POST['lama_kerja'];
  $pinjaman = $_POST['pinjaman'];
  $status_kerja = $_POST['status_kerja'];
  $tabungan = $_POST['tabungan'];
  $lainnya = $_POST['lainnya'];


  class hasil{
    public function penggajihan($no2,$nama2,$unit_pend2,$tanggal_gaji2,$jabatan2,$bpjs2,$lama_kerja2,$pinjaman2,$status_kerja2,$tabungan2,$lainnya2){
      if($jabatan2 == "Kepala Sekolah"){
        $gaji = 5000000;
      } else if($jabatan2 == "Wakasek"){
        $gaji = 4000000;
      } else if($jabatan2 == "Guru"){
        $gaji = 3000000;
      } else if($jabatan2 == "Karyawan"){
        $gaji = 2000000;  
      } else {
        $gaji = 0;
      }


      if ($status_kerja2 == "Tetap") {
        $bonus = 1000000; 
      } else {
        $bonus = 0;
      }

      $gaji_bersih = ($gaji + $bonus) - ($bpjs2+$pinjaman2+$tabungan2+$lainnya2);
    }
  }




   
 class penggajihan {
  function no(){
    echo "No :  $no2 <br>";
  }
  function nama(){
    echo "Nama  :  $nama <br>";
  }
  function unit_pend(){
    echo "Unit Pendidikan :  $unit_pend <br>";
  }
  function tanggal_gaji(){
    echo "Tanggal Gaji :  $tanggal_gaji <br>";
  }
  function jabatan(){
    echo "Jabatan :  $jabatan <br>";
  }
  function bpjs(){
    echo "BPJS :  $bpjs <br>";
  }
  function lama_kerja(){
    echo "Lama Kerja :  $lama_kerja <br>";
  }
  function pinjaman(){
    echo "Pinjaman :  $pinjaman <br>";
  }
  function status_kerja(){
    echo "Status Kerja :  $status_kerja <br>";
  }
  function tabungan(){
    echo "Tabungan :  $tabungan <br>";
  }
  function lainnya(){
    echo "Lainnya :  $lainnya <br>";
  }
  function gaji_bersih(){
    echo "Gaji Bersih :  $gaji_bersih <br>";
  }
 } 
?>

<div class="card text-white bg-dark mb-3 mt-5 ml-5 mr-5" style="max-width: 30rem;">
<div class="card-header">Struk Gaji</div>
<div class="card-body ">
  <?php
$cetak = new penggajihan();
 echo $cetak->no();
 echo $cetak->nama();
 echo $cetak->unit_pend();
 echo $cetak->tanggal_gaji();
 echo $cetak->jabatan();
 echo $cetak->bpjs();
 echo $cetak->lama_kerja();
 echo $cetak->pinjaman();
 echo $cetak->status_kerja();
 echo $cetak->tabungan();
 echo $cetak->lainnya();
 echo $cetak->gaji_bersih();
  ?>
</div>
</div>
