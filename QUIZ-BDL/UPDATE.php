<?php

$val_id_pelanggan = $_POST['id_pelanggan'];

$val_nama_pelanggan = $_POST['nama_pelanggan'];
$val_alamat = $_POST['alamat'];
$val_email= $_POST['email'];
$val_pekerjaan= $_POST['pekerjaan'];

$file= file_get_contents('customers.json');
$data_pelanggan = json_decode($file);

// mencari index
foreach ($data_pelanggan as $key => $value){
    if($value->id_pelanggan==$val_id_pelanggan){
      $data_pelanggan[$key]->nama_pelanggan = $val_nama_pelanggan;
      $data_pelanggan[$key]->alamat = $val_alamat;
      $data_pelanggan[$key]->email = $val_email;
      $data_pelanggan[$key]->pekerjaan = $val_pekerjaan;

    }
};
$json_pelanggan_update = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers.json', $json_pelanggan_update);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRESS EDIT</title>
</head>
<body>
<h1>Data Edited</h1>
    <a href="check.php"><button>Back</button></a>
</body>
</html>