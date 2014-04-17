<?php  
require_once('konfigurasi.php');

$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

if ( !$loggedin ) {
    header("Location: login.php");
    exit();
}

$sql = 'select * from pengguna where id = ' . $_GET['uid'];
$datauser = array();
  
  foreach ($koneksidb->query($sql) as $baris) {
    
    $datauser[] = $baris;

  }

$smarty->assign('datauser', $datauser);

$smarty->display('admin-user_detail.html');