<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form input Penilaian</h1>

    <form action="" method="post">
        <label for="">Nama : </label>
        <input type="text" name="nama" placeholder="Masukkan Nama">

        <br> <br>

        <label for="">Mata Kuliah : </label>
        <select name="matkul" id="">
            <option value="">==== Pilihan MataKuliah ====</option>
            <option value="html">HTML & CSS</option>
            <option value="js">JavaScript</option>
            <option value="ui">UI/UX</option>
            <option value="php">PHP</option>
        </select> 
        
        <br> <br>

        <label for="">Nilai : </label>
        <input type="text" name="nilai" placeholder="Masukkan Nilai">

        <button name="prose" type="submit">Simpan</button>
    </form>

<?php  
$nama = $_POST['nama'];
$mataKuliah = $_POST['matkul'];
$nilai = $_POST['nilai'];
$tombol = $_POST['prose'];


$ket = ($nilai >= 60 ) ? "Lulus" : "Gagal";
if ($nilai >= 85 && $nilai <= 100) $grade = "A";
else if ($nilai >= 75 && $nilai <= 84) $grade = "B";
else if ($nilai >= 60 && $nilai <= 74) $grade = "C";
else if ($nilai >= 30 && $nilai <= 59) $grade = "D";
else if ($nilai >= 0 && $nilai <= 29) $grade = "E";
else $grade = "";

switch ($grade) {
    case "A" : $predikat = "Memuaskan"; break;
    case "B" : $predikat = "Bagus"; break;
    case "C" : $predikat = "Cukup"; break;
    case "D" : $predikat = "Kurang"; break;
    case "E" : $predikat = "Buruk"; break;
    default: $predikat = ' ';
}

if(isset($tombol)) :

?>

<p>Nama Siswa : <?= $nama ?></p>
<p>Mata Kuliah : <?= $mataKuliah ?></p>
<p>Nilai Siswa : <?= $nilai ?></p>
<p>Keterangan : <?= $ket ?></p>
<p>Grade : <?= $grade ?></p>
<p>Predikat : <?= $predikat ?></p>

<?php endif; ?>


</body>
</html>