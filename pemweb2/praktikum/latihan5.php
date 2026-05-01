<?php
//membuat variabel (public, private, protected)
class mahasiswa {
    public $nama;
    private $nim;
    protected $prodi;
    public $matkul = "Pemrograman Web";
    public $nilai = 90;

    //member2 konstruktor (wajib public)
    public function __construct($nama, $nim, $prodi) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->matkul = "Pemrograman Web";
        $this->nilai = 90;
    }

    //member3 method (wajib public)
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Prodi: " . $this->prodi . "<br>";
        echo "Matkul: " . $this->matkul . "<br>";
        echo "Nilai: " . $this->nilai . "<br><br>";
    }
}

//membuat objek dari kelas mahasiswa
$mahasiswa1 = new mahasiswa("Rizky", "123456789", "Teknik Informatika", "pemrograman web", 90);
$mahasiswa2 = new mahasiswa("Dewi", "987654321", "Sistem Informasi", "analisis sistem", 85);
$mahasiswa3 = new mahasiswa("Andi", "111111111", "Teknik Elektro", "jaringan komputer", 88);
$mahasiswa4 = new mahasiswa("Siti", "222222222", "Teknik Mesin", "mekanika fluida", 92);
//memangil method untuk menampilkan data mahasiswa ke browser
$mahasiswa1->tampilkanData();
$mahasiswa2->tampilkanData();
$mahasiswa3->tampilkanData();
$mahasiswa4->tampilkanData();
?>