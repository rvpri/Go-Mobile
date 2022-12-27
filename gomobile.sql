-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 11:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gomobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `email` varchar(255) NOT NULL,
  `id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `cpassword` int(10) NOT NULL,
  `caddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `orderid` int(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `productid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `desciption` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `price`, `desciption`) VALUES
(1, 'Galaxy S22', 'Samsung', 72000, '<table class=\"spec_table\">\r\n <tbody><tr>\r\n <td class=\"spec_ttle\">RAM</td>\r\n <td class=\"spec_des\">\r\n 8 GB\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Processor</td>\r\n <td class=\"spec_des\">\r\n Qualcomm Snapdragon 8 Gen 1\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Rear Camera</td>\r\n <td class=\"spec_des\">\r\n 50 MP + 12 MP + 10 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Front Camera</td>\r\n <td class=\"spec_des\">\r\n 10 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Battery</td>\r\n <td class=\"spec_des\">\r\n 3700 mAh\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Display</td>\r\n <td class=\"spec_des\">\r\n 6.1 inches\r\n </td>\r\n </tr>\r\n </tbody></table>'),
(2, 'Galaxy Note20', 'Samsung', 75000, '<table class=\"spec_table\">\r\n <tbody><tr>\r\n <td class=\"spec_ttle\">RAM</td>\r\n <td class=\"spec_des\">\r\n 8 GB\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Processor</td>\r\n <td class=\"spec_des\">\r\n Samsung Exynos 9 Octa 990\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Rear Camera</td>\r\n <td class=\"spec_des\">\r\n 12 MP + 64 MP + 12 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Front Camera</td>\r\n <td class=\"spec_des\">\r\n 10 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Battery</td>\r\n <td class=\"spec_des\">\r\n 4300 mAh\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Display</td>\r\n <td class=\"spec_des\">\r\n 6.7 inches\r\n </td>\r\n </tr>\r\n </tbody></table>'),
(3, 'Nord CE 2', 'OnePlus', 25000, '<table class=\"spec_table\">\r\n <tbody><tr>\r\n <td class=\"spec_ttle\">RAM</td>\r\n <td class=\"spec_des\">\r\n 6 GB\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Processor</td>\r\n <td class=\"spec_des\">\r\n MediaTek Dimensity 900 MT6877\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Rear Camera</td>\r\n <td class=\"spec_des\">\r\n 64 MP + 8 MP + 2 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Front Camera</td>\r\n <td class=\"spec_des\">\r\n 16 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Battery</td>\r\n <td class=\"spec_des\">\r\n 4500 mAh\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Display</td>\r\n <td class=\"spec_des\">\r\n 6.43 inches\r\n </td>\r\n </tr>\r\n </tbody></table>'),
(4, 'Galaxy M33', 'Samsung', 18000, '<table class=\"spec_table\">\r\n  <tbody>\r\n    <tr>\r\n      <td class=\"spec_ttle\">RAM</td>\r\n      <td class=\"spec_des\"> 6 GB </td>\r\n    </tr>\r\n    <tr>\r\n      <td class=\"spec_ttle\">Processor</td>\r\n      <td class=\"spec_des\"> Samsung Exynos 1280 </td>\r\n    </tr>\r\n    <tr>\r\n      <td class=\"spec_ttle\">Rear Camera</td>\r\n      <td class=\"spec_des\"> 50 MP + 5 MP + 2 MP + 2 MP </td>\r\n    </tr>\r\n    <tr>\r\n      <td class=\"spec_ttle\">Front Camera</td>\r\n      <td class=\"spec_des\"> 8 MP </td>\r\n    </tr>\r\n    <tr>\r\n      <td class=\"spec_ttle\">Battery</td>\r\n      <td class=\"spec_des\"> 6000 mAh </td>\r\n    </tr>\r\n    <tr>\r\n      <td class=\"spec_ttle\">Display</td>\r\n      <td class=\"spec_des\"> 6.6 inches </td>\r\n    </tr>\r\n  </tbody>\r\n</table>'),
(5, '10 Pro', 'OnePlus', 67000, '<table class=\"spec_table\">\r\n <tbody><tr>\r\n <td class=\"spec_ttle\">RAM</td>\r\n <td class=\"spec_des\">\r\n 8 GB\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Processor</td>\r\n <td class=\"spec_des\">\r\n Qualcomm Snapdragon 8 Gen 1\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Rear Camera</td>\r\n <td class=\"spec_des\">\r\n 48 MP + 50 MP + 8 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Front Camera</td>\r\n <td class=\"spec_des\">\r\n 32 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Battery</td>\r\n <td class=\"spec_des\">\r\n 5000 mAh\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Display</td>\r\n <td class=\"spec_des\">\r\n 6.7 inches\r\n </td>\r\n </tr>\r\n </tbody></table>'),
(6, '9R', 'OnePlus', 40000, '<table class=\"spec_table\">\r\n <tbody><tr>\r\n <td class=\"spec_ttle\">RAM</td>\r\n <td class=\"spec_des\">\r\n 8 GB\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Processor</td>\r\n <td class=\"spec_des\">\r\n Qualcomm Snapdragon 870\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Rear Camera</td>\r\n <td class=\"spec_des\">\r\n 48 MP + 16 MP + 5 MP + 2 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Front Camera</td>\r\n <td class=\"spec_des\">\r\n 16 MP\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Battery</td>\r\n <td class=\"spec_des\">\r\n 4500 mAh\r\n </td>\r\n </tr>\r\n <tr>\r\n <td class=\"spec_ttle\">Display</td>\r\n <td class=\"spec_des\">\r\n 6.55 inches\r\n </td>\r\n </tr>\r\n </tbody></table>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `orderid` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
