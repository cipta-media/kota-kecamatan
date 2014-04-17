<?php
   
    require_once('konfigurasi.php');

	$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

	if ( !$loggedin ) {
	    header("Location: login.php");
	    exit();
	}

    $deletesql = "DELETE FROM kota    
    WHERE id = '{$_GET['kotaid']}'";
    $koneksidb->exec($deletesql);
    header('Location: admin-kota_daftar.php');
?>