<?php
class Users {
    // member1: variabel koneksi
    private $koneksi;

    // member2: konstruktor
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    // 🔐 fungsi login
    public function cekLogin($data) {
        $sql = "SELECT * FROM users 
                WHERE username = ? AND password = SHA1(MD5(?))";
        
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch(PDO::FETCH_ASSOC);
        return $rs;
    }

    // 🔍 ambil data user berdasarkan id
    public function getUser($id) {
        $sql = "SELECT * FROM users WHERE id = ?";
        
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch(PDO::FETCH_ASSOC);
        return $rs;
    }

    // ➕ (optional) tambah user
    public function simpan($data){
        $sql = "INSERT INTO users (username,password) VALUES (?,SHA1(MD5(?)))";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
?>