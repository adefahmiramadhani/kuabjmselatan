<?php
include '../koneksi.php';

$id_kegiatan        = $_POST['id_kegiatan'];
$nama_kegiatan      = $_POST['nama_kegiatan'];
$ket                = $_POST['ket'];
$tgl_up             = $_POST['tgl_up'];

// Cek apakah user ingin mengubah fotonya atau tkd_brgak
if (isset($_POST['cek_foto'])) { // Jika user menceklis checkbox yang ada di form ubah, lakukan :
    // Ambil data foto_kegiatan yang dipilih dari form
    $foto_kegiatan  = $_FILES['foto_kegiatan']['name'];
    $tmp            = $_FILES['foto_kegiatan']['tmp_name'];
    // Rename jns_barang fotonya dengan menambahkan tanggal dan jam upload
    $fotoup       = $foto_kegiatan;
    // Set path folder tempat menyimpan fotonya
    $path   = "../img/" . $fotoup;
    // Proses upload
    if (move_uploaded_file($tmp, $path))
    { // Cek apakah gambar berhasil diupload atau tidak
        $query        = "SELECT * FROM tbl_kegiatan WHERE id_kegiatan='" . $id_kegiatan . "'";
        $sql          = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
        $data         = mysql_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
        // Cek apakah file foto_kegiatan sebelumnya ada di folder images
        if (is_file("../img/" . $data['foto_kegiatan'])) // Jika foto_kegiatan ada
            unlink("../img/" . $data['foto_kegiatan']); // Hapus file foto_kegiatan sebelumnya yang ada di folder images
        // Proses ubah data ke Database

$sql = ("UPDATE tbl_kegiatan SET 
        nama_kegiatan='$nama_kegiatan',
        ket='$ket',
        tgl_up='$tgl_up',
        foto_kegiatan='$fotoup' 
        WHERE id_kegiatan='$id_kegiatan'");
$alrt = mysql_query($sql);
if (!$alrt) {
    echo "<script>alert('Gagal Edit Data !'); history.go(-1);</script>";
} else {
    echo "<script>alert('Data Berhasil di Edit !');</script>";
    echo "<script language='javascript'>window.location = 'kegiatan.php'</script>";
}
} else {
    // Jika gambar gagal diupload, Lakukan : 
    echo "<script>alert('Maaf, Foto kegiatan gagal untuk diupload.');history.go(-1);</script>";
}
} else {
    $sql = ("UPDATE tbl_kegiatan SET 
    nama_kegiatan='$nama_kegiatan',
    ket='$ket',
    tgl_up='$tgl_up'
    WHERE id_kegiatan='$id_kegiatan'");
    $alrt = mysql_query($sql);
    if (!$alrt) {
        echo "<script>alert('Gagal Edit Data !!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Data Berhasil di Edit !');history.go(-2);</script>";
        echo "<script language='javascript'>window.location = 'kegiatan.php'</script>";
    
    }
}

