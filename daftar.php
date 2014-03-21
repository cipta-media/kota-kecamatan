<?php

require_once('konfigurasi.php');

if ($_POST) {
    if ($_POST['email'] != '') {
        $ip = $_SERVER["REMOTE_ADDR"];

        $query = "INSERT INTO `pengguna` (`nama`, `username`, `password`, `email`, `alamat`, `remote_ip`) VALUES ('{$_POST['nama']}', '{$_POST['username']}', '{$_POST['password']}', '{$_POST['email']}', '{$_POST['alamat']}', '$ip')";
        $koneksidb->exec($query);

        $_SESSION['info_berhasildaftar'] = "Registrasi berhasil dilakukan. Email konfirmasi telah dikirim kepada {$_POST['email']}.\nSilahkan konfirmasi email anda";

        $to = "{$_POST['email']}";
        $subject = "Lengkapi pendaftaran anda! ";
        $message = "";
        $from = "kotakecamatan@gmail.com";
        $headers = "From:" . $from;
        mail($to, $subject, $message, $headers);

        header('Location: daftar.berhasil.php');
        exit;
    }
}

header('Location: index.php');
