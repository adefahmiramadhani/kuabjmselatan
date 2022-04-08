<?php
if (isset($_GET['id_komen'])) {
    $id_komen   = $_GET['id_komen'];
} else {
    echo '<script language="javascript">alert("Gagal Coba Lagi"); document.location="komen.php";</script>';
}

include "../koneksi.php";
$activated = "UPDATE tbl_komentar SET stat_aktif='N' WHERE id_komen='$id_komen'";
$query = mysql_query($activated);
if ($query) {
    echo '<script language="javascript">document.location="komen.php";</script>';
}