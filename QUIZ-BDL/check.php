<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Hasil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body bg-muted>
    <div class="container">
        <h1 class="display-5 text-center mt-5 mb-5">DATA PELANGGAN</h1>

        <?php
        $file= file_get_contents('customers.json');
        $data_pelanggan = json_decode($file);
        ?>

        <div class="row">
            <table class="table border">
                <thead class="bg-secondary">
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>EMAIL</th>
                        <th>PEKERJAAN</th>
                        <th>setting</th>
                    </tr>
                </thead>
                <tbody class="bg-light text-dark">
                    <?php 
                    foreach ($data_pelanggan as $key =>$pelanggan){ ?>
                    <tr>
                        <td><?php echo $pelanggan->id_pelanggan ?></td>
                        <td><?php echo $pelanggan->nama_pelanggan ?></td>
                        <td><?php echo $pelanggan->alamat ?></td>
                        <td><?php echo $pelanggan->email ?></td>
                        <td><?php echo $pelanggan->pekerjaan ?></td>
                        <td>  <a href="edit.php?key=<?php echo $key ?>" class="btn btn-dark">Edit</a></td>
                        <td>  <a href="hapuskan.php?key=<?php echo $key ?>" class="btn btn-danger">Hapus</a>
                        </td>   
                    </tr>
                  <?php  }  ?>
                </tbody>
            </table>
            <div><a href="addform.php" class="btn btn-secondary">Add Data</a></div>
        </div>
    </div>
    
</body>
</html>