-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2019 pada 16.21
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `simusik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara`
--

CREATE TABLE IF NOT EXISTS `acara` (
  `id_acara` int(20) NOT NULL AUTO_INCREMENT,
  `nama_acara` varchar(255) NOT NULL,
  `tgl_acara` date NOT NULL,
  `alamat_acara` text NOT NULL,
  `waktu_acara` time NOT NULL,
  `gambar` text NOT NULL,
  `nama_genre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_acara`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `acara`
--

INSERT INTO `acara` (`id_acara`, `nama_acara`, `tgl_acara`, `alamat_acara`, `waktu_acara`, `gambar`, `nama_genre`) VALUES
(8, 'Konser Petra ', '2018-01-24', 'Gedung Cakrawala', '20:00:00', 'petra.jpg', 'pop'),
(19, 'Konser RAN', '2018-02-22', 'Gedung Kartika', '20:00:00', 'ran1.jpg', 'akustik'),
(20, 'Konser Hivi', '2018-02-28', 'Graha Cakrawala', '18:00:00', 'hivi1.jpg', 'jazz'),
(22, 'Konser Gisel', '2018-03-06', 'Graha Cakrawala', '19:30:00', 'gisel.png', 'pop'),
(26, 'Konser Yura', '2018-02-18', 'Graha Cakrawala', '14:00:00', 'yura1.jpg', 'akustik'),
(27, 'Konser Judika', '2018-02-13', 'Gedung Kartika', '20:00:00', 'judika1.jpg', 'rock'),
(29, 'Konser Afgan', '2018-02-25', 'Lapangan Rampal', '18:00:00', 'Afgan1.jpg', 'akustik'),
(31, 'Konser Raisa', '2018-01-11', 'Gedung kartika', '20:00:00', 'raisa4.jpg', 'akustik'),
(32, 'Konser Jazz', '2018-02-24', 'Gedung Cakrawala', '00:00:00', '005075918_500.jpg', 'jazz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
  `id_harga` int(11) NOT NULL AUTO_INCREMENT,
  `id_acara` int(11) NOT NULL,
  `jenis_tiket` int(11) NOT NULL,
  `harga` double NOT NULL,
  PRIMARY KEY (`id_harga`),
  KEY `id_acara` (`id_acara`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_harga`, `id_acara`, `jenis_tiket`, `harga`) VALUES
(1, 29, 0, 35000),
(2, 29, 1, 75000),
(3, 29, 2, 150000),
(4, 22, 0, 35000),
(5, 22, 1, 75000),
(6, 22, 2, 150000),
(7, 20, 0, 35000),
(10, 27, 0, 35000),
(11, 20, 1, 75000),
(12, 20, 2, 150000),
(14, 27, 1, 75000),
(15, 27, 2, 150000),
(16, 8, 0, 40000),
(17, 8, 1, 80000),
(18, 8, 2, 120000),
(19, 31, 0, 60000),
(20, 31, 1, 100000),
(21, 31, 2, 175000),
(22, 19, 0, 45000),
(23, 19, 1, 90000),
(24, 19, 2, 180000),
(25, 26, 0, 25000),
(26, 26, 1, 50000),
(27, 26, 2, 100000),
(28, 32, 0, 25000),
(29, 32, 1, 50000),
(30, 32, 2, 75000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`nama`, `email`, `komentar`, `id_komentar`) VALUES
('bila', 'nabillabasharahil@gmail.com', 'Sangat membantu sekali dalam memberikan informasi acara musik di kota malang', 8),
('erma', 'erma@gmail.com', 'haloo', 9),
('Nabilla', 'nabillabasharahil@gmail.com', 'Keren abis', 10),
('erma', 'erma@go', 'Kereeeen', 11),
('erma', 'erma@gmail.com', 'Kerenn', 13),
('nka', 'knsqkkq@JEd', 'wek', 14),
('Yeni', 'yeninurazizah@gmail.com', 'bagus sekaliii', 15),
('yeni', 'yeninurazizah@gmail.com', 'kurang memuaskan', 16),
('yeni', 'yeninurazizah@gmail.com', 'bagus', 17),
('dian', 'dianamanda@gmail.com', 'seharusnya lebih banyak informasi yang up to date', 18),
('dian', 'dianamanda@gmail.com', 'bagusss sekaliiii', 19),
('iin', 'iin@gmail.com', 'bagus', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `target_user` int(11) NOT NULL,
  `target_link` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `is_read` tinyint(4) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `target_user`, `target_link`, `title`, `subtitle`, `is_read`, `waktu`) VALUES
(3, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'nabila mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-11 02:55:37'),
(4, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'bang faisal mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-11 03:47:35'),
(5, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'bila mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-12 01:37:03'),
(6, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'agung mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-12 01:47:29'),
(7, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'agung mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-12 02:06:20'),
(8, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'bila mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-12 02:12:38'),
(9, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'erma mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-12 02:14:17'),
(10, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'bila mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-12 02:24:18'),
(11, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'erma mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-12 02:40:18'),
(12, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'alifia mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-12 10:04:40'),
(13, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'Erma mengomentari tiket anda', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-12 14:12:19'),
(14, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'erma Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:06:28'),
(15, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'lipi Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:16:22'),
(16, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'mb Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:17:01'),
(17, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'yi Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:17:12'),
(18, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'jwhui Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:20:09'),
(19, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'whiohHIWH Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:21:09'),
(20, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'sbqh Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:22:30'),
(21, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'hqwiu Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:23:14'),
(22, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:52:41'),
(23, 1, 'http://localhost/konser/index.php/admin/data_email', 'Nabila@yahoo.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:56:46'),
(24, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'nabilla Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:57:22'),
(25, 1, 'http://localhost/konser/index.php/admin/data_email', 'alifiaputri.ramadhani@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:58:08'),
(26, 1, 'http://localhost/konser/index.php/admin/data_email', 'erma@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 12:59:14'),
(27, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabila@yahoo.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:04:01'),
(28, 1, 'http://localhost/konser/index.php/admin/data_email', 'agung@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:04:51'),
(29, 1, 'http://localhost/konser/index.php/admin/data_email', 'agung@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:05:36'),
(30, 1, 'http://localhost/konser/index.php/admin/data_email', 'alifiaputri.ramadhani@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:06:39'),
(31, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:06:56'),
(32, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:07:38'),
(33, 1, 'http://localhost/konser/index.php/admin/data_email', 'ermarohma@yahoo.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:07:58'),
(34, 1, 'http://localhost/konser/index.php/admin/data_email', 'alifiaputri.ramadhani@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:08:31'),
(35, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabilla_br_24rpl@student.smktelkom-mlg.sch.id Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:08:59'),
(36, 1, 'http://localhost/konser/index.php/admin/data_email', 'erma@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-13 13:10:57'),
(37, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'Alifia Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-14 03:20:52'),
(38, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'erma Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-14 03:33:08'),
(39, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'alipi Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-14 03:42:21'),
(40, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'asjd Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-14 03:42:59'),
(41, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'asjd Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-14 03:42:59'),
(42, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 12:28:27'),
(43, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 12:31:32'),
(44, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 12:31:56'),
(45, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 12:32:26'),
(46, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 12:37:50'),
(47, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 12:38:17'),
(48, 1, 'http://localhost/konser/index.php/admin/data_email', 'erma@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 12:38:35'),
(49, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'Nabilla Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 13:09:12'),
(50, 1, 'http://localhost/konser/index.php/admin/data_email', 'erma@go Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 13:10:24'),
(51, 1, 'http://localhost/konser/index.php/admin/data_email', 'em@go Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 13:11:00'),
(52, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'erma Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-15 13:11:16'),
(53, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'alifia Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-16 02:41:45'),
(54, 1, 'http://localhost/konser/index.php/admin/data_email', 'alifia@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-16 02:45:35'),
(55, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'erma Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-16 03:02:21'),
(56, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabillabasharahil@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-16 03:02:45'),
(57, 1, 'http://localhost/konser/index.php/admin/data_email', 'nabilla_br_24rpl@student.smktelkom-mlg.sch.id Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-16 03:18:41'),
(58, 1, 'http://localhost/konser/index.php/admin/data_rating', 'd Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-24 04:25:57'),
(59, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'nka Memberikan Saran ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-01-24 04:29:04'),
(60, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'bila Memesan tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-02-03 08:06:18'),
(61, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'b, Memberikan Saran ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-02-03 08:10:43'),
(62, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'bila Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-02-03 08:17:23'),
(63, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'bila Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-02-03 08:18:20'),
(64, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'bil Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-02-03 08:21:38'),
(65, 1, 'http://localhost/konser/index.php/admin/data_transaksi', ' N Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-02-03 12:35:51'),
(66, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'Nabila Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-02-03 12:53:33'),
(67, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'Erma Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-02-06 08:54:55'),
(68, 1, 'http://localhost/konser/index.php/admin/data_rating', 'Nabilla Memberikan Komentar ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-02-07 02:57:38'),
(69, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'Yeni Memberikan Saran ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-03 15:08:21'),
(70, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'yeni Memberikan Saran ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-03 15:09:00'),
(71, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'yeni azizah Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-03 15:14:18'),
(72, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'lipi Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 10:58:05'),
(73, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'lipi Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 11:54:03'),
(74, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'lipi Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 12:21:58'),
(75, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'yeni Memberikan Saran ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 12:22:27'),
(76, 1, 'http://localhost/konser/index.php/admin/data_email', 'ermarohmawati@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 12:22:39'),
(77, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'dian Memberikan Saran ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 12:26:56'),
(78, 1, 'http://localhost/konser/index.php/admin/data_email', 'dianamanda@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 12:27:40'),
(79, 1, 'http://localhost/konser/index.php/admin/data_email', 'dianamanda@gmail.com Mengikuti Anda ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 14:12:25'),
(80, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'dian Memberikan Saran ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 14:12:46'),
(81, 1, 'http://localhost/konser/index.php/admin/data_transaksi', 'Yeni Azizah Memesan Tiket ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-03-04 14:14:11'),
(82, 1, 'http://localhost/konser/index.php/admin/data_komentar', 'iin Memberikan Saran ', 'Klik notifikasi untuk informasi lebih lanjut', 1, '2018-05-28 03:17:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `email` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `id_rating` int(11) NOT NULL AUTO_INCREMENT,
  `id_acara` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rating`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`email`, `komentar`, `id_rating`, `id_acara`, `nama`) VALUES
('nabillabasharahil@gmail.com', 'KEREEEEEEEEN', 5, 20, 'Nabilla');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `email` varchar(100) NOT NULL,
  `id_email` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `subscriber`
--

INSERT INTO `subscriber` (`email`, `id_email`) VALUES
('alifia@gmail.com', 22),
('nabillabasharahil@gmail.com', 23),
('ermarohmawati@gmail.com', 24),
('dianamanda@gmail.com', 25),
('dianamanda@gmail.com', 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `id_acara` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `mode_pembayaran` varchar(100) NOT NULL,
  `id_harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `transaksi_acara` (`id_acara`),
  KEY `id_harga` (`id_harga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama`, `id_acara`, `jumlah`, `total`, `status`, `mode_pembayaran`, `id_harga`, `id_user`) VALUES
(12, 'rawon', 26, 3, 75000, 1, 'BCA', 25, 7),
(33, 'Nabila', 8, 2, 80000, 1, 'BNI', 16, 8),
(34, 'Erma', 8, 2, 80000, 1, 'BNI', 16, 9),
(35, 'yeni azizah', 31, 2, 120000, 1, 'BCA', 19, 7),
(37, 'lipi', 31, 3, 180000, 1, 'BCA', 19, 8),
(38, 'lipi', 31, 3, 180000, 0, 'BCA', 19, 8),
(39, 'Yeni Azizah', 31, 3, 180000, 0, 'BCA', 19, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `gambar`) VALUES
(6, 'Erma Rohmawati', 'erma', 'erma1.JPG'),
(7, 'admin', 'admin', 'bila1.png'),
(8, 'lipi', 'lipi', 'lipi.jpg'),
(9, 'user', 'user', 'cinema6.png');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `harga_ibfk_1` FOREIGN KEY (`id_acara`) REFERENCES `acara` (`id_acara`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_acara` FOREIGN KEY (`id_acara`) REFERENCES `acara` (`id_acara`),
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_harga`) REFERENCES `harga` (`id_harga`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
