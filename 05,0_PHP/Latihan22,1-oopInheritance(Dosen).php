<?php  

require_once 'Latihan22,0-oopInheritance(Person).php';

class Dosen extends person {
    public $nidn;
    public $gelar;

    public function __construct($nama, $gender, $nidn, $gelar) {
        parent::__construct($nama, $gender);

        $this->nidn = $nidn;
        $this->gelar = $gelar;
    }

    public function cetak() {
        parent::cetak();
        echo '<br> NIDN : ' . $this->nidn;
        echo '<br> Gelar : ' . $this->gelar;
        echo '<hr>';
    }
}

?>