<?php  

class produk{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataProduk() {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT p.*, j.nama AS jenis
                FROM produk p
                INNER JOIN jenis_produk j
                ON j.id = p.jenis_produk_id";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }

    public function getProduk($id) {
        $sql = "SELECT p.*, j.nama AS jenis
                FROM produk p
                INNER JOIN jenis_produk j
                ON p.jenis_produk_id = j.id
                WHERE p.id = ?";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }

    public function save($data) {
        $sql = "INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>