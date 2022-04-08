<?php
include '../koneksi.php';
$id_surat = $_GET['id_surat'];
mysql_query("DELETE from tbl_ket_belum_nikah where id_surat='$id_surat'");
header("location:ket_belum_nikah.php");
