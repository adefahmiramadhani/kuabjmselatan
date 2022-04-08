<?php
include "header.php";
?>
<h3><span class="fas fa-edit"></span> EDIT DATA KEGIATAN</h3>

<?php
$id = mysql_real_escape_string($_GET['id_kegiatan']);
$det = mysql_query("SELECT * FROM tbl_kegiatan where id_kegiatan='$id'") or die(mysql_error());
while ($d = mysql_fetch_array($det)) {
?>
    <br>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
             Form Update Data</div>
        <div class="card-body">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            <form action="kegiatan_update_act.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Nama Kegiatan :</label>
                    <input name="id_kegiatan" type="hidden" class="form-control" value="<?= $d['id_kegiatan'] ?>">
                    <input name="nama_kegiatan" type="text" class="form-control" value="<?= $d['nama_kegiatan'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Tanggal Upload :</label>
                    <input name="tgl_up" type="datetime" class="form-control" value="<?= $d['tgl_up'] ?>" readonly>
                </div>
                <div class="form-group col-md-12">
                    <label for="">Deskripsi :</label>
                    <textarea name="ket" type="text" class="form-control" rows="10"required><?= $d['ket'] ?></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="">FOTO :</label><br>
                    <input name="cek_foto" type="checkbox"><span class="text-danger"> Conteng Jika ingin merubah FOTO</span>
                    <input name="foto_kegiatan" type="file" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <img src="../img/<?= $d['foto_kegiatan']; ?>" width="70%" height="200"></img>
                </div>
            </div>
                <hr>
                    <button type="submit" class="btn btn-primary" ><span class="fas fa-save"></span> Edit</button> 
                    <a href="kegiatan.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    <?php
}
    ?>
    <?php include 'footer.php'; ?>