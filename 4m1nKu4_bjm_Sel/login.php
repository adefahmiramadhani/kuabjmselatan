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
    <title>KUA - Login</title>
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
<body style= "background-image:url(../assets/img/KUA.jpg); background-size:cover;">
<!-- <body> -->
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header bg-success">
                <center>
                    <img class="sircle" src="img/logo.png" alt="KUA Banjarmasin" style="width:70px;">
                    <h1 style="color:white;">SILAHKAN LOGIN</h1>
                    <h4 style="color:white;">KANTOR URUSAN AGAMA (KUA)</h4>
                    <h4 style="color:white;">Banjarmasin Selatan</h4>
                </center>
            </div>
            <div class="card-body">
                <form method="post" action="proses_login.php">
                    <div class="form-group">
                            <!-- <label for="user">Username :</label> -->
                            <input type="text" id="user" name="user" class="form-control" required="required" autofocus="autofocus" placeholder="Masukan Username...">
                    </div>
                    <div class="form-group">
                            <!-- <label for="pass">Password :</label> -->
                            <input type="password" id="pass" name="pass" class="form-control" required="required"placeholder="Password..." >
                    </div>
                    <hr>
                    <button class="btn btn-success btn-lg btn-block" href="">Masuk</button>
                </form>
                <div class="text-center">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="css/vendor/jquery/jquery.min.js"></script>
    <script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>








<!-- <body>
  <section class="container">
    <div class="login">
      <h1>Login Ke Sistem </h1>
      <form method="post" action="proses_login.php">
        <p><input type="text" name="user" value="" placeholder="Username"></p>
        <p><input type="password" name="pass" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
  </div>

</section> 
</body>
</html> -->