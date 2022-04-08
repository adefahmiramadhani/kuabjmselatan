<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <title>REGISTER - Akun</title>


    <!-- Custom fonts for this template-->
    <link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="css/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/css/sb-admin.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="../css/ckeditor/ckeditor.js"></script> -->


</head>
</head>

<body style="background-color:#DCFBE4;">
    <div class="container">
        <div class="card card mx-auto mt-5">
            <div class="card-header bg-success">
                <center>
                    <h3 style="color:white;">FORM PENDAFTARAN PERNIKAHAN</h3>
                    <h3 style="color:white;">KUA.KEC Banjarmasin Selatan</h3>
                </center>
            </div>
            <div class="card-body">
                <form method="post" action="daftar_nikah_act.php" enctype="multipart/form-data">
                    <b>Data Suami :</b>
                    <hr>
                    <div class="row">
                    <div class="form-group col-md-4">
                        <input type="text" id="nik_laki" name="nik_laki" class="form-control" required="required" autofocus="autofocus" placeholder="Nik..">
                        <input type="hidden" id="tgl_daftar" name="tgl_daftar" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" id="nama_laki" name="nama_laki" class="form-control" required="required"  placeholder="Nama Lengkap..">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" id="ayah_laki" name="ayah_laki" class="form-control" required="required"  placeholder="Nama Ayah..">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" id="ibu_laki" name="ibu_laki" class="form-control" required="required"  placeholder="Nama Ibu..">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" id="alamat_laki" name="alamat_laki" class="form-control" required="required"  placeholder="Alamat..">
                    </div>
                </div>
                    <b>Data Istri :</b>
                    <hr>
                    <div class="row">
                    <div class="form-group col-md-4">
                        <input type="text" id="nik_bini" name="nik_bini" class="form-control" required="required" autofocus="autofocus" placeholder="Nik..">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" id="nama_bini" name="nama_bini" class="form-control" required="required"  placeholder="Nama Lengkap..">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" id="ayah_bini" name="ayah_bini" class="form-control" required="required"  placeholder="Nama Ayah..">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" id="ibu_bini" name="ibu_bini" class="form-control" required="required"  placeholder="Nama Ibu..">
                        </div>
                    <div class="form-group col-md-4">
                        <input type="text" id="alamat_bini" name="alamat_bini" class="form-control" required="required"  placeholder="Alamat..">
                    </div>
                </div>
                <b>Rencana Jadwal Pernikahan :</b>
                    <hr>
                    <div class="row">
                    <div class="form-group col-md-4">
                    <select name="tmpt_nikah" id="tmpt_nikah" class="form-control">
                        <option>- Pilih Tempat Nikah -</option>
                        <option value="KUA.Kec Banjarmasin Selatan">KUA.Kec Banjarmasin Selatan</option>
                        <option value="Di Luar KUA">Di Luar KUA</option>
                    </select>
                </div>
                    <div class="form-group col-md-4">
                        <input type="date" id="tgl_nikah" name="tgl_nikah" class="form-control" required="required">
                    </div>
                    <div class="form-group col-md-4">
                    <select name="jam_nikah" id="jam_nikah" class="form-control">
                        <option>- Pilih Jam Nikah -</option>
                        <option value="Jam 01:00">Jam 01:00</option>
                        <option value="Jam 02:00">Jam 02:00</option>
                        <option value="Jam 03:00">Jam 03:00</option>
                        <option value="Jam 04:00">Jam 04:00</option>
                        <option value="Jam 05:00">Jam 05:00</option>
                        <option value="Jam 06:00">Jam 06:00</option>
                        <option value="Jam 07:00">Jam 07:00</option>
                        <option value="Jam 08:00">Jam 08:00</option>
                        <option value="Jam 09:00">Jam 09:00</option>
                        <option value="Jam 10:00">Jam 10:00</option>
                        <option value="Jam 11:00">Jam 11:00</option>
                        <option value="Jam 12:00">Jam 12:00</option>
                        <option value="Jam 13:00">Jam 13:00</option>
                        <option value="Jam 14:00">Jam 14:00</option>
                    </select>
                    </div>
                </div>
                <b>Upload Berkas :</b>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-4">
                             <label for="">Berkas :</label>
                             <input type="file" name="foto" class="form-control" required>
                        </div>
                            <div class="form-group col-md-8">
                                <div class="card card mx-auto ">
                                <div class="card-body">
                                <i style="color:red;"><b>Note : Berkas Yang di Upluad </b></i>
                                <p>Fotokopi KTP, KK, Akta Kelahiran <br>
                                Pas foto ukuran 2x3 latar biru (5 lembar) <br>
                                Pas foto ukuran 4x6 latar biru (2 lembar) <br>
                                Jadikan 1 file dalam bentuk PDF
                                </p>
                                </div>
                                </div>
                            </div>

                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success text-white" >DAFTAR SEKARANG</button>
                    <a href="index.php" class="btn btn-danger text-white">BATAL</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="css/vendor/jquery/jquery.min.js"></script>
    <script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>

    </div>

</html>