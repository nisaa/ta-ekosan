<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$address = $_POST['address'];

$kost = new App\Kost;
$kosts = $kost->searchAddress($address);


include "views/frontend/cari_alamat.php";
