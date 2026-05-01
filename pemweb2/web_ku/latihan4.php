<!-- ARRAY -->
<?php
$ar_buah = ['Pepaya','Mangga','Pisang','Jambu'];

// ganti sebuah element
$ar_buah[2] = 'Jeruk';

// hapus sebuah element
unset($ar_buah[3]);

// nambah
$ar_buah[] = 'Alpukat';
$ar_buah[] = 'Belewah';

// cetak data saja tidak menggunakan array
foreach($ar_buah as $buah){
    echo '<br/>Buah '.$buah;
}
echo '<hr>';
echo '<br/>=====cetak key dan value=====<br/>';
foreach($ar_buah as $id => $buah) {
    echo 'Buah dengan ' . $id . '=' . $buah . '<br/>';
}