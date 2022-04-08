<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>REGISTER - Akun</title>
    <link rel="stylesheet" href="css/styles.css">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/css/sb-admin.css" rel="stylesheet">

</head>
</head>

<body style="background-color:#DCFBE4;">
    <div class="container-fluid">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header bg-success">
                <center>
                    <h3 style="color:white;">Silahkan Isi Data Dibawah</h3>
                </center>
            </div>
            <div class="card-body">
                <form method="post" action="daftar_proses.php">
                    <div class="form-group">
                        <input type="text" id="nik" name="nik" class="form-control" required="required" autofocus="autofocus" placeholder="Nik..">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" required="required"  placeholder="Nama Lengkap..">
                    </div>
                    <div class="form-group">
                        <input type="text" id="alamat" name="alamat" class="form-control" required="required"  placeholder="Alamat Lengkap..">
                    </div>
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" required="required"  placeholder="Alamat E-mail..">
                    </div>
                    <div class="form-group">
                        <input type="text" id="tlpn" name="tlpn" class="form-control" required="required"  placeholder="No.Telpon..">
                    </div>
                    <div class="form-group">
                        <input type="text" id="user" name="user" class="form-control" required="required"  placeholder="Username..">
                    </div>
                    <div class="form-group">
                        <input type="password" id="pass" name="pass" class="form-control" required="required"  placeholder="Password..">
                        <input type="hidden" id="type" name="type" value="user">
                        <input type="hidden" id="status_aktif" name="status_aktif" value="N">
                    </div>
                    <hr>
                    <button class="btn btn-success btn-block text-white" type="submit">Buat Akun</button>
                </form>
                <div class="text-center">
                        <p>Sudah Memeliki Akun? <a href="index.php">Masuk</a></p>
                </div>
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