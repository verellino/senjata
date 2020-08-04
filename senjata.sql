-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 01:24 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senjata`
--

-- --------------------------------------------------------

--
-- Table structure for table `senjata`
--

CREATE TABLE `senjata` (
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` set('DIAMBIL','TERSEDIA') NOT NULL,
  `nomor_senjata` int(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senjata`
--

INSERT INTO `senjata` (`id_barang`, `id_user`, `keterangan`, `nomor_senjata`, `jumlah`) VALUES
(1, 1, 'TERSEDIA', 336, 1),
(2, 2, 'TERSEDIA', 139, 1),
(3, 3, 'TERSEDIA', 152, 1),
(4, 4, 'TERSEDIA', 140, 1),
(5, 5, 'TERSEDIA', 157, 1),
(6, 6, 'TERSEDIA', 176, 1),
(7, 7, 'TERSEDIA', 124, 1),
(8, 8, 'TERSEDIA', 128, 1),
(9, 9, 'TERSEDIA', 142, 1),
(10, 10, 'TERSEDIA', 143, 1),
(11, 11, 'TERSEDIA', 146, 1),
(12, 12, 'TERSEDIA', 159, 1),
(13, 13, 'TERSEDIA', 163, 1),
(14, 14, 'TERSEDIA', 165, 1),
(15, 15, 'TERSEDIA', 177, 1),
(16, 16, 'TERSEDIA', 180, 1),
(17, 17, 'TERSEDIA', 185, 1),
(18, 18, 'TERSEDIA', 186, 1),
(19, 19, 'TERSEDIA', 187, 1),
(20, 20, 'TERSEDIA', 191, 1),
(21, 21, 'TERSEDIA', 192, 1),
(22, 22, 'TERSEDIA', 198, 1),
(23, 23, 'TERSEDIA', 200, 1),
(24, 24, 'TERSEDIA', 204, 1),
(25, 25, 'TERSEDIA', 205, 1),
(26, 26, 'TERSEDIA', 207, 1),
(27, 27, 'TERSEDIA', 210, 1),
(28, 28, 'TERSEDIA', 214, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `senjata`
--
ALTER TABLE `senjata`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `senjata`
--
ALTER TABLE `senjata`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
