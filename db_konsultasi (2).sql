-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 01:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `jawaban` text,
  `level` enum('anggota','ketua') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `username`, `id_pertanyaan`, `jawaban`, `level`) VALUES
(2, 'putriiajeng', 17, 'iya', 'anggota'),
(3, 'putriiajeng', 18, '6 tahun', 'anggota'),
(4, 'dzahwaptr', 17, 'YA', 'anggota'),
(5, 'admin', 23, 'Ada', 'anggota'),
(6, 'dzahwaptr', 18, '5-6 tahun terakhir', 'anggota'),
(7, 'karina00', 22, 'ada', 'anggota'),
(8, 'putriiajeng', 22, 'fitur chat', 'anggota'),
(9, 'fauzi', 17, 'YOI', 'anggota'),
(10, 'eka', 17, 'Benar', 'anggota'),
(11, 'eka', 18, '10 th', 'anggota');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pertanyaan` text NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `username`, `pertanyaan`, `tgl`) VALUES
(17, 'admin', 'Apakah anda menggunakan sosial media?', '2023-07-19'),
(18, 'admin', 'Sudah berapa lama anda menggunakan sosial media?', '2023-07-19'),
(19, 'admin', 'Aplikasi sosial media mana yang menurut anda memiliki fitur terbaik?', '2023-07-19'),
(20, 'admin', 'Jelaskan alasannya, mengapa anda memilih aplikasi tersebut?', '2023-07-19'),
(22, 'admin', 'Fitur mana yang anda sukai dari aplikasi tersebut? berikan alasannya', '2023-07-19'),
(23, 'admin', 'Adakah manfaat yang anda dapatkan ketika menggunakan sosial media tersebut?', '2023-07-19'),
(25, 'admin', 'Apa dampak negatif dari sosial media yang anda gunakan?', '2023-07-19'),
(32, 'admin', 'Apakah anda menggunakan Sosial Media sebagai sarana pemasaran?', '2023-07-19'),
(33, 'admin', 'Mengapa anda menggunakan Sosial Media sebagai sarana pemasaran?', '2023-07-19'),
(34, 'admin', 'Sosial media mana yang membantu anda dalam hal pendidikan? berikan alasannya', '2023-07-19'),
(35, 'admin', 'Aplikasi sosial media mana yang sangat membantu anda dalam kehidupan sehari-hari? ', '2023-07-19'),
(36, 'admin', 'Apa ada tips untuk membantu Anda berhasil menggunakan Sosial Media?', '2023-07-19'),
(38, 'admin', 'Apa kesalahan yang pernah anda lakukan ketika menggunakan sosial media?', '2023-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `skpd` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `no_telpn` varchar(120) NOT NULL,
  `umur` varchar(120) NOT NULL,
  `level` enum('pengguna','anggota','ketua') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `skpd`, `email`, `no_telpn`, `umur`, `level`) VALUES
(1, 'putriajeng', '8b9977905bc3c5f9827885313c822cf6', 'putriajeng', 'putriajeng@gmail.com', '4747', '', 'pengguna'),
(2, 'claudiaanisa', '098187827073ac06507c8a0572e51f7e', 'claudiaanisa', 'claudiaanisa@gmail.com', '089999', '', 'pengguna'),
(3, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 'admin@gmail.com', '898989', '', 'pengguna'),
(4, 'fauzi', 'dfb9e85bc0da607ff76e0559c62537e8', 'anggota', 'anggota@anggota', '8989', '', 'anggota'),
(5, 'ahmad', '8de13959395270bf9d6819f818ab1a00', 'ahmad', 'ahhmad@ahmad', '', '', 'anggota'),
(6, 'putriiajeng', '7f5be8aa3215455ab11a5942b5b1a25f', 'Putri Ajeng Larasmanah', 'putri@gmail.com', '', '', 'anggota'),
(7, 'labib', '343989c1c14969d93d73b462b70b2d51', 'labib', 'labib@gmail.com', '', '', 'anggota'),
(8, 'dzahwaptr', '25d55ad283aa400af464c76d713c07ad', 'dzahwa laely putri ', 'dzahwaputri777@gmail.com', '', '', 'anggota'),
(9, 'karina00', 'a37b2a637d2541a600d707648460397e', 'Karina Winter', 'spreadbreadwings@gmail.com', '', '', 'anggota'),
(10, 'dadang321', '0037bb978d51e84d1ad5478e85430f26', 'laki', 'dadang@dadang', '', '', 'anggota'),
(11, 'diki69', '43b93443937ea642a9a43e77fd5d8f77', 'laki', 'diki@diki', '0897', '20', 'anggota'),
(12, 'eka', '79ee82b17dfb837b1be94a6827fa395a', 'laki', 'eka', '09', '90', 'anggota');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
