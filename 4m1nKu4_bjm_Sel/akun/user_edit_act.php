<?php
include '../koneksi.php';
$id         = $_POST['user_id'];
$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];
$email      = $_POST['email'];
$tlp        = $_POST['tlp'];
$user       = $_POST['user'];
$pass       = $_POST['pass'];
$status_aktif     = ($_POST['status_aktif']);


    $sql = ("UPDATE tbl_admin SET nik='$nik',nama='$nama',alamat='$alamat',email='$email',tlp='$tlp',user='$user',pass='$pass',status_aktif='$status_aktif' where user_id='$id'");
    $alrt = mysql_query($sql);
    if (!$alrt) {
        echo "<script>alert('Failed To Add Data!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Data Berhasil Diedit');</script>";
        echo "<script language='javascript'>window.location = 'user.php'</script>";
    }

