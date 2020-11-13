<?php 
@session_start();
$url = explode('/', $_SERVER['REQUEST_URI']); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">APPS AKTA TANAH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="<?= base_url()?>">Halaman Utama</a>
        <?php if ($url[3] == "akta_tanah") { ?>
          <a class="nav-item active nav-link" href="<?= base_url()?>system/akta_tanah/index.php">Data Akta Tanah</a>
        <?php } ?>
        <?php if ($url[3] != "akta_tanah") { ?>
          <a class="nav-item nav-link" href="<?= base_url()?>system/akta_tanah/index.php">Data Akta Tanah</a>
        <?php } ?>
        <?php if ($url[3] == "pemilik_akta") { ?>
          <a class="nav-item active nav-link" href="<?= base_url()?>system/pemilik_akta/index.php">Data Pemilik Akta</a>
        <?php } ?>
        <?php if ($url[3] != "pemilik_akta") { ?>
          <a class="nav-item nav-link" href="<?= base_url()?>system/pemilik_akta/index.php">Data Pemilik Akta</a>
        <?php } ?>
        <a class="nav-item nav-link" href="<?= base_url()?>auth/keluar_akun.php">Keluar Akun</a>
      </div>
    </div>
  </div>
</nav>
