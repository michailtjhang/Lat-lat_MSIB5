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
}

?>