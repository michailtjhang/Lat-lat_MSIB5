<?php  

require_once 'Latihan20,1-oopAbstract(Hewan1).php';
require_once 'Latihan20,2-oopAbstract(Hewan2).php';
require_once 'Latihan20,3-oopAbstract(Hewan3).php';

$h1 = new Kucing();
$h2 = new Kambing();
$h3 = new Anjing();

$suara_Hewan = [$h1, $h2, $h3];

foreach ($suara_Hewan as $hewan) {
    echo '<br>' . $hewan->bersuara();
}

?>