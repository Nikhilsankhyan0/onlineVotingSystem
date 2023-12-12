-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 02:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_election`
--

CREATE TABLE `add_election` (
  `id` int(100) NOT NULL,
  `election_name` text NOT NULL,
  `candidate` text NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `status` text NOT NULL,
  `inserted_by` varchar(100) DEFAULT NULL,
  `inserted_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_election`
--

INSERT INTO `add_election` (`id`, `election_name`, `candidate`, `starting_date`, `ending_date`, `status`, `inserted_by`, `inserted_on`) VALUES
(16, 'cm', '10', '2023-10-25', '2023-10-30', '', '123', '2023-10-26'),
(17, 'cm', '5', '2023-10-25', '2023-10-28', '', '123', '2023-10-27'),
(18, 'pm', '2', '2023-10-31', '2023-11-02', '', '123', '2023-10-31'),
(19, '', '', '0000-00-00', '0000-00-00', '', '123', '2023-11-03'),
(20, 'dcasdc', '6', '2023-11-03', '2023-11-18', '', '123', '2023-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

CREATE TABLE `candidate_details` (
  `id` int(11) NOT NULL,
  `election_id` int(11) DEFAULT NULL,
  `candidate_name` varchar(255) DEFAULT NULL,
  `candidate_image` int(11) DEFAULT NULL,
  `candidate_phone` text DEFAULT NULL,
  `inserted_by` varchar(255) DEFAULT NULL,
  `inserted_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`id`, `election_id`, `candidate_name`, `candidate_image`, `candidate_phone`, `inserted_by`, `inserted_on`) VALUES
(2, 0, 'nikhil', 0, '789456123', '123', '2023-10-31'),
(3, 0, 'nikhil', 0, '789456123', '123', '2023-10-31'),
(4, 0, 'raju', 0, '654465', '123', '2023-10-31'),
(5, 0, 'raju', 0, '654465', '123', '2023-10-31'),
(6, 0, 'raju', 0, '654465', '123', '2023-10-31'),
(7, 0, 'raju', 2147483647, '654465', '123', '2023-10-31'),
(8, 0, 'raju', 0, '654465', '123', '2023-10-31'),
(9, 0, 'ghatotkach', 2147483647, '9478809294', '123', '2023-10-31'),
(10, 0, 'rajubhai', 0, '7876719152', '123', '2023-11-03'),
(11, 0, 'rajubhai', 0, '7876719152', '123', '2023-11-03'),
(12, 0, 'nikhil', 0, '9418809294', '123', '2023-11-03'),
(13, 0, 'ramukaka', 0, '8894425304', '123', '2023-11-03'),
(14, 0, 'amar', 0, '656556165', '123', '2023-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `SrNo` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Query` text NOT NULL,
  `PhoneNo` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `contact_no` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `user_role` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `contact_no`, `password`, `user_role`) VALUES
(1, '123', '123', '123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_election`
--
ALTER TABLE `add_election`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_election`
--
ALTER TABLE `add_election`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `candidate_details`
--
ALTER TABLE `candidate_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
