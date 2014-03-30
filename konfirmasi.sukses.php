<?php

require_once('konfigurasi.php');

if (!isset($_SESSION['info_sukseskonfirmasi'])) {
    header('Location: index.php');
    exit;
}

$smarty->assign('berhasil_aktif', isset($_SESSION['info_sukseskonfirmasi']) ? $_SESSION['info_sukseskonfirmasi'] : 'error!');

unset($_SESSION['info_sukseskonfirmasi']);

$smarty->display('user.aktif.html');
