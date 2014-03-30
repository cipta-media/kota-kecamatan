<?php
   
    require_once('konfigurasi.php');

    $deletesql = "DELETE FROM kota    
    WHERE id = '{$_GET['uid']}'";
    $koneksidb->exec($deletesql);
    header('Location: admin-kota_daftar.php');
?>