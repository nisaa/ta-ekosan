<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$kost = new App\Kost;
              $kosts = $kost->fetchKostForCampuss();

include "views/frontend/kosan_kampus.php";
