-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2020 pada 02.48
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_case`
--

CREATE TABLE `tb_case` (
  `id_case` int(11) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `total_case` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_case`
--

INSERT INTO `tb_case` (`id_case`, `id_negara`, `total_case`) VALUES
(1, 1, 1029878),
(2, 2, 232128),
(3, 3, 201505),
(4, 4, 165911),
(5, 5, 161145),
(6, 6, 159431),
(7, 7, 114653),
(8, 8, 93558),
(9, 9, 92584),
(10, 10, 82836);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_negara`
--

CREATE TABLE `tb_negara` (
  `id_negara` int(11) NOT NULL,
  `nama_negara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_negara`
--

INSERT INTO `tb_negara` (`id_negara`, `nama_negara`) VALUES
(1, 'USA'),
(2, 'Spain'),
(3, 'Italy'),
(4, 'France'),
(5, 'UK'),
(6, 'Germany'),
(7, 'Turkey'),
(8, 'Russia'),
(9, 'Iran'),
(10, 'China');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_case`
--
ALTER TABLE `tb_case`
  ADD PRIMARY KEY (`id_case`);

--
-- Indeks untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_case`
--
ALTER TABLE `tb_case`
  MODIFY `id_case` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  MODIFY `id_negara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
