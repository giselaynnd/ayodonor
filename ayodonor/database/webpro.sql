-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2020 pada 05.21
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'ngadimin', 'admin@admin.com', 'adminhehe'),
(2, 'hehe', 'hehe@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `date_created` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `noHP` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama`, `instansi`, `asal`, `noHP`, `email`, `password`, `status`) VALUES
(1, 'Sarah', 'telkom', 'bandung', '0813372633', 'ersarahr@gmail.com', 'heyhey31', 0),
(2, 'Ferdi', 'Telkom', 'KOTA CIMAHI', '08999999', 'ferdisetyono@gmail.com', 'hehekamujelek', 1),
(3, 'Mawar', 'Telkom', 'Bali', '089999', 'mawarsilveria@gmail.com', '123456', 0),
(4, 'Gisel', 'Telkom', 'Purwodadi', '0877777', 'giselayunanda@gmail.com', '123456', 0),
(5, 'Nabila', 'Telkom', 'Kalimantan', '0899999', 'nabilaaura@gmail.com', '123456', 2),
(6, 'Dzikri', 'Telkom', 'Bandung', '12121212', 'dzikri@gmail.com', '123456', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_donor`
--

CREATE TABLE `tempat_donor` (
  `id_tempat` int(11) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `alamat_tempat` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `tempat_donor`
--
ALTER TABLE `tempat_donor`
  ADD PRIMARY KEY (`id_tempat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tempat_donor`
--
ALTER TABLE `tempat_donor`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
