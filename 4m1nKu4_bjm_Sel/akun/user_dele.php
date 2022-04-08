<?php
include '../koneksi.php';
$id = $_GET['user_id'];
mysql_query("DELETE from tbl_admin where user_id='$id'");
header("location:user.php");
