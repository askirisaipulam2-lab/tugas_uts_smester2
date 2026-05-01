<?php
require_once 'koneksi.php';
require_once 'models/Studies.php';
require_once 'models/Level.php';

$id = $_GET['id'] ?? null;

$obj = new Studies();
$row = $obj->getStudies($id);

$obj_level = new Level();
$level = $obj_level->getLevel($row['idlevel']); // ambil nama level
?>

<div class="container mt-4">
    <div class="card p-4">
        <div class="row">

            <!-- GAMBAR -->
            <div class="col-md-4 text-center">
                <?php if (!empty($row['foto_sekolah'])) { ?>
                    <img src="upload/<?= $row['foto_sekolah'] ?>" 
                         class="img-fluid" 
                         style="max-height:250px;">
                <?php } else { ?>
                    <img src="upload/default.png" 
                         class="img-fluid" 
                         style="max-height:250px;">
                <?php } ?>
            </div>

            <!-- DETAIL -->
            <div class="col-md-8">
                <h4 class="mb-3"><?= $row['nama'] ?></h4>

                <p><strong>Level Pendidikan:</strong> <?= $level['nama'] ?></p>
                <p><strong>Keterangan:</strong> <?= $row['keterangan'] ?></p>
                <p><strong>Tahun Lulus:</strong> <?= $row['tahun_lulus'] ?></p>

                <a href="index.php?hal=mystudies" class="btn btn-primary mt-2">
                    Kembali
                </a>
            </div>

        </div>
    </div>
</div>