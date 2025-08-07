-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Agu 2025 pada 13.00
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `nim` bigint NOT NULL,
  `nama_mahasiswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_sertifikasi` enum('Junior Web','Junior Desain','Junior Network') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`nim`, `nama_mahasiswa`, `jenis_sertifikasi`, `created_at`, `updated_at`) VALUES
(3042022001, 'A', 'Junior Web', '2025-08-07 05:44:10', '2025-08-07 05:44:10'),
(3042022002, 'B', 'Junior Web', '2025-08-07 05:44:26', '2025-08-07 05:44:26'),
(3042022003, 'C', 'Junior Web', '2025-08-07 05:45:06', '2025-08-07 05:45:06'),
(3042022004, 'D', 'Junior Web', '2025-08-07 05:45:17', '2025-08-07 05:45:17'),
(3042022005, 'E', 'Junior Web', '2025-08-07 05:51:21', '2025-08-07 05:51:21'),
(3042022018, 'Nurhayati', 'Junior Desain', '2025-08-07 05:40:26', '2025-08-07 05:40:26'),
(3042022041, 'Fifin Efendie', 'Junior Network', '2025-08-07 05:40:47', '2025-08-07 05:40:47'),
(3042022044, 'Muhammad Lukman Hakim', 'Junior Web', '2025-08-07 05:24:17', '2025-08-07 05:24:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
