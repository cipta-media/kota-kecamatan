<?php
require_once('konfigurasi.php');

$sql = 'select * from pengguna order by email asc' ;
$baris = array();
foreach($koneksidb->query($sql) as $baris) {
    $baris[] = $baris;
}


foreach($koneksidb->query($sql) as $baris) {
$smarty->assign('user', $baris);

$smarty->display('admin-user_daftar.html');
