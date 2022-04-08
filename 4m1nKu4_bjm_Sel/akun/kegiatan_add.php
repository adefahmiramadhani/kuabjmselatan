<?php
    include "header.php";
    ?>
    <div class="container-fluid">
    <h3><span class="fas fa-sign-in-alt"></span> Tambah Kegiatan</h3>
        <hr>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title"><span class="fas fa-users"></span> Form Tambah Data</h4>
            </div>
            <div class="card-body">
                <form action="kegiatan_act.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">Nama Kegiatan :</label>
                        <input name="nama_kegiatan" id="nama_kegiatan" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Tanggal Upload :</label>
                        <input name="tgl_up" type="datetime" class="form-control" value="<?= date('Y-m-d h:i:sa');?>"  readonly>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Deskripsi Kegiatan :</label>
                        <textarea name="ket" type="text" class="form-control" rows="10"required></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Foto Kegiatan</label>
                        <input name="foto_kegiatan" type="file" class="form-control" required>
                    </div>
                    <!-- <div class="form-group">
                        <input name="password" type="hidden" class="form-control" value="user">
                        <input name="level" type="hidden" class="form-control" value="user">
                    </div> -->
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Proses</button>
                    <a href="kegiatan.php" class="btn btn-danger">Batal</a>
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