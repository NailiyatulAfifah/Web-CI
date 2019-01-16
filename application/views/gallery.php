<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/gallery.css")?>">
  </head>
  <body>
  <header>
      <div class="wrapper"> 
        <div class="logo">
          <img src="<?= base_url()?>assets/logo2.png">
        </div>
        <nav>
          <ul>
            <li><a href="javascript:window.history.go(-1)"> Home </a></li>
            <li><a href="<?= base_url()?>index.php/welcome/event"> Event </a></li>
            <li><a href=""> Gallery </a></li>
            <li><a href="<?= base_url()?>index.php/welcome/contact"> Contact </a></li>
            <li><a href="<?= base_url()?>index.php/welcome/profil"> MyProfil </a></li>
          </ul>
        </nav>
      </div>
    </header>
  </body>
</html>
