<?php
include '../koneksi.php';

$user_id             = $_POST['user_id'];
$nama            = $_POST['nama'];
$user            = $_POST['user'];
$newuser    = $_POST['newuser'];
$comfuser    = $_POST['comfuser'];

$query1 = "SELECT * FROM tbl_admin WHERE user_id='$user_id' AND user='$user'";
    $sql1 = mysql_query ($query1);
    $hasil = mysql_num_rows ($sql1);
    if (! $hasil >= 1) {
        ?>
            <script language="JavaScript">
            alert('Username lama tidak sesuai!, Silahkan Ulang Kembali!');
            document.location='edit_uname.php';
            </script>
        <?php
    }
    else if (empty($_POST['newuser']) || empty($_POST['comfuser'])) {
        echo "<script>alert('TIdak Boleh Kosong !');history.go(-1);</script>";    
            }
            //validasi input konfirm password
            else if (($_POST['newuser']) != ($_POST['comfuser'])) {
                    echo "<script>alert('Username Baru Dan Konfirmasi Username Tidak Sama !');history.go(-1);</script>";    
            }
            else {
$sql = ("UPDATE tbl_admin SET user='$newuser'WHERE user_id='$user_id'");
$alrt = mysql_query($sql);
if (!$alrt) {
    echo "<script>alert('Gagal Merubah Username !');history.go(-1);</script>";
} else {
    echo "<script>alert('Username Berhasil Di Ubah!');window.location = 'logout.php'</script>";
}
            } 
