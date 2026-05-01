<?php
include '../koneksi.php';

$data = $conn->query("
SELECT studies.*, level.nama as level
FROM studies
JOIN level ON studies.idlevel = level.id
");
?>

<a href="form_studies.php" class="btn btn-primary mb-2">Tambah</a>

<table class="table table-bordered">
<tr>
  <th>No</th><th>Nama</th><th>Level</th><th>Aksi</th>
</tr>

<?php $no=1; while($row=$data->fetch_assoc()): ?>
<tr>
  <td><?= $no++ ?></td>
  <td><?= $row['nama'] ?></td>
  <td><?= $row['level'] ?></td>
  <td>
    <a href="form_studies.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="proses_studies.php?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
  </td>
</tr>
<?php endwhile; ?>
</table>