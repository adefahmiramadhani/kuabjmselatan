<?php
include '../koneksi.php';
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$subjek     = $_POST['subjek'];
$pesan      = $_POST['pesan'];
$stat_aktif      = $_POST['stat_aktif'];
$date      =  date("Y-m-d h:i:sa");

        // Proses simpan ke Database
        $sql = ("INSERT INTO tbl_komentar VALUES('','$nama','$email','$subjek','$date','$pesan','$stat_aktif')");
        $alrt     = mysql_query($sql); // Eksekusi/ Jalankan query dari variabel $query
        if ($alrt) { // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            echo "<script language='javascript'>window.location = '../komen.php'</script>";
        } else {
            // Jika Gagal, Lakukan :
            echo "<script>alert('Gagal Kirim Pesan .');</script>";
            echo "<script language='javascript'>window.location = '../contact.php'</script>";
        }
