-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 01:08 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lego`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `a_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`a_id`, `email`, `password`) VALUES
(40, 'kk@net.com', '$2y$10$JY12nqh2V1l/dneD/d55GOFPTSo3Hh1I2aQfG5.jOmcF.Ta91rNXu'),
(41, 'asss@mail.net', '$2y$10$Q2wRLSASbntmZPIyfrjOBubNUQb5nZeQ35nEObzZaMiB1ZJ4SWaVS'),
(42, '1@mail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(43, 'admin@mail.com', '$2y$10$oG8e2U4XKHNnjH4EG7DRf.X/2NABm98ok2E4TGTOZqdJf/xzpZq7K'),
(44, 'anxaoc@mail.com', '202cb962ac59075b964b07152d234b70'),
(45, '2@mail.com', '202cb962ac59075b964b07152d234b70'),
(46, '3@mail.com', '$2y$10$SxYJoEDxWQLS2K7ethl0F.qcFLA/F6p2aiZYpjXwAC8p0vM/CWxgC'),
(47, '4@mail.com', '$2y$10$SB8gSrzzHPSSgHGe6GdTd.3jZyOIXWSL7tKWV7JHXTNpCn8ylwEYW'),
(48, 'ansa@mail.com', 'ef35a2e7138ea1cff3ed2ca656334e77'),
(49, 'anxaoc@mail.com', '8208afd157fd8e6c5a2cfe23297a1b4e'),
(50, 'andrew', '827ccb0eea8a706c4c34a16891f84e7b'),
(51, 'test1@mail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(52, 'ansa@mail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(53, 'jarvis@mail.com', 'e3bdea4f0a4883562d6e56a8ceb55e0a');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(40) NOT NULL,
  `jurusan` enum('Teknik Informatika','Keperawatan','Filsafat','Ekonomi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jurusan`) VALUES
(35, 'Ansa Christian', '105021328001', 'Filsafat'),
(36, 'Christian', '100232321', 'Teknik Informatika'),
(52, 'Anxaoc', 's1221122', 'Keperawatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id`, `name`, `image`) VALUES
(2, 'ansa33', 'pg2.png');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `gambar2` varchar(55) NOT NULL,
  `ket` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `gambar2`, `ket`) VALUES
(99, '5c905dbeeeaf3.jpg', 'zxzxa'),
(100, '5cc7fbb757a61.png', 'sadasdsadsadasdasdasdsad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
