<?php
// Belajar php

#belajar laravel

/* ini komentar 1
ini komentar 2
ini komentar 3 */

// cetak
echo 'Hello word';
echo '<br>';
echo 'Belajar PHP';

echo '<hr>';

// variabel
$nama = 'Wahyu';
$umur = 20;
$alamat = 'Depok';
$berat = 70.5;

// cetak variabel
echo 'Nama Saya ' .$nama.'<br>';
echo $umur.'<br>';
echo 'Nama Saya ' .$nama. ' Alamat Di ' .$alamat. ' Umur ' .$umur. ' Tahun Berat Badan Saya ' .$berat;
echo '<hr>';

// variabel sistem
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'];
echo '<hr>';

// variabel konstanta 
$jari2 = 10;
define('PHI', 3.14);
$luas = PHI * $jari2 * $jari2;
echo 'Luas lingkaran dengan jari-jari ' .$jari2. ' = ' .$luas;
echo '<hr>';

// jika nilai >5 maka bagus
// selain itu buruk
$nilai = 7;
if ($nilai > 5) {
    echo 'Bagus';
} else {
    echo 'Buruk';
}
echo '<hr>';

// ternery
$nilaiku = 8; //ubah nilainya
echo $nilaiku > 5 ? ' Bagus' : ' Buruk' ;
echo '<hr>';

// IF Multi kondisi
// JIKA UMUR LEBIH 20 TAHUN S.D 50 TAHUN, ANDA DAPAT MENGENDARAI MOBIL
// JIKA UMUR LEBIH 17 TAHUN, ANDA DAPAT MENGENDARAI MOTOR
// JIKA UMUR LEBIHH 10 TAHUN, ANDA DAPAT MENGENDARAI SPEDA
$umurku = 80; // ubah umur
if ($umurku > 20 && $umurku <= 50) {
    echo 'Anda dapat mengendarai mobil';
} elseif ($umurku >17) {
    echo 'Anda dapat mengendarai motor';
} elseif ($umurku >10) {
    echo 'Anda dapat mengendarai speda';
}else {
    echo 'Anda belom bisa mengendarai kendaraan';
}
echo '<hr>';

//  switch case
$angka = 70;
switch ($angka) {
    case $angka <= 70:
        echo 'Angka Cukup';
        break;
    case $angka <= 80:
        echo 'Angka Memuaskan';
        break;
    case $angka <= 90:
        echo 'Angka sangat memuaskan';
        break;
    default:
    echo 'angka tidak valid';
}
 
?>