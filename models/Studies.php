<?php
class Studies {
    private $koneksi;

    public function __construct(){
    require_once __DIR__ . '/../koneksi.php'; // 🔥 WAJIB
    global $dbh;

    if(!$dbh){
        die("Koneksi database gagal");
    }

    $this->koneksi = $dbh;
    }

    public function index(){
        $sql = "SELECT studies.*, level.nama AS nama_level
                FROM studies
                JOIN level ON studies.idlevel = level.id";
        $rs = $this->koneksi->query($sql);
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getStudies($id){
        $sql = "SELECT * FROM studies WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        return $ps->fetch(PDO::FETCH_ASSOC);
    }

    public function simpan($data){
        $sql = "INSERT INTO studies (nama,idlevel,keterangan,tahun_lulus,foto_sekolah)
                VALUES (?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE studies SET
                nama=?, idlevel=?, keterangan=?, tahun_lulus=?, foto_sekolah=?
                WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM studies WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
?>