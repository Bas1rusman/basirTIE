<?php
$host = "localhost:8111";
$username = "root";
$password = "";
$database = "dbperpus_e";
$koneksi = mysqli_connect($host, $username, $password, $database);
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}
?>