<?php
error_reporting(0);
session_start();
$a = $_SESSION['user'];
include "../koneksi.php";
include "norut.php";
$sesi = $_SESSION['user'];
$qry=mysql_query("SELECT * FROM tbl_admin WHERE user='$sesi'");
while($n=mysql_fetch_array($qry)){
$user_id = $n['user_id'];
$nama = $n['nama'];
$status = $n['type'];
?>
<?php 
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Adminitrator</title>

    <!-- Custom fonts for this template-->
    <link href="../css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../css/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript" src="css/ckeditor/ckeditor.js"></script>

</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="#">KUA Banjarmasin Selatan</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
           
            <li class="nav-item dropdown no-arrow">
            <a class="nav-link" href="logout.php" role="button" aria-haspopup="true" aria-expanded="false">
                    <!-- <img src="../img/logo.png" alt="keluar" title="Keluar" width="25" height="25"> -->
                    <i class="fas fa-user" style="color:#01FF1E;"></i>  
                   <b style="color:#FFFFFF;"><?= $nama ?></b>
                </a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->

        <ul class="sidebar navbar-nav bg-primary">
        <br>
            <li>
                <center>
                    <img src="../img/admin.png" alt="" width=80" height="80"><br>
                    <b style="color:#FFFFFF;">Level : <?= $status ?></b>
            </center>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>HALAMAN UTAMA</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>MASTER </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <!-- <h6 class="dropdown-header">Humas:</h6> -->
                    <a class="dropdown-item" href="rekom_nikah.php">Surat Rekom-Nikah</a>
                    <a class="dropdown-item" href="ket_belum_nikah.php">Surat Ket.Belum Nikah</a>
                    <!-- <a class="dropdown-item" href="jadwal.php">Jadwal Nikah</a> -->
                    <a class="dropdown-item" href="user.php">Data User</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="komen.php">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>KOMENTAR</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kegiatan.php">
                    <i class="fas fa-fw fa-camera"></i>
                    <span>KEGIATAN</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-lock"></i>
                    <span>PENGATURAN AKUN </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="edit_pass.php">Ubah Password</a>
                    <a class="dropdown-item" href="edit_uname.php">Ubah Username</a>
                </div>
            </li>
        </ul>
        <div id="content-wrapper">

            <div class="container-fluid">