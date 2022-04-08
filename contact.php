<?php
include "head.php";
?>
 <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>KONTAK</h2>
          <p>ini adalah layanan untuk memberikan masukan secara online kepada kami</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>ALAMAT:</h4>
                <p>Jalan Kelayan B. Gang Balai Desa, RT. 11, RW. 01, No. 33, Kelurahan Kelayan Timur, Kecamatan Banjarmasin, Selatan Kota Banjarmasin</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>kuabanjarselatan@yahoo.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0511-3259-440</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.0312403103617!2d114.58900931475785!3d-3.3424439975668387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de42168e022a1d7%3A0xb197703a17376623!2sKUA%20South%20Banjarmasin!5e0!3m2!1sen!2sid!4v1646161852098!5m2!1sen!2sid" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <h4>SILAHKAN TINGGALKAN PESAN ANDA </h4>
                <hr>
                <div class="form-group col-md-6">
                  <label for="name">Nama Anda :</label>
                  <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email Anda :</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject :</label>
                <input type="text" class="form-control" name="subjek" id="subjek"  value="Pelayanan" required readonly>
                <input type="hidden" class="form-control" name="stat_aktif" id="stat_aktif"  value="N" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pesan :</label>
                <textarea class="form-control" name="pesan" rows="10" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
<?php
include "foot.php";
?>