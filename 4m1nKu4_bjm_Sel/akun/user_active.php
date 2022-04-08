<?php
if (isset($_GET['user_id'])) {
    $user_id   = $_GET['user_id'];
} else {
    echo '<script language="javascript">alert("Gagal Coba Lagi"); document.location="user.php";</script>';
}

include "../koneksi.php";
$activated = "UPDATE tbl_admin SET status_aktif='Y' WHERE user_id='$user_id'";
$query = mysql_query($activated);
if ($query) {
    echo '<script language="javascript">document.location="user.php";</script>';
}