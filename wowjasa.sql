-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 04:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wowjasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `delapan`
--

CREATE TABLE `delapan` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  `dp` varchar(25) NOT NULL,
  `cicilan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delapan`
--

INSERT INTO `delapan` (`id`, `alamat`, `harga`, `dp`, `cicilan`) VALUES
(1, 'Jalan Gajah Mada, Batam', '998.000.000', '50.000.000', '27.000.000'),
(2, 'Jalan Podomoro, Batam', '980.000.000', '50.000.000', '27.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `lima`
--

CREATE TABLE `lima` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `harga` int(25) NOT NULL,
  `dp` int(25) NOT NULL,
  `cicilan` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lima`
--

INSERT INTO `lima` (`id`, `alamat`, `harga`, `dp`, `cicilan`) VALUES
(1, 'Jalan Perdamaian, Batam', 758000000, 5000000, 53590833),
(2, 'Jalan Kota Baru, Batam', 758000000, 5000000, 53590833);

-- --------------------------------------------------------

--
-- Table structure for table `sembilan`
--

CREATE TABLE `sembilan` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `harga` int(25) NOT NULL,
  `dp` int(25) NOT NULL,
  `cicilan` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sembilan`
--

INSERT INTO `sembilan` (`id`, `alamat`, `harga`, `dp`, `cicilan`) VALUES
(1, 'Jalan Teuku Umar, Batam', 1128000000, 50000000, 30500000),
(2, 'Jalan Simpang Pantek, Batam', 1128000000, 50000000, 30500000);

-- --------------------------------------------------------

--
-- Table structure for table `tujuh`
--

CREATE TABLE `tujuh` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `harga` int(25) NOT NULL,
  `dp` int(25) NOT NULL,
  `cicilan` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuh`
--

INSERT INTO `tujuh` (`id`, `alamat`, `harga`, `dp`, `cicilan`) VALUES
(1, 'Jalan Sungai Panas, Batam', 858000000, 50000000, 23000000),
(2, 'Jalan Sungai Rengas, Batam', 858000000, 50000000, 23000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delapan`
--
ALTER TABLE `delapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lima`
--
ALTER TABLE `lima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sembilan`
--
ALTER TABLE `sembilan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuh`
--
ALTER TABLE `tujuh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delapan`
--
ALTER TABLE `delapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lima`
--
ALTER TABLE `lima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sembilan`
--
ALTER TABLE `sembilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tujuh`
--
ALTER TABLE `tujuh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
