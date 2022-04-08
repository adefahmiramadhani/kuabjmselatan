<?php
include '../koneksi.php';
$id             = $_POST['id_surat'];
$no_surat       = $_POST['no_surat'];
$lurah          = $_POST['lurah'];
$no_rujukan     = $_POST['no_rujukan'];
$nama           = $_POST['nama'];
$bin            = $_POST['bin'];
$ttl            = $_POST['ttl'];
$warga_agama    = $_POST['warga_agama'];
$jk             = $_POST['jk'];
$kerja          = $_POST['kerja'];
$alamat         = $_POST['alamat'];
$tgl_buat       = $_POST['tgl_buat'];
$perlu          = $_POST['perlu'];


    $sql = ("UPDATE tbl_ket_belum_nikah SET no_surat='$no_surat',lurah='$lurah',no_rujukan='$no_rujukan',nama='$nama',bin='$bin',ttl='$ttl',warga_agama='$warga_agama', jk='$jk', kerja='$kerja', alamat='$alamat', tgl_buat='$tgl_buat', perlu='$perlu' where id_surat='$id'");
    $alrt = mysql_query($sql);
    if (!$alrt) {
        echo "<script>alert('Data Gagal di Ubah!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Data Berhasil di Ubah');</script>";
        echo "<script language='javascript'>window.location = 'ket_belum_nikah.php'</script>";
    }

