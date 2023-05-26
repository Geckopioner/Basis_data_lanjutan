

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>view pelanggan</title>
</head>
<body>
<h3>Data pelanggan</h3>
<?php
    
$file = file_get_contents('pelanggan.json');
$data_pelanggan = json_decode($file);

foreach($data_pelanggan as $pelanggan ) {
    echo $pelanggan->id_pelanggan;
    echo '<br>';
}

?>
<div class="row">
    <div class="col-md-12">
        <table class ="table">
            <thead>
                <tr>
                    <th> Id </th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tlp</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <?php
     foreach($data_pelanggan as $pelanggan ){
    ?>
    <tr>
        <td><?php echo $pelanggan-> id_pelanggan?></th>
        <td><?php echo $pelanggan->nama_pelanggan ?></th>
        <td><?php echo $pelanggan->alamat ?></th>
        <td><?php echo $pelanggan->tlp_pelanggan ?></th>
        <td><?php echo $pelanggan->Pekerjaan ?></th>
    </tr>
     };
</body>
    
    
</html>