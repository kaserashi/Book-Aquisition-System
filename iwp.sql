-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 09:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`USERNAME`, `PASSWORD`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bookstable`
--

CREATE TABLE `bookstable` (
  `BOOK_TITLE` varchar(50) NOT NULL,
  `AUTHOR_NAME` varchar(50) NOT NULL,
  `QUANTITY` int(4) NOT NULL,
  `TOPIC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookstable`
--

INSERT INTO `bookstable` (`BOOK_TITLE`, `AUTHOR_NAME`, `QUANTITY`, `TOPIC`) VALUES
('abcd', 'xyz', 4, 'computer science '),
('abcdefgh', 'xyzqwe', 2, 'computer science '),
('Data Structures And Algorithms Made Easy', 'Narasimha Karumanchi', 6, 'Data Structures'),
('Digital Design', 'M Morris Mano', 8, 'Digital Logic and Design'),
('ghj', '17BCI0018', 0, 'Zxcv1234'),
('Operating System Concepts', 'Avi Silberscgatz', 10, 'Operating System'),
('Thomas\' Calculus', 'George B. Thomas', 5, 'Calculus');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FEEDBACK` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FEEDBACK`) VALUES
('hello guys , i am really impressed by your work'),
('hello hi ');

-- --------------------------------------------------------

--
-- Table structure for table `registertable`
--

CREATE TABLE `registertable` (
  `FNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `REG_NO` varchar(9) NOT NULL,
  `PASS` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertable`
--

INSERT INTO `registertable` (`FNAME`, `EMAIL`, `REG_NO`, `PASS`) VALUES
('sanil', 'san@gmail.com', '17bce0034', 'Asdf1234'),
('krishna', 'krishna@gmail.com', '17BCE0098', 'Krish123'),
('ashishajh', 'dasdshf@sdksf.com', '17BCE0652', 'Baltimugga1!'),
('ashish', 'dshf@sdksf.com', '17BCE0654', 'Baltimugga1!'),
('Rashi Kasera', 'kaserashi@gmail.com', '17BCE2421', 'abc123'),
('ram', 'ram@gmail.com', '17BCI0019', 'Hello123'),
('SUMEGHA SAWA', 'sumeghasawa@gmail.com', '17BCI0102', 'sumegha');

-- --------------------------------------------------------

--
-- Table structure for table `requesttable`
--

CREATE TABLE `requesttable` (
  `BOOK_TITLE` varchar(50) NOT NULL,
  `AUTHOR_NAME` varchar(50) NOT NULL,
  `QUANTITY` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requesttable`
--

INSERT INTO `requesttable` (`BOOK_TITLE`, `AUTHOR_NAME`, `QUANTITY`) VALUES
('', '', 0),
('electronics and electricals ', 'john bird', 6),
('Engineering electromagnetics', 'Kamlesh Mullick', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `bookstable`
--
ALTER TABLE `bookstable`
  ADD PRIMARY KEY (`BOOK_TITLE`);

--
-- Indexes for table `registertable`
--
ALTER TABLE `registertable`
  ADD PRIMARY KEY (`REG_NO`),
  ADD UNIQUE KEY `E` (`EMAIL`);

--
-- Indexes for table `requesttable`
--
ALTER TABLE `requesttable`
  ADD PRIMARY KEY (`BOOK_TITLE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
