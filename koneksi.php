<?php
$host     = "localhost";   
$username = "root";         
$password = "";             
$database = "smk2";  

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Opsional: tampilkan pesan kalau koneksi sukses
// echo "Koneksi berhasil!";
?>
