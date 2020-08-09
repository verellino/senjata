-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 11:56 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id_level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `id_level`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1'),
(2, 'taruna', 'taruna', 'fe96dd39756ac41b74283a9292652d366d73931f', '2'),
(3, 'biso', 'biso', 'fe96dd39756ac41b74283a9292652d366d73931f', '2'), 
(4, 'karni', 'karni', 'fe96dd39756ac41b74283a9292652d366d73931f', '2'), 
(5, 'nur', 'nur', 'fe96dd39756ac41b74283a9292652d366d73931f', '2'), 
(6, 'sugeng', 'sugeng', 'fe96dd39756ac41b74283a9292652d366d73931f', '2'), 
(7, 'andi', 'andi', 'fe96dd39756ac41b74283a9292652d366d73931f', '2'), 
(8, 'hernawan', 'hernawan', 'fe96dd39756ac41b74283a9292652d366d73931f', '2'),
(9, 'sutapa', 'sutapa', 'fe96dd39756ac41b74283a9292652d366d73931f', '2'), 
(10, 'eko', 'eko', 'fe96dd39756ac41b74283a9292652d366d73931f', '2'), 
(11, 'rizqi', 'rizqi', 'fe96dd39756ac41b74283a9292652d366d73931f', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
