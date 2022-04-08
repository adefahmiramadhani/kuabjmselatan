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
  <div class="card">
      <div class="card-header">
        <h4>DATA SURAT REKOMENDASI NIKAH</h4>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
                            <tr>
                                <th>No </th>
                                <th>Tanggal Input</th>
                                <th>Monor Surat</th>
                                <th>Yang Mengajukan</th>
                                <th>Calon Pasangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $qry = mysql_query("SELECT * FROM tbl_rekom_nikah ORDER BY tgl_buat DESC");
                            while ($b = mysql_fetch_array($qry)) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?php echo date('d F Y', strtotime($b['tgl_buat'])) ?></td>
                                    <td>B.<?= $b['no_surat'] ?>/Kua.17.01-5/Pw.01/<?php echo date('m/Y'); ?></td>
                                    <td><?= $b['nm_p'] ?></td>
                                    <td><?= $b['nm_c'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
          </table>
        </div>
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