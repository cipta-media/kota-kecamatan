<?php

    require_once('konfigurasi.php');

    if ($_POST) {

    $katapencarian = $_POST['katapencarian'];

    $sql = "SELECT * FROM pengguna WHERE username LIKE '{$katapencarian}%' order by nama";
    //$sql = "select * from user where nama='' order by nama asc";

    $datauser = array();
        foreach($koneksidb->query($sql) as $baris) {
        $datauser[] = $baris;
        }

    }

$smarty->assign('datauser', $datauser);

$smarty->display('admin-user_daftar.html');    