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
      <!-- awal navbar -->
      <div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-white" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">Pendaftaran <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white" href="#">Data Ortu</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
    <!-- akhir navbar-->
    <!--Content-->    
    <div class="container">
    <div class="card mt-5 ml-5 mr-5">
  <div class="card-header text-white bg-dark">
    Pendaftaran
  </div>
  <div class="card-body text-white bg-dark">
  <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Nama Belakang</label>
    <input type="text" class="form-control" name="namab" id="namabelakang">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_lahir">
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Tempat Lahir</label>
    <input type="text" class="form-control" name="tempat_lahir" id="namabelakang">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Kelamin</label><br>
    <input type="radio" class="form" name="jenis_kelamin" value="pria">Pria<br>
    <input type="radio" class="form" name="jenis_kelamin" value="wanita">Wanita<br>
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Agama</label>
      <select name="agama" id="inputState" class="form-control">
        <option >Pilih Agama</option>
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        <option>Katholik</option>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control" name="alamat" rows="3"></textarea>
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Asal Sekolah</label>
    <input type="text" class="form-control" name="asalskolah">
  </div>
  <div class="form-group" >
    <label for="exampleInputPassword1">Jurusan</label>
  <select name="jurusan" id="" class="form-control" name="jurusan">
  <option >Pilih Jurusan</option>
    <option value="RPL">RPL</option>
    <option value="TKRO">TKRO</option>
    <option value="TBSM">TBSM</option>
  </select>
</div>
<div class="form-group form-check">
</div>
  <button type="submit" class="btn btn-primary" name="simpan" value="PROSES">Daftar</button>
</form>
  </div>
</div> 
    </div>

    
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
  $a = $_POST['nama'];
  $b = $_POST['namab'];
  $c = $_POST['tanggal_lahir'];
  $d = $_POST['tempat_lahir'];
  $e = $_POST['jenis_kelamin'];
  $f = $_POST['agama'];
  $g = $_POST['alamat'];
  $h = $_POST['asalskolah'];
  $i = $_POST['jurusan'];
  
  
  //class
 
 class pendaftaran {
  function nama($a){
    echo "Nama Depan :  $a <br>";
  }
  function namab($b){
    echo "Nama Belakang :  $b <br>";
  }
  function tanggal_lahir($c){
    echo "Tanggal lahir :  $c <br>";
  }
  function tempat_lahir($d){
    echo "Tempat lahir :  $d <br>";
  }
  function jenis_kelamin($e){
    echo "Jenis Kelamin :  $e <br>";
  }
  function agama($f){
    echo "Alamat :  $f <br>";
  }
  function alamat($g){
    echo "Agama :  $g <br>";
  }
  function notelepon($h){
    echo "Asal Sekolah :  $h <br>";
  }
  function jurusan($i){
    echo "Jurusan :  $i <br>";
  }
 } 

}
?>
<center>
<div class="card text-white bg-dark mb-3 mt-5 ml-5 mr-5" style="max-width: 30rem;">
<div class="card-header">Hasil</div>
<div class="card-body ">
  <?php
$cetak = new pendaftaran();
 echo $cetak->nama($a);
 echo $cetak->namab($b);
 echo $cetak->tanggal_lahir($c);
 echo $cetak->tempat_lahir($d);
 echo $cetak->jenis_kelamin($e);
 echo $cetak->alamat($f);
 echo $cetak->agama($g);
 echo $cetak->notelepon($h);
 echo $cetak->jurusan($i);
  ?>
</div>
</div>
</center>
