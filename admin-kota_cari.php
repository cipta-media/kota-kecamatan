<?php

    require_once('konfigurasi.php');

    if ($_POST) { 

    $katapencarian = $_POST['katapencarian']; //memasukkan kata yg akan di post ke dalam variable $katapencarian

    $sql = "SELECT * FROM kota WHERE nama like '%$katapencarian%' order by nama"; //mengambil nilai yang dicari pada variable kata pencarian

    $datakota = array();
        foreach($koneksidb->query($sql) as $baris) {
        $datakota[] = $baris;
        }

    }

$smarty->assign('datakota', $datakota);

$smarty->display('admin-kota_daftar.html');    