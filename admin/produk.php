<?php  

$model =  new produk();
$data_produk = $model->dataProduk();

// $member = $_SESSION['member'];
// if( isset($member )) {

?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="index.php?url=produk_form">
                                    <button class="btn btn-sm btn-primary">Tambah</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk</th>
                                            <the scope="col">Aksi</the>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $id = 1; ?>
                                        <?php foreach ( $data_produk as $row ) : ?>
                                        <tr>
                                            <td><?= $id; ?></td>
                                            <td><?= $row['kode']; ?></td>
                                            <td><?= $row['nama']; ?></td>
                                            <td><?= $row['harga_beli']; ?></td>
                                            <td><?= $row['harga_jual']; ?></td>
                                            <td><?= $row['stok']; ?></td>
                                            <td><?= $row['min_stok']; ?></td>
                                            <td><?= $row['jenis']; ?></td>
                                            <td>
                                                <form action="produk_conctroller.php" method="post">
                                                    <a href="index.php?url=produk_form&idedit=<?= $row['id'] ?>">
                                                        <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                                    </a>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</button>
                                                    <a href="index.php?url=produk_details&id=<?= $row['id'] ?>">
                                                        <button type="button" class="btn btn-info btn-sm">Details</button>
                                                    </a>
                                                    <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $id++; ?>
		                                <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <?php 
                // } else {
                //     echo '<script> alert("Anda Tidak bisa Masuk!!!"); history.back(); </script>';
                // }
                
                ?>