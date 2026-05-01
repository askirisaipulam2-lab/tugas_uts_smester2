<?php
// membuat variabel untuk menyimpan data mahasiswa
$nama = "Budi";
$nim = "123456";
$jurusan = "Informatika";

// membuat fungsi untuk menampilkan data mahasiswa
function tampilkanData($nama, $nim, $jurusan) {
    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Jurusan: " . $jurusan . "<br>";
}

// memanggil fungsi untuk mencetak data mahasiswa
tampilkanData($nama, $nim, $jurusan)
?>