<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$kost = new App\Kost;
$kosts = $kost->fetchKostForTelkom();

include "views/frontend/kosan_telkom.php";
