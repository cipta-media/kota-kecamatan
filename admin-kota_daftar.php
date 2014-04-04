<?php
require_once('konfigurasi.php');

$sql = 'select * from kota order by nama asc';

$datakota = array();
foreach($koneksidb->query($sql) as $baris) {
    $datakota[] = $baris;
}

$smarty->assign('datakota', $datakota);

$smarty->display('admin-kota_daftar.html');
