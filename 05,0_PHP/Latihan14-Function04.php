<?php  

function hitung ($a1, $a2, $tombol) {
    if ( $tombol == '+') $hasil = $a1 +$a2;
    else if ( $tombol == '-') $hasil = $a1 - $a2;
    else if ( $tombol == '*') $hasil = $a1 * $a2;
    else if ( $tombol == '/') $hasil = $a1 / $a2;
    else $hasil = 0;
    return $hasil;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        .inputan {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            padding: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 5px;
            width: 24%;
            box-sizing: border-box;
            font-size: larger;
        }

        input[type="submit"] {
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Kakulakor</h1>

    <form method="post">
        <div class="inputan">
            <label for="a1">Angka 1</label>
            <input type="text" name="a1" id="a1" require> <br>

            <label for="a2">Angka 2</label>
            <input type="text" name="a2" id="a2" require> <br>

            <input type="submit" name="tombol" value="+" id="">
            <input type="submit" name="tombol" value="-" id="">
            <input type="submit" name="tombol" value="*" id="">
            <input type="submit" name="tombol" value="/" id="">
        </div>
<?php  
    if (isset($_POST['tombol'])) {
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];

        $tombol = $_POST['tombol'];

        $hasil = hitung($a1, $a2, $tombol);

        echo '<br> <br> Hasil Perhitungan : ' . $hasil  ;

    }



?>
    </form>
</body>
</html>