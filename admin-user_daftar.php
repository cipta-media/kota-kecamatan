<?php
require_once('konfigurasi.php');

$sql = 'select * from pengguna order by email asc' ;

$datauser = array();
foreach($koneksidb->query($sql) as $baris) {
    $datauser[] = $baris;
}

$smarty->assign('datauser', $datauser);

$smarty->display('admin-user_daftar.html');