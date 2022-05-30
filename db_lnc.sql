-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 06:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `ID` int(11) NOT NULL,
  `prod_id` varchar(20) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_desc` varchar(100) NOT NULL,
  `prod_type` varchar(50) NOT NULL,
  `prod_image` varchar(100) NOT NULL,
  `prod_quant` int(11) NOT NULL,
  `cust_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `Order_ID` varchar(11) NOT NULL,
  `Sub_total` float NOT NULL,
  `Shipping_fee` float NOT NULL,
  `Total_Order_Price` float NOT NULL,
  `Cust_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`Order_ID`, `Sub_total`, `Shipping_fee`, `Total_Order_Price`, `Cust_ID`) VALUES
('ORDR25901b0', 34, 40, 74, 'USER2cbaec58'),
('ORDR3b4c74a', 34, 40, 74, 'USER2cbaec58'),
('ORDR3e79b2f', 34, 40, 74, 'USER2cbaec58'),
('ORDR4f5f98a', 34, 40, 74, 'USER2cbaec58'),
('ORDR5c2c2f5', 34, 40, 74, 'USER2cbaec58'),
('ORDR6bec80e', 34, 40, 74, 'USER2cbaec58'),
('ORDR6dc099a', 34, 40, 74, 'USER2cbaec58'),
('ORDR9fe1036', 33, 40, 73, 'USER2cbaec58'),
('ORDRa5a54fd', 34, 40, 74, 'USER2cbaec58'),
('ORDRd65143d', 34, 40, 74, 'USER2cbaec58'),
('ORDRe591f27', 34, 40, 74, 'USER2cbaec58'),
('ORDReb7c084', 34, 40, 74, 'USER2cbaec58'),
('ORDRf8ce9ba', 34, 40, 74, 'USER2cbaec58'),
('ORDRf8fe308', 34, 40, 74, 'USER2cbaec58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_products`
--

CREATE TABLE `tbl_order_products` (
  `ID` int(11) NOT NULL,
  `Prod_ID` varchar(50) NOT NULL,
  `Prod_Quant` int(11) NOT NULL,
  `Prod_Price` float NOT NULL,
  `Prod_Total_Price` float NOT NULL,
  `Cust_ID` varchar(50) NOT NULL,
  `Order_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_products`
--

INSERT INTO `tbl_order_products` (`ID`, `Prod_ID`, `Prod_Quant`, `Prod_Price`, `Prod_Total_Price`, `Cust_ID`, `Order_ID`) VALUES
(1, '18', 2, 0, 0, 'USER2cbaec58', 'ORDRa5a54fdc'),
(2, '19', 6, 0, 0, 'USER2cbaec58', 'ORDRa5a54fdc'),
(3, '23', 4, 0, 0, 'USER2cbaec58', 'ORDRa5a54fdc'),
(4, '24', 6, 0, 0, 'USER2cbaec58', 'ORDRa5a54fdc'),
(5, '26', 7, 0, 0, 'USER2cbaec58', 'ORDRa5a54fdc'),
(6, '27', 8, 0, 0, 'USER2cbaec58', 'ORDRa5a54fdc'),
(7, '21', 1, 0, 0, 'USER2cbaec58', 'ORDRa5a54fdc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `ID` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_desc` varchar(100) NOT NULL,
  `prod_type` varchar(20) NOT NULL,
  `prod_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`ID`, `prod_name`, `prod_desc`, `prod_type`, `prod_image`) VALUES
(18, 'afasdf', 'asdf', 'breakfast', ''),
(19, 'asdf', 'fdsa', 'breakfast', ''),
(21, 'hatdog', 'coin', 'breakfast', 'cryptocurrency.png'),
(23, 'editing', 'qwead', 'breakfast', 'editing.png'),
(24, 'qwe', 'qwe', 'breakfast', 'editing.png'),
(26, 'hatdog1', 'hatdog ni aljur', 'breakfast', 'hotdog.jpg'),
(27, 'bababa', 'bababa', 'breakfast', 'hotdog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_ID` varchar(20) NOT NULL,
  `user_Email` varchar(30) NOT NULL,
  `user_Password` varchar(20) NOT NULL,
  `user_Fullname` varchar(50) NOT NULL,
  `user_Birthday` date NOT NULL,
  `user_Age` int(11) NOT NULL,
  `user_Address` varchar(60) NOT NULL,
  `user_DateCreated` date NOT NULL,
  `user_Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_ID`, `user_Email`, `user_Password`, `user_Fullname`, `user_Birthday`, `user_Age`, `user_Address`, `user_DateCreated`, `user_Status`) VALUES
('1', 'admin', 'password', '', '0000-00-00', 0, '', '0000-00-00', 0),
('USER2cbaec58', 'christjoeasantos2000@gmail.com', '123123', 'Christ Joe Santos', '2000-01-05', 22, 'Blk 13 Lot 04 Peace Village ', '2022-02-14', 1),
('USER63dba942', 'donjulio263@gmail.com', '123123', 'Jerome Defense', '2005-01-04', 17, 'Antipolo City, Rizal', '2022-03-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `tbl_order_products`
--
ALTER TABLE `tbl_order_products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_order_products`
--
ALTER TABLE `tbl_order_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
