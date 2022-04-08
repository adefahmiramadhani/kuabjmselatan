
    <?php
    include "header.php";
    ?>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title"><span class="fas fa-folder"></span> SURAT REKOMENDASI MENIKAH</h5>
            </div>
            <div class="card-body">
                <form action="rekom_nikah_act.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Nomer Surat :</label>
                        <input name="no_surat" type="text" class="form-control" placeholder="Contoh : 01 (Tidak Perlu di isi panjang karna sudah otomatis)" autofocus required>
                        <input name="tgl_buat" type="hidden" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Kecamatan :</label>
                        <input name="tujuan" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Provensi :</label>
                        <input name="tujuan_prov" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <b>YANG MENGAJUKAN :</b>
                        <hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Nama :</label>
                        <input name="nm_p" type="text" class="form-control"  required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Bin/Binti :</label>
                        <input name="bin_p" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Nik :</label>
                        <input name="nik_p" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Tempat Lahir :</label>
                        <input name="tmpt_lahir_p" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Tanggal Lahir :</label>
                        <input name="tgl_lahir_p" type="date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk_p" type="text" class="form-control" required>
                            <option>-Pilih-</option>
                            <option value="Laki-Laki">LAKI-LAKI</option>
                            <option value="Perempuan">PEREMPUAN</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Pekerjaan</label>
                        <input name="kerja_p" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Alamat :</label>
                        <input name="alamat_p" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Status Perkawinan :</label>
                        <select name="stat_p" type="text" class="form-control" required>
                            <option>-Pilih-</option>
                            <option value="BELUM KAWIN">BELUM KAWIN</option>
                            <option value="CERAI HIDUP">CERAI HIDUP</option>
                            <option value="CERAI MATI">CERAI MATI</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <b>CALON PASANGAN :</b>
                        <hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Nama :</label>
                        <input name="nm_c" type="text" class="form-control"  required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Bin/Binti :</label>
                        <input name="bin_c" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Nik :</label>
                        <input name="nik_c" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Tempat Lahir :</label>
                        <input name="tmpt_lahir_c" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Tanggal Lahir :</label>
                        <input name="tgl_lahir_c" type="date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk_c" type="text" class="form-control" required>
                            <option>-Pilih-</option>
                            <option value="Laki-Laki">LAKI-LAKI</option>
                            <option value="Perempuan">PEREMPUAN</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Pekerjaan</label>
                        <input name="kerja_c" type="text" class="form-control"required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Alamat :</label>
                        <input name="alamat_c" type="text" class="form-control"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Status Perkawinan :</label>
                        <select name="stat_c" type="text" class="form-control" required>
                            <option>-Pilih-</option>
                            <option value="BELUM KAWIN">BELUM KAWIN</option>
                            <option value="CERAI HIDUP">CERAI HIDUP</option>
                            <option value="CERAI MATI">CERAI MATI</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                    <hr>
                    <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Proses</button>
                    <a href="rekom_nikah.php" class="btn btn-danger">Batal</a>
                    </div>
                    <div class="form-group col-md-9">
                                <div class="card card mx-auto ">
                                <div class="card-body">
                                <i style="color:red;"><b>Note : Cara Input Form Surat Rekomendasi Menikah </b></i>
                                <p>Silahkan Isi semua data sesuai yang di ajukan, Untuk pengisian<b> Nomer Surat</b> cukup dengan mengisi nomer paling depan saja.<b> Contoh : B.01.</b><br>
                                Untuk pengisian <b>Alamat YANG MENGAJUKAN</b>  tidak perlu Mengetikan <b>Kecamatan dan Kota</b>, Sudah Otomatis
                                </p>
                                </div>
                                </div>
                            </div>
                    
            </div>
            </form>
        </div>
        <?php
        include "footer.php"
        ?>
    