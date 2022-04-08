<?php
    include "header.php";
    include "../koneksi.php";
    ?>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <h3><span class="fas fa-user"></span> DATA KEGIATAN | <a href="kegiatan_add.php"><button class=" btn btn-primary"><span class="fas fa-fw fa-plus"></span> Tambah</button></a></h3>
        <hr>
        <div class="card mb-3">
            <div class="card-header ">
               Table Data
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>NAMA KEGIATAN</th>
                                <th width="900">DESKRIPSI</th>
                                <th>TANGGAL</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody> <?php
                            $no = 1;
                            $qry = mysql_query("SELECT * FROM tbl_kegiatan");
                            while ($b = mysql_fetch_array($qry)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $b['nama_kegiatan'] ?></td>
                                    <td><?php echo $b['ket'] ?></td>
                                    <td><?php echo date('d F Y', strtotime($b['tgl_up'])) ?></td>
                                    <td><a href="kegiatan_update.php?id_kegiatan=<?php echo $b['id_kegiatan']; ?>" class=" btn btn-primary"><span class="fas fa-pen"></span> Edit<a> |      
                                        <a onclick="return confirm('Apakah anda yakin ?')" href="kegiatan_dele.php?id_kegiatan=<?php echo $b['id_kegiatan']; ?>"class=" btn btn-danger"><span class="fas fa-trash"></span> Hapus</a>
                                        </td>
                                
                                </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <p class="small text-center text-muted my-5">
            <!-- <em>More table examples coming soon...</em> -->
        </p>

    </div>


    <?php
        include "footer.php"
        ?>
