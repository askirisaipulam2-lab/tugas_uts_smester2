<?php
//deklarasi & inisialisali variabel
$nama_siswa = "Askiri Saipul Alam";
$berat_badan = 56;
$umur = 18;
//cetak dengan concate
echo "Nama Siswa: ".$nama_siswa;
?>
<br>
<b>Data Siswa</b>
<ul>
    <li>Nama Siswa: <?= $nama_siswa ?></li>
    <li>Umur: <?=$umur ?> Tahun</li>
    <li>Berat Badan: <?=$berat_badan ?> kg</li>
</ul>