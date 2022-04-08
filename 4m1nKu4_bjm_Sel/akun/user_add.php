
    <?php
    include "header.php";
    ?>
    <div class="container-fluid">
    <h3><span class="fas fa-sign-in-alt"></span> Tambah Data User</h3>
        <hr>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title"><span class="fas fa-users"></span> Form Tambah Data</h5>
            </div>
            <div class="card-body">
                <form action="user_act.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">NIK :</label>
                        <input name="nik" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nama Lengkap :</label>
                        <input name="nama" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Alamat :</label>
                        <input name="alamat" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">E-mail :</label>
                        <input name="email" type="email" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nomer Telpon :</label>
                        <input name="tlp" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Username</label>
                        <input name="user" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Password</label>
                        <input name="pass" type="text" class="form-control" value="12345" required readonly>
                        <input name="type" type="hidden" class="form-control" value="user" required >
                        <input name="status_aktif" type="hidden" class="form-control" value="Y" required >
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Proses</button>
                    <a href="user.php" class="btn btn-danger">Batal</a>
            </div>
            <div class="card-footer">
                <div class="small text-muted">Silahkkan Isi Data Dengan Langkap !!</div>
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button> -->
            </div>
            </form>
        </div>
        <script type="text/javascript">
            <?php echo $penghulu; ?>

            function peng(nama) {
                document.getElementById('nip').value = npeng[nama].nip;
            };
        </script>
        <?php
        include "footer.php"
        ?>
    