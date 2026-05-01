<!-- FORM -->
<form method="POST">
    Nama: <input type="text" name="nama"  />
    <br/>Nilai: <input type="text" name="nilai" />
    <br/> <input type="submit" name="proses" />
</form>
<?php
// tangkap request form
$siswa = $_POST['nama'];
$nilai = $_POST['nilai'];
$tombol = $_REQUEST['proses'];
$ket = ($nilai >= 70) ? 'Lulus' : 'Tidak lulus';
// cetak jika sudah submit
if(isset($tombol)){
?>
Nama: <?= $siswa ?>
<br/>Nilai: <?=$nilai ?>
<br/>Keterangan: <?=$ket ?>
<?php } ?>