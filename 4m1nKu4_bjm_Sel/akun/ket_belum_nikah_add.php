
    <?php
    include "header.php";
    ?>
    <h3><span class="fas fa-folder"></span> SURAT KETERANGAN BELUM MENIKAH</h3>
        <hr>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title"><span class="fas fa-users"></span> Form</h5>
            </div>
            <div class="card-body">
                <form action="ket_belum_nikah_act.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Nomer Surat :</label>
                        <input name="no_surat" type="text" class="form-control" placeholder="20/Kua.17.01-5/PW.01/SKET/08/2021" autofocus required>
                    </div>
                    <div class="form-group col-md-12">
                        <b>Berdasarkan Surat Keterangan yang dibuat oleh :</b>
                        <hr>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Lurah :</label>
                        <input name="lurah" type="text" class="form-control" placeholder="Nama Kelurahan.." required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Nomer :</label>
                        <input name="no_rujukan" type="text" class="form-control" placeholder="457.67/08/KTH/2021" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Tanggal :</label>
                        <input name="tgl_rujukan" type="text" class="form-control" placeholder="16 Agustus 2021" required>
                    </div>
                    <div class="form-group col-md-12">
                        <b>Pernyataan Kelapa KUA Bnajarmasin Selatan Bahwa :</b>
                        <hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Nama :</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap.." required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Bin/Binti :</label>
                        <input name="bin" type="text" class="form-control" placeholder="Bin/Binti" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Tempat/Tanggal Lahir :</label>
                        <input name="ttl" type="text" class="form-control" placeholder="Banjarmasin,24 Agustus 1987" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Warganegara/Agama :</label>
                        <input name="warga_agama" type="text" class="form-control" value="Indonesia/Islam" required readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk" type="text" class="form-control" required>
                            <option>-Pilih-</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Pekerjaan</label>
                        <select name="kerja" type="text" class="form-control" required>
                            <option>-Pilih-</option>
                            <option value="PNS">PNS</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                    </div>
                    <!-- <div class="form-group col-md-6">
                        <label for="">Tanggal Masuk</label>
                    </div> -->
                    <div class="form-group col-md-6">
                        <label for="">Alamat</label>
                        <input name="alamat" id="alamat" class="form-control" placeholder="Alamat Lengkap..." required>
                        <input name="tgl_buat" type="hidden" class="form-control" value="<?= date('Y-m-d');?>" >
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Kepentingan Pembuatan Surat :</label>
                        <input name="perlu" id="perlu" class="form-control" required>
                    </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Proses</button>
                    <a href="ket_belum_nikah.php" class="btn btn-danger">Batal</a>
            </div>
            </form>
        </div>
        <?php
        include "footer.php"
        ?>
    