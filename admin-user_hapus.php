<?php 
require_once('konfigurasi.php');
$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

if ( !$loggedin ) {
    header("Location: login.php");
    exit();
}

$count = $koneksidb->exec("DELETE FROM pengguna WHERE id = '{$_GET['uid']}'");

header('Location: admin-user_daftar.php');
exit;


?>