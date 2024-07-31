<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>pendaftaran</title>
  </head>
  <body>
    
    <!-- awal navbar -->
    <div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Pendaftaran <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Data Ortu</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
    <!-- akhir navbar-->

    <!-- awal content -->
    <div class="card mt-5 ml-5 mr-5" >
  <div class="card-header text-white bg-success">
    Form Pendaftaran
  </div>
  <div class="card-body text-white bg-success">
    <form method="post" action="" >
  <div class="form-group ">
    <label for="exampleInputEmail1">Nama Depan</label>
    <input type="text" class="form-control" name="ndepan" id="namadepan">
 </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Nama Belakang</label>
    <input type="text" class="form-control" name="nblakang" id="namabelakang">
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Tanggal Lahir</label>
    <input type="date" class="form-control" name="tgllahir"id="tglahir">
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Tempat Lahir</label>
    <input type="text" class="form-control" name="tmplahir" id="tmplahir">
  </div>
  <label for="exampleInputPassword1">Jenis Kelamin </label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Perempuan
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Laki-laki
  </label>
</div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Agama</label>
      <select name="agama" id="inputState" class="form-control">
        <option >Pilih Agama</option>
        <option>islam</option>
        <option>kristen</option>
        <option>hindu</option>
        <option>budha</option>
        <option>katholik</option>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Asal Sekolah</label>
    <input type="text" class="form-control" name="asalskolah" id="exampleInputPassword1">
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Jurusan</label>
      <select id="inputState" name="jurusan" class="form-control">
        <option >Pilih Jurusan</option>
        <option>RPL</option>
        <option>TKRO</option>
        <option>TBSM</option>
      </select>
    </div>
  <button type="submit" name="simpan" class="btn btn-warning">Daftar</button>
</form>
   </div>
</div>
    <!-- akhir content -->




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

    <?php

if(isset($_POST['simpan'])){

    $nama_depan = $_POST['ndepan'];
    $nama_belakang = $_POST['nblakang'];
   

    
   //clas
    class hasil{
        public function pendaftaran($nama_depan2,$nama_belakang2){
            echo "Nama Depan :" .$nama_depan2 ;
            echo "Nama Belakang :" .$nama_belakang2;
        }
    }
    $cetak = new hasil();

    echo $cetak->pendaftaran($nama_depan, $nama_belakang);
}