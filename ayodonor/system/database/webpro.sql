-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2020 pada 19.39
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
(1, 'Admin', 'admin@admin.com', '$2y$10$rG19cKUodfBqAca10Jl/hu5ZRoWU9emss2TI.aX9Ebn5DZJYNgRHm');

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
(7, 11, 1, 'B', '-', 'Asma', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengawasi`
--

CREATE TABLE `mengawasi` (
  `id_mengawasi` int(11) NOT NULL,
  `id_donor` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `title`, `description`, `id_admin`, `date_created`) VALUES
(1, 'AKSI DONOR DARAH BERSAMA TELKOM UNIVERSITY', 'Telkom University mengadakan aksi donor darah bersama dengan PMI Bandung dalam rangka HUT Telkom University ke - 10, Aksi ini diselenggarakan pada tanggal 23-26 Februari 2020 di Lt.1 Gedung Tokong Nanas', 1, '15 Februari 2020'),
(2, 'PMI BANDUNG KEKURANGAN STOCK DARAH', 'PMI Bandung kekurangan persediaan golongan darah O, bagi yang ingin mendonorkan darah dapat mendaftarkan diri ke MI Bandung Jl.Asia Afrika no.50 Bandung Jawa Barat.', 1, '11 Februari 2020');

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
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama`, `instansi`, `asal`, `noHP`, `email`, `password`, `status`) VALUES
(11, 'SARAH RAHMAWATI', 'Telkom cantik', 'KOTA CIMAHI', '08999999', 'ersarahr@gmail.com', '$2y$10$ZOdNy7vtd7B.5Jb9ai9T7OZ0umzvVkjXGlPeX2A8ecfdq/XY3wjBm', 2),
(12, 'Gisela', 'Telkom', 'Purwodadi', '0877777', 'giselayunanda@gmail.com', '$2y$10$QEsQkLrxjOBNYjb2IvLbrOGgCiMQdX7s9b4typ0Olhl3q3nsY70HG', 0),
(13, 'Nabila', 'Telkom', 'Kalimantan', '0813372633', 'nabilaaura@gmail.com', '$2y$10$wFT.5WGPAeSAu09KHKIUXuq1sN3Lla221B9I.x5ckOGfbzNInl9GK', 0),
(14, 'Mawar', 'Telkom', 'Bali', '0813372633', 'mawarsilveria@gmail.com', '$2y$10$ubMTrJ6le8repAgJHtOmY.kOFbOZMdJQ8QX.zUtZIgvFb1MZqmIJ6', 0);

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
-- Dumping data untuk tabel `tempat_donor`
--

INSERT INTO `tempat_donor` (`id_tempat`, `nama_tempat`, `alamat_tempat`, `status`) VALUES
(1, 'Rumah Donor', 'Bandung', 1),
(2, 'PMI Bandung', 'Bandung', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_donor`
--
ALTER TABLE `data_donor`
  ADD PRIMARY KEY (`id_donor`),
  ADD KEY `id_peserta` (`id_peserta`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indeks untuk tabel `mengawasi`
--
ALTER TABLE `mengawasi`
  ADD PRIMARY KEY (`id_mengawasi`),
  ADD KEY `id_donor` (`id_donor`),
  ADD KEY `id_admin` (`id_admin`);

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
-- AUTO_INCREMENT untuk tabel `data_donor`
--
ALTER TABLE `data_donor`
  MODIFY `id_donor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mengawasi`
--
ALTER TABLE `mengawasi`
  MODIFY `id_mengawasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tempat_donor`
--
ALTER TABLE `tempat_donor`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_donor`
--
ALTER TABLE `data_donor`
  ADD CONSTRAINT `data_donor_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`),
  ADD CONSTRAINT `data_donor_ibfk_2` FOREIGN KEY (`id_tempat`) REFERENCES `tempat_donor` (`id_tempat`);

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
