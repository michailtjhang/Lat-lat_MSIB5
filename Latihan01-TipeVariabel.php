<?php 
// ini adalah komentar php

echo "Hello World";

// latihan membuat variabel
$namaSiswa = "Budi Santoso";    // tipe data string
$umur = 25;                     // tipe data integer
$beratBadan = 30.5;             // tipe data float
$_pekerjaan = 'Mahasiswa';

echo '<br>Nama Mahasiswa: '. $namaSiswa;
echo '<br>Umur: '. $umur .' tahun';
echo '<br>Berat Badan: '. $beratBadan . ' kg'; 
echo '<br>Pekerjaan: '. $_pekerjaan;

echo "<br><br>Berat Badan : $beratBadan kg";


// contoh variabel konstanta
$jari2 = 15;
define('PHI', 3.14);

$luas = PHI * $jari2 * $jari2;

?>

<!-- contoh pemanggilan variabel dalam html -->

<br>
<br> Siswa : <?= $namaSiswa ?>
<br> Umur : <?= $umur  ?>

<br>
<br> Luas Jari-jari lingkaran : <?= $luas ?>