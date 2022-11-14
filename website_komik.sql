-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 02:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_komik`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `password`) VALUES
(2, 'gial88', '$2y$10$ivZMpMxmxn2iHZURg8X9cOheDyi9pfb9BAmn.lz5p8HkjoTqL5MIS'),
(3, 'irvan', '$2y$10$xSYzyZ2c13Xcft.BXWYNL.Qwz7s8BObFeL0wa3i03l8OvzUPieriW');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `isi_feedback` varchar(255) NOT NULL,
  `waktu_upload` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nama_user`, `isi_feedback`, `waktu_upload`) VALUES
(2, 'Irvan', 'Website nya bisa dibetulin lagi yaa\r\n', '14-11-22  21:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id` int(11) NOT NULL,
  `sampul` varchar(64) NOT NULL,
  `data_komik` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `genre` varchar(32) NOT NULL,
  `waktu_upload` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id`, `sampul`, `data_komik`, `nama`, `genre`, `waktu_upload`) VALUES
(9, 'Assasination Classroom (Vol. 01).jpg', 'Assasination Classroom (Vol. 01).pdf', 'Assasination Classroom (Vol. 01)', 'Comedy', '14-11-22  20:21:59'),
(10, 'Attack On Titan (Vol. 1).jpg', 'Attack On Titan (Vol. 1).pdf', 'Attack On Titan (Vol. 1)', 'Action, Thriller', '14-11-22  20:22:50'),
(11, 'Boku no Hero Academia (Vol.01).jpg', 'Boku no Hero Academia (Vol.01).pdf', 'Boku no Hero Academia (Vol.01)', 'Action, Drama', '14-11-22  20:24:08'),
(12, 'Chainsaw Man (Vol.01).jpg', 'Chainsaw Man (Vol.01).pdf', 'Chainsaw Man (Vol.01)', 'Action, Thriller', '14-11-22  20:25:06'),
(13, 'Demon Slayer (Vol. 01).jpg', 'Demon Slayer (Vol. 01).pdf', 'Demon Slayer (Vol. 01)', 'Drama, Thriller', '14-11-22  21:04:17'),
(14, 'Detective Conan (Vol. 1047).jpg', 'Detective Conan (Vol. 1047).pdf', 'Detective Conan (Vol. 1047)', 'Mystery, Drama', '14-11-22  21:05:17'),
(16, 'Naruto (Vol. 01).jpg', 'Naruto (Vol. 01).pdf', 'Naruto (Vol. 01)', 'Action, Slice Of Life', '14-11-22  21:09:09'),
(17, 'One Punch Man (Vol.01).png', 'One Punch Man (Vol.01).pdf', 'One Punch Man (Vol.01)', 'Comedy, Action', '14-11-22  21:09:46'),
(18, 'Spider-Man Vol.01.jpeg', 'Spider-Man Vol.01.pdf', 'Spider-Man Vol.01', 'Action', '14-11-22  21:15:02'),
(19, 'Tokyo Ghoul (Vol. 01).jpg', 'Tokyo Ghoul (Vol. 01).pdf', 'Tokyo Ghoul (Vol. 01)', 'Thriller, Drama', '14-11-22  21:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `request_komik`
--

CREATE TABLE `request_komik` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `genre` varchar(32) NOT NULL,
  `jumlah_halaman` int(16) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `waktu_input` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_komik`
--

INSERT INTO `request_komik` (`id`, `nama`, `genre`, `jumlah_halaman`, `tanggal_rilis`, `sinopsis`, `waktu_input`) VALUES
(5, 'Chainsaw Man (Vol.02).jpg', 'Action, Thriller', 189, '2018-12-03', 'Manga ini menceritakan seorang remaja berusia 16 tahun bernama Denji yang rela melakukan pekerjaan apa saja termasuk memburu para iblis demi melunasi hutang ayahnya kepada Yakuza. iya di temani dengan Phocita, seekor anjing iblis bergeraji yang di selamat', '14-11-22  13:34:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_komik`
--
ALTER TABLE `request_komik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `request_komik`
--
ALTER TABLE `request_komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
