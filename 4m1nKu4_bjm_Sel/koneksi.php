<?php
$servername = "localhost";
$user		= "root";
$pasword	= "";
$db			= "surat_kua_db";

$koneksi = mysql_connect($servername, $user, $pasword)
	or die(' Eror 404 -Gagal Terkoneksi' . mysql_error());

$database = mysql_select_db($db)
	or die('Gagal Terhubung ke Database' . mysql_error());
