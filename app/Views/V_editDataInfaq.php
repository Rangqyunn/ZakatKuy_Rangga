<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css')?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <title>Zakat Kuyy</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #3498DB;">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <img
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMjVVgkZ7pKLNaAiDNWtCFrNjih1hDnqci4A&usqp=CAU"
        height="50"
        alt="MDB Logo"
        loading="lazy"
      />
      <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('data')?>">Data Zakat Fitrah</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('datamal')?>">Data Zakat Mal</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('datainfaq')?>">Data Infaq</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('data/insertData')?>">Input Zakat Fitrah</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('datamal/insertDataMal')?>">Input Zakat Mal</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('dataInfaq/insertDataInfaq')?>">Input Infaq</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('Home')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('login/logout')?>">Log Out</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://assets.pikiran-rakyat.com/crop/128x96:1152x864/x/photo/2022/04/18/2681285902.png');
      height: 400px;
      margin-top: 58px;
    "
  >
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">ZAKAT</h1>
          <h5 class="mb-4">Mari Berbagi Kebahagiaan</h5>
		  <header>
    <div>
        </div>
        </header>
          <a
            class="btn btn-outline-light btn-lg m-2"
            href="https://www.youtube.com/watch?v=c9B4TPnak1A"
            role="button"
            rel="nofollow"
            target="_blank"
          >Tepat</a
          >
          <a
            class="btn btn-outline-light btn-lg m-2"
            href="https://mdbootstrap.com/docs/standard/"
            target="_blank"
            role="button"
          >Aman (insyaAllah)</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image --> 
<div class="container">
<?php 
//var_dump($selectdata);
foreach ($dataInfaq as $row) 
?>
<br></br>
<h1>Halaman Edit Data Infaq Masjid</h1>

<p>Masukkan Data Dengan Benar</p>
<form action="<?php echo base_url('Datainfaq/saveEditDataInfaq/' .$row->nik.'')?>" method="post" form class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <label for="nik">NIK</label>
            <input type="text"  name="nik" placeholder="" maxlength="16" value="<?php echo $row->nik;?>"/>
            <span class="pure-form-message-inline">This is a required field.</span>
        </div>
        <div class="pure-control-group">
            <label for="nama">NAMA</label>
            <input type="text"  name="nama" placeholder="" value="<?php echo $row->nama;?>"/>
        </div>
        <div class="pure-control-group">
            <label for="alamat">ALAMAT</label>
            <input type="text"  name ="alamat" textarea class="pure-input-2-3" placeholder="" value="<?php echo $row->alamat;?>"></textarea>
        </div> 
        <div class="pure-control-group">
            <label for="tanggal">TANGGAL</label>
            <input type="date" name ="tanggal" textarea class="pure-input-1-4" placeholder="" value="<?php echo $row->tanggal;?>"></textarea>
        </div> 
        <div class="pure-control-group">
            <label for="jml_infaq">JUMLAH INFAQ</label>
            <input type="text" id="jml_infaq" name="jml_infaq"  value="<?php echo $row->jml_infaq;?>"/>
        </div>
       
        <button type="submit" class="btn btn-success btn-rounded">SUBMIT</button>
        <button type="reset" class="btn btn-danger btn-rounded">RESET</button>    
            
    </fieldset>
        
    </form>
    <br></br>
    <script>
		function cekPanjang() {
			// Mendapatkan nilai dari input nomor
			var nik = document.getElementById("nik").value;

			// Mengecek apakah nomor memiliki panjang kurang dari 16 digit
      if (nik.length < 16) {
				document.getElementById("peringatan").innerHTML = "NIK harus memiliki setidaknya 16 digit.";
			} else {
				document.getElementById("peringatan").innerHTML = "";
			}
		}
	</script>   
</div>

</body>
</html>