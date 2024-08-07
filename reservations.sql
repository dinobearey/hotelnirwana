-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2024 pada 08.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `nomor_identitas` bigint(16) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') NOT NULL,
  `tipe_kamar` enum('Standar','Deluxe','Family') NOT NULL,
  `durasi_menginap` int(11) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `total_bayar` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reservations`
--

INSERT INTO `reservations` (`id`, `nama_pemesan`, `nomor_identitas`, `jenis_kelamin`, `tipe_kamar`, `durasi_menginap`, `discount`, `total_bayar`) VALUES
(5, 'rey', 1231231231231231, 'Perempuan', 'Standar', 3, '0', '1580000'),
(6, 'Andri Santosa', 3275091210770004, '', 'Standar', 3, '10', '1430000'),
(7, 'Andri Santosa', 3275091210770004, '', 'Standar', 3, '10', '1430000'),
(8, 'Andri Santosa', 3275091210770004, '', 'Standar', 3, '0', '1580000'),
(9, 'Andri Santosa', 3275091210770004, '', 'Standar', 3, '0', '1580000'),
(10, 'Andri Santosa', 3275091210770004, '', 'Standar', 3, '0', '1580000'),
(11, 'Andri Santosa', 3275091210770004, '', 'Standar', 3, '0', '1580000'),
(12, 'Andri Santosa', 3275091210770004, 'Perempuan', 'Standar', 3, '0', '1580000'),
(13, 'rey', 1231231231231231, '', 'Standar', 3, '0', '1580000'),
(14, 'rey', 1231231231231231, '', 'Standar', 3, '0', '1580000'),
(15, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(16, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(17, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(18, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(19, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(20, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(21, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(22, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(23, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(24, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(25, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(26, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(27, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(28, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(29, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(30, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(31, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(32, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(33, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(34, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(35, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(36, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(37, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(38, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(39, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(40, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(41, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(42, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(43, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(44, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(45, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(46, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(47, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(48, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(49, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(50, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(51, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(52, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(53, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(54, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(55, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(56, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(57, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(58, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(59, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(60, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(61, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(62, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(63, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(64, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(65, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(66, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(67, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(68, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(69, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(70, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(71, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(72, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(73, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(74, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(75, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(76, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(77, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(78, 'rey', 3275091210770004, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(79, 'rey', 3275091210770004, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(80, 'rey', 3275091210770004, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(81, 'rey', 3275091210770004, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(82, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(83, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(84, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(85, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(86, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(87, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(88, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(89, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(90, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(91, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(92, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000'),
(93, 'rey', 1231231231231231, 'Laki-laki', 'Standar', 3, '0', '1580000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
