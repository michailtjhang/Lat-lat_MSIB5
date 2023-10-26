<?php  

error_reporting(0);

$objJenis = new jenis_produk();
$rs = $objJenis->dataJenis();
$idedit = $_REQUEST['idedit'];
$objJenis = new jenis_produk();

if( !empty($idedit) ) {
  $row = $objJenis->getjenis($idedit);
} else {
  $row = array();
}


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="jenis_controller.php" method="POST">
    <h3 align="center">Isi Nama Jenis Produk</h3>
    
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="nama" placeholder="isi nama jenis produk" type="text" class="form-control" value="<?= $row['nama'] ?>">
    </div>
  </div> 

  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php if (empty($idedit)) { ?>
        <button name="proses" value="save" type="submit" class="btn btn-primary">Submit</button>
      <?php } else { ?>
        <button type="submit" name="proses" value="ubah" class="btn btn-warning">Ubah</button>
      <?php } ?>
      <input type="hidden" name="idx" value="<?= $idedit ?>">
    </div>
  </div>
</form>