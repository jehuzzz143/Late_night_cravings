-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 02:33 PM
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
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_ID` varchar(20) NOT NULL,
  `user_Email` varchar(30) NOT NULL,
  `user_Password` varchar(20) NOT NULL,
  `user_Fullname` varchar(50) NOT NULL,
  `user_Birthday` date NOT NULL,
  `user_Age` int(3) NOT NULL,
  `user_Address` varchar(60) NOT NULL,
  `user_DateCreated` date NOT NULL,
  `user_Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_ID`, `user_Email`, `user_Password`, `user_Fullname`, `user_Birthday`, `user_Age`, `user_Address`, `user_DateCreated`, `user_Status`) VALUES
('1', 'admin', 'password', '', '0000-00-00', 0, '', '0000-00-00', 0),
('USER2cbaec58', 'christjoeasantos2000@gmail.com', '123123', 'Christ Joe Santos', '2000-01-05', 22, 'Blk 13 Lot 04 Peace Village ', '2022-02-14', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
