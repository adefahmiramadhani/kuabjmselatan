<?php
include '../koneksi.php';
// DATA LAKI
$nama_kegiatan  = $_POST['nama_kegiatan'];
$ket            = addslashes($_POST['ket']);
$tgl_up         = $_POST['tgl_up'];

$foto_kegiatan  = $_FILES['foto_kegiatan']['name'];
$tmp_foto   = $_FILES['foto_kegiatan']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotonew         = $foto_kegiatan;

// Set path folder tempat menyimpan fotonya
$path             = "../img/" . $fotonew;
if (move_uploaded_file($tmp_foto, $path)) {  
$sql = ("INSERT INTO tbl_kegiatan VALUES('',
        '$nama_kegiatan',
        '$ket',
        '$tgl_up',
        '$fotonew')");
$alrt = mysql_query($sql); // Eksekusi/ Jalankan query dari variabel $query

if ($alrt) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script>alert('Data Berhasil Disimpan.');window.location = 'kegiatan.php'</script>";
} else {
    // Jika Gagal, Lakukan :
    echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');history.go(-1);</script>";
} 
}

