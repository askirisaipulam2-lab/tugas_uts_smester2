<?php
include '../config/koneksi.php';

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama_sekolah'];
    $level = $_POST['level'];
    $ket = $_POST['keterangan'];
    $tahun = $_POST['tahun_lulus'];

    // upload foto (opsional)
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    if ($foto != "") {
        move_uploaded_file($tmp, "../upload/" . $foto);

        $query = "UPDATE studies SET 
                    nama_sekolah='$nama',
                    level='$level',
                    keterangan='$ket',
                    tahun_lulus='$tahun',
                    foto='$foto'
                  WHERE id='$id'";
    } else {
        $query = "UPDATE studies SET 
                    nama_sekolah='$nama',
                    level='$level',
                    keterangan='$ket',
                    tahun_lulus='$tahun'
                  WHERE id='$id'";
    }

    mysqli_query($koneksi, $query);

    header("Location: ../studies.php");
}