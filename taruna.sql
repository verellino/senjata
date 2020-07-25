-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 02:28 PM
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
-- Table structure for table `taruna`
--

CREATE TABLE `taruna` (
  `id_user` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Pangkat` varchar(255) DEFAULT NULL,
  `No_AK` float DEFAULT NULL,
  `No_Senjata` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taruna`
--

INSERT INTO `taruna` (`id_user`, `Name`, `Pangkat`, `No_AK`, `No_Senjata`) VALUES
(1, 'HADI WIJAYANTO RADJAB', 'SERMATUTAR', 2016.44, 336),
(2, 'YOHANES RANGGA Y.I', 'SERMATUTAR', 2017.35, 139),
(3, 'ERYAWAN SETYA P.', 'SERMATUTAR', 2017.37, 152),
(4, 'MALIK ABDUL AZIZ K.', 'SERMATUTAR', 2017.36, 140),
(5, 'IWANG RENANGGA', 'SERMATUTAR', 2017.37, 157),
(6, 'M. FARDO VANDITYA L.', 'SERMATUTAR', 2017.39, 176),
(7, 'TUTUKO DIGDYO WAHYU WICAKSONO', 'SERMATUTAR', 2017.34, 124),
(8, 'RICHO HAMDAN PARMONO', 'SERMATUTAR', 2017.34, 128),
(9, 'MUHAMMAD TITO SETYO IRIANTO', 'SERMATUTAR', 2017.36, 142),
(10, 'HAFIZH RIZKY HIDAYAT', 'SERMATUTAR', 2017.36, 143),
(11, 'JEFFRY MARTAHAN SIBARANI', 'SERMATUTAR', 2017.36, 146),
(12, 'MUHAMMAD RIFKYTIANTO', 'SERMATUTAR', 2017.38, 159),
(13, 'ANGGARA ADHI WIJAYA', 'SERMATUTAR', 2017.38, 163),
(14, 'DONY PRATAMA', 'SERMATUTAR', 2017.38, 165),
(15, 'JAGAD RISWA PRADANA', 'SERMATUTAR', 2017.4, 177),
(16, 'RIFQI AKARESYAWA HANDARDHITA', 'SERMATUTAR', 2017.4, 180),
(17, 'NANDO RABBUNI SINULINGGA', 'SERMATUTAR', 2017.4, 185),
(18, 'IVAN RODES', 'SERMATUTAR', 2017.4, 186),
(19, 'MUHAMMAD IQBAL FAHRIYANSYAH', 'SERMATUTAR', 2017.41, 187),
(20, 'ANDIKA DWISAPUTRA', 'SERMATUTAR', 2017.41, 191),
(21, 'MOHAMAD AFA IRHAM FALDIAWAN', 'SERMATUTAR', 2017.41, 192),
(22, 'DICKY MAULANA KHADZIK', 'SERMATUTAR', 2017.42, 198),
(23, 'AFRAHUR RISQI AKBARI', 'SERMATUTAR', 2017.42, 200),
(24, 'FERNANDO TIMOTIUS PASCHALIS DOONG', 'SERMATUTAR', 2017.42, 204),
(25, 'ALDI LEONARDO LEPA', 'SERMATUTAR', 2017.43, 205),
(26, 'ANISA ZERLYN NOVITASARI', 'SERMATUTAR', 2017.43, 207),
(27, 'DIAH AYU NOVITASARI', 'SERMATUTAR', 2017.43, 210),
(28, 'CITRA PUSPITA PRAMESTI', 'SERMATUTAR', 2017.44, 214);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;