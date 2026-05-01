<?php
require_once 'koneksi.php';
require_once 'models/Studies.php';
require_once 'models/Level.php';


// ambil data level
$obj_level = new Level();
$rs = $obj_level->index();

// ambil id
$id = $_GET['id'] ?? null;
$obj_studies = new Studies();

if (!empty($id)) {
    $row = $obj_studies->getStudies($id);
} else {
    $row = [];
}

// helper
function val($row, $key)
{
    return isset($row[$key]) ? $row[$key] : '';
}
?>

<div class="container px-5 my-5">
    <h3>Form Studies</h3>

    <form method="POST" action="controller/proses_studies.php">

        <!-- Nama Sekolah -->
        <div class="form-floating mb-3">
            <input class="form-control" name="nama"
                value="<?= val($row, 'nama') ?>"
                type="text" placeholder="Nama Sekolah" required>
            <label>Nama Sekolah</label>
        </div>

        <!-- Level -->
        <div class="form-floating mb-3">
            <select class="form-select" name="idlevel" required>
                <option value="">-- Pilih Level --</option>
                <?php foreach ($rs as $level) {
                    $sel = (val($row, 'idlevel') == $level['id']) ? "selected" : "";
                ?>
                    <option value="<?= $level['id'] ?>" <?= $sel ?>>
                        <?= $level['nama'] ?>
                    </option>
                <?php } ?>
            </select>
            <label>Level Pendidikan</label>
        </div>

        <!-- Keterangan -->
        <div class="form-floating mb-3">
            <input class="form-control" name="keterangan"
                value="<?= val($row, 'keterangan') ?>"
                type="text" placeholder="Keterangan">
            <label>Keterangan</label>
        </div>

        <!-- Tahun Lulus -->
        <div class="form-floating mb-3">
            <input class="form-control" name="tahun_lulus"
                value="<?= val($row, 'tahun_lulus') ?>"
                type="number" placeholder="Tahun Lulus" required>
            <label>Tahun Lulus</label>
        </div>

        <!-- Foto -->
        <div class="form-floating mb-3">
            <input class="form-control" name="foto_sekolah"
                value="<?= val($row, 'foto_sekolah') ?>"
                type="text" placeholder="Foto Sekolah">
            <label>Foto Sekolah</label>
        </div>

        <!-- BUTTON -->
        <div class="text-center">

            <?php if (empty($id)) { ?>
                <button class="btn btn-primary" name="proses" value="simpan">
                    Simpan
                </button>
            <?php } else { ?>
                <button class="btn btn-success" name="proses" value="ubah"><link href="css/bootstrap.min.css" rel="stylesheet">
                    Ubah
                </button>
                <input type="hidden" name="id" value="<?= $id ?>">
            <?php } ?>

            <a href="index.php?hal=mystudies" class="btn btn-info">
                Kembali
            </a>

        </div>

    </form>
</div>