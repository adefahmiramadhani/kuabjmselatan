
<?php
include "../koneksi.php";
$id = mysql_real_escape_string($_GET['id_surat']);
$det = mysql_query("SELECT * FROM tbl_ket_belum_nikah where id_surat='$id'") or die(mysql_error());
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
        }
        p.p1{ 
        margin: 50px;
        }
        p{ 
        font-size:21px;
        }
        td{ 
        font-size:21px;
        vertical-align: top;
        }
        div.a{ 
        text-indent: 50px;
        }
    </style>

</head>
     <body onLoad="buka_popup();" style="background-image:url('../img/watermark1.png'); background-size:300px 30px;">
        <div class="container">
            <div align="center"><img src="../img/kop.png" alt="" width="90%"></div>
            <br>
            <div>
                <div >
                        <h3  align="center"><b><u>SURAT KETERANGAN BELUM MENIKAH</u></b></h3>
                        <h4  align="center">Nomer : <?= $d['no_surat']; ?> </h4>
                        <p class="p1">Berdasarkan Surat Keterangan Yang Dibuat Oleh :<br>
                            Lurah : <?= $d['lurah']; ?> <br>
                            Nomer/Tanggal : <?= $d['no_rujukan']; ?> / <?= $d['tgl_rujukan']; ?>
                        </p>
                        <div class="a">
                            <p>Kepala Kantor Urusan Agama Kecamatan Banjarmasin Selatan Kota Banjarmasin, <br>  dengan ini menerangkan bahwa :</p>
                        </div>
                        <table>
                            <tr>
                                <td width="250">Nama</td>
                                <td width="20">:</td>
                                <td><b><?= $d['nama']; ?><b></td>
                            </tr>
                            <tr>
                                <td width="250">Bin / Binti</td>
                                <td width="20">:</td>
                                <td><?= $d['bin']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Tempat/Tanggal Lahir</td>
                                <td width="20">:</td>
                                <td><?= $d['ttl']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Warganegara/Agama</td>
                                <td width="20">:</td>
                                <td><?= $d['warga_agama']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Jenis Kelamin</td>
                                <td width="20">:</td>
                                <td><?= $d['jk']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Pekerjaan</td>
                                <td width="20">:</td>
                                <td><?= $d['kerja']; ?></td>
                            </tr>
                            <tr>
                                <td width="250">Alamat</td>
                                <td width="20">:</td>
                                <td><?= $d['alamat']; ?></td>
                            </tr>
                        </table>
                    <br>
                        <div class="a">
                            <p>Adalah yang bersangkutan benar  <b>Belum Pernah Menikah/Kawin</b>, dan surat <br> keterangan ini diberikan untuk kepentingan :</p>
                        </div>
                       <center><p><b>"<?= $d['perlu']; ?>"</b></p></Center>
                        <div class="a">
                            <p>Demikian dibuat dan agar dapat dipergunakan yang bersangkutan sebagaimana mestinya.</p>
                        </div>
                        <br>
                    <table  width="100%" >
                        <tr>
                        <td width="650"></td>
                            <td>Banjarmasin, <?php echo date('d-m-Y', strtotime($d['tgl_buat'])) ?><br>
                                Kepala, <br>
                                <br>
                                <br>
                                <br>
                                <b><u>Drs.H.AZIZ NAZAR</u><br>
                                NIP.19670818 199403 1003 </b>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <p> Keterangan : <br>
                    1. Surat Keterangan ini hanya berlaku 3 (tiga) bulan sejak tanggal dikeluarkan. <br>
                    2. Surat Keterangan ini tidak berlaku apabila yang bersangkutan telah kawin.
                    </p>
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