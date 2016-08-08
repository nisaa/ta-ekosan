<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

$kost = new App\Kost;
$kosts = $kost->fetchKost($page);

include "views/frontend/semua_kosan.php";
