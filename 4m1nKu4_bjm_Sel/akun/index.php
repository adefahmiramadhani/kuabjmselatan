<?php 
session_start();
if (!empty($_SESSION['myuser']) && !empty($_SESSION['mypass'])) { 
  ?>
    <?php
    include "header.php";
    ?>
<div id="content-wrapper">

  <div class="container-fluid">
  <!-- Page Content -->
  <h1 class="card-text">SELAMAT DATANG</h1>
  <div >
    <hr>
    <center><img src="../img/header.jpg" width="100%"></center>
  </div>
  <hr>
  <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <?php
                $qry = mysql_query("SELECT * FROM tbl_komentar");
                $b = mysql_num_rows($qry);
                ?>
                <div class="mr-5">Ada <b><?= $b; ?></b> Data Komentar!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="komen.php">
                <span class="float-left">Lihat Detail</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <?php
                $kegiatan = mysql_query("SELECT * FROM tbl_kegiatan");
                $jum_kegiatan = mysql_num_rows($kegiatan);
                ?>
                <div class="mr-5">Ada <b><?= $jum_kegiatan; ?></b> Data Kegiatan!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="kegiatan.php">
                <span class="float-left">Lihat Detail</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-folder"></i>
                </div>
                <?php
                $rekom = mysql_query("SELECT * FROM tbl_rekom_nikah");
                $jum_rekom = mysql_num_rows($rekom);
                ?>
                <div class="mr-5">Ada <b><?= $jum_rekom; ?></b> Surat Rekomendasi Nikah!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="rekom_nikah.php">
                <span class="float-left">Lihat Detail</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <?php
                $ket_belum = mysql_query("SELECT * FROM tbl_ket_belum_nikah");
                $jum_ket_belum = mysql_num_rows($ket_belum);
                ?>
                <div class="mr-5">Ada <b><?= $jum_ket_belum; ?></b> Keterangan Belum Menikah!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Lihat Detail</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
</div>
</div>
  <?php
    include "footer.php"
    ?>
<?php
} else {
  echo "<script language='javascript'>alert('Silakan Login Terlebih Dahulu')</script>";
  echo "<script language='javascript'>window.location = '../index.php'</script>";
}
?>