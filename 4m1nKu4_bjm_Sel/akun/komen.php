<?php
    include "header.php";
    include "../koneksi.php";
    ?>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <h3><span class="fas fa-user"></span> DATA KOMENTAR | </h3>
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
                                <th>NAMA</th>
                                <th>E-MAIL</th>
                                <th>TANGGAL</th>
                                <th>ISI KOMENTAR</th>
                                <th>STATUS KOMENTAR</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody> <?php
                            $no = 1;
                            $qry = mysql_query("SELECT * FROM tbl_komentar");
                            while ($b = mysql_fetch_array($qry)) {
                             $status = $b['stat_aktif'];
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $b['nama'] ?></td>
                                    <td><?php echo $b['email'] ?></td>
                                    <td><?php echo date('d F Y', strtotime($b['date'])) ?></td>
                                    <td><?php echo $b['pesan'] ?></td>
                                    <td><?php 
										 if ($status == 'Y') {
                                             print("<font color='#007BFF'><b>Aktif</b></font>");
                                            ?>
                                            <?php
                                            } elseif ($status == 'N') {
                                                print("<font><b>Non-Aktif</font>") ; 
                                            } 
                                            ?></td>
                                    <td><a href="komen_active.php?id_komen=<?php echo $b['id_komen']; ?>" class=" btn btn-primary"><span class="fas fa-check"></span><a>                                         
                                        <a href="komen_non.php?id_komen=<?php echo $b['id_komen']; ?>" class=" btn btn-dark"><span class="fas fa-ban"></span></a> |      
                                        <a onclick="return confirm('Apakah anda yakin ?')" href="komen_dele.php?id_komen=<?php echo $b['id_komen']; ?>"class=" btn btn-danger"><span class="fas fa-trash"></span></a>
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
