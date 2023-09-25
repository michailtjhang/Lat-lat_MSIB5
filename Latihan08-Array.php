<?php  

// contoh array scalar atau 1 dimensi

$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu'];

// menambahkan value ke index baru
$ar_buah[] = 'naga' ;
$ar_buah[] = 'durian' ;

$ar_buah[2] = 'nanas' ; // mengganti value di index ke-2
unset($ar_buah[3]); // menghapus indec ke-3

echo '<br> cetak data array menggunakan foreach';
foreach ($ar_buah as $id => $buah) {
    echo '<br> Key Array buah : ' . $id;
}

echo '<br> <br>';

foreach ($ar_buah as $buah ) {
    echo '<br> Key Array buah : ' . $buah;
}

echo '<br> <br>';

foreach ($ar_buah as $id => $buah) {
    echo '<br> Buah dengan Id : ' . $id . " Adalah buah " . $buah;
}


?>