<?php
include '../koneksi.php';
$id = $_GET['id_kegiatan'];
mysql_query("DELETE from tbl_kegiatan where id_kegiatan='$id'");
header("location:kegiatan.php");
