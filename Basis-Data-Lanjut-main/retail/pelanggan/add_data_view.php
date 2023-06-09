<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Customer</title>

<form action="add_data.php" method="POST">
    
    
    <div class="row">
        <div class="mb-3">
            <label for ="id_pelanggan" class="form-label">Kode</label>
            <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for ="nama_pelanggan" class="form-label">Nama</label>
            <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for ="alamat_pelanggan" class="form-label">Alamat</label>
            <input type="text" name="alamat_pelanggan" id="alamat_pelanggan" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for ="tlp_pelanggan" class="form-label">No_telepon</label>
            <input type="text" name="tlp_pelanggan" id="tlp_pelanggan" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for ="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
        </div>
        
       <div class="row">
           <button type="submit" class="btn btn-secondary">Tambah data</button>
       </div>
</form>
        

</head>
<body>
    
</body>
</html>