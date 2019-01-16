<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/beranda.css")?>">
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="wrapper"> 
        <div class="logo">
          <img src="<?= base_url()?>assets/logo2.png">
        </div>
        <nav>
          <ul>
            <li><a href=""> Home </a></li>
            <li><a href="<?= base_url()?>index.php/welcome/event"> Event </a></li>
            <li><a href="<?= base_url()?>index.php/welcome/gallery"> Gallery </a></li>
            <li><a href="<?= base_url()?>index.php/welcome/contact"> Contact </a></li>
            <li><a href="<?= base_url()?>index.php/welcome/profil"> MyProfil </a></li>
          </ul>
        </nav>
      </div>
        <!-- SECTION -->
      <section id="foto">
        <div class="isi-foto">
          <h3> Welcome, </h3>
          <h1> <?= $nama_lengkap?></h1>
          <h3> Berperilakulah seperti <?= $jenis_kelamin?><br>dan Terlihat Manis seperti Bintang</h3>
        </div>
      </section>
    </header>
  </body>
</html>
