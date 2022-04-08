<?php
include 'koneksi.php';
// DATA LAKI
$nik_laki        = $_POST['nik_laki'];
$nama_laki        = $_POST['nama_laki'];
$ayah_laki        = $_POST['ayah_laki'];
$ibu_laki        = $_POST['ibu_laki'];
$alamat_laki         = $_POST['alamat_laki'];
// DATA BINI
$nik_bini        = $_POST['nik_bini'];
$nama_bini        = $_POST['nama_bini'];
$ayah_bini        = $_POST['ayah_bini'];
$ibu_bini        = $_POST['ibu_bini'];
$alamat_bini         = $_POST['alamat_bini'];
// RENCANA NIKAH
$tmpt_nikah         = $_POST['tmpt_nikah'];
$tgl_nikah         = $_POST['tgl_nikah'];
$jam_nikah         = $_POST['jam_nikah'];
$tgl_daftar         = $_POST['tgl_daftar'];

$foto       = $_FILES['foto']['name'];
$tmp_foto   = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru         = $foto;

// Set path folder tempat menyimpan fotonya
$path             = "img/" . $fotobaru;
if (move_uploaded_file($tmp_foto, $path)) {
    $cekgel  ="SELECT * FROM tbl_daftar_nikah WHERE jam_nikah='$jam_nikah' AND tgl_nikah='$tgl_nikah'";
    $query = mysql_query($cekgel);
    $count =mysql_num_rows($query);
    if ($count >0) {
        echo "<script>alert('Maaf, Jadwal Tidak Tersedia .'); history.go(-1);</script>"; 
     } else {   
$sql = ("INSERT INTO tbl_daftar_nikah VALUES('',
        '$nik_laki',
        '$nama_laki',
        '$ayah_laki',
        '$ibu_laki',
        '$alamat_laki',

        '$nik_bini',
        '$nama_bini',
        '$ayah_bini',
        '$ibu_bini',
        '$alamat_bini',

        '$tmpt_nikah',
        '$tgl_nikah',
        '$jam_nikah',
        '$tgl_daftar',
        '$fotobaru')");
$alrt = mysql_query($sql); // Eksekusi/ Jalankan query dari variabel $query

if ($alrt) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script>alert('Data Berhasil Disimpan.');window.location = 'index.php'</script>";
} else {
    // Jika Gagal, Lakukan :
    echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');history.go(-1);</script>";
} 
}
}
