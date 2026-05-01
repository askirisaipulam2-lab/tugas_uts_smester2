<?php
// 1. ARRAY NUMERIK
$ar_buah = ["jeruk","Mangga","Anggur","Apel"];

// Cetak Array
echo $ar_buah[3];
echo "<hr>";
// tampilkan total buah
$jumlah = count($ar_buah);
echo 'Jumlah Buah;' .$jumlah;
echo '<hr>';

// menampilkan semua buah dengan foreach
foreach ($ar_buah as $value) {
    echo "<br>$value";
}

echo "<hr>";
// 2.ARRAY ASOSIATIF
echo "<hr>";
$ar_hewan = [10=>'kucing', 'bebek', 20=>'ayam', 'sapi'];
// menampilkan semua hewan dengan foreach
foreach ($ar_hewan as $id => $value) {
    echo "<br>$id $value";
}

echo '<hr>';
$a1=['Nama'=>'Rizky', 'Umur'=>19, 'Alamat'=>'Depok'];
$a2=['Nama'=>'Dina', 'Umur'=>20, 'Alamat'=>'Jakarta'];
$a3=['Nama'=>'Eka', 'Umur'=>21, 'Alamat'=>'Bogor'];

$ar_Mahasiswa = [$a1, $a2, $a3]; //ini pendefinisian array multidimensi...

//nampilin
foreach ($ar_Mahasiswa as $Mahasiswa) {
    echo '<br> Nama: ' . $Mahasiswa['Nama'];
    echo '<br> Umur: ' . $Mahasiswa['Umur'];
    echo '<br> Alamat: ' . $Mahasiswa['Alamat'];
    echo '<hr>';    
}
?>

<!-- Bulan -->
 Bulan:
 <select name="bln">
    <option value="">Bulan</option>
    <?php
    $bln = ["Januari", "Febuari", "Maret", "April", "April", "Mei", "Juni", "Juli", "Agustus",
    "September", "Oktober", "November", "Desember"];

    foreach ($bln as $id => $value) {
        echo "<option value='$id'>$value</option>";
    }
    ?>
 </select>