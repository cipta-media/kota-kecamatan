<?php

require_once('konfigurasi.php');

if ($_POST) {
    if ($_POST['email'] != '') {
        
        $username = $_POST['username'];
        $sth = $koneksidb->prepare("SELECT * FROM pengguna WHERE username='$username'");
        $sth->execute();
        $baris = $sth->rowCount(); //untuk mendapatkan jumlah baris hasil query

        if ($baris > 0) { 
            
            /*
            *   jika jumlah baris yang username nya dari $_POST lebih
            *   tampilkan pesan bahwa username telah digunakan/ada
            *
            */
            echo "username sudah digunakan silahkan coba yang lain."; 
            exit;

        } else {
            $ip = $_SERVER["REMOTE_ADDR"];
            $email = $_POST['email'];
            $kode = md5(rand());
            $query = "INSERT INTO `pengguna` (`nama`, `username`, `password`, `email`, `alamat`, `remote_ip`, `kode_konfirmasi`) VALUES ('{$_POST['nama']}', '{$_POST['username']}', '{$_POST['password']}', '$email', '{$_POST['alamat']}', '$ip', '$kode')";
            $koneksidb->exec($query);
            $to = "{$_POST['email']}";
            $subject = "Lengkapi pendaftaran anda! ";
            $message = "Untuk mengaktifkan akun anda, klik link";
            $message .= "<a href=kota-kecamatan.lc/konfirmasi_user.php?email=$email>ini</a>";
            $from = "kotakecamatan@gmail.com";
            $headers = "From:" . $from;
            mail($to, $subject, $message, $headers);

            $_SESSION['info_berhasildaftar'] = "Registrasi berhasil dilakukan. Email konfirmasi telah dikirim kepada $email.\nSilahkan konfirmasi email anda";

            header('Location: daftar.berhasil.php');
            exit;
        }   
    }
}

header('Location: index.php');
