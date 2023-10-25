<?php  

$obj_produk = new produk();
$obj_Jenis = new jenis_produk();

$data_produk = $obj_produk->dataProduk();
$data_jenis = $obj_Jenis->dataJenis();

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<h3 align="center">Form Produk</h3>
<form action="produk_conctroller.php" method="POST">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="text1" name="kode" placeholder="Isi kode Produk" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="nama" placeholder="Isi nama Produk" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <input id="text2" name="harga_beli" placeholder="Isi harga beli Produk" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Harga Jual</label> 
    <div class="col-8">
      <input id="text3" name="harga_jual" placeholder="Isi harga jual Produk" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="text4" name="stok" placeholder="Isi stok Produk" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Minimal Stok</label> 
    <div class="col-8">
      <input id="text5" name="min_stok" placeholder="Isi minimal stok Produk" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="select" name="jenis_produk" class="custom-select">
        <option value="rabbit">--- Pilih Jenis Produk ---</option>
        <?php foreach( $data_jenis as $jenis ) : ?>
        <option value="<?= $jenis['id'] ?>"><?= $jenis['nama'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="proses" value="save" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>