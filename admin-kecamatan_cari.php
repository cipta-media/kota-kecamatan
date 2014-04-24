<?php

    require_once('konfigurasi.php');

    if ($_POST) {

    $katapencarian = $_POST['katapencarian'];

    $sql = "SELECT * FROM kecamatan WHERE nama LIKE '%{$katapencarian}%' order by nama";

    $datakecamatan = array();
        foreach($koneksidb->query($sql) as $baris) {
        $datakecamatan[] = $baris;
        }

    }

$smarty->assign('datakecamatan', $datakecamatan);

$smarty->display('admin-kecamatan_daftar.html');    