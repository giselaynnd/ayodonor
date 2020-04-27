-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2020 pada 05.59
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
-- Struktur dari tabel `data_donor`
--

CREATE TABLE `data_donor` (
  `id_donor` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `gol_darah` char(1) NOT NULL,
  `rhesus` char(1) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_donor`
--

INSERT INTO `data_donor` (`id_donor`, `id_peserta`, `id_tempat`, `gol_darah`, `rhesus`, `penyakit`, `status`) VALUES
(1, 5, 2, 'B', '+', 'Asma', 1),
(2, 3, 1, 'A', '-', 'gila', 1),
(5, 1, 1, 'O', '-', 'Asma', 1),
(6, 1, 1, 'O', '-', 'Asma', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_donor`
--
ALTER TABLE `data_donor`
  ADD PRIMARY KEY (`id_donor`),
  ADD KEY `id_peserta` (`id_peserta`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_donor`
--
ALTER TABLE `data_donor`
  MODIFY `id_donor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_donor`
--
ALTER TABLE `data_donor`
  ADD CONSTRAINT `data_donor_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`),
  ADD CONSTRAINT `data_donor_ibfk_2` FOREIGN KEY (`id_tempat`) REFERENCES `tempat_donor` (`id_tempat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
