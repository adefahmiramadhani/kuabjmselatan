
<?php
include "../koneksi.php";
$id = mysql_real_escape_string($_GET['id_rekom']);
$det = mysql_query("SELECT * FROM tbl_rekom_nikah where id_rekom='$id'") or die(mysql_error());
while ($d = mysql_fetch_array($det)) {
?>
   <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print</title>

    <!-- Custom fonts for this template-->
    <link href="../css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../css/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript" src="css/ckeditor/ckeditor.js"></script>
    <style>   
        .container{ 
        font-family: "Times New Roman", Times, serif;
        margin: auto;
        /* font-weight: bold; */
        }
        .row{ 
        font-size:20px;
        }
        p.p1{ 
        }
        p{ 
        font-size:20px;
        }
        td{ 
        font-size:18px;
        vertical-align: top;
        height: 10px;
        }
        div.a{ 
        text-indent: 40px;
        }
    </style>

</head>
     <body onLoad="buka_popup();"style="background-image:url('../img/watermark1.png'); background-size:300px 30px;">
        <div class="container">
            <div align="center"><img src="../img/kop.png" alt="" width="100%"></div>
            <div>
                <div >
                <!-- <div class="card-body" style="background-image:url('../img/watermark1.png'); background-size:700px 700px;  background-position: center; background-repeat: no-repeat;"> -->
                <div class="row">
                        <div class="col-md-2">
                            Nomer
                        </div>
                        <div class="col-md-6">
                            : B.<?= $d['no_surat']; ?>/Kua.17.01-5/Pw.01/<?php echo date('m/Y'); ?>
                        </div>
                        <div class="col-md-4">Banjarmasin,
                         <?php echo date('d F Y', strtotime($d['tgl_buat'])) ?>
                        </div>
                        <div class="col-md-2">
                            Lampiran
                        </div>
                        <div class="col-md-10">
                            : 1 (satu) berkas
                        </div>
                        <div class="col-md-2">
                            Perihal
                        </div>
                        <div class="col-md-10">
                            : Rekomendasi nikah
                        </div>
                </div>
                <br>
                        <p class="p1">Kepada Yth,<br>
                        Kepala KUA Kecamatan <?= $d['tujuan']; ?> <br>
                        di <br>
                        <?= $d['tujuan_prov']; ?>
                        </p>
                        <div class="a">
                            <p>Berdasarkan Peraturan Menteri Agama Nomor 20 Tahun 2019 tentang Pencatatan Pernikahan, telah datang ke kantor kami seorang <?= $d['jk_p']; ?>:</p>
                        </div>
                        <table>
                            <tr>
                                <td width="250">Nama</td>
                                <td width="20">:</td>
                                <td><b><?= $d['nm_p']; ?></b></td>
                            </tr>
                            <tr>
                                <td width="250">Bin/Binti</td>
                                <td width="20">:</td>
                                <td><?= $d['bin_p']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">NIK</td>
                                <td width="20">:</td>
                                <td><?= $d['nik_p']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Tempat/Tanggal Lahir</td>
                                <td width="20">:</td>
                                <td><?= $d['tmpt_lahir_p']; ?>, <?php echo date('d F Y', strtotime($d['tgl_lahir_p'])) ?></td>
                            </tr>
                            <tr>
                                <td width="250">Jenis Kelamin</td>
                                <td width="20">:</td>
                                <td><?= $d['jk_p']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Warganegara</td>
                                <td width="20">:</td>
                                <td>INDONESIA</td>
                            </tr>
                            <tr>
                                <td width="250">Agama</td>
                                <td width="20">:</td>
                                <td>ISLAM</td>
                            </tr>
                            <tr>
                                <td width="250">Pekerjaan</td>
                                <td width="20">:</td>
                                <td><?= $d['kerja_p']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Alamat</td>
                                <td width="20">:</td>
                                <td><?= $d['alamat_p']; ?> KEC.BANJARMASIN SELATAN KOTA BANJARMASIN</td>
                            </tr>
                            <tr>
                                <td width="250">Status Perkawinan</td>
                                <td width="20">:</td>
                                <td><?= $d['stat_p']; ?></td>
                            </tr>
                        </table>
                        <br>
                        <p>Akan melaksanakan nikah di wilayah Saudara dengan seorang <?= $d['jk_c']; ?>:</p>
                        <table>
                            <tr>
                                <td width="250">Nama</td>
                                <td width="20">:</td>
                                <td><b><?= $d['nm_c']; ?></b></td>
                            </tr>
                            <tr>
                                <td width="250">Bin/Binti</td>
                                <td width="20">:</td>
                                <td><?= $d['bin_c']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">NIK</td>
                                <td width="20">:</td>
                                <td><?= $d['nik_c']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Tempat/Tanggal Lahir</td>
                                <td width="20">:</td>
                                <td><?= $d['tmpt_lahir_c']; ?>, <?php echo date('d F Y', strtotime($d['tgl_lahir_c'])) ?></td>
                            </tr>
                            <tr>
                                <td width="250">Jenis Kelamin</td>
                                <td width="20">:</td>
                                <td><?= $d['jk_c']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Warganegara</td>
                                <td width="20">:</td>
                                <td>INDONESIA</td>
                            </tr>
                            <tr>
                                <td width="250">Agama</td>
                                <td width="20">:</td>
                                <td>ISLAM</td>
                            </tr>
                            <tr>
                                <td width="250">Pekerjaan</td>
                                <td width="20">:</td>
                                <td><?= $d['kerja_c']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Alamat</td>
                                <td width="20">:</td>
                                <td><?= $d['alamat_c']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Status Perkawinan</td>
                                <td width="20">:</td>
                                <td><?= $d['stat_c']; ?></td>
                            </tr>
                        </table>
                        <p></p>
                        <p>Berdasarkan persyaratan yang telah ditentukan dalam PMA Nomor 20 Tahun 2019 kami lampirkan persyaratan permohonan pendaftaran kehendak pernikahan.</p>
                    <table  width="100%" >
                        <tr>
                        <td width="550"></td>
                            <td>Wasalam,<br>
                            Kepala KUA Kecamatan BANJARMASIN SELATAN <br>
                                <br>
                                <br>
                                <br>
                                <b>Drs.H.AZIZ NAZAR</b>
                                <!-- NIP.19670818 199403 1003 </b> -->
                            </td>
                        </tr>
                    </table>
                </div>
                  </div>
            </div>
        </div>
    </body>

    </html>
    <script>
        window.print();
    </script>
    <?php
}

    ?>