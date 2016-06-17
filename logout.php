<?php
session_start();
session_destroy();

include "config/app.php";

header('location: ' . $siteUrl);
