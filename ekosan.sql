-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jul 2016 pada 19.12
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekosan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_suka`
--

CREATE TABLE `daftar_suka` (
  `user_id` varchar(100) NOT NULL,
  `kode_kosan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `kode_kosan` varchar(200) NOT NULL,
  `kamar_mandi_dalam` varchar(10) NOT NULL,
  `tempat_tidur` varchar(10) NOT NULL,
  `lemari` varchar(10) NOT NULL,
  `meja` varchar(10) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `tv` varchar(10) NOT NULL,
  `tv_kabel` varchar(10) NOT NULL,
  `kipas_angin` varchar(10) NOT NULL,
  `air_panas` varchar(10) NOT NULL,
  `telepon` varchar(10) NOT NULL,
  `wastafel` varchar(10) NOT NULL,
  `internet` varchar(10) NOT NULL,
  `kulkas` varchar(10) NOT NULL,
  `rak_buku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`kode_kosan`, `kamar_mandi_dalam`, `tempat_tidur`, `lemari`, `meja`, `ac`, `tv`, `tv_kabel`, `kipas_angin`, `air_panas`, `telepon`, `wastafel`, `internet`, `kulkas`, `rak_buku`) VALUES
('0', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12002', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', ''),
('12003', '', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', ''),
('12009', '', '', 'yes', 'yes', '', '', '', '', '', '', '', '', '', ''),
('12010', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', ''),
('12011', 'yes', 'yes', 'yes', 'yes', '', '', '', '', 'yes', '', '', '', '', 'yes'),
('12012', '', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', ''),
('12013', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', ''),
('12014', '', 'yes', 'yes', '', '', '', '', '', '', '', '', 'yes', '', ''),
('12015', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12016', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12017', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12018', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12019', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12020', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12021', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12022', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12023', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12024', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12025', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12026', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12027', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12028', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12029', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12030', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no'),
('12031', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes'),
('12032', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no'),
('12034', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'yes'),
('12037', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_terdekat`
--

CREATE TABLE `fasilitas_terdekat` (
  `kode_kosan` varchar(10) NOT NULL,
  `warnet` varchar(10) NOT NULL,
  `warteg` varchar(10) NOT NULL,
  `balai_kesehatan` varchar(10) NOT NULL,
  `masjid` varchar(10) NOT NULL,
  `gereja` varchar(10) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `indomaret` varchar(10) NOT NULL,
  `alfamart` varchar(10) NOT NULL,
  `circle_k` varchar(10) NOT NULL,
  `mall` varchar(10) NOT NULL,
  `supermarket` varchar(10) NOT NULL,
  `rumah_sakit` varchar(10) NOT NULL,
  `akses_transportasi` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_terdekat`
--

INSERT INTO `fasilitas_terdekat` (`kode_kosan`, `warnet`, `warteg`, `balai_kesehatan`, `masjid`, `gereja`, `bank`, `indomaret`, `alfamart`, `circle_k`, `mall`, `supermarket`, `rumah_sakit`, `akses_transportasi`) VALUES
('12002', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', ''),
('12003', '', 'yes', '', 'yes', '', '', '', '', '', '', '', '', ''),
('12013', '', 'yes', 'yes', 'yes', '', '', 'yes', '', '', '', '', '', ''),
('12014', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12015', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12016', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12017', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12018', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12019', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12020', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12021', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12022', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12023', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12024', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12025', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12026', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12027', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12028', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12009', '', 'yes', '', 'yes', '', '', 'yes', '', '', '', '', '', ''),
('12010', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', ''),
('12011', '', 'yes', 'yes', 'yes', '', '', 'yes', '', '', '', '', 'yes', 'yes'),
('12012', '', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', ''),
('12029', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'yes'),
('0', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12030', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
('12031', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12032', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
('12034', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes'),
('12037', '', 'yes', 'yes', 'yes', '', '', 'yes', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_umum`
--

CREATE TABLE `fasilitas_umum` (
  `kode_kosan` varchar(10) NOT NULL,
  `dapur_bersama` varchar(10) NOT NULL,
  `ruangan_tamu` varchar(10) NOT NULL,
  `parkir_motor` varchar(10) NOT NULL,
  `parkir_mobil` varchar(10) NOT NULL,
  `kamar_mandi_bersama` varchar(10) NOT NULL,
  `kulkas_bersama` varchar(10) NOT NULL,
  `kantin` varchar(10) NOT NULL,
  `mesin_cuci` varchar(10) NOT NULL,
  `wifi` varchar(10) NOT NULL,
  `pembantu` varchar(10) NOT NULL,
  `tv_bersama` varchar(10) NOT NULL,
  `cctv` varchar(10) NOT NULL,
  `ruangan_makan` varchar(10) NOT NULL,
  `dispenser` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_umum`
--

INSERT INTO `fasilitas_umum` (`kode_kosan`, `dapur_bersama`, `ruangan_tamu`, `parkir_motor`, `parkir_mobil`, `kamar_mandi_bersama`, `kulkas_bersama`, `kantin`, `mesin_cuci`, `wifi`, `pembantu`, `tv_bersama`, `cctv`, `ruangan_makan`, `dispenser`) VALUES
('12002', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', ''),
('12003', 'yes', '', 'yes', '', 'yes', '', '', '', '', '', '', '', '', ''),
('12013', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', ''),
('12014', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12015', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12016', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12017', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12018', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12019', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12020', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12021', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12022', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12023', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12024', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12025', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12026', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12027', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12028', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12009', '', '', 'yes', '', 'yes', '', '', '', '', '', '', '', '', ''),
('12010', 'yes', '', 'yes', '', 'yes', '', '', '', '', 'yes', '', '', '', ''),
('12011', 'yes', 'yes', 'yes', '', 'yes', '', '', '', 'yes', 'yes', '', '', '', ''),
('12012', '', 'yes', 'yes', '', 'yes', '', '', '', '', '', '', '', '', ''),
('12029', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
('12030', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('12031', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'yes'),
('12032', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
('12037', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', ''),
('12034', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
('0', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `kode_galeri` int(11) NOT NULL,
  `kode_kosan` varchar(100) NOT NULL,
  `nama_gambar` varchar(200) NOT NULL,
  `file_gambar` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosan`
--

CREATE TABLE `kosan` (
  `kode_kosan` int(11) NOT NULL,
  `nama_kosan` varchar(200) NOT NULL,
  `alamat_kosan` text NOT NULL,
  `type_kosan` varchar(100) NOT NULL,
  `jenis_hunian` varchar(100) NOT NULL,
  `kategori_kampus` varchar(200) NOT NULL,
  `harga_kosan` varchar(100) NOT NULL,
  `harga_sewa2` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar_kosan` varchar(200) NOT NULL,
  `kode_pembuat` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `nomor_tlp` varchar(20) NOT NULL,
  `nomor_tlp2` varchar(20) NOT NULL,
  `url_alias` varchar(100) NOT NULL,
  `status_kosan` varchar(50) NOT NULL,
  `jumlah_view` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kosan`
--

INSERT INTO `kosan` (`kode_kosan`, `nama_kosan`, `alamat_kosan`, `type_kosan`, `jenis_hunian`, `kategori_kampus`, `harga_kosan`, `harga_sewa2`, `keterangan`, `gambar_kosan`, `kode_pembuat`, `nama_pemilik`, `nomor_tlp`, `nomor_tlp2`, `url_alias`, `status_kosan`, `jumlah_view`) VALUES
(12002, 'Kosan Ibu Ade', 'Jl. IR.H.Juanda, Gg. Abah Tamim ', '/Bln', 'Pria & Wanita', 'UNIKOM, ITHB, UNPAD, ITB', '500000', 'Rp. 500.000/Bln', 'Kosan Ibu Ade merupakan kosan yang bersih dan nyaman. Kosan ini dilengkapi dengan beragam fasilitas yang akan menunjang kebutuhan penghuni kosan', 'Ibu Ade.jpg', 'admin', 'Ibu Ade', '0228-8585-85', '085763518084', 'Jl. IR.H.Juanda, Gg. Abah Tamim ', 'setuju', '32'),
(12003, 'Kosan Ima', 'Jl. Bandung Timur No 67', '/Bln', 'Pria & Wanita', 'Dekat Kampus Lain', '600000', 'Rp. 500.000 - 600.000/Bln', 'Kosan bersih dan nyaman. Dengan harga yang murah penghuni kosan dapat merasakan berbagai fasilitas kamar dan fasilitas umum yang tersedia di kosan', 'kos6.jpg', 'admin', 'Ibu Ima', '0221-5345-34', '081365740978', 'Jl-Bandung-TImur-No-67', 'setuju', '12'),
(12013, 'Kosan Ibu Restu', 'Jl. Dago Timur No. 19', '/Bln', 'Pria', 'UNIKOM, ITHB, UNPAD, ITB', '850000', 'Rp 850.000/Bln', 'Kosan Ibu Restu merupakan kosan yang nyaman dan aman. Lokasi kosan strategis dekat dengan toserba, tempat makan, dan apotik', '', 'admin', 'Ibu Restu', '088863215463', '081364791274', 'Jl-Dago-Timur-19', 'setuju', '25'),
(12014, 'Kosan Lilis', 'Jl. Ir. H. Djuanda 117', '/Bln', 'pria', 'UNIKOM, ITHB, UNPAD, ITB', '500000', 'Rp 500.000/Bln', 'Kosan bersih dan nyaman. Dilengkapi dengan wifi yang akan membuat penghuni kosan merasa betah', ' . jpg', 'lilis', 'hgfjdsh', 'jfhjsd', 'hfjdsah', '', '', ''),
(12012, 'Kosan Ibu Rini', 'Jl. Bangbayang No. 64', '/Bln', 'Pria & Wanita', 'UNIKOM, ITHB, UNPAD, ITB', '750000', 'Rp 750.000/Bln', 'Kosan ini diperuntukan bagi pria dan wanita. Menyediakan berbagai macam fasilitas untuk membuat penghuni kosan merasa aman dan nyaman', '', 'admin', 'Ibu Rini', '081274675883', '085671758481', 'Jl-Bangbayang-64', 'setuju', '29'),
(12011, 'Kosan Pak Suherwan', 'Jl. Cisitu Lama Gg. 7 No. 31', '/Thn', 'Pria', 'UNIKOM, ITHB, UNPAD, ITB', '10000000', 'Rp 10.000.000 - 14.000.000/Thn', 'Kosan Pak Suherwan memiliki harga yang bervariasi tergantung keadaan kamar. Kamar dengan kamar mandi dalam & water heater 14jt/thn.', 'kos7.jpg', 'admin', 'Pak Suherwan', '081274516666', '', 'Jl-Cisitu-Lama-Gg-7-No-31', 'setuju', '74'),
(12010, 'Kos Ibu Farida', 'Jl. Terusan Buah Batu No. 20 Bandung', '/Thn', 'Pria & Wanita', 'TELKOM UNIVERSITY', '5500000', 'Rp 5.500.000/Thn', 'Kosan Ibu Farida aman dan nyaman. Kosan ini sangat startegis karena dekat dengan Telkom University, tempat makan, tempat ibadah, dan apotik', 'kos5.jpg', 'admin', 'Ibu Farida', '081354767681', '089715653566', 'Jl-Terusan-Buah-Batu-20', 'setuju', '56'),
(12009, 'Kosan Cemara', 'Jl. Sekeloa No. 10 Bandung', '/Bln', 'Wanita', 'UNIKOM, ITHB, UNPAD, ITB', '450000', 'Rp 450.000/Bln', 'Kosan Cemara merupakan kos khusus putri. Kosan ini terletak di Jl. Sekeloa No. 10. Kosan ini tergolong aman karena terdapat penjaga kosan', 'kos4.jpg', 'admin', 'Bapak Adi', '085646371728', '081157376765', 'Jl-Sekeloa-10', 'setuju', '41'),
(12029, 'Kosan Kenanga', 'Jl. Ir. H. Djuanda no. 165', '/Bln', 'wanita', 'UNIKOM, ITHB, UNPAD, ITB', '650000', 'Rp 650.000/Bln', 'Kosan kenanga merupakan kosan putri yang bersih dan nyaman. Kamar kosan sudah dilengkapi tempat tidur, lemari, dan meja. Harga terjangkau', 'Kosan Kenanga-9181848a960a195abf4f29dad2536c4cec010c76.jpg', 'tiara', 'Ibu Tuti', '085681672683', '085435721767', '', '', ''),
(12030, 'Kosan Bunga', 'Jl. Buah Batu no. 63', '/Bln', 'Pria & Wanita', 'TELKOM UNIVERSITY', '700000', 'Rp 700.000/Bln', 'Kosan Bunga merupakan kosan yang bersih dan nyaman untuk ditinggali. Lantai pertama ditempati oleh wanita dan lantai kedua ditempati oleh pria.', 'Kosan Bunga-d30713a5e6f715d2e4e4be3843b9ebeae4b455e1.', 'dinda', 'Ibu Herawati', '087167637671', '081676275735', '', '', ''),
(12031, 'Kosan Kencana', 'Jl. Wastukencana 50 A', '/Bln', 'pw', 'UNISBA, UNPAS', '1900000', 'Rp 1.900.000/Bln', 'Kosan eksklusif di pusat kota Bandung. Dekat dengan sarana pendidikan kampus serta dilengkapi dengan beragam fasilitas yang memadai', 'Kosan Kencana-1d0ed214a4133bb02424c36f4d702a15ccb373b2.JPG', 'amelia', 'Bapak Riyan', '081320348288', '022-4233101', '', '', ''),
(12032, 'Wisma Shafira', 'Jl. PGA No. 113 Bandung', '/Thn', 'Pria & Wanita', 'TELKOM UNIVERSITY', '5000000', 'Rp 5.000.000/Thn', 'Kost-kostan ini terdapat 2 lantai dan tersedia untuk putra dan putri. Namun jangan khawatir, tempat kost putra dan putri dipisahkan oleh lorong tangga.', 'Wisma Shafira-529632cd425a74d2dbffc4b398819f3be870f726.JPG', 'adi', 'Ibu H. Sri', '08122160079', '022-5207801', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `kode_kosan` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lon` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`kode_kosan`, `nama`, `alamat`, `lat`, `lon`) VALUES
('0', '107.60548365380862', '107.60548365380862', 107.605484, 107.605484),
('12002', 'Kosan Ibu Ade', 'Jl. IR.H.Juanda, Gg. Abah Tamim', -6.883921, 107.617416),
('12003', 'Kosan Ima', 'Jl. Bandung Timur No 67', -6.914937, 107.605484),
('12009', 'Kosan Cemara', 'Jl. Sekeloa No. 10 Bandung', -6.914937, 107.605484),
('12010', 'Kos Ibu Farida', 'Jl. Terusan Buah Batu No. 20 Bandung', -6.914937, 107.605484),
('12011', 'Kosan Pak Suherwan', 'Jl. Cisitu Lama Gg. 7 No. 31', -6.914937, 107.605484),
('12012', 'Kosan Ibu Rini', 'Jl. Bangbayang No. 64', -6.914937, 107.605484),
('12013', 'Kosan Ibu Restu', 'Jl. Dago Timur No. 19', -6.914937, 107.605484),
('12014', 'hfjashjk', 'fksak', 0.000000, 0.000000),
('12015', 'hfjashjk', 'fksak', 0.000000, 0.000000),
('12016', 'hfjashjk', 'fksak', 107.605484, 107.605484),
('12017', 'Balala', 'Kosan Jalan', 107.621262, 107.621262),
('12018', 'Balala', 'Kosan Jalan', 107.621262, 107.621262),
('12019', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12020', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12021', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12022', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12023', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12024', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12025', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12026', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12027', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12028', 'Baalal', 'Baalal', 107.210487, 107.210487),
('12029', 'Kosan Kenanga', 'Jl. Ir. H. Djuanda no. 165', 0.000000, 0.000000),
('12030', 'Kosan Bunga', 'Jl. Buah Batu no. 63', -6.939378, 107.624474),
('12031', 'Kosan Kencana', 'Jl. Wastukencana 50 A', 0.000000, 0.000000),
('12032', 'Wisma Shafira', 'Jl. PGA No. 113 Bandung', 0.000000, 0.000000),
('12034', '107.60548365380862', '107.60548365380862', -6.914937, 107.605484);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mayoritas_penghuni`
--

CREATE TABLE `mayoritas_penghuni` (
  `kode_kosan` varchar(50) NOT NULL,
  `pelajar` varchar(10) NOT NULL,
  `mahasiswa` varchar(10) NOT NULL,
  `mahasiswi` varchar(10) NOT NULL,
  `karyawan` varchar(10) NOT NULL,
  `karyawati` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mayoritas_penghuni`
--

INSERT INTO `mayoritas_penghuni` (`kode_kosan`, `pelajar`, `mahasiswa`, `mahasiswi`, `karyawan`, `karyawati`) VALUES
('0', 'no', 'no', 'no', 'no', 'no'),
('12002', 'yes', 'yes', 'yes', 'yes', ''),
('12003', '', 'yes', '', 'yes', ''),
('12013', '', 'yes', 'yes', '', ''),
('12016', 'no', 'no', 'no', 'no', 'no'),
('12017', 'no', 'no', 'no', 'no', 'no'),
('12018', 'no', 'no', 'no', 'no', 'no'),
('12019', 'no', 'no', 'no', 'no', 'no'),
('12020', 'no', 'no', 'no', 'no', 'no'),
('12021', 'no', 'no', 'no', 'no', 'no'),
('12022', 'no', 'no', 'no', 'no', 'no'),
('12023', 'no', 'no', 'no', 'no', 'no'),
('12024', 'no', 'no', 'no', 'no', 'no'),
('12025', 'no', 'no', 'no', 'no', 'no'),
('12026', 'no', 'no', 'no', 'no', 'no'),
('12027', 'no', 'no', 'no', 'no', 'no'),
('12028', 'no', 'no', 'no', 'no', 'no'),
('12029', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12030', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12031', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12032', 'no', 'no', 'no', 'no', 'no'),
('12034', 'yes', 'yes', 'yes', 'yes', 'yes'),
('12037', '', '', 'yes', '', 'yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`user_id`, `username`, `password`, `email`, `full_name`, `alamat`, `gambar`, `telp`) VALUES
(1, 'upay', 'upay', 'upaytonji@gmail.com', 'Upay Tonji', '', '', ''),
(2, 'adi', '1234', 'adi@gmail.com', 'Supriadi w', '', '', ''),
(3, 'upaytonji', '1234', 'upaytonji@gmail.com', 'Supriadi', '', '', ''),
(4, 'upay2', '12345', 'upaytonji@gmail.com', 'Supriadi', '', '', ''),
(5, 'aidil', 'upay', 'aidil@gmail.com', 'Aidil', '', '', ''),
(7, 'budhay', 'budhay', 'upaytonji@gmail.com2', 'Tonji Wijaya', 'Jln. Kubang Sari 3 No.180', 'budhay.jpg', '081806652028'),
(8, 'wijaya', '1234', 'wijaya@gmail.com', 'Tonji Wijaya', 'Jl. Bandung Jaya', 'wijaya.jpg', '345353535'),
(9, 'candra', 'candra', 'candra@gmail.com', 'Candra Yuda', 'Jl. Bangbayang No.37', 'candra.png', '08532-xxx-xxxx'),
(10, 'dfgdgdfg', 'sdfsfds', 'dfgdgdfg@sdfsf', 'dfgdgdg', '', '', ''),
(11, 'qqqqqqq', 'qqqqqqqq', 'qqqq@qqq', 'qwqwqwq', '', '', ''),
(12, 'Nico', '1234', 'Nico@gmail.com', 'Nico', '', '', ''),
(13, 'geisya', '1234', 'geisya@gmail.com', 'Geisya Yong', '', '', ''),
(14, 'baim', '1234', 'tabri@gmail.com', 'Tabri Bo', 'asdadada', 'tabri.png', '32423424234'),
(15, 'baik', '1234', 'upaytonji@gmail.com', 'Baik', '', '', ''),
(16, 'jotos', '1234', '1234@sdfsfd', 'Jotos', '', '', ''),
(17, 'Bayu', '1234', 'bayu@gmail.com', 'Bayu', '', '', ''),
(18, 'lela', '1234', 'upaytonji@gmail.com', 'Lela', '', '', ''),
(19, 'aaa', '1234', 'amurisin@yahoo.com', 'Aaa', '', '', ''),
(20, 'irma', '1234', 'irma@gmial.com', 'Irma', '', '', ''),
(21, 'bayu', '1234', 'budi@gmail.com', 'Bayu', '', '', ''),
(22, 'budiman', '123456', 'budiman@gmail.com', 'Budiman', '', '', ''),
(23, 'dina', '$2y$12$TmcmXXRgZVBmI1A5SitlL.37F', 'auliaaudina@gmail.com', 'Aulia Audina', '', '', ''),
(24, 'adam', '$2y$12$TmcmXXRgZVBmI1A5SitlL.xj9', 'adam@gmail.com', 'Akhmad Adam', '', '', ''),
(25, 'quin', '$2y$12$TmcmXXRgZVBmI1A5SitlL.DQX', 'quin@gmail.com', 'Quinov Olivia', '', '', ''),
(26, 'annisa', '$2y$12$TmcmXXRgZVBmI1A5SitlL.452', 'miegoreng10@gmail.com', 'Annisa Amelia', '', '', ''),
(27, 'yogi', '$2y$12$TmcmXXRgZVBmI1A5SitlL.wxGsefXT42W57uKET6Q34.d01adDufu', 'hansyogi@gmail.com', 'Hans Yogi', '', '', ''),
(28, 'yeni', '$2y$12$TmcmXXRgZVBmI1A5SitlL.cR34GTLuEXhhSMeSNVaqXkYViMMcWCq', 'yeniy@gmail.com', 'Yeni Yulia', '', '', ''),
(29, 'amelia', '$2y$12$TmcmXXRgZVBmI1A5SitlL.lttH2QYyPlx2yX6XBSM.hNJ0KIDdhKC', 'amelia@gmail.com', 'Amelia', 'Jl. Lengkong Kecil No. 18 Bandung', 'tulips.jpg', '081365980372'),
(30, 'putra', '$2y$12$TmcmXXRgZVBmI1A5SitlL.Xsgm37xLzzDjsQJV0Kso7LprPlP1so6', 'putra@gmail.com', 'Irawan Putra', 'Jl. Haur Pancuh no. 44', '', '083876593251'),
(31, 'andreas', '$2y$12$TmcmXXRgZVBmI1A5SitlL.LXSnBLFBI81t.Xc2fXuvWT18VX6p5qS', 'andreas96@gmail.com', 'Andreas', 'Jl. Patimura 76', '', '081245879082');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik_kos`
--

CREATE TABLE `pemilik_kos` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik_kos`
--

INSERT INTO `pemilik_kos` (`user_id`, `username`, `password`, `email`, `full_name`, `alamat`, `gambar`, `telp`) VALUES
(14, 'tabri', '1234', 'tabri@gmail.com', 'Tabri Bo', 'asdadada', '', '32423424234'),
(15, 'baik', '1234', 'upaytonji@gmail.com', 'Baik', '', '', ''),
(16, 'jotos', '1234', '1234@sdfsfd', 'Jotos', '', '', ''),
(17, 'Bayu', '1234', 'bayu@gmail.com', 'Bayu', '', '', ''),
(18, 'lela', '1234', 'upaytonji@gmail.com', 'Lela', '', '', ''),
(19, 'aaa', '1234', 'amurisin@yahoo.com', 'Aaa', '', '', ''),
(20, 'irma', '1234', 'irma@gmial.com', 'Irma', '', '', ''),
(21, 'bayu', '1234', 'budi@gmail.com', 'Bayu', '', '', ''),
(22, 'budiman', '123456', 'budiman@gmail.com', 'Budiman', '', '', ''),
(23, 'tiara', '$2y$12$TmcmXXRgZVBmI1A5SitlL.yT8urZ8DKQhYqWsqCoJPcDcHbyxgFhO', 'tiarafania@gmail.com', 'Tiara Fania', '', '', ''),
(24, 'lilis', '$2y$12$TmcmXXRgZVBmI1A5SitlL.DAaOAeIZg39dRROIh62kucCxtCAaPcy', 'lilisekawati@gmail.com', 'Lilis Ekawati', '', '', ''),
(25, 'adi', '$2y$12$TmcmXXRgZVBmI1A5SitlL.xu2I./HqtX8hAxLkWeTmLNrAuT0Bus6', 'adisantoso@gmail.com', 'Adi Santoso', '', '', ''),
(26, 'dinda', '$2y$12$TmcmXXRgZVBmI1A5SitlL.yRmyaKAXu8/1XtCbbtYiha9WDdXwjC2', 'dindasabila@gmail.com', 'Dinda Sabila', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengelola`
--

CREATE TABLE `pengelola` (
  `user_id` int(5) NOT NULL,
  `username_admin` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengelola`
--

INSERT INTO `pengelola` (`user_id`, `username_admin`, `password`, `email`, `fullname`, `active`) VALUES
(2, 'upay', 'cbf018397001c66ff1b8b3d848bcfdbb', 'upaytonji@gmail.com', 'Tonji', 0),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'upaytonji@gmail.com', 'Supriadi', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `kode_pertanyaan` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`kode_pertanyaan`, `user_id`, `judul`, `pertanyaan`) VALUES
(1, '7', '', 'fvfgfgfgfgfgfgfg'),
(2, '7', '', 'kujgc g hgyxcuyxcuocou'),
(3, '2', '', 'Pertanyaa dari upay ya min'),
(4, '7', '', 'asdasdasdasdsd'),
(5, '7', 'Test Judul', 'Ini adalah isi pesan'),
(6, '7', 'Udah Makan Blm', 'Sudah makan siang belum?'),
(7, '7', 'Coba lagi', 'Kamu bisa gak?'),
(8, '7', 'Sudah Makan Blm', 'Jangan Lupa makan ya...'),
(9, '2', '', 'miminnn'),
(10, '2', '', 'Minmi ini udah subuh'),
(11, '', 'Test', 'Kapan semua kosan saya disetujui?'),
(12, '22', 'Kirim Pesan', 'Uji coba kirim pesan ke admin'),
(13, '', 'Test', 'Test kirim pesan ke admin'),
(14, '31', 'Testing', 'Coba kirim pesan ke admin'),
(15, '26', 'Uji Coba', 'Uji coba kirim pesan ke admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanya_status`
--

CREATE TABLE `tanya_status` (
  `kode_tanya` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `kode_kosan` varchar(10) NOT NULL,
  `pertanyaan` text NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanya_status`
--

INSERT INTO `tanya_status` (`kode_tanya`, `user_id`, `kode_kosan`, `pertanyaan`, `berkas`) VALUES
(1, '7', '28', 'ghdfghd', '1.sql'),
(2, '7', '68', 'kok kosan ini blm aktif min?', '2.'),
(3, '7', '67', 'kosan ini kok blm aktif juga?', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`kode_kosan`),
  ADD KEY `kode_kosan` (`kode_kosan`);

--
-- Indexes for table `fasilitas_terdekat`
--
ALTER TABLE `fasilitas_terdekat`
  ADD PRIMARY KEY (`kode_kosan`);

--
-- Indexes for table `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  ADD PRIMARY KEY (`kode_kosan`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`kode_galeri`);

--
-- Indexes for table `kosan`
--
ALTER TABLE `kosan`
  ADD PRIMARY KEY (`kode_kosan`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`kode_kosan`);

--
-- Indexes for table `mayoritas_penghuni`
--
ALTER TABLE `mayoritas_penghuni`
  ADD PRIMARY KEY (`kode_kosan`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `pemilik_kos`
--
ALTER TABLE `pemilik_kos`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- Indexes for table `tanya_status`
--
ALTER TABLE `tanya_status`
  ADD PRIMARY KEY (`kode_tanya`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `kode_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `kosan`
--
ALTER TABLE `kosan`
  MODIFY `kode_kosan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12038;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pemilik_kos`
--
ALTER TABLE `pemilik_kos`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `kode_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tanya_status`
--
ALTER TABLE `tanya_status`
  MODIFY `kode_tanya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
