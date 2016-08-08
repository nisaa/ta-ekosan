<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$user_id = $_GET['id'];

$user = new App\User;

$data['status'] = $_SESSION['logged_in_user']['status'];
$data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : $_SESSION['logged_in_user']['full_name'];
$data['password'] = isset($_POST['password']) ? $_POST['password'] : "";
$data['address'] = isset($_POST['address']) ? $_POST['address'] : "";
$data['email'] = isset($_POST['email']) ? $_POST['email'] : $_SESSION['logged_in_user']['email'];
$data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : "";
// upload image
if ($_FILES['gambar']['size'] > 0) {
    $ekstensi = end((explode('.', $_FILES['gambar']['name'])));
    $namaFile = $_FILES['gambar']['name'];
    $foto = $namaFile;
    $data['picture'] = $_POST['fullname'] . '-' . $user_id . '.' . $ekstensi;

    $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'resources/images/' . $data['picture']);
} else {
    $data['picture'] = $_SESSION['logged_in_user']['gambar'];
}

echo $user->update($user_id, $data);
var_dump($_SESSION['logged_in_user']);
$_SESSION['success_message'] = "Data profil berhasil diperbarui.";

$_SESSION['logged_in_user']['full_name'] = $data['fullname'];
$_SESSION['logged_in_user']['password'] = $data['password'];
$_SESSION['logged_in_user']['alamat'] = $data['address'];
$_SESSION['logged_in_user']['email'] = $data['email'];
$_SESSION['logged_in_user']['telp'] = $data['phone'];
$_SESSION['logged_in_user']['gambar'] = $data['picture'];

// header('Location: ' . $siteUrl . 'profil.php');
