<?php  

require 'Latihan18-oop2(Gempa).php';

$g1 = new Gempa('Bandung', '3.6');
$g2 = new Gempa('Surabaya', '5.3');
$g3 = new Gempa('Makasar', '1.4');
$g4 = new Gempa('Malang', '6.2');


$g1->cetak();
$g2->cetak();
$g3->cetak();
$g4->cetak();

?>