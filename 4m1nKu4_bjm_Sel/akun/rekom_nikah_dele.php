<?php
include '../koneksi.php';
$id_rekom = $_GET['id_rekom'];
mysql_query("DELETE from tbl_rekom_nikah where id_rekom='$id_rekom'");
header("location:rekom_nikah.php");
