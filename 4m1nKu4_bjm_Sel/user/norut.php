<?php
// include "../koneksi.php";
// $hasil = mysql_query("SELECT max(kd_barang) as maxKode FROM inventaris");
// $data = mysql_fetch_array($hasil);
// $kodeBarang = $data['maxKode'];

// // mengambil angka atau bilangan dalam kode anggota terbesar,
// // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// // misal 'BRG001', akan diambil '001'
// // setelah substring bilangan diambil lantas dicasting menjadi integer
// $noUrut = (int) substr($kodeBarang, 3, 3);

// // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
// $noUrut++;

// // membentuk kode anggota baru
// // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// // misal sprintf("%03s", 12); maka akan dihasilkan '012'
// // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
// $char = "INV-";
// $kodeBarang = $char . sprintf("%03s", $noUrut);
function kdauto($tabel, $inisial)
{
    $struktur   = mysql_query("SELECT * FROM $tabel");
    $field      = mysql_field_name($struktur, 0);
    $panjang    = mysql_field_len($struktur, 0);
    $qry  = mysql_query("SELECT max(" . $field . ") FROM " . $tabel);
    $row  = mysql_fetch_array($qry);
    if ($row[0] == "") {
        $angka = 0;
    } else {
        $angka = substr($row[0], strlen($inisial));
    }
    $angka++;
    $angka      = strval($angka);
    $tmp  = "";
    for ($i = 1; $i <= ($panjang - strlen($inisial) - strlen($angka)); $i++) {
        $tmp = $tmp . "0";
    }
    return $inisial . $tmp . $angka;
}
