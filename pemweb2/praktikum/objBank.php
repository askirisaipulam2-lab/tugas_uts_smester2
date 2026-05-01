<?php
require 'Bank.php';

// ciptakan object
$n1 = new Bank('001','Siti',5000000);
$n2 = new Bank('002','Andi',7000000);
$n3 = new Bank('003','Dede',3000000);
$n4 = new Bank('004','Didin',1000000);

//panggil fungsi2
$n1->setor(4000000);
$n3->setor(1000000);
$n1->ambil(6000000);
$n2->ambil(2000000);
echo '<h3 align="center">'.Bank::BANK.'</h3>';
$n1->cetak();
$n2->cetak();
$n3->cetak();
echo 'Jumlah Nasabah :'.Bank::$jml.' orang';