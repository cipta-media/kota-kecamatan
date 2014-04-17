<?php

	require_once('konfigurasi.php');

$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

if ( !$loggedin ) {
    header("Location: login.php");
    exit();
}

if ($_POST) {

    $insertsql = "INSERT INTO kota (nama, dibuat_pada) VALUES('{$_POST['nama']}',NOW())";
    $koneksidb->exec($insertsql);
    header('Location: admin-kota_daftar.php');
}	

$smarty->display('admin-kota_buat.html');

?>