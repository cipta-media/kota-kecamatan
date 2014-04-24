<?php

    require_once('konfigurasi.php');

    $loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

    if ( !$loggedin ) {
        header("Location: login.php");
        exit();
    }

    if ($_POST) {
        $updatesql = "UPDATE kecamatan
        SET
            nama = '{$_POST['nama']}',
            diubah_pada = NOW()
        WHERE id = '{$_POST['kecamatanid']}'";
        $koneksidb->exec($updatesql);
        header('Location: admin-kecamatan_daftar.php');
    }

    $sql = 'select * from kecamatan where id = ' . $_GET['kecamatanid'];
    foreach ($koneksidb->query($sql) as $baris) {
          $editkecamatan[] = $baris;
    }

    $smarty->assign('editkecamatan', $editkecamatan);
    $smarty->display('admin-kecamatan_ubah.html');

?>
