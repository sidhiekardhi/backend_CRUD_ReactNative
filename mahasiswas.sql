-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 12:16 AM
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
  `gender` varchar(40) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alamat` varchar(40) DEFAULT NULL,
  `jurusan` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nama`, `email`, `tgl_lahir`, `telp`, `gender`, `pekerjaan`, `date_create`, `alamat`, `jurusan`) VALUES
(1, 'sidhiek ardhiansah', NULL, NULL, NULL, NULL, NULL, '2020-12-12 15:17:05', 'Grombyang', 'Pengen mulih'),
(9, 'Sidik', '', '0000-00-00', 0, '0', 'Pelajar', '2020-12-10 10:19:27', NULL, NULL),
(10, 'Sidik', '', '0000-00-00', 0, '0', 'Pelajar', '2020-12-10 10:19:43', NULL, NULL),
(11, 'sidik', 'figifs@gmail.com', '2020-07-07', 6588, '0', 'Pelajar', '2020-12-10 10:21:26', NULL, NULL),
(12, 'gatot', NULL, NULL, NULL, NULL, NULL, '2020-12-10 10:30:44', NULL, NULL),
(14, 'Sidhiek ardhiansah', 'Hdjd@gmail.com', '2016-05-12', 85649464, '0', 'Pelajar', NULL, NULL, NULL),
(15, 'Wawan', 'Wawan@gmail.com', '2016-05-19', 86494644, '0', 'pns', NULL, NULL, NULL),
(16, 'Paijo', 'Paijo@gmail.com', '2016-06-01', 49494, '0', 'Pelajar', NULL, NULL, NULL),
(17, 'Yeueue', 'Hsue@gmail.com', '2016-06-01', 576565, '0', 'pns', NULL, NULL, NULL),
(18, 'Gshs', NULL, NULL, NULL, NULL, NULL, NULL, 'Hshhs', 'Hdhdhd'),
(19, 'Wawan', NULL, NULL, NULL, NULL, NULL, '2020-12-11 17:11:19', 'Hshhs', 'Hdhdhd'),
(20, 'Baskoro', NULL, NULL, NULL, NULL, NULL, '2020-12-11 17:11:38', 'Solo', 'IT'),
(21, 'Paiman', NULL, NULL, NULL, NULL, NULL, '2020-12-12 15:16:09', 'Wonogiri', 'Elektro');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
