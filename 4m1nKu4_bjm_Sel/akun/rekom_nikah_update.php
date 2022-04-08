<?php
include "header.php";
$id = mysql_real_escape_string($_GET['id_rekom']);
$det = mysql_query("SELECT * FROM tbl_rekom_nikah where id_rekom='$id'") or die(mysql_error());
while ($d = mysql_fetch_array($det)) {
?>
    <br>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4><span class="fas fa-edit"></span> Update</div></h4>
        <div class="card-body">
            <!-- value="<?= $d['id_rekom'] ?>" -->
            <form action="rekom_nikah_update_act.php" method="post" enctype="multipart/form-data">
            <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Nomer Surat :</label>
                        <input name="id_rekom" type="hidden" class="form-control" value="<?= $d['id_rekom'] ?>" autofocus required>
                        <input name="no_surat" type="text" class="form-control" value="<?= $d['no_surat'] ?>"required>
                        <input name="tgl_buat" type="hidden" class="form-control" value="<?= $d['tgl_buat'] ?>"required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Kecamantan :</label>
                        <input name="tujuan" type="text" class="form-control" value="<?= $d['tujuan'] ?>" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Provinsi :</label>
                        <input name="tujuan_prov" type="text" class="form-control" value="<?= $d['tujuan_prov'] ?>" required>
                    </div>
                    <div class="form-group col-md-12">
                        <b>YANG MENGAJUKAN :</b>
                        <hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Nama :</label>
                        <input name="nm_p" type="text" class="form-control" value="<?= $d['nm_p'] ?>"  required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Bin/Binti :</label>
                        <input name="bin_p" type="text" class="form-control"  value="<?= $d['bin_p'] ?>"  required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Nik :</label>
                        <input name="nik_p" type="text" class="form-control"  value="<?= $d['nik_p'] ?>"  required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Tempat Lahir :</label>
                        <input name="tmpt_lahir_p" type="text" class="form-control"  value="<?= $d['tmpt_lahir_p'] ?>"  required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Tanggal Lahir :</label>
                        <input name="tgl_lahir_p" type="date" class="form-control"  value="<?= $d['tgl_lahir_p'] ?>"  required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk_p" type="text" class="form-control" required>
                            <option value="<?= $d['jk_p'] ?>">-<?= $d['jk_p'] ?>-</option>
                            <option value="Laki-Laki">LAKI-LAKI</option>
                            <option value="Perempuan">PEREMPUAN</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Pekerjaan</label>
                        <input name="kerja_p" type="text" class="form-control"  value="<?= $d['kerja_p'] ?>"  required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Alamat :</label>
                        <input name="alamat_p" type="text" class="form-control"  value="<?= $d['alamat_p'] ?>"  required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Status Perkawian</label>
                        <select name="stat_p" type="text" class="form-control" required>
                            <option value="<?= $d['stat_p'] ?>">-<?= $d['stat_p'] ?>-</option>
                            <option value="BELUM KAWIN">BELUM KAWIN</option>
                            <option value="CERAI HIDUP">CERAI HIDUP</option>
                            <option value="CERAI MATI">CERAI MATI</option>
                        </select>
                    </div>

                    <!-- CALON PASANGAN -->
                    <div class="form-group col-md-12">
                        <b>CALON PASANGAN :</b>
                        <hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Nama :</label>
                        <input name="nm_c" type="text" class="form-control"  value="<?= $d['nm_c'] ?>"   required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Bin/Binti :</label>
                        <input name="bin_c" type="text" class="form-control" value="<?= $d['bin_c'] ?>" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Nik :</label>
                        <input name="nik_c" type="text" class="form-control" value="<?= $d['nik_c'] ?>" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Tempat Lahir :</label>
                        <input name="tmpt_lahir_c" type="text" class="form-control" value="<?= $d['tmpt_lahir_c'] ?>" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Tanggal Lahir :</label>
                        <input name="tgl_lahir_c" type="date" class="form-control" value="<?= $d['tgl_lahir_c'] ?>" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk_c" type="text" class="form-control" required>
                            <option value="<?= $d['jk_c'] ?>">-<?= $d['jk_c'] ?>-</option>
                            <option value="Laki-Laki">LAKI-LAKI</option>
                            <option value="Perempuan">PEREMPUAN</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Pekerjaan</label>
                        <input name="kerja_c" type="text" class="form-control"  value="<?= $d['kerja_c'] ?>"  required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Alamat :</label>
                        <input name="alamat_c" type="text" class="form-control"  value="<?= $d['alamat_c'] ?>"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Status Perkawian</label>
                        <select name="stat_c" type="text" class="form-control" required>
                            <option value="<?= $d['stat_c'] ?>">-<?= $d['stat_c'] ?>-</option>
                            <option value="BELUM KAWIN">BELUM KAWIN</option>
                            <option value="CERAI HIDUP">CERAI HIDUP</option>
                            <option value="CERAI MATI">CERAI MATI</option>
                        </select>
                    </div>
            </div>
                <hr>
                    <button type="submit" class="btn btn-primary"> Ubah</button>
                    <a href="rekom_nikah.php" class="btn btn-danger">Batal</a>
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