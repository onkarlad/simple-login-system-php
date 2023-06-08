-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 11:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `mobile`, `password`, `cpass`) VALUES
(5, 'Onkar Lad', 'onkarlad@gmail.com', '8987857675', '$2y$10$vN67c7dOJWEshaYbYEw1vOtBzRJG30kOcCliY.7D2dfP2ic.EFigu', '$2y$10$8tHmt85k1EUrFYTBn2JdBO7CvJtJG.Z5fnh4MrGmx5ilXNLJuoDoG'),
(6, 'karuna kadam', 'karuna@gmail.com', '8987876565', '$2y$10$8RH9Hy9XW0ptV5TaYQnHJ.grXIPWYK3tW/9w1JSHnFzsAHClOp/BO', '$2y$10$MLK8/bXrPtlqdUuM4XlpDuEZaQcC9i1Jdlhu.TU9rihee70EAHODm'),
(7, 'chinu', 'chinu@gmail.com', '8768768', '$2y$10$qGLvkPO3igVjbQQlum82VO20JDy1fXTQxG5wBPGG/xdm7GYN.yV6m', '$2y$10$hEX0aUAQUc1r2WayiXMbg.wxw4XxlSNDAt8Hlu8DA2KPw1tyADcHy'),
(8, 'Onkar Lad', 'onkarlad426@gmail.com', '43535', '$2y$10$eROgAoQqe8kEUZfbCPuYiua3Rm0RqEGuM8Ep2fA40EoHmpZVAIYOW', '$2y$10$ct65XyDxhktecQ6pu4uLRe94bd1wk8RQO19hEvp8fYNBtRu3Asn2O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
