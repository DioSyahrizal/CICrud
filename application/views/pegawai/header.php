<?php 
  $session_data = $this->session->userdata('logged in');
    $data['username'] = $session_data['username'];

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pegawai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <!--<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>-->

    <link rel="stylesheet" href="<?=base_url()?>assets/DataTables/datatables.min.css">
    <style type="text/css">

      .navbar{
        background: linear-gradient(to right, red , yellow);
        /* Standard syntax (must be last) */
      }
    </style>
</head>
<body scroll="no">
    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pegawai</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <?php 
           if(!empty($data['username'])) {
              
             ?>          
            <li><a href="<?php echo site_url('Pegawai/') ?>">Beranda</a></li>
            <li><a href="<?php echo site_url('Pegawai/tambahPegawai') ?>">Tambah Data</a></li>
            <li><a href="<?php echo site_url('cetak')?>">Cetak</a></li>
            <li><a href="<?php echo site_url('Login/logout') ?>">Logout</a></li>
          <?php } else{?>
            <li><a href="<?php echo site_url('Login/daftar')?>">Daftar</a></li>
          <?php } ?>
          </ul>

        </div>
      </div>
    </nav>

    <br><br><br><br>