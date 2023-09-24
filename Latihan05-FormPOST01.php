<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar Persegi Panjang</title>
</head>
<body>
    <h1>Rumus Bangun Datar Persegi Panjang</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td>Sisi 1</td>
                <td><input type="text" name="sisi1" require></td>
            </tr>
            <tr>
                <td>Sisi 2</td>
                <td><input type="text" name="sisi2" require></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <br> <br>

    <?php  
        if (isset($_POST['submit'])) {
            $sisi1 = $_POST['sisi1'];
            $sisi2 = $_POST['sisi2'];

            $luasPersegi = $sisi1 * $sisi2;
            echo 'Hasil Perhitungan Luas Persegi Panjang';
            echo '<br> Sisi ke-1 : ' . $sisi1;
            echo '<br> Sisi ke-2 : ' . $sisi2;

            echo '<br> <br> Hasil Perhitungan : ' . $luasPersegi;

        }
    
    
    ?>

</body>
</html>