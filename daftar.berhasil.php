<?php

require_once('konfigurasi.php');

if (!isset($_SESSION['info_berhasildaftar'])) {
    header('Location: index.php');
    exit;
}

$smarty->assign('berhasil_daftar', isset($_SESSION['info_berhasildaftar']) ? $_SESSION['info_berhasildaftar'] : 'error!');

unset($_SESSION['info_berhasildaftar']);

$smarty->display('daftar.berhasil.html');
