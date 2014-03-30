<?php

	require_once('konfigurasi.php');

if ($_POST) {

    $insertsql = "INSERT INTO kota (nama, dibuat_pada) VALUES('{$_POST['nama']}',NOW())";
    $koneksidb->exec($insertsql);
    header('Location: admin-kota_daftar.php');
}	

$smarty->display('admin-kota_buat.html');

?>