<?php
$data_pelanggan [] = array(
                        'id_pelanggan' => 'S01',
                        'nama_pelanggan' => 'Hatori',
                        'alamat'    => 'Kyoto',
                        'email'=> 'hatori123@gmail.com',
                        'pekerjaan' => 'kurir'
);
$data_pelanggan [] = array(
                        'id_pelanggan' => 'S10',
                        'nama_pelanggan' => 'Miya',
                        'alamat'=> 'Bali',
                        'email'=> 'Miy410@gmail.com',
                        'pekerjaan'=> 'Office Girl'

);
$data_pelanggan [] = array(
    'id_pelanggan' => 'B09',
    'nama_pelanggan' => 'Srik',
    'alamat'=> 'Bali',
    'email'=> 'srikdw@gmail.com',
    'pekerjaan'=> 'programmer'
);
$json_pelanggan = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers.json', $json_pelanggan);
?>