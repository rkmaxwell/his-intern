-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 02:46 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `his_intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `p_name` varchar(230) NOT NULL,
  `p_telephone` varchar(100) NOT NULL,
  `p_dob` date NOT NULL,
  `pid_number` int(11) NOT NULL,
  `p_address` text NOT NULL,
  `p_county` varchar(100) NOT NULL,
  `p_subcounty` varchar(100) NOT NULL,
  `p_email` text NOT NULL,
  `p_gender` varchar(100) NOT NULL,
  `p_mstatus` varchar(100) NOT NULL,
  `next_kin_name` varchar(200) NOT NULL,
  `next_kin_dob` date NOT NULL,
  `next_kin_id` int(11) NOT NULL,
  `next_kin_gender` varchar(100) NOT NULL,
  `next_kin_rlship` varchar(120) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `p_name`, `p_telephone`, `p_dob`, `pid_number`, `p_address`, `p_county`, `p_subcounty`, `p_email`, `p_gender`, `p_mstatus`, `next_kin_name`, `next_kin_dob`, `next_kin_id`, `next_kin_gender`, `next_kin_rlship`, `date_created`) VALUES
(1, 'Jogn name', 'Jogn name', '2023-08-03', 22334475, 'Jogn name', 'Jogn name', 'Jogn name', 'Jogn name', 'maleq', 'male', '', '2023-08-03', 2147483647, 'male', 'Father', '2023-08-03 15:10:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
