<?php
include "header.php";
$id = mysql_real_escape_string($_GET['user_id']);
$det = mysql_query("SELECT * FROM tbl_admin where user_id='$id'") or die(mysql_error());
while ($d = mysql_fetch_array($det)) {
?>
    <br>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4><span class="fas fa-edit"></span> Update</div></h4>
        <div class="card-body">
            <form action="user_edit_act.php" method="post" enctype="multipart/form-data">
            <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">NIK :</label>
                        <input name="user_id" type="hidden" class="form-control" value="<?= $d['user_id'] ?>" autofocus required>
                        <input name="nik" type="text" class="form-control" value="<?= $d['nik'] ?>"required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Nama Lengkap :</label>
                        <input name="nama" type="text" class="form-control"value="<?= $d['nama'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Alamat :</label>
                        <input name="alamat" type="text" class="form-control"value="<?= $d['alamat'] ?>"required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">E-mail :</label>
                        <input name="email" type="text" class="form-control"value="<?= $d['email'] ?>"required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Telpon :</label>
                        <input name="tlp" type="text" class="form-control" value="<?= $d['tlp'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Username :</label>
                        <input name="user" type="text" class="form-control" value="<?= $d['user'] ?>"required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Password :</label>
                        <input name="pass" type="password" class="form-control" value="<?= $d['pass'] ?>" required>
                        <input name="status_aktif" type="hidden" class="form-control" value="<?= $d['status_aktif'] ?>" required>
                    </div>
            </div>
                <hr>
                    <button type="submit" class="btn btn-primary"> Ubah</button>
                    <a href="user.php" class="btn btn-danger">Batal</a>
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