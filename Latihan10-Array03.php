<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php  
$m1 = ['nim' => '0111111', 'nama' => 'Andi Santono', 'nilai' => 95];
$m2 = ['nim' => '0111112', 'nama' => 'Budi Kurniawan', 'nilai' => 80];
$m3 = ['nim' => '0111113', 'nama' => 'Candi Badur', 'nilai' => 78];
$m4 = ['nim' => '0111114', 'nama' => 'Denis Caputra', 'nilai' => 76];
$m5 = ['nim' => '0111115', 'nama' => 'Erik Manahel', 'nilai' => 86];
$m6 = ['nim' => '0111116', 'nama' => 'Fatril Nusonto', 'nilai' => 50];
$m7 = ['nim' => '0111117', 'nama' => 'Gayama Harustia', 'nilai' => 20];
$m8 = ['nim' => '0111118', 'nama' => 'Isma Lotono', 'nilai' => 30];
$m9 = ['nim' => '0111119', 'nama' => 'Jami sayir', 'nilai' => 70];
$m10 = ['nim' => '0111110', 'nama' => 'Karni Buato', 'nilai' => 65];

$ar_Judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

?>

    <h1>Daftar Nilai Mahasiswa</h1>


    <table border="1" cellpadding="10" cellspacing="10" width="100% ">
        <thead>
            <?php foreach ($ar_Judul as $judul) : ?>
                <th><?= $judul; ?></th>
            <?php endforeach; ?>
        </thead>

        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <tbody>
            <td><?= $no++; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['nilai']; ?></td>
        </tbody>
        <?php endforeach; ?>
        
    </table>

</body>
</html>