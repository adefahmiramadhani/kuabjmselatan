<?php
include "head.php";
include "koneksi.php";
?>
 <section id="layanan" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>KEGIATAN</h2>
          <p>Berikut adalah Kegiatan Terbaru yang di lakukan oleh KUA-Banjarmasin Selatan</p>
        </div>
        <div class="row">
          <div class="info">
                <?php
                $id_kegiatan = mysql_real_escape_string($_GET['id_kegiatan']);
                $det = mysql_query("SELECT * FROM tbl_kegiatan where id_kegiatan='$id_kegiatan'") or die(mysql_error());
                while ($b = mysql_fetch_array($det)) {
                  ?>
              <div class="row no-gutters">
                <div class="col-md-6">
                  <img src="4m1nKu4_bjm_Sel/img/<?= $b['foto_kegiatan']?>" class="card-img" alt="foto kegiatan">
                </div>
                  <div class="col-md-6">
                    <div class="card-body">
                          <h5 class="card-title"><?= $b['nama_kegiatan']?></h5>
                          <div class="card-text text-justify"><?= $b['ket'] ?></div>
                          <!-- <a href="kegiatan_detail.php?id_kegiatan=<?= $b['id_kegiatan']; ?>"class="badge badge-primary">Read More</a> -->
                          <br>
                        </div>
                    </div>
                    <div class="card-text"><small class="text-muted">Di Upload Oleh : Admin</small></div>
                    <div class="card-text"><small class="text-muted">Di Upload Pada : <?= $b['tgl_up']?> </small></div>
              </div>
                  <?php
                   }
                   ?>
        </div>
      </div>
    </section>
<?php
include "foot.php";
?>