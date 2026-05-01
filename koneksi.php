<?php
$host = "localhost";
$dbname = "db_portofolio";
$user = "root";
$pass = "";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    // aktifkan error mode
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>