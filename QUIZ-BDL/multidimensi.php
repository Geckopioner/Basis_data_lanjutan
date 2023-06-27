<?php
$data_pelanggan [] = array(
                        'id_pelanggan' => 'S01',
                        'nama_pelanggan' => array('nama_depan'=>'Aamon', 'nama_belakang'=>'Akira'),
                        'alamat'    => 'Kyoto',
                        'email'=> 'hatori123@gmail.com',
                        'pekerjaan' => 'kurir'
);
$json_pelanggan = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customersetia.json', $json_pelanggan);

$file = file_get_contents('customersetia.json');
$data_pelanggan_multidimensi = json_decode($file);

// echo ($data_pelanggan_multidimensi[0]->nama_pelanggan->nama_depan);

foreach ($data_pelanggan_multidimensi as $data_pelanggan) {
    echo $data_pelanggan->nama_pelanggan->nama_depan,'<br>';
}
?>