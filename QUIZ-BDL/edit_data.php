<?php

$file = file_get_contents('customers.json');
$data_pelanggan = json_decode($file);

$data_pelanggan[] = array(
    "id_pelanggan"=> $_POST['id'],
    "nama_pelanggan"=> $_POST ['nama'],
    "alamat" => $_POST ['alamat'],
    "email" => $_POST ['email'],
    "pekerjaan" => $_POST ['pekerjaan']
);

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