<?php
include '../koneksi.php';
$id               = $_POST['id_rekom'];
$no_surat         = $_POST['no_surat'];
$tujuan           = $_POST['tujuan'];
$tujuan_prov      = $_POST['tujuan_prov'];
$tgl_buat         = $_POST['tgl_buat'];

$nm_p             = addslashes($_POST['nm_p']);
$bin_p            = addslashes($_POST['bin_p']);
$nik_p            = $_POST['nik_p'];
$tmpt_lahir_p     = $_POST['tmpt_lahir_p'];
$tgl_lahir_p      = $_POST['tgl_lahir_p'];
$jk_p             = $_POST['jk_p'];
$kerja_p          = $_POST['kerja_p'];
$alamat_p         = $_POST['alamat_p'];
$stat_p           = $_POST['stat_p'];

$nm_c             = addslashes($_POST['nm_c']);
$bin_p            = addslashes($_POST['bin_c']);
$nik_c            = $_POST['nik_c'];
$tmpt_lahir_c     = $_POST['tmpt_lahir_c'];
$tgl_lahir_c      = $_POST['tgl_lahir_c'];
$jk_c             = $_POST['jk_c'];
$kerja_c          = $_POST['kerja_c'];
$alamat_c         = $_POST['alamat_c'];
$stat_c           = $_POST['stat_c'];


    $sql = ("UPDATE tbl_rekom_nikah SET
     no_surat='$no_surat',
     tujuan='$tujuan',
     tujuan_prov='$tujuan_prov',
     tgl_buat='$tgl_buat',

     nm_p='$nm_p',
     bin_p='$bin_p',
     nik_p='$nik_p',
     tmpt_lahir_p='$tmpt_lahir_p',
     tgl_lahir_p='$tgl_lahir_p',
     jk_p='$jk_p',
     kerja_p='$kerja_p',
     alamat_p='$alamat_p',
     stat_p='$stat_p',

     nm_c='$nm_c',
     bin_c='$bin_c',
     nik_c='$nik_c',
     tmpt_lahir_c='$tmpt_lahir_c',
     tgl_lahir_c='$tgl_lahir_c',
     jk_c='$jk_c',
     kerja_c='$kerja_c',
     alamat_c='$alamat_c',
     stat_c='$stat_c'
      where id_rekom='$id'");
    $alrt = mysql_query($sql);
    if (!$alrt) {
        echo "<script>alert('Data Gagal di Ubah!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Data Berhasil di Ubah');</script>";
        echo "<script language='javascript'>window.location = 'rekom_nikah.php'</script>";
    }

// history.go(-1);