<?php

require_once('konfigurasi.php');

if ($_POST) {
    $updatesql = "UPDATE kota
    SET
        nama = '{$_POST['nama']}',
        diubah_pada = NOW()
    WHERE id = '{$_POST['uid']}'";
    $koneksidb->exec($updatesql);
    header('Location: admin-kota_daftar.php');
}

$sql = 'select * from kota where id = ' . $_GET['uid'];
foreach ($koneksidb->query($sql) as $baris) {
      $editkota[] = $baris;
}

$smarty->assign('editkota', $editkota);
$smarty->display('admin-kota_ubah.html');

?>
