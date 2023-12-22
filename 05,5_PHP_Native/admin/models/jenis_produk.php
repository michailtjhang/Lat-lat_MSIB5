<?php  

class jenis_produk{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataJenis() {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM jenis_produk";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }

    public function getJenis($id) {
        $sql = "SELECT * FROM jenis_produk WHERE id = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }

    public function save($data) {
        $sql = "INSERT INTO jenis_produk (nama) VALUES (?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data) {
        $sql = "UPDATE jenis_produk SET nama = ? WHERE id = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>