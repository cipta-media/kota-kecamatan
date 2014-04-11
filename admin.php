<?php

require_once('konfigurasi.php');

$loggedin = isset($_SESSION['sedang_login']) && $_SESSION['sedang_login'] == 1;

if ( !$loggedin ) {
    header("Location: login.php");
    exit();
}

$smarty->display('admin.html');
