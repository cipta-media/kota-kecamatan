<?php
require_once('konfigurasi.php');

$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

if ( !$loggedin ) {
    header("Location: login.php");
    exit();
}

$sql = 'select * from kota order by nama asc';

$datakota = array();
foreach($koneksidb->query($sql) as $baris) {
    $datakota[] = $baris;
}

$smarty->assign('datakota', $datakota);

$smarty->display('admin-kota_daftar.html');
