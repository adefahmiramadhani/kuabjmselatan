<?php
    include "header.php";
    include "../koneksi.php";
    $qry = mysql_query("SELECT * FROM tbl_rekom_nikah ORDER BY tgl_buat DESC");
    ?>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <h3><span class="fas fa-folder"></span> SURAT REKOMENDASI MENIKAH | <a href="rekom_nikah_add.php"><button class=" btn btn-primary"><span class="fas fa-fw fa-plus"></span> Buat Surat</button></a></h3>
        <hr>
        <div class="card mb-3">
            <div class="card-header ">
               Table Data
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm" id=dataTable width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>Tanggal Input</th>
                                <th>Monor Surat</th>
                                <th>Yang Mengajukan</th>
                                <th>Calon Pasangan</th>
                                <th>Cetak</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($b = mysql_fetch_array($qry)) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?php echo date('d F Y', strtotime($b['tgl_buat'])) ?></td>
                                    <td>B.<?= $b['no_surat'] ?>/Kua.17.01-5/Pw.01/<?php echo date('m/Y'); ?></td>
                                    <td><?= $b['nm_p'] ?></td>
                                    <td><?= $b['nm_c'] ?></td>
                                    <td><a  href="rekom_nikah_cetak.php?id_rekom=<?= $b['id_rekom']; ?>"  target="popup" onclick="window.open('rekom_nikah_cetak.php?id_rekom=<?= $b['id_rekom']; ?>','name','toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=100,width=900,height=700')" class="btn btn-primary"><span class="fas fa-print"></span></a></td>
                                    <td>
                                        <a href="rekom_nikah_update.php?id_rekom=<?= $b['id_rekom']; ?>"class=" btn btn-primary">Ubah Data</a>
                                        <a onclick="return confirm('Apakah anda yakin ?')" href="rekom_nikah_dele.php?id_rekom=<?= $b['id_rekom']; ?>"class=" btn btn-danger" >Hapus</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="card-footer small text-muted">NB : Silahkkan Klik Detail Untuk Melihat Data Langkap !!</div> -->
        </div>

        <p class="small text-center text-muted my-5">
            <!-- <em>More table examples coming soon...</em> -->
        </p>

    </div>




        <?php
        include "footer.php"
        ?>
   