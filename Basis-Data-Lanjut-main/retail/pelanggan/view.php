<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>View | Pelanggan</title>
</head>
<body class="bg-dark">

    <div class="container-fluid text-light my-5">
        <h1 class="display-6 text-center">Data Pelanggan</h1>
            <?php
    
                $file = file_get_contents("pelanggan.json");
                $data_pelanggan = json_decode($file);

            ?>
    
    </div>
    <div class="row">
        <a href="add_data_view.php" class="btn btn-primary">Tambah data</a>
    </div>

    <div class="container text-light my-5">
        <div class="row pt-3">
            <div class="col">
                <table class="table">
                    <thead class="text-light bg-secondary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Pekerjaan</th>
                        </tr>
                    </thead>
                    <tbody  class="text-light">
                        <?php 
                            $no = 1;
                            foreach($data_pelanggan as $pelanggan) { 
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pelanggan->id_pelanggan ?></td>
                                <td><?= $pelanggan->nama_pelanggan ?></td>
                                <td><?= $pelanggan->alamat_pelanggan ?></td>
                                <td><?= $pelanggan->tlp_pelanggan ?></td>
                                <td><?= $pelanggan->pekerjaan ?></td>
                            </tr>
                            <td>
                                <a href="<?php echo "edit_data_view.php?id_pelanggan?=".$pelanggan->id_pelanggan; ?>"
                                class="btn btn-warning">Ubah </a>
                            </td>
                        <?php } ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>