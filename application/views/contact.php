<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/contact.css")?>">
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
            <li><a href="<?= base_url()?>index.php/welcome/gallery"> Gallery </a></li>
            <li><a href=""> Contact </a></li>
            <li><a href="<?= base_url()?>index.php/welcome/profil"> MyProfil </a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- CONTENT -->
    <div class="box">
      <img src="<?= base_url()?>assets/ig.png">
      <p> @primworld_id </p>
      <img src="<?= base_url()?>assets/twitter.png">
      <p> @primworld </p>
      <img src="<?= base_url()?>assets/email.png">
      <p> primworld@stargo.id </p>
    </div>
  </body>
</html>
