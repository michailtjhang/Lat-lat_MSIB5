<?php

session_start();
// include_once 'admin/koneksi.php';
// include_once 'models/member.php';

global $member;
global $role;

include_once 'header.php';

error_reporting(0);
$hal = !isset($_GET['hal']) ? 'home' : $_GET['hal'];
if($hal == 'home'){
	include_once 'home.php';
} else if( !empty($hal)){
	include_once '' .$hal.'.php';
} else {
	include_once 'home.php';
}


include_once 'footer.php';
?>