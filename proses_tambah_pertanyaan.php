<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$_SESSION['error'] = array();

// jika user belum login, arahkan ke halaman lain
if (empty($_SESSION['logged_in_user'])) {
    header('Location: ' . $siteUrl);
}

// validasi input
if (empty($_POST['judul'])) {
    $_SESSION['error']['judul'] = "Judul tidak boleh kosong.";
} else {
    $judul = $_POST['judul'];
}

if (empty($_POST['pertanyaan'])) {
    $_SESSION['error']['pertanyaan'] = "Pertanyaan tidak boleh kosong.";
} else {
    $konten_pertanyaan = $_POST['pertanyaan'];
}

// buat objek
$pertanyaan = new App\Question;
$pertanyaan->setUserId($_SESSION['logged_in_user']['user_id']);
$pertanyaan->setSubject($judul);
$pertanyaan->setContent($konten_pertanyaan);

if($pertanyaan->add()) {
    $_SESSION['success_message'] = "Pesan ke admin berhasil dikirim.";
} else {
    $_SESSION['error']['general'] = "Pesan ke admin gagal dikirim, coba lagi.";
}


header('Location: ' . $siteUrl . 'profil.php');
