<?php 

	require_once('konfigurasi.php');

	$kode = $_GET['kode'];

	$query = "UPDATE pengguna 
			  SET 
			  	aktif = '1'
			  WHERE kode_konfirmasi = '" . $kode . "'";
			  $koneksidb->exec($query);

	$_SESSION['info_sukseskonfirmasi'] = "Akun anda berhasil di aktifkan.";

	header('Location: konfirmasi.sukses.php');

	exit;

?>
