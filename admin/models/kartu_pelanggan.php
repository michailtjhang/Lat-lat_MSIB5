<?php  

class kartu_pelanggan{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataKartu() {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM kartu";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }
}

?>