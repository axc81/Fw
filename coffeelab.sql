-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 08:44 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeelab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aId` int(11) NOT NULL,
  `aFirstName` varchar(50) NOT NULL,
  `aLastName` varchar(50) NOT NULL,
  `aJk` enum('pria','wanita') NOT NULL,
  `aPhoto` varchar(200) NOT NULL,
  `aTglLahir` date NOT NULL,
  `aAddress` varchar(100) NOT NULL,
  `aCity` varchar(50) NOT NULL,
  `aState` varchar(50) NOT NULL,
  `aUsername` varchar(55) NOT NULL,
  `aPassword` varchar(55) NOT NULL,
  `aPhone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aId`, `aFirstName`, `aLastName`, `aJk`, `aPhoto`, `aTglLahir`, `aAddress`, `aCity`, `aState`, `aUsername`, `aPassword`, `aPhone`) VALUES
(31, 'asda', 'asdad', 'pria', '', '1111-11-11', 'asdad', 'asdad', 'asdad1', '111', 'b59c67bf196a4758191e42f76670ceba', 1111),
(33, 'asdasd', 'asdasdasd', 'pria', '', '1111-11-11', 'asda', 'dasda', 'ind', 'asdasd', 'bff149a0b87f5b0e00d9dd364e9ddaa0', 111),
(34, 'christian', 'ansa', 'pria', '', '2020-12-22', 'madidir weru, lorong 8', 'bitung', 'indonesia', 'anxaoc', '8208afd157fd8e6c5a2cfe23297a1b4e', 81212121);

-- --------------------------------------------------------

--
-- Table structure for table `order_delivery`
--

CREATE TABLE `order_delivery` (
  `or_Id` int(11) NOT NULL,
  `or_firstName` varchar(55) NOT NULL,
  `or_lastName` varchar(50) NOT NULL,
  `or_address` varchar(100) NOT NULL,
  `or_phone` int(13) NOT NULL,
  `or_state` varchar(50) NOT NULL,
  `or_country` varchar(80) NOT NULL,
  `or_zip` int(20) NOT NULL,
  `or_email` varchar(100) NOT NULL,
  `or_total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `opId` int(11) NOT NULL,
  `uId` varchar(60) NOT NULL,
  `pId` int(11) NOT NULL,
  `quantityToOrder` int(11) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`opId`, `uId`, `pId`, `quantityToOrder`, `total`) VALUES
(15, 'ansa', 11, 3, 45);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pId` int(11) NOT NULL,
  `pName` varchar(50) NOT NULL,
  `pCode` varchar(60) NOT NULL,
  `pQuantity` int(10) NOT NULL,
  `pPrice` int(20) NOT NULL,
  `pImage` varchar(220) NOT NULL,
  `pCategory` enum('local','international') NOT NULL,
  `pDescription` text NOT NULL,
  `pPostedBy` varchar(200) NOT NULL,
  `pDatePosted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pId`, `pName`, `pCode`, `pQuantity`, `pPrice`, `pImage`, `pCategory`, `pDescription`, `pPostedBy`, `pDatePosted`) VALUES
(8, 'Arabica - Espresso', 'e1', 6, 20, '5f009ae9ac049.jpg', 'international', ' Espresso berasal dari Bahasa Italia yang berarti express atau &amp;quot;cepat&amp;quot; karena dibuat untuk disajikan dengan segera kepada pelanggan. Di dalam espreso terdapat lebih dari enam ratus komponen zat kimia termasuk diantaranya gula, kafeina, protein, emulsi dari minyak kopi, koloid, dan partikel kopi dalam suspensi dengan gelembung gas kecil.', 'anxaoc', '2004-07-20'),
(9, 'Bach - Robusta Vietnam', 'v1', 19, 18, '5f009d3c24a7b.jpg', 'international', ' Kopi Vietnam atau yang dikenal sebagai CÃ  phÃª sá»¯a Ä‘Ã¡ adalah minuman kopi dingin yang berasal dari Vietnam dan dibuat dengan cara menyeduh kopi lalu dicampurkan es batu dan susu kental manis.', 'anxaoc', '2004-07-20'),
(10, 'Arabica - Gayo', 'l1', 17, 15, '5f009e784dd1d.jpg', 'local', 'Kopi GAYO  merupakan varietas kopi arabika yang menjadi salah satu komoditi unggulan yang berasal dari Dataran tinggi Gayo, Aceh Tengah, Indonesia.', 'anxaoc', '2004-07-20'),
(11, 'Arabica - Kintamani', 'l2', 10, 15, '5f009f9de0eb7.jpg', 'local', 'Kopi ini disebut sebagai kopi kintamani dari Bali karena ditanam di kawasan\r\nKintamani.', 'anxaoc', '2004-07-20'),
(12, 'Arabica - Toraja', 'l3', 40, 16, '5f00a19cb441f.jpg', 'local', 'Toraja merupakan salah satu kota penghasil kopi arabika di Indonesia, berlokasi di bagian selatan dari Pulau Sulawesi yang didominasi dengan kontur dataran tinggi berupa pegunungan dengan ketinggian lebih dari 1.200 mdpl dan berjenis tanah endapan liat/marine memberikan satu keunggulan yang mampu membuat kualitas kopi dari Tana Toraja memiliki keunikan dari segi karakteristik rasa dan aroma.', 'anxaoc', '2004-07-20'),
(13, 'Arabica - Wamena', 'l4', 13, 12, '5f00a36a53402.jpg', 'local', 'Kopi arabika Wamena dan arabika Meonemani adalah kopi khas Papua dan Papua Barat. Kopi arabika Wamena tumbuh di daerah pegunungan Jayawijaya Wamena dengan ketinggian 1.400-2.000 meter di atas permukaan laut. Kopi di daerah ini tumbuh subur tanpa menggunakan pupuk kimia apapun. ', 'anxaoc', '2004-07-20'),
(14, 'a', 'a', 90, 3, '5f00f3c5a3a8a.jpg', 'local', ' tidak ada desc', 'anxaoc', '2004-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `uFirstName` varchar(50) NOT NULL,
  `uLastName` varchar(50) NOT NULL,
  `uAddress` varchar(100) NOT NULL,
  `uCity` varchar(50) NOT NULL,
  `uUsername` varchar(255) NOT NULL,
  `uPassword` varchar(255) NOT NULL,
  `uPhone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `uFirstName`, `uLastName`, `uAddress`, `uCity`, `uUsername`, `uPassword`, `uPhone`) VALUES
(1, 'Arfian', 'Ansa', 'lorong 8', 'bitung', 'anxaoc', '8208afd157fd8e6c5a2cfe23297a1b4e', 8111322),
(2, 'christian', 'ansa', 'madidir', 'bitung', 'ansa', 'ef35a2e7138ea1cff3ed2ca656334e77', 89698111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aId`);

--
-- Indexes for table `order_delivery`
--
ALTER TABLE `order_delivery`
  ADD PRIMARY KEY (`or_Id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`opId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `order_delivery`
--
ALTER TABLE `order_delivery`
  MODIFY `or_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `opId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
