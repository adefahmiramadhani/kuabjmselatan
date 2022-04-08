<?php
include '../koneksi.php';

$user_id             = $_POST['user_id'];
$nama            = $_POST['nama'];
$user            = $_POST['user'];
$pass    = $_POST['pass'];
$newpass    = $_POST['newpass'];
$comfpass    = $_POST['comfpass'];

$query1 = "SELECT * FROM tbl_admin WHERE user_id='$user_id' AND pass='$pass'";
    $sql1 = mysql_query ($query1);
    $hasil = mysql_num_rows ($sql1);
    if (! $hasil >= 1) {
        ?>
            <script language="JavaScript">
            alert('Password lama tidak sesuai!, Silahkan Ulang Kembali!');
            document.location='edit_pass.php';
            </script>
        <?php
    }
    else if (empty($_POST['newpass']) || empty($_POST['comfpass'])) {
        echo "<script>alert('TIdak Boleh Kosong !');history.go(-1);</script>";    
            }
            //validasi input konfirm password
            else if (($_POST['newpass']) != ($_POST['comfpass'])) {
                    echo "<script>alert('Password Baru Dan Konfirmasi Password Tidak Sama !');history.go(-1);</script>";    
            }
            else {
$sql = ("UPDATE tbl_admin SET pass='$newpass'WHERE user_id='$user_id'");
$alrt = mysql_query($sql);
if (!$alrt) {
    echo "<script>alert('Gagal Merubah Password !');history.go(-1);</script>";
} else {
    echo "<script>alert('Password Berhasil Di Ubah!');window.location = 'index.php'</script>";
}
            } 
