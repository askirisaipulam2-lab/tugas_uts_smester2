<?php
$conn = new mysqli("localhost", "root", "", "db_mahasiswa");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>