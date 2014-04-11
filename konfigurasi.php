<?php

$host = 'localhost';
$userdb = 'root';
$passdb = '';
$dbname = 'kota-kecamatan';
$url = '';

$koneksidb = new PDO("mysql:host=$host;dbname=$dbname", $userdb, $passdb);

require_once('libs/smarty/Smarty.class.php');
$smarty = new Smarty();

require_once('libs/PHPMailer/class.phpmailer.php');
$mail = new PHPMailer();

session_start();
