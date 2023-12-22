<?php  

require_once 'Latihan22,0-oopInheritance(Person).php';

class Mahasiswa extends person {

    public $semester;
    public $jurusan;

    public function __construct($nama, $gender, $semester, $jurusan) {
        parent::__construct($nama, $gender);

        $this->semester = $semester;
        $this->jurusan = $jurusan;
    }

    public function cetak() {
        parent::cetak();
        
        echo '<br> Semester : ' . $this->semester;
        echo '<br> Jurusan : ' . $this->jurusan;
        echo '<hr>';
    }
}

?>