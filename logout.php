<?php
require_once('konfigurasi.php');

unset($_SESSION['sedang_login']);

header("Location: login.php");
