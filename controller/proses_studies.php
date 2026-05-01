<?php
require_once '../koneksi.php';
require_once '../models/Studies.php';

$obj = new Studies();

// HAPUS
if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $obj->hapus($id);
}

// redirect balik
header("Location: ../index.php?hal=mystudies");
exit;

// SIMPAN & UPDATE
if(isset($_POST['proses'])){
    $data = [
        $_POST['nama'],
        $_POST['idlevel'],
        $_POST['keterangan'],
        $_POST['tahun_lulus'],
        $_POST['foto_sekolah']
    ];

    if($_POST['proses'] == 'simpan'){
        $obj->simpan($data);
    } else {
        $data[] = $_POST['id'];
        $obj->ubah($data);
    }
}
?>