<?php  

session_start();
include_once 'admin/koneksi.php';
include_once 'models/member.php';

$unama = $_POST['username'];
$password = $_POST['password'];

$data = [
    $unama, $password
];

$obj = new member();
$rs = $obj->cekLogin($data);

if( !empty($rs) ){
    $_SESSION['member'] = $rs;

    header('location:admin/index.php?url=produk');
} else{
    header('location:index.php?hal=home');
}

?>