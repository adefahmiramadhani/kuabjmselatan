<?php
include "head.php";
include "koneksi.php";
?>
 <section id="komen" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Komentar </h2>
          <p></p>
        </div>
        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <div class="info">
              <div class="media">
                <?php
                $qry = mysql_query("SELECT * FROM tbl_komentar WHERE stat_aktif='Y' ORDER BY date DESC");
                while ($b = mysql_fetch_array($qry)) {
                  ?>
                  
                <div class="media-body">
                  <h3 class="mt-0"> <img src="assets/img/user2.png" class="mr-3" alt="..." width="64"> <?= $b['nama']?></h3>
                  <h5 class="mt-0">Tetang : <?= $b['subjek']?></h5>
                  <?= $b['pesan']?>
                  <br>
                  <small class="text-info">Posted on :<?= $b['date']?></small>
                  <hr>
                  <?php
                   }
                   ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
<?php
include "foot.php";
?>