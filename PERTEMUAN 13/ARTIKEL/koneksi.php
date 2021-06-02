<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "artikel_db";
//lakukan koneksi dengan mysql
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass);
mysqli_select_db($koneksi, "artikel_db");
date_default_timezone_set('Asia/Jakarta');
?>
