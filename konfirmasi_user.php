<?php 

require_once('konfigurasi.php');

$email = $_GET['email'];

$query = "UPDATE pengguna 
		  SET 
		  	aktif = '1'
		  WHERE email = '" . $email . "'";
		  $koneksidb->exec($query);

$_SESSION['info_sukseskonfirmasi'] = "Akun anda berhasil di aktifkan.";
header('Location: konfirmasi.sukses.php');
exit;

?>