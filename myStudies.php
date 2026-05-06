<?php
require_once 'models/Studies.php';

$obj = new Studies();
$data_studies = $obj->index();
?>

<div class="container mt-3">

    <h3>Data Studies</h3>
    <hr>

    <!-- 🔥 BUTTON TAMBAH -->
    <?php if(isset($_SESSION['user'])){ ?>
        <a href="index.php?hal=form_studies" class="btn btn-primary mb-3">
            <i class="bi bi-plus-circle"></i> Tambah
        </a>
    <?php } ?>

    <div class="table-responsive">

        <table class="table table-striped table-hover align-middle">

            <thead class="table-primary">
                <tr>
                    <th>NO</th>
                    <th>NAMA SEKOLAH</th>
                    <th>LEVEL</th>
                    <th>TAHUN</th>
                    <th>FOTO</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>

                <?php $no=1; foreach($data_studies as $row): ?>

                <tr>

                    <td><?= $no++ ?></td>

                    <td><?= $row['nama'] ?></td>

                    <td>
                        <span class="badge bg-primary">
                            <?= $row['nama_level'] ?>
                        </span>
                    </td>

                    <td><?= $row['tahun_lulus'] ?></td>

                    <td>
                        <?php if(!empty($row['foto_sekolah'])){ ?>
                            <img src="images/<?= $row['foto_sekolah'] ?>" 
                                 width="70"
                                 class="rounded shadow-sm">
                        <?php } else { ?>
                            <img src="images/default.png" 
                                 width="70"
                                 class="rounded shadow-sm">
                        <?php } ?>
                    </td>

                    <!-- 🔥 ACTION -->
                    <td>

                        <?php if(isset($_SESSION['user'])){ ?>

                            <!-- 👁 LIHAT -->
                            <a href="index.php?hal=detail_studies&id=<?= $row['id'] ?>" 
                               class="btn btn-info btn-sm">
                               <i class="bi bi-eye"></i>
                            </a>

                            <!-- ✏️ EDIT -->
                            <a href="index.php?hal=form_studies&id=<?= $row['id'] ?>" 
                               class="btn btn-warning btn-sm">
                               <i class="bi bi-pencil"></i>
                            </a>

                            <!-- 🗑 HAPUS -->
                            <a href="controller/proses_studies.php?hapus=<?= $row['id'] ?>" 
                               onclick="return confirm('Yakin hapus data?')" 
                               class="btn btn-danger btn-sm">
                               <i class="bi bi-trash"></i>
                            </a>

                        <?php } else { ?>

                            <!-- 🔒 BELUM LOGIN -->
                            <span class="text-secondary">
                                <i class="bi bi-lock-fill"></i>
                            </span>

                        <?php } ?>

                    </td>

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>