<?php
    include "header.php";
    include "../koneksi.php";
    $qry = mysql_query("SELECT * FROM tbl_ket_belum_nikah");
    ?>

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <h3><span class="fas fa-folder"></span> SURAT KETERANGAN BELUM MENIKAH | <a href="ket_belum_nikah_add.php"><button class=" btn btn-primary"><span class="fas fa-fw fa-plus"></span> Buat Surat</button></a></h3>
        <hr>
        <div class="card mb-3">
            <div class="card-header ">
               Table Data
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm" id=dataTable width="100%" cellspacing="0">
                        <thead>
                            <tr>z
                                <th>No </th>
                                <th>Nomer Surat</th>
                                <th>Nama Lengkap</th>
                                <th>Cetak</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($b = mysql_fetch_array($qry)) {
                                
                            ?>
                            <script>
                                    function myFunction() {
                                 window.open("ket_belum_nikah_cetak.php?id_surat=<?= $b['id_surat']?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=100,width=900,height=700");    
                                    }
                            </script>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $b['no_surat'] ?></td>
                                    <td><?= $b['nama'] ?></td>
                                    <td><a  href="ket_belum_nikah_cetak.php?id_surat=<?= $b['id_surat']; ?>"  target="popup" onclick="window.open('ket_belum_nikah_cetak.php?id_surat=<?= $b['id_surat']; ?>','name','toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=100,width=900,height=700')" class="btn btn-primary"><span class="fas fa-print"></span></a></td>
                                    <td>
                                        <a href="ket_belum_nikah_update.php?id_surat=<?= $b['id_surat']; ?>"class=" btn btn-primary">Ubah Data</a>
                                        <a onclick="return confirm('Apakah anda yakin ?')" href="ket_belum_nikah_dele.php?id_surat=<?= $b['id_surat']; ?>"class=" btn btn-danger" >Hapus</a></td>
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
   