<?php
include '../koneksi.php'; //ini untuk masuk ke database
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$tlp = $_POST['tlp'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$type = $_POST['type'];
$status_aktif = $_POST['status_aktif'];
$foto = $_POST['foto'];


$cekdulu = "SELECT * FROM tbl_admin WHERE nik ='$nik'";
$prosescek = mysql_query($cekdulu);
if (mysql_num_rows($prosescek) > 0) { //proses mengingatkan data sudah ada
    echo "<script>alert('Maaf Data Yang Anda Inputkan Sama');history.go(-1) </script>";
} else {
    $sql = ("INSERT INTO tbl_admin VALUES ('','$nik','$nama','$alamat','$email','$tlp','$user','$pass','$type','$status_aktif','$foto')");
    $alrt = mysql_query($sql);
    if (!$alrt) {
        echo "<script>
        alert('Failed To Add Data!');
        history.go(-1);
    </script>";
    } else {
        echo "<script>
        alert('Data Berhasil Di Simpan!');
    </script>";
        echo "<script language='javascript'>window.location = 'user.php'</script>";
    }
}
