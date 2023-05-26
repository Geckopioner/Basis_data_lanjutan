<?php

$data_pelanggan [] = array(
    'id_pelanggan' => 'P001',
    'nama_pelanggan' => 'asa',
    'alamat'  => 'Jalan Mulawarman',
    'tlp_pelanggan' => '0813094755',
    'Pekerjaan' => 'PNS'
);
$data_pelanggan [] = array(
        'id_pelanggan' => 'P002',
        'nama_pelanggan' => 'willy',
        'alamat'  => 'Jalan Ayani',
        'tlp_pelanggan' => '0823549573',
        'Pekerjaan' => 'Bartender'
);
$data_pelanggan [] = array(
            'id_pelanggan' => 'P005',
            'nama_pelanggan' => 'anjas',
            'alamat'  => 'Jalan Buntu',
            'tlp_pelanggan' => '23985395838',
            'Pekerjaan' => 'Pedagang'


        );

$json_pelanggan = json_encode($data_pelanggan,JSON_PRETTY_PRINT);

file_put_contents('pelanggan.json',$json_pelanggan);
?>