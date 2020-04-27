-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2020 pada 05.35
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
-- Struktur dari tabel `mengawasi`
--

CREATE TABLE `mengawasi` (
  `id_mengawasi` int(11) NOT NULL,
  `id_donor` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mengawasi`
--

INSERT INTO `mengawasi` (`id_mengawasi`, `id_donor`, `id_admin`) VALUES
(1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mengawasi`
--
ALTER TABLE `mengawasi`
  ADD PRIMARY KEY (`id_mengawasi`),
  ADD KEY `id_donor` (`id_donor`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mengawasi`
--
ALTER TABLE `mengawasi`
  MODIFY `id_mengawasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mengawasi`
--
ALTER TABLE `mengawasi`
  ADD CONSTRAINT `mengawasi_ibfk_1` FOREIGN KEY (`id_donor`) REFERENCES `data_donor` (`id_donor`),
  ADD CONSTRAINT `mengawasi_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
