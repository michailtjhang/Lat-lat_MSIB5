<?php  

$model =  new kartu_pelanggan();
$data_kartuPelanggan = $model->dataKartu();

?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Kartu Pelanggan</h1>
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
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Jenis Kartu</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Jenis Kartu</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $id = 1; ?>
                                        <?php foreach ( $data_kartuPelanggan as $row ) : ?>
                                        <tr>
                                            <td><?= $id; ?></td>
                                            <td><?= $row['kode']; ?></td>
                                            <td><?= $row['nama']; ?></td>
                                            <td><?= $row['diskon']; ?></td>
                                            <td><?= $row['iuran']; ?></td>
                                        </tr>
                                        <?php $id++; ?>
		                                <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>