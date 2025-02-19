-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 05:21 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaera`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categorycode` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `flag` bit(1) NOT NULL,
  `createddate` datetime NOT NULL,
  `createdby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loginlog`
--

CREATE TABLE `loginlog` (
  `username` varchar(50) NOT NULL,
  `sesi` varchar(100) NOT NULL,
  `timein` datetime NOT NULL,
  `expiredtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginlog`
--

INSERT INTO `loginlog` (`username`, `sesi`, `timein`, `expiredtime`) VALUES
('raihan', 'e4Y03V6qJNaUDKrxoxdE4q0aH6qiRn4KsBZXZXrYexbd14rSokAx6iKYVM5r', '2024-11-11 11:20:21', '2024-11-11 14:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `moduleid` int(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `parent` varchar(50) NOT NULL,
  `flag` bit(1) NOT NULL,
  `modulename` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`moduleid`, `path`, `parent`, `flag`, `modulename`, `icon`) VALUES
(1, 'Dashboard', '0', b'1', 'Dashboard', 'bx-home-circle'),
(2, 'Product', '0', b'1', 'Product', 'bx-file'),
(4, 'Testimoni', '0', b'1', 'Testimoni', 'bx-comment-dots'),
(5, 'Reservasi', '0', b'1', 'Reservasi', 'bx-time-five');

-- --------------------------------------------------------

--
-- Table structure for table `moduleaccess`
--

CREATE TABLE `moduleaccess` (
  `accessid` int(11) NOT NULL,
  `moduleid` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moduleaccess`
--

INSERT INTO `moduleaccess` (`accessid`, `moduleid`, `usertype`) VALUES
(1, '1', 'a001'),
(2, '2', 'a001'),
(3, '4', 'a001'),
(4, '5', 'a001');

-- --------------------------------------------------------

--
-- Table structure for table `noseriesetup`
--

CREATE TABLE `noseriesetup` (
  `serietype` varchar(50) NOT NULL,
  `seriecode` varchar(50) NOT NULL,
  `seriecategory` varchar(50) NOT NULL,
  `yearno` int(20) NOT NULL,
  `monthno` int(20) NOT NULL,
  `nextno` int(50) NOT NULL,
  `createddate` datetime NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noseriesetup`
--

INSERT INTO `noseriesetup` (`serietype`, `seriecode`, `seriecategory`, `yearno`, `monthno`, `nextno`, `createddate`, `createdby`, `location`) VALUES
('PRODUCT', 'P', 'TRIT', 2024, 11, 4, '2024-11-04 21:56:21', 'SYSTEM', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productcode` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `flag` bit(1) NOT NULL,
  `createddate` datetime NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `modifiedby` varchar(50) DEFAULT NULL,
  `deleteddate` datetime DEFAULT NULL,
  `deletedby` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productcode`, `name`, `description`, `category`, `price`, `flag`, `createddate`, `createdby`, `modifieddate`, `modifiedby`, `deleteddate`, `deletedby`) VALUES
('P-2411-TRIT-1', 'Baby Message', 'Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.', 'TRIT', '100000.00', b'1', '2024-11-04 21:46:00', 'RAIHAN', '2024-11-07 17:11:25', 'RAIHAN', NULL, NULL),
('P-2411-TRIT-2', '3rfd', 'dcr', 'TRIT', '23.00', b'0', '2024-11-04 22:02:08', 'RAIHAN', NULL, NULL, '2024-11-06 14:12:30', 'RAIHAN'),
('P-2411-TRIT-3', 'Baby Swimm', 'Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum  hic non ut nesciunt dolorem.', 'TRIT', '230000.00', b'1', '2024-11-07 17:12:53', 'RAIHAN', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `reservasicode` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `productcode` varchar(50) NOT NULL,
  `datebefore` date NOT NULL,
  `datefix` date DEFAULT NULL,
  `status` bit(1) NOT NULL,
  `createddate` datetime NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `modifieddate` datetime NOT NULL,
  `modifiedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `namecustomer` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `flag` bit(1) NOT NULL,
  `createddate` datetime NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `modifiedby` varchar(50) DEFAULT NULL,
  `deleteddate` datetime DEFAULT NULL,
  `deletedby` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `namecustomer`, `description`, `flag`, `createddate`, `createdby`, `modifieddate`, `modifiedby`, `deleteddate`, `deletedby`) VALUES
(1, 'mama rafaa', 'dede langsung bobo nyenyak setelah di pijat ma bu bidan', b'1', '2024-11-06 16:00:55', 'RAIHAN', '2024-11-06 16:05:02', 'RAIHAN', NULL, NULL),
(2, 'we', 'ewf', b'0', '2024-11-06 16:05:11', 'RAIHAN', NULL, NULL, '2024-11-06 16:05:14', 'RAIHAN');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `flag` bit(1) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `loginstatus` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `fullname`, `type`, `flag`, `lastlogin`, `loginstatus`) VALUES
('raihan', '827ccb0eea8a706c4c34a16891f84e7b', 'Raihan', 'a001', b'1', '2024-11-11 11:20:21', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `typeid` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `flag` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`typeid`, `description`, `flag`) VALUES
('a001', 'developer', b'1'),
('a002', 'admin', b'1'),
('a003', 'user', b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categorycode`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`moduleid`);

--
-- Indexes for table `moduleaccess`
--
ALTER TABLE `moduleaccess`
  ADD PRIMARY KEY (`accessid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productcode`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`reservasicode`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`typeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `moduleid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `moduleaccess`
--
ALTER TABLE `moduleaccess`
  MODIFY `accessid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
