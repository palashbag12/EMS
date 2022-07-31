-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 04:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_inc`
--

-- --------------------------------------------------------

--
-- Table structure for table `inc`
--

CREATE TABLE `inc` (
  `name` varchar(50) NOT NULL,
  `cpf` int(10) NOT NULL,
  `dob` date NOT NULL,
  `dop` date NOT NULL,
  `p_post` varchar(50) NOT NULL,
  `old_bp` int(11) NOT NULL,
  `new_bp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc`
--

INSERT INTO `inc` (`name`, `cpf`, `dob`, `dop`, `p_post`, `old_bp`, `new_bp`) VALUES
('KUNAL BAG', 789456, '2018-06-01', '2018-06-10', 'manager', 10000, 10300),
('PALASH BAG', 705150, '1988-07-12', '2015-11-10', 'AG-II(G)', 10130, 10440),
('MICHEL', 705150, '2018-07-01', '2018-07-27', 'AG-II(G)', 10000, 10300),
('PALASH BAG', 705150, '2018-08-10', '2018-08-10', 'manager', 10000, 10300),
('MICHEL', 123456, '2018-08-03', '2018-08-11', 'DEO', 20000, 20600);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
