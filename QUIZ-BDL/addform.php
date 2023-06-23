<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">
    <form action="add_data.php" method="POST">
<center>
        <div class="container ">

            <div class="row col-md-8">
                <div class="mt-6 ms-5 text-dark "><b><h1>ADD DATA</h1></b></div>
                <form action="tambah_data" method="POST"></form>
                <div class="mb-2 mt-3">
                    <label for="id" class="form-label text-secondary"><align>ID PELANGGAN</align></label>
                    <input type="text" name="id" id="id" class="form-control">
            </div>
        
            <div class="mb-2 mt-3">
                    <label for="nama" class="form-label text-secondary"><align>NAMA PELANGGAN</align></label>
                    <input type="text" name="nama" id="nama" class="form-control">
            </div>

            <div class="mb-2 mt-3">
                    <label for="alamat" class="form-label text-secondary"><align>ALAMAT</align></label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
            </div>

            <div class="mb-2 mt-3">
                    <label for="email" class="form-label text-secondary"><align>EMAIL</align></label>
                    <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="mb-2 mt-3">
                    <label for="pekerjaan" class="form-label text-secondary"><align>PEKERJAAN</align></label>
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
            </div>
        
 

        <div class="mt-2">
            <button class="btn btn-dark" type="submit">ADD</button>
            
        </div>
    </div>
    </form>
</center>
</body>
</html>