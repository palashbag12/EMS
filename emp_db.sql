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
-- Database: `emp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dor`
--

CREATE TABLE `dor` (
  `dob` date NOT NULL,
  `dor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dor`
--

INSERT INTO `dor` (`dob`, `dor`) VALUES
('2018-06-01', '2078-05-31'),
('1970-02-20', '2030-02-28'),
('2018-06-05', '2078-06-30'),
('1994-01-31', '2054-01-31'),
('1994-01-15', '2054-01-31'),
('1980-01-25', '2040-01-31'),
('2017-07-11', '2077-07-31'),
('2017-10-02', '2077-10-31'),
('2017-10-02', '2077-10-31'),
('2017-10-02', '2077-10-31'),
('2017-10-02', '2077-10-31'),
('2017-10-02', '2077-10-31'),
('2018-08-03', '2078-08-31'),
('2018-08-01', '2078-07-31'),
('2018-08-01', '2078-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `emp_pp_tb`
--

CREATE TABLE `emp_pp_tb` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `cpf` int(10) NOT NULL,
  `place` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `date_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_pp_tb`
--

INSERT INTO `emp_pp_tb` (`id`, `name`, `designation`, `cpf`, `place`, `from_date`, `date_to`) VALUES
(10, 'PALASH BAG', 'AGM', 705150, 'MUMBAI', '2018-05-01', '2018-05-31'),
(11, 'PALASH BAG', 'AGM', 705150, 'CHANDIGARH', '2018-01-01', '2018-05-05'),
(12, '', '', 0, '', '0000-00-00', '0000-00-00'),
(13, '', '', 0, '', '0000-00-00', '0000-00-00'),
(14, '', '', 0, '', '0000-00-00', '0000-00-00'),
(15, '', '', 0, '', '0000-00-00', '0000-00-00'),
(16, 'PALASH BAG', 'AG-II(G)', 705150, '', '2018-06-07', '2018-06-21'),
(17, 'PALASH BAG', 'AG-II(G)', 705150, 'hooghly', '2018-06-13', '2018-06-30'),
(18, 'LAXMAN', 'AGM', 750140, 'SILIGURI', '2018-06-05', '0000-00-00'),
(19, 'PALASH BAG', 'GM', 705150, 'HOOGHLY', '0000-00-00', '0000-00-00'),
(20, 'PALASH BAG', 'GM', 705150, 'KOLKATA', '2018-08-03', '0000-00-00'),
(21, 'PALASH BAG', 'DGM', 705150, 'DELHI', '2018-08-01', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_prom_tb`
--

CREATE TABLE `emp_prom_tb` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `cpf` int(10) NOT NULL,
  `prom_post` varchar(50) NOT NULL,
  `from_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_prom_tb`
--

INSERT INTO `emp_prom_tb` (`id`, `name`, `designation`, `cpf`, `prom_post`, `from_date`) VALUES
(2, 'PALASH BAG', 'AG-II(G)', 705150, 'MANAGER', '2018-05-24'),
(6, 'PALASH BAG', 'Manager', 705150, 'AGM', '2018-05-01'),
(7, 'PALASH BAG', 'AG-II(G)', 705150, 'GM', '2018-06-05'),
(8, 'PALASH BAG', 'GM', 705150, 'CGM', '2018-08-03'),
(9, 'PALASH BAG', 'CGM', 705150, 'DGM', '2018-08-10'),
(10, 'PALASH BAG', 'DGM', 705150, '', '0000-00-00'),
(11, 'PALASH BAG', '', 705150, 'DGM', '2018-08-14'),
(12, 'ABIR', 'MANAGER', 750330, 'AGM', '2018-08-10'),
(13, 'PROSENJIT GHOSH', 'AG-II(TECH.)', 725145, 'AG-I(TECH.)', '2018-08-09'),
(14, 'STEVE', '', 0, 'DGM', '2018-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `emp_tb`
--

CREATE TABLE `emp_tb` (
  `id` int(50) NOT NULL,
  `name` varchar(70) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `cpf` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `doa` date NOT NULL,
  `dop` date NOT NULL,
  `category` varchar(50) NOT NULL,
  `employee_type` varchar(50) NOT NULL,
  `office_name` varchar(50) NOT NULL,
  `doj_oname` date NOT NULL,
  `post_type` varchar(50) NOT NULL,
  `doj_postarea` date NOT NULL,
  `caste` varchar(50) NOT NULL,
  `subcaste` varchar(50) NOT NULL,
  `ph_status` varchar(50) NOT NULL,
  `exsm_status` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `p_zone` varchar(50) NOT NULL,
  `c_zone` varchar(50) NOT NULL,
  `c_region` varchar(50) NOT NULL,
  `edu_quali` varchar(50) NOT NULL,
  `dor` date NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `emp_tb`
--

INSERT INTO `emp_tb` (`id`, `name`, `designation`, `cpf`, `gender`, `dob`, `doa`, `dop`, `category`, `employee_type`, `office_name`, `doj_oname`, `post_type`, `doj_postarea`, `caste`, `subcaste`, `ph_status`, `exsm_status`, `religion`, `p_zone`, `c_zone`, `c_region`, `edu_quali`, `dor`, `remarks`) VALUES
(25, 'PALASH BAG', 'DGM', 705150, 'Male', '1988-07-12', '2011-04-04', '2018-08-14', 'I', 'PR', 'DELHI', '2018-08-01', 'ALLOWANCE', '2017-08-07', 'UR', 'NIL', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', 'WEST BENGAL', 'B.TECH. (CSE)', '2048-07-31', 'NIL'),
(26, 'PROSENJIT GHOSH', 'AG-I(TECH.)', 725145, 'Male', '1986-12-31', '2011-08-14', '2018-08-09', 'III', 'PR', 'MURSHIDABAD', '2014-11-20', 'NON-ALLOWANCE', '2014-11-20', 'OBC', 'GOWALA', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', 'WEST BENGAL', 'MCA', '2046-12-31', 'NIL'),
(27, 'RAM', 'AGM', 750250, 'Male', '1970-08-12', '1995-04-20', '0000-00-00', 'I', 'DR', 'HOOGHLY', '2010-10-20', 'ALLOWANCE', '2010-10-20', 'UR', '', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', 'WEST BENGAL', 'MBA', '2030-08-31', 'NIL'),
(29, 'SITA', 'GM', 750123, 'Female', '1970-01-01', '2000-01-01', '2010-01-01', 'I', 'PR', 'RO(WB)', '2010-01-01', 'ALLOWANCE', '2010-01-01', 'SC', 'POUDRA', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', 'WEST BENGAL', 'MBA', '2029-12-31', 'NIL'),
(30, 'LAXMAN', 'AGM', 750140, 'Male', '1970-05-20', '2005-01-01', '0000-00-00', 'I', 'DR', 'SILIGURI', '2018-06-05', 'NON-ALLOWANCE', '2006-10-10', 'OBC', 'TANTI', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', 'WEST BENGAL', 'M. TECH.', '2030-05-31', 'NIL'),
(31, 'ABIR', 'AGM', 750330, 'Male', '1980-10-20', '2010-01-20', '2018-08-10', 'I', 'PR', 'DURGAPUR', '2015-01-01', 'ALLOWANCE', '2015-01-01', 'SC', 'SANTAL', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', 'WEST BENGAL', 'M. TECH.', '1940-10-31', 'NIL'),
(37, 'saikat ghosh', 'group z', 123, 'Male', '1994-01-15', '2018-08-01', '2019-02-12', 'IV', 'DR', 'RO(WB)', '2020-03-01', 'NON-ALLOWANCE', '2021-01-01', 'OBC', 'bc-b', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', '', '', '2054-01-31', ''),
(38, 'HIMANGSHU', 'AGM(QC)', 458965, 'Male', '1980-01-25', '2006-05-06', '2013-07-15', 'I', 'PR', 'RO(WB)', '2016-09-17', 'ALLOWANCE', '2016-09-17', 'OBC', '', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', 'WEST BENGAL', 'M. SC.', '2040-01-31', 'NIL'),
(45, 'STEVE', 'DGM', 0, 'Male', '2018-08-03', '0000-00-00', '2018-08-01', 'I', 'PR', '', '0000-00-00', 'ALLOWANCE', '0000-00-00', 'UR', '', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', '', '', '2078-08-31', ''),
(46, 'THOMAS', 'DGM', 0, 'Male', '2018-08-01', '0000-00-00', '2018-08-01', 'I', 'PR', '', '0000-00-00', 'ALLOWANCE', '0000-00-00', 'UR', '', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', '', '', '2078-07-31', ''),
(47, 'THOMAS', 'DGM', 0, 'Male', '2018-08-01', '0000-00-00', '2018-08-01', 'I', 'PR', '', '0000-00-00', 'ALLOWANCE', '0000-00-00', 'UR', '', 'NIL', 'NIL', 'HINDU', 'EAST', 'EAST', '', '', '2078-07-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `id` int(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `u_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`id`, `username`, `password`, `email`, `u_type`) VALUES
(5, 'ABC', '202cb962ac59075b964b07152d234b70', '', ''),
(6, 'Palash', '7538347dca2e09b8c5d80a9d140f8c87', '', ''),
(7, 'XYZ', '202cb962ac59075b964b07152d234b70', '', ''),
(8, 'admin', '80c9ef0fb86369cd25f90af27ef53a9e', 'admin@gmail.com', 's_user'),
(9, 'user', '4dae8edd4b2cdd15e95d0a5b3cf1a18f', 'user@gmail.com', 'n_user'),
(10, 'user1', '6ad14ba9986e3615423dfca256d04e3f', 'user@ymail.com', 'n_user'),
(11, 'rti', '43515d7911aa5c62dd4121534955fc19', 'asdf', 'n_user'),
(12, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user2@gmail.com', 'n_user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_pp_tb`
--
ALTER TABLE `emp_pp_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_prom_tb`
--
ALTER TABLE `emp_prom_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_tb`
--
ALTER TABLE `emp_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_pp_tb`
--
ALTER TABLE `emp_pp_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `emp_prom_tb`
--
ALTER TABLE `emp_prom_tb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `emp_tb`
--
ALTER TABLE `emp_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
