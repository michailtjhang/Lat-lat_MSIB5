<?php  

// array scalar

$a1 = ['kode' => '0011', 'buah' => 'Apel', 'harga' => 25000, 'jumlah' => 5];
$a2 = ['kode' => '0012', 'buah' => 'Mangga', 'harga' => 26000, 'jumlah' => 6];
$a3 = ['kode' => '0013', 'buah' => 'Pisang', 'harga' => 27000, 'jumlah' => 7];
$a4 = ['kode' => '0014', 'buah' => 'Jambu', 'harga' => 28000, 'jumlah' => 8];
$a5 = ['kode' => '0015', 'buah' => 'Durian', 'harga' => 29000, 'jumlah' => 6];
$a6 = ['kode' => '0016', 'buah' => 'Salak', 'harga' => 30000, 'jumlah' => 7];
$a7 = ['kode' => '0017', 'buah' => 'Nanas', 'harga' => 32000, 'jumlah' => 10];



// array assosiative

$ar_buah = [$a1,$a2,$a3,$a4,$a5,$a6,$a7];

// dekarasi header table dengan looping

$ar_judul = ['No','Kode','Buah','Harga','Jumlah','Harga Kotor','Diskon','Harga Bayar'];

$jumlahTransaksi = count($ar_buah);
$jumlahHarga = array_column($ar_buah,'harga');
$hargaTotal = array_sum($jumlahHarga);
$hargaTertinggi = max($jumlahHarga);
$hargaTerendah = min($jumlahHarga);
$HargaRata = $hargaTotal / $jumlahTransaksi;

$ket = [
    'Harga Total' => $hargaTotal,
    'Harga Tertinggi' => $hargaTertinggi,
    'Harga Terendah' => $hargaTerendah,
    'Harga Rata-rata' => $HargaRata,
    'Jumlah Buah' => $jumlahTransaksi
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Array</title>
</head>
<body>
    
    <h1>Daftar Buah-buahan</h1>

    <table border="1" cellpadding="10" cellspacing="10" width="100% ">
        <thead>
            <?php foreach ($ar_judul as $judul) : ?>
                <th><?= $judul; ?></th>
            <?php endforeach; ?>
        </thead>

        <?php $no = 1; ?>
        <?php foreach ($ar_buah as $buah) : ?>
        <?php $bruto = $buah['harga'] * $buah['jumlah']; ?>
        <?php $diskon = ($buah['buah'] == 'Jambu' && $buah['jumlah'] >= 4) ? 0.2 : 0.1; ?>
        <?php $hargaDiskon = $diskon * $bruto; ?>
        <?php $hargaBayar =  $bruto - $hargaDiskon; ?>
        <tbody>
            <td><?= $no++; ?></td>
            <td><?= $buah['kode']; ?></td>
            <td><?= $buah['buah']; ?></td>
            <td><?= $buah['harga']; ?></td>
            <td><?= $buah['jumlah']; ?></td>
            <td><?= $bruto ?></td>
            <td><?= $hargaDiskon ?></td>
            <td align="center"> Rp. <?= number_format( $hargaBayar, 0, ',', '.') ?></td>
        </tbody>
        <?php endforeach; ?>
        <tfoot>
            <?php foreach($ket as $keterangan => $hasil) : ?>
            <tr>
                <th colspan="3" align="center"><?= $keterangan ?></th>
                <th colspan="5"><?= $hasil ?></th>
            </tr>
            <?php endforeach; ?>
        </tfoot>
    </table>

</body>
</html>