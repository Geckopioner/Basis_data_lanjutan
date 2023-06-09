<?php

    $data_pelanggan [] = array(
        "id_pelanggan" => "P001",
        "nama_pelanggan" => "Srik",      
        "alamat_pelanggan" => "Jl.Cokroaminoto",      
        "tlp_pelanggan" => "085792551760",
        "pekerjaan" => "mahasiswa"
    );

    $data_pelanggan [] = array(
        "id_pelanggan" => "P002",
        "nama_pelanggan" => "Anjas",      
        "alamat_pelanggan" => "Jl.Ida Bagus Mantra",      
        "tlp_pelanggan" => "081338096925",
        "pekerjaan" => "mahasiswa"
    );

    $data_pelanggan [] = array(
        "id_pelanggan" => "P003",
        "nama_pelanggan" => "Willy",      
        "alamat_pelanggan" => "Jl.Raya Canggu",      
        "tlp_pelanggan" => "087861117871",
        "pekerjaan" => "mahasiswa"
    );
    
    
    $json_pelanggan = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
    file_put_contents("pelanggan.json", $json_pelanggan);

?>