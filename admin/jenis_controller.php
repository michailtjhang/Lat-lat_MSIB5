<?php  

include_once 'koneksi.php';
include_once 'models/jenis_produk.php';

// rangkap request
$nama = $_POST['nama'];

// simpan didalam data
$data = [
    $nama
];

// eksekusi program
$model = new jenis_produk();
$tombol = $_REQUEST['proses'];

switch ($tombol) {
    case 'save': $model->save($data); break;
    default:
    header('Location:index.php?url=jenisProduk');
    break;
}
header('Location:index.php?url=jenisProduk');

?>