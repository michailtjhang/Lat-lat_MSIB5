<?php  

$model =  new jenis_produk();
$data_jenisProduk = $model->dataJenis();

if ($sesi['role'] != 'staff') {

?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jenis Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="index.php?url=jenis_form">
                                    <button class="btn btn-sm btn-primary">Tambah</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jenis Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jenis Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $id = 1; ?>
                                        <?php foreach ( $data_jenisProduk as $row ) : ?>
                                        <tr>
                                            <td><?= $id; ?></td>
                                            <td><?= $row['nama']; ?></td>
                                            <td>
                                                <form action="jenis_controller.php" method="post">
                                                    <a href="index.php?url=jenis_form&idedit=<?= $row['id'] ?>">
                                                        <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                                    </a>
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
                    } else { echo '<script> alert("Anda Tidak boleh Masuk!!!"); history.back(); </script>'; }
                ?>