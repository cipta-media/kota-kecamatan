<?php 
require_once('konfigurasi.php');

$count = $koneksidb->exec("DELETE FROM pengguna WHERE id = '{$_GET['uid']}'");

header('Location: admin-user_daftar.php');
exit;


?>