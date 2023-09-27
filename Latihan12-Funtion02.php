<?php  

// contoh function void, yang tidak mengembalikan nilai
// dengan kita membuat sendiri funtion tersebut


// deklarasi function salam
function salam() {
    echo '<br> Selamat pagi!!';
}

function sapa($kawan) {
    echo '<br> Selamat Pagi, ' . $kawan . '!!';
}

function kabar($kawan = 'Anton') {
    echo '<br> Apa kabar ' . $kawan . '?';
}

// eksekusi atau output fungsi salam()
salam();

$nama ='Hasin';
sapa($nama); // ini pemanggilan variabel baru
sapa('Andi'); // pemanggilan value dari parameter $kawan
kabar(); // menempilkan parameter dan value $kawan
kabar('Candi'); // mengubah value $kawan 


echo '<hr>';


// fungsi mengecek bilangan prima atau bukan
function prima($bilangan) {
    $prima = true;
    for ( $i = 2; $i < $bilangan; $i++ ) {
        if ( $bilangan % $i == 0 ) {
            $prima = false;
            break;
        }
    }
    return $prima;
}

if ( prima(12) ) {
    echo "Bilangan Prima";
} else {
    echo "Bilangan Bukan Prima";
}

?>