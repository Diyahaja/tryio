-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2023 pada 12.21
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sewatv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`nama`, `telepon`, `foto`) VALUES
('dd', '0899900000', '0.png'),
('febriana', '089462783362', 'WhatsApp Image 2023-09-03 at 21.06.39.jpeg'),
('jj', '0899900000', '0.png'),
('jj Remik', '0899900000', '0.png'),
('jj Remik 1', '0899900000', '0.png'),
('jj Remik 2', '0899900000', 'Jasa-rental-TV-plasma-semarang.jpg'),
('jj Remik Full', '0899900000', 'Jasa-rental-TV-plasma-semarang.jpg'),
('jj Remik Full BASs', '0899900000', 'Jasa-rental-TV-plasma-semarang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor` int(100) NOT NULL,
  `modeltv` varchar(100) NOT NULL,
  `durasisewa` int(100) NOT NULL,
  `metodepembayaran` int(100) NOT NULL,
  `tanggalpemesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`nama`, `alamat`, `nomor`, `modeltv`, `durasisewa`, `metodepembayaran`, `tanggalpemesanan`) VALUES
('febriana', 'purwosari kudus', 235465475, 'PAKET LENGKAP', 3, 1, '2023-12-04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD UNIQUE KEY `nama` (`nama`,`alamat`,`nomor`,`modeltv`,`durasisewa`,`metodepembayaran`,`tanggalpemesanan`),
  ADD UNIQUE KEY `nama_2` (`nama`,`alamat`,`nomor`,`modeltv`,`durasisewa`,`metodepembayaran`,`tanggalpemesanan`),
  ADD UNIQUE KEY `nama_3` (`nama`,`alamat`,`nomor`,`modeltv`,`durasisewa`,`metodepembayaran`,`tanggalpemesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
