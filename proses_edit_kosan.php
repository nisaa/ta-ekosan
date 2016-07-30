<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$_SESSION['error'] = array();

$kode_kosan = $_GET['id'];

$kost = new App\Kost;
$kost_lama = $kost->fetchDetail($kode_kosan);

// jika user belum login, arahkan ke halaman lain
if (empty($_SESSION['logged_in_user'])) {
    header('Location: ' . $siteUrl);
}

// validasi input
if (empty($_POST['nama_kosan'])) {
    $_SESSION['error']['nama_kosan'] = "Nama kosan tidak boleh kosong.";
} else {
    $namaKosan = $_POST['nama_kosan'];
}

if (empty($_POST['alamat_kosan'])) {
    $_SESSION['error']['alamat_kosan'] = "Alamat kosan tidak boleh kosong.";
} else {
    $alamatKosan = $_POST['alamat_kosan'];
}

if (empty($_POST['type_kosan'])) {
    $_SESSION['error']['type_kosan'] = "Tipe kosan tidak boleh kosong.";
} else {
    $tipeKosan = $_POST['type_kosan'];
}

if (empty($_POST['harga_sewa'])) {
    $_SESSION['error']['harga_sewa'] = "Harga sewa tidak boleh kosong.";
} else {
    $hargaSewa = $_POST['harga_sewa'];
}

if (empty($_POST['harga_sewa2'])) {
    $_SESSION['error']['harga_sewa2'] = "Keterangan harga sewa tidak boleh kosong.";
} else {
    $hargaSewa2 = $_POST['harga_sewa2'];
}

if (empty($_POST['nomor_tlp'])) {
    $_SESSION['error']['nomor_tlp'] = "Nomor telepon utama tidak boleh kosong.";
} else {
    $nomorTelpon = $_POST['nomor_tlp'];
}
// selesai validasi

// cek apakah ada error
if(count($_SESSION['error']) > 0) {
    header('Location: ' . $siteUrl . 'tambah_kosan.php');
}

$jenisHunian = $_POST['jenis_hunian'];
$kategoriKampus = $_POST['kategori_kampus'];
$hargaSewa2 = $_POST['harga_sewa2'];
$keterangan = $_POST['keterangan'];
$namaPemilik = $_POST['nama_pemilik'];
$nomorTelpon2 = $_POST['nomor_tlp2'];

// buat objek kosan baru
$kost = new App\Kost;
$kost->setId($kode_kosan);
$kost->setKostName($namaKosan);
$kost->setAddress($alamatKosan);
$kost->setType($tipeKosan);
$kost->setDweller($jenisHunian);
$kost->setCampusCategory($kategoriKampus);
$kost->setPrice($hargaSewa);
$kost->setPrice2($hargaSewa2);
$kost->setDescription($keterangan);
$kost->setOwnername($namaPemilik);
$kost->setCreatorId($_SESSION['logged_in_user']['username']);
$kost->setPhone($nomorTelpon);
$kost->setPhone2($nomorTelpon2);

// upload image
if ($_FILES['gambar_kosan']['size'] > 0) {
    $gambarKosan = $kost_lama->gambar_kosan;
    unlink('resources/images/' . $gambar_kosan);
    $move = move_uploaded_file($_FILES['gambar_kosan']['tmp_name'], 'resources/images/' . $gambarKosan);
}

// update kosan ke database
$kost->update();

// insert fasilitas kamar ke database
$fasilitasKamar['kamar_mandi_dalam'] = isset($_POST['kamar_mandi_dalam']) ? 'yes' : 'no';
$fasilitasKamar['tempat_tidur'] = isset($_POST['tempat_tidur']) ? 'yes' : 'no';
$fasilitasKamar['lemari'] = isset($_POST['lemari']) ? 'yes' : 'no';
$fasilitasKamar['meja'] = isset($_POST['meja']) ? 'yes' : 'no';
$fasilitasKamar['ac'] = isset($_POST['ac']) ? 'yes' : 'no';
$fasilitasKamar['tv'] = isset($_POST['tv']) ? 'yes' : 'no';
$fasilitasKamar['tv_kabel'] = isset($_POST['tv_kabel']) ? 'yes' : 'no';
$fasilitasKamar['kipas_angin'] = isset($_POST['kipas_angin']) ? 'yes' : 'no';
$fasilitasKamar['air_panas'] = isset($_POST['air_panas']) ? 'yes' : 'no';
$fasilitasKamar['telepon'] = isset($_POST['telepon']) ? 'yes' : 'no';
$fasilitasKamar['wastafel'] = isset($_POST['wastafel']) ? 'yes' : 'no';
$fasilitasKamar['internet'] = isset($_POST['internet']) ? 'yes' : 'no';
$fasilitasKamar['kulkas'] = isset($_POST['kulkas']) ? 'yes' : 'no';
$fasilitasKamar['rak_buku'] = isset($_POST['rak_buku']) ? 'yes' : 'no';

$roomFacilities = new App\RoomFacility;
$roomFacilities->delete($kode_kosan);
$roomFacilities->insert($kode_kosan, $fasilitasKamar);

// insert fasilitas terdekat ke database
$fasilitasTerdekat['warnet'] = isset($_POST['warnet']) ? 'yes' : 'no';
$fasilitasTerdekat['warteg'] = isset($_POST['warteg']) ? 'yes' : 'no';
$fasilitasTerdekat['balai_kesehatan'] = isset($_POST['balai_kesehatan']) ? 'yes' : 'no';
$fasilitasTerdekat['masjid'] = isset($_POST['masjid']) ? 'yes' : 'no';
$fasilitasTerdekat['gereja'] = isset($_POST['gereja']) ? 'yes' : 'no';
$fasilitasTerdekat['bank'] = isset($_POST['bank']) ? 'yes' : 'no';
$fasilitasTerdekat['indomaret'] = isset($_POST['indomaret']) ? 'yes' : 'no';
$fasilitasTerdekat['alfamart'] = isset($_POST['alfamart']) ? 'yes' : 'no';
$fasilitasTerdekat['circle_k'] = isset($_POST['circle_k']) ? 'yes' : 'no';
$fasilitasTerdekat['mall'] = isset($_POST['mall']) ? 'yes' : 'no';
$fasilitasTerdekat['supermarket'] = isset($_POST['supermarket']) ? 'yes' : 'no';
$fasilitasTerdekat['rumah_sakit'] = isset($_POST['rumah_sakit']) ? 'yes' : 'no';
$fasilitasTerdekat['akses_transportasi'] = isset($_POST['akses_transportasi']) ? 'yes' : 'no';

$nearbyFacilities = new App\NearbyFacility;
$nearbyFacilities->delete($kode_kosan);
$nearbyFacilities->insert($kode_kosan, $fasilitasTerdekat);

// insert fasilitas umum ke database
$fasilitasUmum['dapur_bersama'] = isset($_POST['dapur_bersama']) ? 'yes' : 'no';
$fasilitasUmum['ruangan_tamu'] = isset($_POST['ruangan_tamu']) ? 'yes' : 'no';
$fasilitasUmum['parkir_motor'] = isset($_POST['parkir_motor']) ? 'yes' : 'no';
$fasilitasUmum['parkir_mobil'] = isset($_POST['parkir_mobil']) ? 'yes' : 'no';
$fasilitasUmum['kamar_mandi_bersama'] = isset($_POST['kamar_mandi_bersama']) ? 'yes' : 'no';
$fasilitasUmum['kulkas_bersama'] = isset($_POST['kulkas_bersama']) ? 'yes' : 'no';
$fasilitasUmum['kantin'] = isset($_POST['kantin']) ? 'yes' : 'no';
$fasilitasUmum['mesin_cuci'] = isset($_POST['mesin_cuci']) ? 'yes' : 'no';
$fasilitasUmum['wifi'] = isset($_POST['wifi']) ? 'yes' : 'no';
$fasilitasUmum['pembantu'] = isset($_POST['pembantu']) ? 'yes' : 'no';
$fasilitasUmum['tv_bersama'] = isset($_POST['tv_bersama']) ? 'yes' : 'no';
$fasilitasUmum['cctv'] = isset($_POST['cctv']) ? 'yes' : 'no';
$fasilitasUmum['ruangan_makan'] = isset($_POST['ruangan_makan']) ? 'yes' : 'no';
$fasilitasUmum['dispenser'] = isset($_POST['dispenser']) ? 'yes' : 'no';

$publicFacilities = new App\PublicFacility;
$publicFacilities->delete($kode_kosan);
$publicFacilities->insert($kode_kosan, $fasilitasUmum);

// insert mayoritas penghuni ke database
$mayoritasPenghuni['pelajar'] = isset($_POST['pelajar']) ? 'yes' : 'no';
$mayoritasPenghuni['mahasiswi'] = isset($_POST['mahasiswi']) ? 'yes' : 'no';
$mayoritasPenghuni['mahasiswa'] = isset($_POST['mahasiswa']) ? 'yes' : 'no';
$mayoritasPenghuni['karyawan'] = isset($_POST['karyawan']) ? 'yes' : 'no';
$mayoritasPenghuni['karyawati'] = isset($_POST['karyawati']) ? 'yes' : 'no';

$dweller = new App\Dweller;
$dweller->delete($kode_kosan);
$dweller->insert($kode_kosan, $mayoritasPenghuni);

// insert lokasi ke database
$lokasi['nama'] = isset($_POST['nama_lokasi']) ? $_POST['nama_lokasi'] : '';
$lokasi['alamat'] = isset($_POST['alamat_lokasi']) ? $_POST['alamat_lokasi'] : '';
$lokasi['lat'] = isset($_POST['lat']) ? $_POST['lat'] : '';
$lokasi['lon'] = isset($_POST['lon']) ? $_POST['lon'] : '';

$location = new App\Location;
$location->delete($kode_kosan);
$location->insert($kode_kosan, $lokasi);

$_SESSION['success_message'] = "Data kosan berhasil diperbaharui.";

header('Location: ' . $siteUrl . 'profil.php');
