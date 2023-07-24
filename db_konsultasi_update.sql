-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 03:55 PM
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
(11, 'eka', 18, '10 th', 'anggota'),
(12, 'diniisnava', 17, 'IYA', 'anggota'),
(13, 'diniisnava', 18, '8 TAHUN', 'anggota'),
(14, 'diniisnava', 19, 'INSTAGRAM,WHATSAPP,DAN TIKTOK', 'anggota'),
(15, 'diniisnava', 20, 'WhatsApp untuk keperluan komunikasi.\nInstagram  dan Tiktok untuk hiburan dan mencari informasi', 'anggota'),
(16, 'diniisnava', 22, 'WhatsApp tentu saja fitur chat, call, dan video call karena mempermudah komunikasi.\nInstagram fitur explore karena dapat muncul berita-berita ataupun hiburan yang sedang ramai diperbincangkan.\nTiktok pun demikian.', 'anggota'),
(17, 'diniisnava', 23, 'Dengan menggunakan WhatsApp saya jadi lebih mudah untuk berkomunikasi, dapat mengefisiensikan waktu, tenaga, dan tidak mengeluarkan kuota yang banyak.\nDengan menggunakan instagram dan Tiktok saya dapat mengetahui informasi apa saja yang terjadi dalam jangkauan luas namun dengan waktu yang singkat dan saya pun dapat menambah ilmu. Selain itu, saya pun dapat terhibur dengan berbagai macam konten.', 'anggota'),
(18, 'diniisnava', 25, 'Terlalu sering menatap layar ponsel membuat mata saya minus, tak jarang saya pun lupa waktu, tubuh tidak banyak gerak karena sibuk menatap layar ponsel (rebahan) sehingga dapat mempengaruhi kondisi tubuh.', 'anggota'),
(19, 'diniisnava', 32, 'Tidak', 'anggota'),
(20, 'diniisnava', 33, 'TIDAK', 'anggota'),
(21, 'diniisnava', 33, 'iyaa, karena bisa nge enforse jualan teman saya', 'anggota'),
(22, 'diniisnava', 34, 'Ya, sebab dewasa ini tidak jarang pula influencer, akun bertema edukasi, hingga instansi-instansi besar membuat konten yang mengedukasi kita. Misalnya akun yang membahas mengenai hukum, belajar bahasa inggris, dan lain sebagainya.\nMenurut saya hal tersebut cukup efektif dalam membantu sebagian orang yang kurang tertarik belajar dengan konteks text book.', 'anggota'),
(23, 'diniisnava', 35, 'Gunakan sosial media sebaik mungkin, dengan bijak, share dan search hal-hal positif yang dapat memberikan impact yang bagus bagi diri sendiri.', 'anggota'),
(24, 'diniisnava', 38, 'Kesalahan dalam penggunaan sosial media dapat terjadi pada semua orang, tanpa terkecuali. Hal ini karena dapat dengan mudah dan tanpa disadari kita berbuat kesalahan dalam bersosial media. Apabila berbuat salah, saya akan meminta maaf atas perbuatan yang telah saya lakukan dan brrusaha sebaik mungkin untuk memperbaikinya agar tidak terulang dimasa yang akan datang.', 'anggota'),
(25, 'ditapuspa', 17, 'IYA', 'anggota'),
(26, 'ditapuspa', 18, '8 TAHUN', 'anggota'),
(27, 'ditapuspa', 19, 'Instagram', 'anggota'),
(28, 'ditapuspa', 20, 'Karena instgram aplikasi yang mempunyai banyak fitur', 'anggota'),
(29, 'ditapuspa', 22, 'Instastory, karena bisa membagikan kegiatan sehari2, curahan hati', 'anggota'),
(30, 'ditapuspa', 23, 'Komunikasi, edukasi, hiburan', 'anggota'),
(31, 'ditapuspa', 25, 'Lupa waktu', 'anggota'),
(32, 'ditapuspa', 32, 'Iya, saya sebagai mahasiswa terbantu dengan adanya social media', 'anggota'),
(33, 'ditapuspa', 33, 'Ya, sosial media merupakan salah satu saran pemasaran. Hal ini disebabkan karena banyak pengguna sosial media yang memanfaatkannya sebagai sarana promosi dan banyak pula pengguna lainnya yang berperan sebagai konsumen. Tak lupa bahwa sosial media juga memiliki algoritma yang memungkinkan akan membantu dalam sarana pemasaran.', 'anggota'),
(34, 'ditapuspa', 34, 'Iya, banyak artikel artikel baru yg diposting, dll', 'anggota'),
(35, 'ditapuspa', 36, 'Menggunakan untuk hal yg positif spt komunikasi, mencari berita terbaru', 'anggota'),
(36, 'ditapuspa', 38, 'Lebih hati-hati, dan tidak sembarangan menggunakan sosmed', 'anggota'),
(37, 'zahrayasmin', 17, 'IYA', 'anggota'),
(38, 'zahrayasmin', 18, '7 TAHUN', 'anggota'),
(39, 'zahrayasmin', 19, 'WhatsApp', 'anggota'),
(40, 'zahrayasmin', 20, 'Untuk komunikasi', 'anggota'),
(41, 'zahrayasmin', 22, 'Vidio call. Karena Saya memudahkan saya untuk menghubungi orang tua saya', 'anggota'),
(42, 'zahrayasmin', 23, 'Bisa berkomunikasi dan bisa melihat dunia luar', 'anggota'),
(43, 'zahrayasmin', 25, 'Kecanduan main hp', 'anggota'),
(44, 'zahrayasmin', 32, 'Iya, karena bisa memudahkan saya untuk belajar', 'anggota'),
(45, 'zahrayasmin', 33, 'iya, jangkauan social media sangat luas, dan zaman sekarang dari kalangan usia yg tua hingga muda kebanyakan menggunakan social media, jdi sgt memungkinkan jika dipakai untuk pemasaran', 'anggota'),
(46, 'zahrayasmin', 34, 'Iya, karena sosial media bisa dimanfaatkan untuk mencari info apapun yg berkaitan dengan pendidikan', 'anggota'),
(47, 'zahrayasmin', 35, 'Sesuai kebutuhan', 'anggota'),
(48, 'zahrayasmin', 38, 'Intropeksi diri', 'anggota'),
(49, 'dzahwaputri', 17, 'IYA\n', 'anggota'),
(50, 'dzahwaputri', 18, '5 TAHUN', 'anggota'),
(51, 'dzahwaputri', 19, 'Instagram', 'anggota'),
(52, 'dzahwaputri', 20, 'Karena instagram mempunyai banyak fitur', 'anggota'),
(53, 'dzahwaputri', 22, 'Instastory, Karena bisa membagikan kegiatan sehari-hari', 'anggota'),
(54, 'dzahwaputri', 23, 'Menghilangkan keboringan, dan bisa berinteraksi dengan orang jauh', 'anggota'),
(55, 'dzahwaputri', 25, 'Lupa waktu', 'anggota'),
(56, 'dzahwaputri', 32, 'Iya, Karena bisa berinteraksi sama  teman teman', 'anggota'),
(57, 'dzahwaputri', 33, 'Iya. Karena target pasarnya luas bukan hanya orang terdekat', 'anggota'),
(58, 'dzahwaputri', 34, 'Iya, terkadang pengumuman penting lebih update sosial media daripada platform lainnya', 'anggota'),
(59, 'dzahwaputri', 35, 'Dengan menggunakannya seefektif mungkin\n', 'anggota'),
(60, 'dzahwaputri', 38, 'Lebih hati hati dan tidak sembarangan menggunakan sosmed', 'anggota'),
(61, 'rezaari', 17, 'IYA', 'anggota'),
(62, 'rezaari', 18, '10 TAHUN', 'anggota'),
(63, 'rezaari', 19, 'WhatsApp', 'anggota'),
(64, 'rezaari', 20, 'Karena memudahkan berkomunikasi', 'anggota'),
(65, 'rezaari', 22, 'Video Call. Bisa melihat ayang tiap hari', 'anggota'),
(66, 'rezaari', 23, 'Komunikasi terjalin dengan baik', 'anggota'),
(67, 'rezaari', 25, 'Membuat malas', 'anggota'),
(68, 'rezaari', 32, 'Iya. Karena informasi disebarkan melalui media WhatsApp', 'anggota'),
(69, 'rezaari', 33, 'TIDAK', 'anggota'),
(70, 'rezaari', 34, 'TIDAK', 'anggota'),
(71, 'rezaari', 35, 'Digunakan sebaik mungkin ', 'anggota'),
(72, 'rezaari', 38, 'Mengevaluasi diri', 'anggota'),
(73, 'inggit123', 17, 'IYA', 'anggota'),
(74, 'inggit123', 18, '10 TAHUN', 'anggota'),
(75, 'inggit123', 19, 'WhatsApp, Instagram, Dan Youtube', 'anggota'),
(76, 'inggit123', 19, 'WhatsApp', 'anggota'),
(77, 'inggit123', 20, 'Komunikasi', 'anggota'),
(78, 'inggit123', 22, 'Telepon', 'anggota'),
(79, 'inggit123', 23, 'Komunikasi, edukasi, hiburan', 'anggota'),
(80, 'inggit123', 25, 'Kecanduan main hp', 'anggota'),
(81, 'inggit123', 32, 'Iya. Contohnya dapat berkomunikasi, membantu informasi yang ingin dicari', 'anggota'),
(82, 'inggit123', 33, 'Iya, Sosial Media bisa digunakan sebagai sarana pemasaran produk', 'anggota'),
(83, 'inggit123', 34, 'Iya, Karena sosial media bisa dimanfaatkan untuk mencari info apapun yang berkaitan dengan pendidikan', 'anggota'),
(84, 'inggit123', 35, 'Menggunakan untuk hal postif seperti komunikasi, mencari berita terbaru.', 'anggota'),
(85, 'inggit123', 38, 'Dengan tidak mengulanginya lagi', 'anggota'),
(86, 'ryanali', 17, 'IYA', 'anggota'),
(87, 'ryanali', 18, '10 TAHUN', 'anggota'),
(88, 'ryanali', 19, 'WhatsApp', 'anggota'),
(89, '', 20, 'Untuk berkomunikasi', ''),
(90, '', 22, 'And to and', ''),
(91, '', 23, 'Bertukar informasi', ''),
(92, 'ryanali', 25, 'Menjadi malas', 'anggota'),
(93, 'ryanali', 32, 'Iya, karena untuk membantu berkomunikasi jarak jauh', 'anggota'),
(94, 'ryanali', 33, 'Iya. Karena kita bisa membagikan foto produk yang kita jual', 'anggota'),
(95, 'ryanali', 34, 'Iya. Karena saya menggunakan Whatsapp sebagai perantara untuk mengirimkan tugas kepada guru', 'anggota'),
(96, 'ryanali', 35, 'Membagi waktu', 'anggota'),
(97, '', 38, 'Dengan tidak berita hoax', '');

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
(32, 'admin', 'Apakah sosial media dapat membantu anda dalam kehidupan sehari hari ? Berikan alasannya!', '2023-07-19'),
(33, 'admin', 'Apakah anda menggunakan sosial media sebagai sarana pemasaran ? jika IYA berikan alasannya', '2023-07-19'),
(34, 'admin', 'Sosial media mana yang membantu anda dalam hal pendidikan? berikan alasannya', '2023-07-19'),
(35, 'admin', 'Bagaimana cara untuk membantu anda berhasil menggunakan sosial media', '2023-07-19'),
(36, 'admin', 'Apa ada tips untuk membantu Anda berhasil menggunakan Sosial Media?', '2023-07-19'),
(38, 'admin', 'Solusi yang anda lakukan ketika melakukan kesalahan dalam menggunakan Sosial Media?', '2023-07-19');

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
(12, 'eka', '79ee82b17dfb837b1be94a6827fa395a', 'laki', 'eka', '09', '90', 'anggota'),
(13, 'diniisnava', '0e15ce7c8bb801caf248a2c6a93a6ab5', 'perempuan', 'Dini Isnava Tratasukma', '08964278123', '19', 'anggota'),
(14, 'ditapuspa', '2ff1ef8956095c124418b4ec77cd8529', 'perempuan', 'Dita Puspita Sari', '0853729387', '20', 'anggota'),
(15, 'zahrayasmin', 'a493dc8b242f1a9773a7bf56eff783bd', 'perempuan', 'Az-zahra Syafira Yasmine', '08374819841', '20', 'anggota'),
(16, 'dzahwaputri', '79905bd51f987843554e697f4aaf347c', 'perempuan', 'Dzahwa Laely Putri R.', '0896375291', '20', 'anggota'),
(17, 'rezaari', '6fae8f6f9902075bc0a4fe70a19e99ef', 'laki', 'Reza Ari Legawa', '08322174821', '19', 'anggota'),
(18, 'inggit123', '35e6bfd76c2e47c426483edd9481fd37', 'perempuan', 'Inggit Permasih Zulkarnaesi', '08312745398', '23', 'anggota'),
(19, 'ryanali', 'dbcff85b4ad32c7ee6e56b33f9c687e6', 'laki', 'Ryan William Gozali', '08317462888', '20', 'anggota');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
