-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 04:23 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '18-10-2016 04:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `categoryDescription` longtext NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(3, 'Identification', '', '2019-04-14 10:05:42', ''),
(4, 'Purse/Wallet', '', '2019-04-14 10:05:58', ''),
(5, 'Cell Phone', '', '2019-04-14 10:06:32', ''),
(6, 'Laptop', '', '2019-04-14 10:06:39', ''),
(7, 'Keys', '', '2019-04-14 10:06:49', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaintremark`
--

CREATE TABLE IF NOT EXISTS `complaintremark` (
`id` int(11) NOT NULL,
  `complaintNumber` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `complaintremark`
--

INSERT INTO `complaintremark` (`id`, `complaintNumber`, `status`, `remark`, `remarkDate`) VALUES
(5, 24, 'closed', 'rrh', '2019-04-14 10:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE IF NOT EXISTS `tblcomplaints` (
`complaintNumber` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `complaintDetails` mediumtext NOT NULL,
  `complaintFile` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT NULL,
  `lastUpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`complaintNumber`, `userId`, `category`, `complaintDetails`, `complaintFile`, `regDate`, `status`, `lastUpdationDate`) VALUES
(20, 1, 4, 'Hilang di library pada pkul 2 ptg', '', '2019-04-14 10:15:47', NULL, '0000-00-00 00:00:00'),
(21, 7, 7, 'Last hilang di cafeteria', 'complaint.png', '2019-04-14 10:34:54', NULL, '0000-00-00 00:00:00'),
(22, 7, 5, 'fdfdfd', 'complaint.png', '2019-04-14 10:39:56', NULL, '0000-00-00 00:00:00'),
(23, 7, 7, 'fdd', '5c43d8c1754ddac59be7bf4d4d0c9abc.jpg', '2019-04-14 10:40:19', NULL, '0000-00-00 00:00:00'),
(24, 7, 3, 'hfyjyjyj', 'fe9cfb454df842fc86c49880b761e47c_jpeg_2048x.png', '2019-04-14 10:50:59', 'closed', '2019-04-14 10:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-28 17:04:36', '', 1),
(2, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-29 15:02:26', '', 1),
(3, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-30 14:58:00', '', 1),
(4, 0, 'dsad', 0x3a3a3100000000000000000000000000, '2017-03-31 17:39:07', '', 0),
(5, 0, 'dwerwer', 0x3a3a3100000000000000000000000000, '2017-03-31 17:41:22', '', 0),
(6, 0, 'ffert', 0x3a3a3100000000000000000000000000, '2017-03-31 17:41:29', '', 0),
(7, 0, 'ewrwe', 0x3a3a3100000000000000000000000000, '2017-03-31 17:42:12', '', 0),
(8, 0, 'ewrwe', 0x3a3a3100000000000000000000000000, '2017-03-31 17:47:51', '', 0),
(9, 0, 'ewrwe', 0x3a3a3100000000000000000000000000, '2017-03-31 17:47:54', '', 0),
(10, 0, 'fsdfsdff', 0x3a3a3100000000000000000000000000, '2017-03-31 17:48:11', '', 0),
(11, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-31 17:49:25', '', 1),
(12, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-04-01 18:52:35', '02-04-2017 12:24:41 AM', 1),
(13, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-04-01 18:58:09', '02-04-2017 12:50:42 AM', 1),
(14, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-04-01 19:38:15', '02-04-2017 01:08:19 AM', 1),
(15, 0, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-04-02 18:50:20', '', 0),
(16, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-04-02 18:50:28', '03-04-2017 12:26:50 AM', 1),
(17, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2017-05-02 18:01:26', '', 1),
(18, 0, 'test@gm.com', 0x3a3a3100000000000000000000000000, '2017-06-11 10:48:50', '', 0),
(19, 5, 'abc@abc.com', 0x3a3a3100000000000000000000000000, '2017-06-11 10:56:30', '11-06-2017 04:39:15 PM', 1),
(20, 6, 'xyz@xyz.com', 0x3a3a3100000000000000000000000000, '2017-06-11 11:13:28', '11-06-2017 04:45:46 PM', 1),
(21, 6, 'xyz@xyz.com', 0x3a3a3100000000000000000000000000, '2017-06-11 11:19:45', '11-06-2017 04:50:02 PM', 1),
(22, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-12 15:32:18', '12-04-2019 09:03:27 PM', 1),
(23, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-12 16:36:31', '12-04-2019 10:19:34 PM', 1),
(24, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-13 17:27:37', '13-04-2019 11:01:33 PM', 1),
(25, 1, 'codeprojects@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-14 09:42:23', '14-04-2019 03:48:18 PM', 1),
(26, 7, 'test@123', 0x3a3a3100000000000000000000000000, '2019-04-14 10:29:09', '14-04-2019 04:10:27 PM', 1),
(27, 7, 'test@123', 0x3a3a3100000000000000000000000000, '2019-04-14 10:50:20', '14-04-2019 04:21:26 PM', 1),
(28, 7, 'test@123', 0x3a3a3100000000000000000000000000, '2019-04-14 10:53:47', '14-04-2019 04:25:21 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
(1, 'Code Projects', 'codeprojects@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 9999857860, 'Shakarpur', NULL, '2017-03-28 11:44:52', '2017-04-01 19:37:42', 1),
(2, 'Amit', 'amit@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 8888888888, NULL, NULL, '2017-03-28 16:58:04', '0000-00-00 00:00:00', 1),
(3, 'Teste', 'test@test.com', 'f925916e2754e5e03f75dd58a5733251', 1212121212, NULL, NULL, '2017-03-28 16:59:14', '0000-00-00 00:00:00', 1),
(4, 'demo', 'test@gm.com', 'ceb6c970658f31504a901b89dcd3e461', 9999999999, NULL, NULL, '2017-06-11 10:48:35', '0000-00-00 00:00:00', 1),
(5, 'ABC', 'abc@abc.com', '5c428d8875d2948607f3e3fe134d71b4', 9999857868, 'fdgfdgdf', NULL, '2017-06-11 10:56:05', '2017-06-11 10:58:28', 1),
(6, 'XYZ', 'xyz@xyz.com', 'f925916e2754e5e03f75dd58a5733251', 1111111111, 'test', NULL, '2017-06-11 11:13:05', '2017-06-11 11:16:18', 1),
(7, 'Sabrina', 'test@123', '098f6bcd4621d373cade4e832627b4f6', 193329342, 'subang jaya, selangor', NULL, '2019-04-14 10:28:56', '2019-04-14 10:33:16', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaintremark`
--
ALTER TABLE `complaintremark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
 ADD PRIMARY KEY (`complaintNumber`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `complaintremark`
--
ALTER TABLE `complaintremark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
MODIFY `complaintNumber` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
