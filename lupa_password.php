<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

if (isset($_POST['email'])) {
    $data['status'] = $_POST['status'];
    $data['email'] = $_POST['email'];

    $user = new App\User;
    $user->forgotPassword($data);
}

include "views/frontend/lupa_password.php";
