<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
$file = file_get_contents('customers.json');
$data_pelanggan = json_decode($file);
$key = $_GET['key'];
?>
<body>
<div class="bg-edit.css"></div>
<form action="UPDATE.php" method="POST">
    <div class="container">
        <div class="row col-md-8">
            <div class="mt-4 ms-5 text-info"><h1><u><b>EDIT DATA</b><u></h1></div>
            
            <div class="mt-4 ms-5">
                <label for="id" class="form-label text-dark">ID</label>
                <input type="text"value="<?=$data[$key]->id_pelanggan?>" name="id" id="id" class="form-control">
               
            </div>

            <div class="mb-4 ms-5">
                <label for="nama" class="form-label text-dark" text-white>NAMA</label>
                <input type="text"value="<?=$data[$key]->nama_pelanggan?>" name="nama" id="nama" class="form-control">
            </div>

            <div class="mb-4 ms-5">
                <label for="alamat" class="form-label text-dark">ALAMAT</label>
                <input type="text" value="<?=$data[$key]->alamat?>" name="alamat" id="alamat" class="form-control">
            </div>
               
            <div class="mb-4 ms-5">
                <label for="email" class="form-label text-dark">EMAIL</label>
                <input type="text" value="<?=$data[$key]->email?>" name="email" id="email" class="form-control">
            </div>

            <div class="mb-4 ms-5">
                <label for="pekerjaan" class="form-label text-dark">PEKERJAAN</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control"  value="<?=$data[$key]->pekerjaan?>">
            </div>

            <div class="mt-2">
                    <button class="btn btn-primary" type="submit">Edit</button>
                    <a href="add_data.php"></a>
            </div>
            
        </div>
    </div>
</form>
    
</body>
</html>