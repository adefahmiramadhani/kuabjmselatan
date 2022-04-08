<?php
include 'koneksi.php';

$nik     = $_POST['nik'];
$nama     = $_POST['nama'];
$alamat     = $_POST['alamat'];
$email     = $_POST['email'];
$tlpn      = $_POST['tlpn'];
$user  = $_POST['user'];
$pass  = $_POST['pass'];
$type  = $_POST['type'];
$status_aktif  = $_POST['status_aktif'];

$sql = ("INSERT INTO tbl_admin VALUES ('','$nik','$nama','$alamat','$email','$tlpn','$user','$pass','$type','$status_aktif','')");
$alrt = mysql_query($sql);
if (!$alrt) {
    echo "<script>alert('Maaf, Gagal Melakukan Pendaftaran!');history.go(-1);</script>";
} else {
    echo "<script>alert('Berhasil Melakukan Pendaftaran! Silahkan Konfirmasi Kepada Admin. ');</script>";
    echo "<script language='javascript'>window.location = 'Index.php'</script>";
}
