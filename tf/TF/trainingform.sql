-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 06:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainingform`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `staff_id` int(10) UNSIGNED DEFAULT NULL,
  `theanswer` text,
  `date_and_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` char(10) NOT NULL,
  `form_name` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `form_name`) VALUES
('FA1', 'FURTHER ACTION'),
('HODE1', 'HOD EVALUATION'),
('SC1', 'SUMMARY COMMENT'),
('TE1', 'TRAINING EVALUATION FORM');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `form_id` char(10) DEFAULT NULL,
  `thequestion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(10) UNSIGNED NOT NULL,
  `ic_num` varchar(14) NOT NULL,
  `staff_password` varchar(60) NOT NULL,
  `staff_name` varchar(70) NOT NULL,
  `staff_email` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` text NOT NULL,
  `postcode` char(6) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `dept` varchar(70) NOT NULL,
  `designation` varchar(70) NOT NULL,
  `date_of_hire` date NOT NULL,
  `gender` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `ic_num`, `staff_password`, `staff_name`, `staff_email`, `date_of_birth`, `address`, `postcode`, `state`, `phone_no`, `dept`, `designation`, `date_of_hire`, `gender`) VALUES
(201728328, '990723-04-9292', 'ghazicem', 'Siti Aisyah Binti Ruslan', 'ecahrus99@gmail.com', '1999-07-23', 'Mt. 2010, Taman Sri Aman 36, Masjid Tanah', '12313', 'Melaka', '011402020', 'Department 2', 'Wifey', '2019-08-24', 'Female'),
(2017228383, '2902939201', 'yow', 'Muhammad Saiful', 'saiful@yahoo.com', '1999-02-20', 'Morib', '46070', 'Sabah', '012929292', 'Department 1', 'Forward', '2000-02-10', 'Male'),
(2017232172, '991025145223', 'Keghazian', 'Muhammad Danish Ghazi', 'ss@ds', '1999-10-25', 'NO145, JALAN USJ 3/2, UEP SUBANG JAYA', '47620', 'Johor', '1121359232', 'Department 1', 'Goalkeeper', '2019-07-15', 'Male'),
(2017232294, '991020-03-5601', 'fizinyit', 'Hafizzi Sanuri', 'hafizzoux@gmail.com', '1999-10-20', 'Banting', '92922', 'Perak', '019292922', 'Department 1', 'Kunyit', '2011-04-10', 'Male'),
(2017929323, '9921030103013', 'autismpadu', 'Muhammad Zulkifli Bin Mohd Zin', 'zul@atsb.com', '2019-08-08', 'Longkang', '20202', 'Kedah', '01102202020', 'Department 1', 'Goalkeeper', '2019-08-10', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD KEY `question_id` (`question_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`),
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `form` (`form_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
