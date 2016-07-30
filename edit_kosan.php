<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$kode_kosan = $_GET['id'];

$kost = new App\Kost;
$kos = $kost->fetchDetail($kode_kosan);

$fasilitas_umum = new App\PublicFacility;
$f_umum = $fasilitas_umum->fetchDetail($kode_kosan);

$fasilitas_terdekat = new App\NearbyFacility;
$f_terdekat = $fasilitas_terdekat->fetchDetail($kode_kosan);

$fasilitas_kamar = new App\RoomFacility;
$f_kamar = $fasilitas_kamar->fetchDetail($kode_kosan);

$lokasi = new App\Location;
$lok = $lokasi->fetchDetail($kode_kosan);

$mayoritas_penghuni = new App\Dweller;
$m_penghuni = $mayoritas_penghuni->fetchDetail($kode_kosan);

include "views/frontend/edit_kosan.php";
