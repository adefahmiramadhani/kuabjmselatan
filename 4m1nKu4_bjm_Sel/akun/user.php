<?php
    include "header.php";
    include "../koneksi.php";
    ?>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <h3><span class="fas fa-user"></span> DATA USER | <a href="user_add.php"><button class=" btn btn-primary"><span class="fas fa-fw fa-plus"></span> Tambah User</button></a> </h3>
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
                                <th>ALAMAT</th>
                                <th>USERNAME</th>
                                <th>PASSWORD</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody> <?php
                            $no = 1;
                            $qry = mysql_query("SELECT * FROM tbl_admin WHERE type='user'");
                            while ($b = mysql_fetch_array($qry)) {
                             $status = $b['status_aktif'];
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $b['nama'] ?></td>
                                    <td><?php echo $b['email'] ?></td>
                                    <td><?php echo $b['alamat'] ?></td>
                                    <td><?php echo $b['user'] ?></td>
                                    <td><?php echo $b['pass'] ?> </td>  
                                    <td><?php 
										 if ($status == 'Y') {
                                             print("<font color='#007BFF'><b>Aktif</b></font>");
                                            ?>
                                            <?php
                                            } elseif ($status == 'N') {
                                                print("<font><b>Non-Aktif</font>") ; 
                                            } 
                                            ?></td>
                                    <td><a href="user_active.php?user_id=<?php echo $b['user_id']; ?>" class=" btn btn-primary"><span class="fas fa-check"></span><a>                                         
                                        <a href="user_non.php?user_id=<?php echo $b['user_id']; ?>" class=" btn btn-dark"><span class="fas fa-ban"></span></a> |      
                                        <a href="user_edit.php?user_id=<?php echo $b['user_id']; ?>" class=" btn btn-success">Edit Pass</a> |      
                                        <a onclick="return confirm('Apakah anda yakin ?')" href="user_dele.php?user_id=<?php echo $b['user_id']; ?>"class=" btn btn-danger"><span class="fas fa-trash"></span></a>
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
