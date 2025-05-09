-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2025 at 04:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berwa shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productCode` int(100) NOT NULL,
  `productName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productCode`, `productName`) VALUES
(1, 'bordas'),
(4, 'newbalance'),
(118, 'jordan'),
(120, 'beans'),
(121, 'chip'),
(122, 'mango'),
(123, 'chocolate'),
(124, 'gucci'),
(125, 'jeans'),
(127, 'guci'),
(128, 'blanciag'),
(129, 'amadegede');

-- --------------------------------------------------------

--
-- Table structure for table `productin`
--

CREATE TABLE `productin` (
  `productCode` int(100) NOT NULL,
  `DateTime` date NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Unitprice` varchar(100) NOT NULL,
  `Totalprice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productin`
--

INSERT INTO `productin` (`productCode`, `DateTime`, `Quantity`, `Unitprice`, `Totalprice`) VALUES
(1, '2025-05-01', '2', '500', '1000.0'),
(4, '2025-05-01', '23', '600', '13800.0'),
(118, '2025-05-07', '20', '500', '10000.0'),
(4, '2025-05-01', '23', '600', '13800.0'),
(4, '2025-05-01', '23', '600', '13800.0'),
(125, '2025-05-02', '9876', '500', '4938000.0'),
(102, '2025-05-30', '34', '1000', '34000.0');

-- --------------------------------------------------------

--
-- Table structure for table `productout`
--

CREATE TABLE `productout` (
  `productCode` int(100) NOT NULL,
  `Dateout` date NOT NULL,
  `Quantity_out` varchar(100) NOT NULL,
  `Unitprice_out` varchar(100) NOT NULL,
  `Totalprice_out` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productout`
--

INSERT INTO `productout` (`productCode`, `Dateout`, `Quantity_out`, `Unitprice_out`, `Totalprice_out`) VALUES
(1, '2025-05-09', '40', '50', '2000.0'),
(4, '2025-05-15', '10', '500', '5000.0');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

CREATE TABLE `shopkeeper` (
  `shopkeeperId` int(50) NOT NULL,
  `UserName` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopkeeper`
--

INSERT INTO `shopkeeper` (`shopkeeperId`, `UserName`, `password`) VALUES
(1, 'maurice', 'morice'),
(2, 'hhhhh', '12334'),
(3, 'yvonne', '8888888'),
(4, 'uwase', '123'),
(5, 'maurice', '5w7347'),
(6, 'kiziguro', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productCode`),
  ADD KEY `productCode` (`productCode`);

--
-- Indexes for table `productout`
--
ALTER TABLE `productout`
  ADD KEY `productCode` (`productCode`);

--
-- Indexes for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  ADD PRIMARY KEY (`shopkeeperId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productCode` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  MODIFY `shopkeeperId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
