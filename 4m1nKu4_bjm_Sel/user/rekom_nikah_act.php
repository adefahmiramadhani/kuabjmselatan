<?php
include '../koneksi.php';

$no_surat       = $_POST['no_surat'];
$tgl_buat       = $_POST['tgl_buat'];
$tujuan         = $_POST['tujuan'];
$tujuan_prov    = $_POST['tujuan_prov'];

$nm_p           = addslashes($_POST['nm_p']);
$bin_p          = addslashes($_POST['bin_p']);
$nik_p          = $_POST['nik_p'];
$tmpt_lahir_p   = $_POST['tmpt_lahir_p'];
$tgl_lahir_p    = $_POST['tgl_lahir_p'];
$jk_p           = $_POST['jk_p'];
$kerja_p        = $_POST['kerja_p'];
$alamat_p       = $_POST['alamat_p'];
$stat_p         = $_POST['stat_p'];

$nm_c           = addslashes($_POST['nm_c']);
$bin_p          = addslashes($_POST['bin_c']);
$nik_c          = $_POST['nik_c'];
$tmpt_lahir_c   = $_POST['tmpt_lahir_c'];
$tgl_lahir_c    = $_POST['tgl_lahir_c'];
$jk_c           = $_POST['jk_c'];
$kerja_c        = $_POST['kerja_c'];
$alamat_c       = $_POST['alamat_c'];
$stat_c         = $_POST['stat_c'];


$sql = ("INSERT INTO tbl_rekom_nikah VALUES ('',
        '$no_surat',
        '$tujuan',
        '$tujuan_prov',
        '$tgl_buat',
        '$nm_p',
        '$bin_p',
        '$nik_p',
        '$tmpt_lahir_p',
        '$tgl_lahir_p',
        '$jk_p',
        '$kerja_p',
        '$alamat_p',
        '$stat_p',
        '$nm_c',
        '$bin_c',
        '$nik_c',
        '$tmpt_lahir_c',
        '$tgl_lahir_c',
        '$jk_c',
        '$kerja_c',
        '$alamat_c',
        '$stat_c')");
$alrt = mysql_query($sql);
if (!$alrt) {
    echo "<script>alert('Proses Gagal');history.go(-1);</script>";
} else {
    echo "<script>alert('Berhasil Disimpan');window.location ='rekom_nikah.php';</script>";
}

