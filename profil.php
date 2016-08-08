<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

if(!isset($_SESSION['logged_in_user'])) {
    header('Location: ' . $siteUrl);
}

include "views/frontend/profil.php";
