<?php
require_once('konfigurasi.php');
$message = '';
function userTerdaftar($username, $password) {
	global $koneksidb;
    // koneksi ke database
    // periksa apakah username dan password ada di database dan isinya sama
    // jika ada dan sama, kembalikan nilai true
    // jika tidak ada atau tidak sama, kembalikan nilai false

    $query = "SELECT COUNT(*) FROM pengguna WHERE username = '$username' AND password = '$password'";
    $statement = $koneksidb->query($query);
    $hasil = $statement->fetchAll();

    if ($hasil[0][0] == 1) {
    	return true;
    }
    return false;
}

if ( $_POST ) {
    $username = $_POST['username'];
    $userpass = $_POST['password'];

    $registered = userTerdaftar( $username, $userpass );
    if ( $registered ) {
        $_SESSION['sedang_login'] = 1;

        header("Location: admin.php");
    } else {
        // tampilkan pesan bahwa user tidak ada atau username-password tidak cocok!
        $message = "Username atau password tidak terdaftar";
    }
}

$smarty->assign('message', $message);

$smarty->display('login.html');

