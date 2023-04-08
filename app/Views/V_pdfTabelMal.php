<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		body {
			font-family: Arial, sans-serif;
		}
		
		h1 {
			font-family: Verdana, Geneva, sans-serif;
		}
		
		p {
			font-family: Verdana, Geneva, sans-serif;
		}
	</style>
    <title>Zakat Kuy</title>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Zakat Kuy
          <small class="float-right"> Web Zakat gwehhn</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
      Tanggal : <?php $tanggal_sekarang = tgl_indo(date("Y-m-d")); echo $tanggal_sekarang; ?>
      <br></br>
        From
        <address>
          <strong>Zakat Kuy</strong><br>
          Jl. Thin V no.18, islmaic Village<br>
          Tangerang, Bantent 16524<br>
          081294704599<br>
          Email: zakatkuy@gmail.com
        </address>
      </div>
      
    </div>

    <center><h1>Report PDF Zakat Mal</h1></center>
    <center><p>Data berupa NIK, Nama, Alamat, Tanggal, Jumlah Penghasilan dan Jumlah Zakat</p></center>
<div class="row">
      <div class="col-12 table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%" table border="2">
        <thead>    
        <tr>
            <td>NIK</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>TANGGAL</td>
            <td>JUMLAH PENGHASILAN</td>
            <td>JUMLAH ZAKAT</td>
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
            <td><?php echo rupiah($row->jml_hasil); ?></td>
            <td><?php echo rupiah($row->jml_zakat); ?></td>
          
        </tr>
        <?php
        }
        ?>
        
    </table>
    </div>
    </div>
    <br></br>
    <style>
   #my-text {
      position: absolute;
      bottom: 0;
      left: 0;
   }
</style>

<div id="my-text">
   Im feeling lonely
</div>
</body>
</html>