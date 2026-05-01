<?php
require_once '../koneksi.php';
require_once '../models/Level.php';

$obj = new Level();

// HAPUS
if(isset($_GET['hapus'])){
    $obj->hapus($_GET['hapus']);
    header("Location: ../index.php?hal=level");
    exit;
}

// SIMPAN / UPDATE
if(isset($_POST['proses'])){
    
    if($_POST['proses'] == 'simpan'){
        $obj->simpan([$_POST['nama']]);
    } else {
        $obj->ubah([$_POST['nama'], $_POST['id']]);
    }

    header("Location: ../index.php?hal=level");
    exit;
}
?>