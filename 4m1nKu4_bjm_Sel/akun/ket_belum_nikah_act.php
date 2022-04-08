<?php
include '../koneksi.php';

$no_surat        = $_POST['no_surat'];
$lurah           = $_POST['lurah'];
$no_rujukan      = $_POST['no_rujukan'];
$tgl_rujukan     = $_POST['tgl_rujukan'];
$nama            = $_POST['nama'];
$bin             = $_POST['bin'];
$ttl             = $_POST['ttl'];
$warga_agama     = $_POST['warga_agama'];
$jk              = $_POST['jk'];
$kerja           = $_POST['kerja'];
$alamat          = $_POST['alamat'];
$tgl_buat        = $_POST['tgl_buat'];
$perlu           = $_POST['perlu'];


$sql = ("INSERT INTO tbl_ket_belum_nikah VALUES ('','$no_surat','$lurah','$no_rujukan','$tgl_rujukan','$nama','$bin','$ttl','$warga_agama','$jk','$kerja','$alamat','$tgl_buat','$perlu')");
$alrt = mysql_query($sql);
if (!$alrt) {
    echo "<script>alert('Proses Gagal');history.go(-1);</script>";
} else {
    echo "<script>alert('Berhasil Disimpan');window.location ='ket_belum_nikah.php';</script>";
}

