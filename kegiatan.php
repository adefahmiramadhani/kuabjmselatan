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
                $qry = mysql_query("SELECT * FROM tbl_kegiatan ORDER BY tgl_up DESC");
                while ($b = mysql_fetch_array($qry)) {
                  ?>
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="4m1nKu4_bjm_Sel/img/<?= $b['foto_kegiatan']?>" class="card-img" alt="foto kegiatan" style="width: 300px; height: 200px;">
                </div>
                  <div class="col-md-9">
                    <div class="card-body">
                          <h5 class="card-title"><?= $b['nama_kegiatan']?></h5>
                          <div class="card-text text-justify"><?= substr($b['ket'], 0, 150); ?>...</div>
                          <a href="kegiatan_detail.php?id_kegiatan=<?= $b['id_kegiatan']; ?>"class="badge badge-primary">Read More</a>
                          <br>
                          <div class="card-text"><small class="text-muted">Di Upload Oleh : Admin</small></div>
                          <div class="card-text"><small class="text-muted">Di Upload Pada : <?= $b['tgl_up']?> </small></div>
                    </div>
                  </div>
              </div>
              <hr>
                  <?php
                   }
                   ?>
        </div>
      </div>
    </section>
<?php
include "foot.php";
?>