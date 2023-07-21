-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Feb 2019 pada 07.26
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_konsultasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `jawaban` text,
  `level` enum('anggota','ketua') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id`, `username`, `id_pertanyaan`, `jawaban`, `level`) VALUES
(3, 'jaja', 2, 'Karena Bundar', 'anggota'),
(6, 'neni', 2, 'Bundar', 'anggota'),
(7, 'fauzi', 5, 'Read To pdf', 'ketua'),
(10, 'neni', 6, 'Belajar ', 'anggota'),
(13, 'fauzi', 2, 'karena bundar', 'ketua'),
(14, 'neni', 2, 'Ya Bumi Bundar', 'anggota'),
(16, 'neni', 6, 'Belajar', 'anggota'),
(17, 'jaja', 5, 'Donwload Bootsrap', 'anggota'),
(18, 'fauzi', 8, 'Pelajari CMV', 'ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pertanyaan` text NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `username`, `pertanyaan`, `tgl`) VALUES
(2, 'faris', 'Bagaimana Bumi Bundar', '2019-12-31'),
(3, 'faris', 'Trash me', '2018-12-30'),
(5, 'dedi', 'How To Make Apliaction Boostrap', '2019-01-31'),
(6, 'faris', 'Cara Membuat Aplikasi Codelgniter', '2019-02-01'),
(8, 'dedi', 'Cara Setting Codelgniter', '2019-02-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `skpd` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `no_telpn` varchar(120) NOT NULL,
  `level` enum('pengguna','anggota','ketua') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `skpd`, `email`, `no_telpn`, `level`) VALUES
(1, 'faris', '7d77e825b80cff62a72e680c1c81424f', 'Dkis', 'faris@pengguna.com', '081220546207', 'pengguna'),
(2, 'dedi', 'c5897fbcc14ddcf30dca31b2735c3d7e', 'Dkis', 'dedi@dedi.com', '091220543789', 'pengguna'),
(4, 'fauzi', '0bd9897bf12294ce35fdc0e21065c8a7', 'Dkis', 'fauzi@ketua.com', '0917283947', 'ketua'),
(5, 'jaja', 'bb0ed6ad56f41c6de469776171261226', 'Dkis', 'jaja@anggota.com', '08272625372727', 'anggota'),
(6, 'neni', '7a57a80314a2af4e4fc836700d291429', 'Dkis', 'neni@anggota.com', '0282626253637', 'anggota'),
(10, 'Ahmad Fauzi', '61243c7b9a4022cb3f8dc3106767ed12', 'skinfa', 'skinfa@skinfa.com', '09122043637', 'anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
