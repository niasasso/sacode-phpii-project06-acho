<?php

    /*
    BUAT DATABASE
    */

    // Integrasi koneksi
    require_once('./config/koneksi1.php');

    // Perintah SQL untuk buat database
    $sql = "CREATE DATABASE db_belajar_php";

    // Melakukan permintaan ke database
    $query = $koneksi->query($sql);

    // Periksa permintaan berhasil atau gagal

?>