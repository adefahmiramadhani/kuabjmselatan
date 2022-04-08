<?php
include "header.php";
$id = mysql_real_escape_string($_GET['id_surat']);
$det = mysql_query("SELECT * FROM tbl_ket_belum_nikah where id_surat='$id'") or die(mysql_error());
while ($d = mysql_fetch_array($det)) {
?>
    <br>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4><span class="fas fa-edit"></span> Update</div></h4>
        <div class="card-body">
            <!-- value="<?= $d['id_surat'] ?>" -->
            <form action="ket_belum_nikah_update_act.php" method="post" enctype="multipart/form-data">
            <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Nomer Surat :</label>
                        <input name="id_surat" type="hidden" class="form-control" value="<?= $d['id_surat'] ?>" autofocus required>
                        <input name="no_surat" type="text" class="form-control" value="<?= $d['no_surat'] ?>"required>
                    </div>
                    <div class="form-group col-md-12">
                        <b>Berdasarkan Surat Keterangan yang dibuat oleh :</b>
                        <hr>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Lurah :</label>
                        <input name="lurah" type="text" class="form-control"value="<?= $d['lurah'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Nomer :</label>
                        <input name="no_rujukan" type="text" class="form-control"value="<?= $d['no_rujukan'] ?>"required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Tanggal :</label>
                        <input name="tgl_rujukan" type="text" class="form-control"value="<?= $d['tgl_rujukan'] ?>"required>
                    </div>
                    <div class="form-group col-md-12">
                        <b>Pernyataan Kelapa KUA Bnajarmasin Selatan Bahwa :</b>
                        <hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Nama :</label>
                        <input name="nama" type="text" class="form-control" value="<?= $d['nama'] ?>" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Bin/Binti :</label>
                        <input name="bin" type="text" class="form-control" value="<?= $d['bin'] ?>"required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Tempat/Tanggal Lahir :</label>
                        <input name="ttl" type="text" class="form-control" value="<?= $d['ttl'] ?>" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Warganegara/Agama :</label>
                        <input name="warga_agama" type="text" class="form-control" value="Indonesia/Islam" required readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk" type="text" class="form-control" required>
                            <option value="<?= $d['jk'] ?>"><?= $d['jk'] ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Pekerjaan</label>
                        <select name="kerja" type="text" class="form-control" required>
                        <option value="<?= $d['kerja'] ?>"><?= $d['kerja'] ?></option>
                            <option value="PNS">PNS</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                    </div>
                    <!-- <div class="form-group col-md-6">
                        <label for="">Tanggal Masuk</label>
                    </div> -->
                    <div class="form-group col-md-6">
                        <label for="">Alamat</label>
                        <input name="alamat" id="alamat" class="form-control" value="<?= $d['alamat'] ?>" required>
                        <input name="tgl_buat" type="hidden" class="form-control" value="<?= $d['tgl_buat'] ?>" >
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Kepentingan Pembuatan Surat :</label>
                        <input name="perlu" id="perlu" class="form-control" value="<?= $d['perlu'] ?>" required>
                    </div>
            </div>
                <hr>
                    <button type="submit" class="btn btn-primary"> Ubah</button>
                    <a href="ket_belum_nikah.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    <?php
}
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#tgl").datepicker({
                dateFormat: 'yy/mm/dd'
            });
        });
    </script>
    <?php include 'footer.php'; ?>