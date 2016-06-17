<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$action = isset($_GET['action']) ? $_GET['action'] : null;
if ($action != null) {
    $_SESSION['error'] = array();

    // validasi input username, password, & status
    if (empty($_POST['username'])) {
        $_SESSION['error'][$action][] = "Username tidak boleh kosong!";
    } else {
        $username = $_POST['username'];
    }

    if (! empty($_POST['password']) && strlen($_POST['password']) < 4) {
        $_SESSION['error'][$action][] = "Kata sandi harus lebih dari 4 karakter!";
    } else if (empty($_POST['password'])) {
        $_SESSION['error'][$action][] = "Kata sandi tidak boleh kosong!";
    } else {
        $password = $_POST['password'];
    }

    if (! in_array($_POST['status'], array('pencari_kos', 'pemilik_kos'))) {
        $_SESSION['error'][$action][] = "Status Anda tidak sesuai!";
    } else {
        $status = $_POST['status'];
    }

    if ($action == "login") {
        if (empty($_SESSION['error'])) {
            $user = new App\User($username, $password, $status);
            $loggedInUser = $user->login();

            if ($loggedInUser != null) {
                $_SESSION['logged_in_user'] = $loggedInUser;
            } else {
                $_SESSION['error'][$action][] = "Username atau password tidak sesuai!";
            }
        }
    } else if ($action == "register") {
        // validasi input email & nama lengkap
        if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['email'])) {
            $_SESSION['error'][$action][] = "E-mail tidak sesuai!";
        } else if (empty($_POST['email'])) {
            $_SESSION['error'][$action][] = "E-mail tidak boleh kosong!";
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['fullname'])) {
            $_SESSION['error'][$action][] = "Nama lengkap tidak boleh kosong!";
        } else {
            $fullname = $_POST['fullname'];
        }

        if (empty($_SESSION['error'])) {
            $newUser = new App\User($username, $password, $status, $email, $fullname);
            $registeredUser = $newUser->register();

            if ($registeredUser != null) {
                $_SESSION['logged_in_user'] = (array) $registeredUser;
            }
        }
    }

    header('location: ' . $siteUrl);
}
