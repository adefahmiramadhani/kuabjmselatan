
<?php include "header.php" ?>
<?php
     $sql=mysql_query("SELECT * FROM tbl_admin WHERE user='$sesi'");
     while($d=mysql_fetch_array($sql)){
                                ?>
<!-- Page Content -->
            <!-- <img src="../img/struktur.jpg" alt="" width="1100" height="700"> -->
<div id="page-wrapper">
    <div class="container">
            <div class="card card-register mx-auto mt-5 ">
            <div class="card-header bg-primary text-white">
            <h4 class="text-center"><span class="fa fa-eye"></span> Ubah Password</h4>
            </div>
            <!-- /.card-heading -->
            <div class="card-body">
                <form role="form" action="edit_uname_act.php" class="col-md-12" method="post"
                    enctype="multipart/form-data">
                    <div class="row">
                    <div class="form-group col-12">
                        <label>Nama Lengkap :</label>
                        <input type="hidden" class="form-control" name="user_id" value="<?= $d['user_id']; ?>" >
                        <input name="nama" type="text" class="form-control" value="<?= $d['nama']; ?>"required readonly>
                    </div>
                    <div class="form-group col-12">
                        <label>Username Lama :</label>
                        <input name="user" type="text" class="form-control" value="<?= $d['user']; ?>"required readonly>
                    </div>
                    <div class="form-group col-12">
                        <label>Username Baru :</label>
                        <input name="newuser" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-12">
                        <label>Konfirmasi Username :</label>
                        <input name="comfuser" type="text" class="form-control" required>
                    </div>
                    </div>
                    <hr>
                        <input type="submit" class="btn btn-primary" value="Ubah Sekarang">
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<?php 
}
?>
<?php
include "footer.php"
?>