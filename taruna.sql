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
  `No_AK` varchar(255) DEFAULT NULL,
  `No_Senjata` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taruna`
--

INSERT INTO `taruna` (`id_user`, `Name`, `Pangkat`, `No_AK`, `No_Senjata`) VALUES
(1, 'HADI WIJAYANTO RADJAB', 'SERMATUTAR', 2016.436, 336),
(2, 'YOHANES RANGGA Y.I', 'SERMATUTAR', 2017.354, 139),
(3, 'ERYAWAN SETYA P.', 'SERMATUTAR', 2017.368, 152),
(4, 'MALIK ABDUL AZIZ K.', 'SERMATUTAR', 2017.356, 140),
(5, 'IWANG RENANGGA', 'SERMATUTAR', 2017.373, 157),
(6, 'M. FARDO VANDITYA L.', 'SERMATUTAR', 2017.392, 176),
(7, 'TUTUKO DIGDYO WAHYU WICAKSONO', 'SERMATUTAR', 2017.339, 124),
(8, 'RICHO HAMDAN PARMONO', 'SERMATUTAR', 2017.343, 128),
(9, 'MUHAMMAD TITO SETYO IRIANTO', 'SERMATUTAR', 2017.358, 142),
(10, 'HAFIZH RIZKY HIDAYAT', 'SERMATUTAR', 2017.359, 143),
(11, 'JEFFRY MARTAHAN SIBARANI', 'SERMATUTAR', 2017.362, 146),
(12, 'MUHAMMAD RIFKYTIANTO', 'SERMATUTAR', 2017.375, 159),
(13, 'ANGGARA ADHI WIJAYA', 'SERMATUTAR', 2017.379, 163),
(14, 'DONY PRATAMA', 'SERMATUTAR', 2017.381, 165),
(15, 'JAGAD RISWA PRADANA', 'SERMATUTAR', 2017.395, 177),
(16, 'RIFQI AKARESYAWA HANDARDHITA', 'SERMATUTAR', 2017.398, 180),
(17, 'NANDO RABBUNI SINULINGGA', 'SERMATUTAR', 2017.403, 185),
(18, 'IVAN RODES', 'SERMATUTAR', 2017.404, 186),
(19, 'MUHAMMAD IQBAL FAHRIYANSYAH', 'SERMATUTAR', 2017.405, 187),
(20, 'ANDIKA DWISAPUTRA', 'SERMATUTAR', 2017.409, 191),
(21, 'MOHAMAD AFA IRHAM FALDIAWAN', 'SERMATUTAR', 2017.411, 192),
(22, 'DICKY MAULANA KHADZIK', 'SERMATUTAR', 2017.418, 198),
(23, 'AFRAHUR RISQI AKBARI', 'SERMATUTAR', 2017.420, 200),
(24, 'FERNANDO TIMOTIUS PASCHALIS DOONG', 'SERMATUTAR', 2017.424, 204),
(25, 'ALDI LEONARDO LEPA', 'SERMATUTAR', 2017.425, 205),
(26, 'ANISA ZERLYN NOVITASARI', 'SERMATUTAR', 2017.428, 207),
(27, 'DIAH AYU NOVITASARI', 'SERMATUTAR', 2017.431, 210),
(28, 'CITRA PUSPITA PRAMESTI', 'SERMATUTAR', 2017.435, 214);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
