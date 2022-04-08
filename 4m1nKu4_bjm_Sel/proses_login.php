<?php
    include ("koneksi.php");
    //date_default_timezone_set('Banjarmasin');
    
    session_start();
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $_SESSION['myuser'] = $user;
    $_SESSION['mypass'] = $pass;
    
    $user = mysql_real_escape_string($user);
    $pass = mysql_real_escape_string($pass);
    
    if (empty($user) && empty($pass)) {
        header('location:proses_login.php?error1');
        break;
    } else if (empty($user)) {
        header('location:proses_login.php?error=2');
        break;
    } else if (empty($pass)) {
        header('location:proses_login.php?error=3');
        break;
    }
    
    $q = mysql_query("SELECT * FROM tbl_admin WHERE user='$user' AND pass='$pass'");
    //$row = mysql_fetch_array ($q);
    if(mysql_num_rows($q) == 0){
            echo '<script language="javascript">alert("Login Gagal ! user & pass Salah?"); document.location="login.php";</script>';
    }else if (mysql_num_rows($q) == 1) {
        $row = mysql_fetch_array ($q);
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['user'] = $user;
        $_SESSION['type'] = $row['type'];
        // $_SESSION['gambar'] = $row['gambar'];	
    
                if($row['status_aktif']=="N"){
                echo '<script language="javascript">alert("Oops! User Tidak Aktif. Tunggu Konfirmasi Admin"); document.location="index.php";</script>';
                }else if($row['type']=="admin"){
                    //header("location:admin/index.php");
                    echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="akun/index.php";</script>';
                    
                }else if(($row['type']=="user") || ($row['type']=="")){
                    //	header('location:user/index_user.php');
                    echo '<script language="javascript">alert("Anda berhasil Login"); document.location="user/index.php";</script>';

                }
    
        //header('location:admin/index_user.php');
    
     }else {
        header('location:proses_login.php?error=4');
    }
    ?>