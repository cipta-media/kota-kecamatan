<?php

require_once('konfigurasi.php');

$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

if ( !$loggedin ) {
    header("Location: login.php");
    exit();
}

if ($_POST) {
    $updatesql = "UPDATE pengguna
    SET
        nama = '{$_POST['nama']}',
        username = '{$_POST['username']}',
        password = '{$_POST['password']}',
        email = '{$_POST['email']}',
        alamat = '{$_POST['alamat']}'

    WHERE id = '{$_POST['uid']}'";
    $koneksidb->exec($updatesql);
    header('Location: admin-user_daftar.php');
}

$sql = 'select * from pengguna where id = ' . $_GET['uid'];
foreach ($koneksidb->query($sql) as $baris) {
      $edituser[] = $baris;
}

$smarty->assign('edituser', $edituser);

$smarty->display('admin-user_ubah.html');