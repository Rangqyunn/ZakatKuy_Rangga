<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
  
    <title>Zakat Kuyy</title>
</head>
<body>
<header>
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
</header>
<div class="d-grid gap-3">
</div>
<div class="container">
<?php
//$nama = 'user_name';
//echo "<script>alert('Halo, $nama');</script>";
//?>
<br></br>
<h1>Halaman Data Muzakki Zakat Fitrah</h1>
<p>Data Muzakki Berupa NIK, Nama, Tanggal Pembayaran, Jenis dan Jumlah Zakat</p>

<td></td>
    
        <table class="table table-bordered table-striped">
        <thead>    
        <tr>
            <td>NIK</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>TANGGAL</td>
            <td>JENIS ZAKAT</td>
            <td>JUMLAH ZAKAT</td>
            <td>AKSI <a href='/Report/tampilPdf' button type="button" class="btn btn-link" data-mdb-ripple-color="dark">Report PDF</button></td>
        </tr>
        </thead>
        <?php
            foreach ($hasil as $row){

        ?>
        <tr>
            <td><?php echo $row->nik; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td><?php echo tgl_indo($row->tanggal); ?></td>
            <td><?php echo $row->jns_zakat; ?></td>
            <td><?php echo $row->jml_zakat; ?></td>
            <td> 
                <a href="data/editData/<?php echo $row->nik; ?>" class="btn btn-rounded" style="background-color: #90CAF9;">Edit</a>
                <a href="data/hapusData/<?php echo $row->nik; ?>" class="btn btn-rounded" style="background-color: #F06292">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    
    <br></br>  
</div>
</body>
</html>