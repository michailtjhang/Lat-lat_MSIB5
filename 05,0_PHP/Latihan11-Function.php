<?php  

$str = 'Belajar PHP di kampus merdeka';
echo $str;

// function huruf besar/ kapital
$str = strtoupper($str); 
echo '<br>' . $str;

// function huruf kecil
$str = strtolower($str);
echo '<br>' . $str;
echo '<br>';

$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'apel'];

foreach ($ar_buah as $buah) {
    echo '<br>' . $buah;
}

// mengurutkan atau memilah string berdasarkan abjad dari A-Z
sort($ar_buah); 
echo '<br>';

foreach ($ar_buah as $buah) {
    echo '<br>' . $buah;
}

// mengurutkan atau memilah string berdasarkan abjad dari Z-A
arsort($ar_buah);
echo '<br>';

foreach ($ar_buah as $buah) {
    echo '<br>' . $buah;
}

?>