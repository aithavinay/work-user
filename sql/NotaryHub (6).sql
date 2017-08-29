-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2017 at 01:19 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NotaryHub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`, `status`) VALUES
(8008, 'admin', 'admin123', 1),
(8009, 'rihu', 'rihu123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discount_data`
--

CREATE TABLE `discount_data` (
  `Id` int(100) DEFAULT NULL,
  `discount` int(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_data`
--

INSERT INTO `discount_data` (`Id`, `discount`) VALUES
(10001, 5),
(10002, 0),
(10003, 0),
(10004, 0),
(10005, 15),
(10006, 0),
(10007, 10),
(10008, 0),
(10009, 0),
(10010, 0),
(10011, 0),
(10012, 0),
(10013, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Price`
--

CREATE TABLE `Price` (
  `Id` int(11) NOT NULL,
  `file_size_Kbs` int(11) NOT NULL,
  `amount_Rs` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Price`
--

INSERT INTO `Price` (`Id`, `file_size_Kbs`, `amount_Rs`) VALUES
(1, 100, 50),
(2, 200, 100),
(3, 300, 150),
(4, 400, 200),
(5, 500, 250),
(6, 600, 300),
(7, 700, 350),
(8, 800, 400),
(9, 900, 450),
(10, 1000, 500);

-- --------------------------------------------------------

--
-- Table structure for table `UPLOADS`
--

CREATE TABLE `UPLOADS` (
  `Id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `path` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UPLOADS`
--

INSERT INTO `UPLOADS` (`Id`, `file`, `type`, `size`, `path`, `date`) VALUES
(10007, '90800-pdf(1).pdf', 'applicatio', 424, '/opt/lampp/temp/phpIuUE7K', '2017-08-08'),
(10007, '35150-priya-143(1).docx', 'applicatio', 12, '/opt/lampp/temp/phpgYTKIf', '2017-08-08'),
(0, 'payment-history.pdf', 'applicatio', 45, '/opt/lampp/temp/phpmOp6Lm', '2017-08-08'),
(0, 'pdf.pdf', 'applicatio', 424, '/opt/lampp/temp/phpJpJXR8', '2017-08-08'),
(10005, 'priya-143(1).docx', 'applicatio', 12, '/opt/lampp/temp/phpnO53Yb', '2017-08-08'),
(10005, 'priya-143(1).docx', 'applicatio', 12, '/opt/lampp/temp/php4gr5mC', '2017-08-08'),
(10005, 'priya-143(1).docx', 'applicatio', 12, '/opt/lampp/temp/phpXEIwvh', '2017-08-09'),
(10005, 'payment-history.pdf', 'applicatio', 45, '/opt/lampp/temp/phpNujHpN', '2017-08-09'),
(10005, 'payment-history.pdf', 'applicatio', 45, '/opt/lampp/temp/phpRxfTXG', '2017-08-09'),
(10005, 'img_fjords.jpg', 'image/jpeg', 36, '/opt/lampp/temp/php13dlQ2', '2017-08-09'),
(10005, 'index.jpeg', 'image/jpeg', 11, '/opt/lampp/temp/phpW1rAY5', '2017-08-09'),
(10005, 'img_fjords.jpg', 'image/jpeg', 36, '/opt/lampp/temp/phpRWocw9', '2017-08-09'),
(10005, 'index.jpeg', 'image/jpeg', 11, '/opt/lampp/temp/phpIKTra4', '2017-08-09'),
(10005, 'index.jpeg', 'image/jpeg', 11, '/opt/lampp/temp/php7pODOR', '2017-08-09'),
(10004, 'index.jpeg', 'image/jpeg', 11, '/opt/lampp/temp/php0r1yiw', '2017-08-09'),
(10005, 'img_fjords.jpg', 'image/jpeg', 36, '/opt/lampp/temp/php6YfipO', '2017-08-10'),
(10005, 'index.jpeg', 'image/jpeg', 11, '/opt/lampp/temp/phphn19Of', '2017-08-10'),
(10005, 'index.jpeg', 'image/jpeg', 11, '/opt/lampp/temp/phpEaGk6v', '2017-08-10'),
(10005, 'img_fjords.jpg', 'image/jpeg', 36, '/opt/lampp/temp/phpEpTlRR', '2017-08-10'),
(10005, 'office.jpg', 'image/jpeg', 27, '/opt/lampp/temp/phpvBCg2W', '2017-08-17'),
(10010, 'index.jpeg', 'image/jpeg', 11, '/opt/lampp/temp/phpdCdaTv', '2017-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `Id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Phone_Number` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user',
  `status` int(10) NOT NULL DEFAULT '1',
  `signup_date` datetime NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`Id`, `username`, `lname`, `email`, `password`, `Phone_Number`, `city`, `state`, `type`, `status`, `signup_date`, `last_login`) VALUES
(10001, 'kesava', 'b', 'kesav.b@rihusoft.com', '123456789', '9876543210', 'vizag', 'AP', 'user', 1, '0000-00-00 00:00:00', '2017-08-21 08:03:49'),
(10002, 'rajashekar', 'b', 'rajashekar.b@rihusoft.com', 'raja1994', '1234567889', 'hyd', 'TS', 'user', 1, '0000-00-00 00:00:00', '2017-08-21 07:02:48'),
(10003, 'kishore', '', 'kishore.b@rihusoft.com', 'kittu123', '8965236589', 'tanuku', 'AP', 'user', 1, '0000-00-00 00:00:00', '2017-08-21 07:02:45'),
(10004, 'devasena', 'C', 'devasena@gmail.com', 'vinay123', '8529631470', 'BNG', 'KA', 'user', 1, '0000-00-00 00:00:00', '2017-08-21 07:02:43'),
(10005, 'vinay', 'Aitha', 'vinay.a@gmail.com', '123456', '8186060604', 'Hyderabad', 'Telangana', 'user', 1, '0000-00-00 00:00:00', '2017-08-21 06:05:59'),
(10006, 'sathish', 'CVVS', 'sathish.cvvs@rihusoft.com', 'sathish@123', '789654321', 'hyd', 'Ts', 'admin', 1, '0000-00-00 00:00:00', '2017-08-21 08:11:51'),
(10007, 'shravani', 'g', 'shravani.g@rihusoft.com', '123456', '7896541230', 'hyd', 'TS', 'user', 1, '0000-00-00 00:00:00', '2017-08-10 12:38:18'),
(10008, 'manoj', 'd', 'manoj.d@rihusoft.com', '123456', '321456987', 'HYD', 'Ts', 'user', 1, '0000-00-00 00:00:00', '2017-08-21 08:03:41'),
(10009, 'viany1', '', 'kishore96182@gmail.com', '789654', '818606060444', '', '', 'user', 1, '0000-00-00 00:00:00', '2017-08-11 06:15:28'),
(10010, 'vivek', 'A', 'vivek@gmail.com', '123456', '7856238142', 'hyd', 'ts', 'user', 1, '0000-00-00 00:00:00', '2017-08-21 08:03:39'),
(10011, 'kishor', 'v', 'kish@gmail.com', '123456', '9550529880', 'mh-bd', 'ts', 'user', 1, '0000-00-00 00:00:00', '2017-08-21 05:40:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `discount_data`
--
ALTER TABLE `discount_data`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `Price`
--
ALTER TABLE `Price`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8010;
--
-- AUTO_INCREMENT for table `Price`
--
ALTER TABLE `Price`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10012;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
