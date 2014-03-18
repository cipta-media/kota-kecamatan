<?php

$host = 'localhost';
$userdb = 'root';
$passdb = '';
$dbname = 'kota-kecamatan';

$koneksidb = new PDO("mysql:host=$host;dbname=$dbname", $userdb, $passdb);
