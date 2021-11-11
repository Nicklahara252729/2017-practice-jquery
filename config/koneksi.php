<?php
$server = "localhost";
$username = "root";
$password = "satusampe250599";
$database = "2017_web_native_jquery";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
