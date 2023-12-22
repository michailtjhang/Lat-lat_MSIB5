<?php  

require_once 'Latihan22,0-oopInheritance(Person).php';
require_once 'Latihan22,1-oopInheritance(Dosen).php';
require_once 'Latihan22,2-oopInheritance(Mahasiswa).php';
require_once 'Latihan22,3-oopInheritance(Staff).php';

$d1 = new Dosen ('Budi', 'L', '011111', 'M.Kom');
$m1 = new Dosen ('Andi', 'L', 3, 'TI');
$s1 = new Staff ('Cendi', 'L', '022222', 'Marketing', 1000000);

$data = [$d1, $m1, $s1];

echo '<h1> Data cititas Kampus </h1>';
echo '<p>';
foreach ($data as $d) {
    echo $d->cetak();
}
echo '</p>';

?>