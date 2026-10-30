<?php
    $server = "localhost";
    $user = "root"; // default user root
    $password = ""; //password default kosong
    $db = "db_toko_hp";

    $koneksi = mysqli_connect($server, $user, $password, $db);

    if(!$koneksi || mysqli_connect_errno()){
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

