<?php
session_start();
session_destroy();
echo "<script language='javascript'>('Anda berhasil Keluar'); document.location='../../index.php';</script>";
