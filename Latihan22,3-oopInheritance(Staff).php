<?php  

require_once 'Latihan22,0-oopInheritance(Person).php';

class Staff extends person{

    public $nip;
    public $divisi;
    public $gaji;

    public function __construct($nama, $gender, $nidn, $divisi, $gaji) {
        parent::__construct($nama, $gender);

        $this->nip = $nidn;
        $this->divisi = $divisi;
        $this->gaji = $gaji;
    }

    public function cetak() {
        parent::cetak();
        
        echo '<br> Nomor NIP : ' . $this->nip;
        echo '<br> Divisi : ' . $this->divisi;
        echo '<br> Gaji : ' . $this->gaji;
        echo '<hr>';

    }
}

?>