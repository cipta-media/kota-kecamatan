<?php
	
	require_once('konfigurasi.php');

	$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

	if ( !$loggedin ) {
	    header("Location: login.php");
	    exit();
	}

	$sql = 'SELECT * FROM kecamatan';

	$datakecamatan = array();
	foreach($koneksidb->query($sql) as $baris) {
	    $datakecamatan[] = $baris;
	}

	$sql2 = 'SELECT id FROM kota';

	foreach($koneksidb->query($sql2) as $baris) {
	    $datakota[] = $baris;
	}

	$smarty->assign('datakecamatan', $datakecamatan);

	$smarty->assign('datakota', $datakota);
	
	$smarty->display('admin-kecamatan_daftar.html');
