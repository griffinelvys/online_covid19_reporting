-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 12:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_covid-19_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `page_visits`
--

CREATE TABLE `page_visits` (
  `id` int(100) NOT NULL,
  `homepage` int(100) NOT NULL DEFAULT 1,
  `product` int(100) NOT NULL,
  `cart` int(100) NOT NULL,
  `payment` int(100) NOT NULL,
  `completed` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_visits`
--

INSERT INTO `page_visits` (`id`, `homepage`, `product`, `cart`, `payment`, `completed`) VALUES
(1, 183, 157, 221, 17, 33);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(30) NOT NULL,
  `lastLogin` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `user_name`, `password`, `date`, `name`, `lastLogin`) VALUES
(1, 8217241738532285702, 'judeomondi', 'Makemoneyke07$', '2022-07-31 22:38:46', 'Jude Omondi', '2022-08-01 01:38:46'),
(2, 43183217, 'elvisomondi', 'Dollarsign', '2022-07-31 22:26:54', 'Elvys Omondi', '2022-08-01 01:26:54'),
(3, 2831251503845, 'jomondi', 'yycomedy', '2022-07-31 22:31:09', 'Julius Dean', '2022-08-01 01:31:09'),
(4, 1135110, 'jjokocha', 'wampoto', '2022-07-31 22:33:46', 'JJ Okocha', '2022-08-01 01:33:46'),
(5, 91151, 'etoosamuel', 'etoo', '2022-07-31 22:37:08', 'Etoo Samuel', '2022-08-01 01:37:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
