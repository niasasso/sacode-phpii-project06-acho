<?php

    // KONEKSI TANPA DATABASE

    // Integrasi config
    require_once('config.php');

    // Membuat koneksi
    $koneksi = new mysqli($servername, $username, $password);

    // Periksa koneksi
    if(!$koneksi){
        echo "Koneksi Gagal!";
    }else {
        echo "Koneksi Berhasil!";
    }

?>