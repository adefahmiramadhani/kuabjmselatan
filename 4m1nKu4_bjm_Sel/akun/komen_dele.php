<?php
include '../koneksi.php';
$id = $_GET['id_komen'];
mysql_query("delete from tbl_komentar where id_komen='$id'");
header("location:komen.php");
