<?php

if(isset($_POST['btnSubmit'])){
    // echo "Nama = ".$_POST['nama']."<br/>";
    // echo "Seri = ".$_POST['seri']."<br/>";
    // echo "Merk = ".$_POST['merk']."<br/>";
    // echo "Kategori = ".$_POST['kategori']."<br/>";
    // echo "Harga = ".$_POST['harga']."<br/>";
    // echo "Stok = ".$_POST['stok']."<br/>";
    // echo "Deskripsi = ".$_POST['deskripsi']."<br/>";


    if(empty($_POST['nama'] || $_POST['seri'] || $_POST['merk'] || $_POST['kategori'] || $_POST['harga'] || $_POST['stok'] || $_POST['deskripsi']))
        {
            echo "isi seluruhnya";
        }
    else{
        $nama = $_POST['nama'];
        $seri = $_POST['seri'];
        $merk = $_POST['merk'];
        $kat = $_POST['kategori'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $desk = $_POST['deskripsi'];
        $waktu = time();
        // echo "INSERT INTO tb_produk VALUES (null, '$nama', '$seri', $merk, $kat, '$desk', null, $harga, $stok)";
        mysqli_query($koneksi, "INSERT INTO tb_produk VALUES (null, '$nama', '$seri', $merk, $kat, '$desk', null, $harga, $stok)");

        header("location : ../input_hp.php");
    }
}
