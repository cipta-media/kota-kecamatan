<?php  
require_once('konfigurasi.php');

$sql = 'select * from pengguna where id = ' . $_GET['uid'];
$datauser = array();
  
  foreach ($koneksidb->query($sql) as $baris) {
    
    $datauser[] = $baris;

  }

$smarty->assign('datauser', $datauser);

$smarty->display('admin-user_detail.html');