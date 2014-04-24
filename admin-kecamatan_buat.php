<?php

	require_once('konfigurasi.php');

	$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

	if ( !$loggedin ) {
	    header("Location: login.php");
	    exit();
	}

	if ($_POST) {

	    $insertsql = "INSERT INTO kecamatan (kota_id, nama, dibuat_pada) VALUES('{$_POST['kota_id']}', '{$_POST['nama']}',NOW())";
	    $koneksidb->exec($insertsql);
	    header('Location: admin-kecamatan_daftar.php');
	}	
	
	$smarty->assign('datakota', $datakota);
	
	//$smarty->display('admin-kecamatan_buat.html');

?>