-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 12:18 PM
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
-- Database: `productcatalogue`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(12) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `ProductDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `ProductName`, `Price`, `Quantity`, `ProductDescription`) VALUES
(1, 'notebooks', '23456', '200', 'designed small books used to note things'),
(2, 'Phones', '5267790', '10', 'portable wireless smart phones '),
(3, 'Pens', '2345678', '1200', 'things used to write'),
(4, 'headphones', '223456789', '120', 'small loud speakers worn  around the neck'),
(5, 'wall decorators', '234562', '20', 'decorations applied on walls'),
(6, 'erasable pens', '1000000', '200', 'designed items used to write that can erase work'),
(7, 'TVs', '723000000', '10', 'television sets used to show images'),
(8, 'Smart watches', '54504760', '50', 'small screens that work as phones or other electronics'),
(9, 'scarfs', '980000', '63', 'designed clothes worn in cold days'),
(10, 'files', '4500000', '90', 'plastic materials that store important documents');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`,`ProductName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
