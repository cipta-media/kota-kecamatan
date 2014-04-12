<?php

    require_once('konfigurasi.php');

    if ($_POST) {

    $katapencarian = $_POST['katapencarian'];

    $sql = "SELECT * FROM kota WHERE nama='$katapencarian' order by nama";
    //$sql = "select * from kota where nama='Bandung' order by nama asc";

    $datakota = array();
        foreach($koneksidb->query($sql) as $baris) {
        $datakota[] = $baris;
        }

    }

$smarty->assign('datakota', $datakota);

$smarty->display('admin-kota_daftar.html');    