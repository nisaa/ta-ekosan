<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$kode_kosan = $_GET['id'];

$kost = new App\Kost;
$kos = $kost->fetchDetail($kode_kosan);

$fasilitas = new App\PublicFacility;
$fasilitasUmum = $fasilitas->fetchDetail($kode_kosan);

$fasilitas = new App\NearbyFacility;
$fasilitasTerdekat = $fasilitas->fetchDetail($kode_kosan);

$fasilitas = new App\RoomFacility;
$fasilitasKamar = $fasilitas->fetchDetail($kode_kosan);

$lokasi = new App\Location;
$lok = $lokasi->fetchDetail($kode_kosan);

$mayoritasPenghuni = new App\Dweller;
$mPenghuni = $mayoritasPenghuni->fetchDetail($kode_kosan);

if(!isset($_SESSION['logged_in_user'])) {
    header('Location: ' . $siteUrl);
}

include "views/frontend/edit_kosan.php";
