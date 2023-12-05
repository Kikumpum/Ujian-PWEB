<?php
$host = "localhost"; // Ganti sesuai dengan host Anda
$user = "root"; // Ganti sesuai dengan username Anda
$password = ""; // Ganti sesuai dengan password Anda
$database = "crud_app"; // Ganti sesuai dengan nama database Anda

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
