<?php  
    include_once 'koneksi.php';
    include_once 'models/jenis_produk.php';
    include_once 'models/kartu_pelanggan.php';
    include_once 'models/produk.php';
    include_once 'top.php';
    include_once 'menu.php';
?>
<div>
    <div class="container-fluid px-4">
        <!-- <h1>Selamat Datang di Halaman Admin</h1> -->
        <?php  
            // membuat logik sederhana untuk mengarahkan url ke file
            // yang mempunyai extension .php
            // routing -> file yang mengarahkan url

            $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
            if($url == 'dashboard') {
                include_once 'dashboard.php';
            } else if (!empty($url)) {
                include_once '' . $url . '.php';
            } else {
                include_once 'dashboard.php';
            }
        
        ?>
    </div>
</div>
<?php  
    include_once 'button.php';
?>