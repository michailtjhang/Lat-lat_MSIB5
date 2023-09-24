<form method="GET" >
    <label for="">Nama : </label>
    <input type="text" name="nama"> <br>

    <label for="">Alamat : </label>
    <input type="text" name="alamat" id="myInput"> <br>
</form>

<?php  

// code di bawah untuk mehilangkan warning di tampilan
// error_reporting(0);

$nama = $_GET ['nama'];
$alamat = $_GET ['alamat'];

// tampilkan setelah form di proses
$proses = $_GET ['proses'];

if(isset($proses)){
    echo 'nama : ' . $nama . '<br> Alamat : ' . $alamat;
}

?>