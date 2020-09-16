-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2020 at 03:54 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `mobile`, `password`) VALUES
(7, 'Arafath Sami Sami', 'aro@gmail.com', '01545897425', '202cb962ac59075b964b07152d234b70'),
(10, 'Sami Arafath', 'aral@gmail.com', '01457558899', '37693cfc748049e45d87b8c7d8b9aacd'),
(11, 'm', 'a@gmail.com', '01457558899', 'f970e2767d0cfe75876ea857f92e319b'),
(35, 's', 'l@gmail.com', '01457558899', '3c59dc048e8850243be8079a5c74d079'),
(51, 'admin', 'aras@gmail.com', '01578495623', '6c8349cc7260ae62e3b1396831a8398f'),
(57, 'super', 'super@gmail.com', '01589745822', '35f4a8d465e6e1edc05f3d8ab658c551');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `Employee_ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Password` varchar(90) NOT NULL,
  `Email` varchar(155) NOT NULL,
  `Phone` varchar(105) NOT NULL,
  `Net Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`Employee_ID`, `Name`, `Password`, `Email`, `Phone`, `Net Salary`) VALUES
(9, 'Aro', 'e10adc3949ba59abbe56e057f20f883e', 'aro@gmail.com', '01560902231', 10000),
(10, 'Arfat', 'c20ad4d76fe97759aa27a0c99bff6710', 'sam@gmail.com', '01912121212', 50000),
(11, 'Neha', '12345', 'neha@gmail.com', '01560902293', 900),
(12, 'Musa', '12345', 'musa@gmail.com', '01560902294', 55000),
(13, 'Nahi', '12345', 'nahi@fb.com', '01760802230', 22500),
(14, 'Nahian', '12345', 'nahian@fb.com', '01560947686', 339000),
(15, 'Sisa', '12345', 'sisa@gmail.com', '01560902285', 5000),
(19, 'Muhi', '12345', 'muhi@gmail.com', '01660902233', 20000),
(20, 'Muhit', '12345', 'muhit@gmail.com', '01660902233', 20000),
(21, 'adas', '12345', 'adas@gmail.com', '01560432231', 12312),
(22, 'adasa', '12345', 'adasa@gmail.com', '01980432231', 12012),
(23, 'Mot', '12345', 'mot@gmail.com', '01560902299', 353450),
(25, 'row', '12345', 'row@gmail.com', '01560902251', 20900),
(27, 'Simu', '12345', 'simu@hotmail.com', '016830902205', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `hr_info`
--

CREATE TABLE `hr_info` (
  `ID` int(4) NOT NULL,
  `Name` text NOT NULL,
  `Password` varchar(90) NOT NULL,
  `Email` varchar(155) NOT NULL,
  `Phone` varchar(105) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr_info`
--

INSERT INTO `hr_info` (`ID`, `Name`, `Password`, `Email`, `Phone`) VALUES
(1, 'aral', '81dc9bdb52d04dc20036dbd8313ed055', 'aral@gmail.com', ''),
(2, 'noob', '6562c5c1f33db6e05a082a88cddab5ea', 'noob@fb.com', ''),
(3, 'mo', 'ba347fcc9a79fb74e95670b24848164f', 'mo@hotmail.com', ''),
(4, 'joe', 'b26747fc8cb2170baa866b315cf58b7c', 'joe@gmail.com', ''),
(5, 'joel', 'a35473cf94d983e392c83b24d265f3c1', 'joel@gmail.com', ''),
(6, 'joelo', 'e2065cb56f5533494522c46a72f1dfb0', 'joelo@gmail.com', ''),
(7, 'dr', '81dc9bdb52d04dc20036dbd8313ed055', 'dr@gmail.com', ''),
(8, 'MAFHUJ', 'c20ad4d76fe97759aa27a0c99bff6710', '18.1mahfuj@gmail.com', ''),
(9, 'MAFHUJ', 'c20ad4d76fe97759aa27a0c99bff6710', '18.1mahfuj@gmail.com', ''),
(10, 'm', 'c20ad4d76fe97759aa27a0c99bff6710', 'm@gmail.com', ''),
(11, 'afa', '81dc9bdb52d04dc20036dbd8313ed055', 'afa@gmail.com', ''),
(12, 'Lop', '67c08c98984cc2bc4b9d1f0d2fe6726a', 'lop@gmail.com', ''),
(13, 'Mob', '20125fd9b2d43e340a35fb0278da235d', 'mob@gmail.com', ''),
(14, 'Look', '57342f6b95854ad89e9c4088ab94adcf', 'look@gmail.com', ''),
(15, 'Nir', '4122cb13c7a474c1976c9706ae36521d', 'nir@gmail.com', ''),
(16, 'Nafi', '05b15a3bd85969833e55b3f05185dcb9', 'nafi@gmail.com', ''),
(17, 'Alam', '1b318124e37af6d74a03501474f44ea1', 'alam@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `salary_info`
--

CREATE TABLE `salary_info` (
  `Employee_ID` int(11) NOT NULL,
  `Month` text NOT NULL,
  `Date` date NOT NULL,
  `Net_Salary` int(11) NOT NULL,
  `Present` int(4) NOT NULL,
  `Paid_Leave` int(4) NOT NULL,
  `Working_Days` int(4) NOT NULL,
  `Bonus` int(11) NOT NULL,
  `Gross_Salary` int(11) NOT NULL,
  `Paid` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_info`
--

INSERT INTO `salary_info` (`Employee_ID`, `Month`, `Date`, `Net_Salary`, `Present`, `Paid_Leave`, `Working_Days`, `Bonus`, `Gross_Salary`, `Paid`) VALUES
(9, 'April', '2020-08-05', 10000, 12, 1, 15, 1000, 9667, 1),
(9, 'April', '2020-08-13', 10000, 12, 1, 15, 1000, 9667, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `tutor_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `subjects` varchar(200) NOT NULL,
  `day` int(11) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `tutor_name`, `email`, `mobile`, `subjects`, `day`, `language`) VALUES
(1, 'Sami', 's@gmail.com', '01578558974', 'Mathmatics & English', 3, 'Bangla'),
(2, 'Sam', 'si@gmail.com', '01578550974', 'Physics,Chemistry', 6, 'Bangla & English'),
(4, 'Samir', 'srsamir@gmail.com', '01478558974', 'Mathmatics & English', 3, 'English'),
(5, 'Samia', 'saa@gmail.com', '01778558974', 'Mathmatics & Physics', 6, 'Bangla & English'),
(8, 'asif', 'asif@gmail.com', '01678558974', 'Mathmatics & Physics & Chemistry', 6, 'Bangla & English'),
(9, 'nourin', 'nourin@gmail.com', '01778555974', 'Bangla & English', 6, 'Bangla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `hr_info`
--
ALTER TABLE `hr_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `Employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hr_info`
--
ALTER TABLE `hr_info`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
