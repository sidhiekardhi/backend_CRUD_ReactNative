-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 03:23 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `telp` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alamat` varchar(40) DEFAULT NULL,
  `jurusan` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nama`, `email`, `tgl_lahir`, `telp`, `image`, `gender`, `pekerjaan`, `date_create`, `alamat`, `jurusan`) VALUES
(27, 'adit', NULL, NULL, 10, 'editform.png', NULL, NULL, '2020-12-26 15:04:00', NULL, NULL),
(35, 'adit', NULL, NULL, 7, 'editform.png', NULL, NULL, '2020-12-26 15:04:01', NULL, NULL),
(61, 'Sukaina haddad', NULL, NULL, 6, NULL, NULL, NULL, '2020-12-26 15:04:01', '', ''),
(62, 'Linta uliunha', NULL, NULL, 9, 'a6a6eede-4386-445d-98d2-9e2ec17694fc.jpg', NULL, NULL, '2020-12-26 15:04:01', 'Jakbar', 'Perawat'),
(68, 'Sukaina haddad', NULL, NULL, 8, NULL, NULL, NULL, '2020-12-26 15:04:01', 'Cantik', 'Sekali'),
(69, 'ardhi', 'ardhi@gmail.com', NULL, 85857464, 'editform.png', NULL, NULL, '2020-12-28 04:22:41', NULL, NULL),
(70, 'Sidik', NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-28 06:48:08', 'Solo', 'iT'),
(71, 'ardhi', 'ardhi@gmail.com', NULL, 85857464, 'editform.png', NULL, NULL, '2020-12-28 08:02:48', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
