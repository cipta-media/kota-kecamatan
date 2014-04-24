<?php
   
    require_once('konfigurasi.php');

	$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

	if ( !$loggedin ) {
	    header("Location: login.php");
	    exit();
	}

    $deletesql = "DELETE FROM kecamatan WHERE id = '{$_GET['kecamatanid']}'";
    
    $koneksidb->exec($deletesql);

    header('Location: admin-kecamatan_daftar.php');