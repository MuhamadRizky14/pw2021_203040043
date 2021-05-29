-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 05:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_203040043`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_musik`
--

CREATE TABLE `alat_musik` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama_alatmusik` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tahun_ditemukan` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_musik`
--

INSERT INTO `alat_musik` (`id`, `gambar`, `nama_alatmusik`, `jenis`, `asal`, `tahun_ditemukan`, `warna`) VALUES
(1, 'gitar.jpg', 'Gitar', 'Di Petik', 'Romawi - Spanyol', '476 M', 'Coklat'),
(2, 'drum.jpg', 'Drum', 'Dipukul', 'Moravia', '600 SM', 'Biru'),
(3, 'piano.jpg', 'Piano', 'Menekan jari pada not', 'Italia', '1720', 'Hitam-Putih'),
(4, 'seruling.jpg', 'Seruling', 'Di Tiup', 'India', '900 SM', 'Coklat'),
(5, 'biola.jpg', 'Biola', 'Di Gesek', 'Itali', '1523', 'Coklat-Merah'),
(6, 'harmonika.jpg', 'Harmonika', 'Di Tiup', 'China', '1821', 'Hitam-Putih'),
(7, 'saksofon.jpg', 'Saksofon', 'Di Tiup', 'Belgia', '1840', 'Emas'),
(8, 'angklung.jpg', 'Angklung', 'Menggoyangkannya', 'indonesia', '1862', 'Coklat'),
(9, 'gamelan.jpg', 'Gamelan', 'Di Pukul', 'Indonesia', '230 M', 'Coklat'),
(10, 'trompet.jpg', 'Trompet', 'Di Tiup', 'Romawi', '1500 SM', 'Emas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(16) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
