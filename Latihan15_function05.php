<?php  

$ar_prodi = ['Si' => 'Sistem Infromatika', 'TI' => 'Teknik Infromatika', 'TE' => 'Teknik Electro'];
$ar_skill = ['HTML' => 10, 'CSS' => 10, 'RWD' => 20, 'Javascript' => 20, 'PHP' => 30, 'Laravel' => 40, 'MySQL' => 40];
$ar_domisili = ['jakarta', 'Bandung', 'Surabaya', 'Malang', 'Bali', 'Lainnya'];


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
            background-color: #f2f2f2;
        }

        fieldset {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .radio-group {
            display: flex;
            align-items: center;
        }

        .radio-group input[type="radio"] {
            margin-right: 10px;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
        }

        .checkbox-group input[type="checkbox"] {
            margin-right: 10px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    
    <fieldset>
        <legend>Form Registrasi IT club</legend>
        <table>
            <thead>
                <tr>
                    <th  colspan="2">Form Registrasi</th>
                </tr>
            </thead>
            <form method="POST">
                <tbody>
                    <tr>
                        <td>Nama : </td>
                        <td><input type="text" name="nama" id=""></td>
                    </tr>
                    <tr>
                        <td>NIM : </td>
                        <td><input type="text" name="nim" id=""></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin : </td>
                        <td><input type="radio" name="jk" id="" value="laki-laki">Laki-laki
                        <input type="radio" name="jk" id="" value="Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                        <td>Program Studi : </td>
                        <td>
                            <select name="prodi" id="">
                                <?php foreach ($ar_prodi as $prodi => $detail) : ?>
                                    <option value="<?= $prodi ?>"><?= $detail ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Skill Programing : </td>
                        <td>
                            <?php foreach ($ar_skill as $skill => $detail) : ?>
                                <input type="checkbox" name="skill[]" id="" value="<?= $skill ?>"><?= $skill ?>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Domisili : </td>
                        <td>
                            <select name="domisili" id="">
                                <?php foreach ($ar_domisili as $dom ) : ?>
                                    <option value="<?= $dom ?>"><?= $dom ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2"><button name="proses" class="button">Submit</button></th>
                    </tr>
                </tfoot>
            </form>
        </table>
    </fieldset>
    
<?php  

if ( isset ( $_POST['proses'] ) ) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];

    echo 'Nama : ' . $nama . '<br>'; 
    echo 'NIM : ' . $nim . '<br>'; 
    echo 'Jenis Kelamin : ' . $jk . '<br>'; 
    echo 'Program Studi : ' . $prodi . '<br>'; 

    $total = 0;
    foreach ($skill as $score) {
        $total += $ar_skill[$score];
    }
    
    echo 'Skill : ';

    function score_skill ($total) {
        if ( $total >= 100 && $total <= 170 ) return "Sangat Baik";
        else if ($total >= 60 && $total <=170 ) return "Baik";
        else if ($total >= 40 && $total <=170 ) return "Cukup";
        else if ($total >= 0 && $total <=170 ) return "Kurang";
        else return "Tidak Memadai";
    }

    foreach ($skill as $score) {
        echo " $score ,  ";
    }

    echo '<br>';

    echo "Total Score : $total <br>";
    echo "Kategori Skill : " . score_skill($total) . '<br>';
    echo " Domisili : $domisili <br>";
}



?>


</body>
</html>