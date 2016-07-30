<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$_SESSION['error'] = array();

$kode_kosan = $_GET['id'];

$kos = new App\Kost;
$kos->delete($kode_kosan);
$roomFacilities = new App\RoomFacility;
$roomFacilities->delete($kode_kosan);
$nearbyFacilities = new App\NearbyFacility;
$nearbyFacilities->delete($kode_kosan);
$publicFacilities = new App\PublicFacility;
$publicFacilities->delete($kode_kosan);
$dweller = new App\Dweller;
$dweller->delete($kode_kosan);
$location = new App\Location;
$location->delete($kode_kosan);

$_SESSION['success_message'] = "Data kosan berhasil dihapus.";

header('Location: ' . $siteUrl . 'profil.php');
