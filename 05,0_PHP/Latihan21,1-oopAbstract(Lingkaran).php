<?php  

require_once 'Latihan21,0-oopAbstract(Abstract2).php';

class Lingkaran extends Bentuk2D {

    public $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function keliling() {
        echo "Lingkaran ";
    }

    public function luasBidang() {
        $luas = 3.14 * $this->jari2 * $this->jari2;
        
        return $luas;
    }
}

?>