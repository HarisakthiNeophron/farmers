-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 09:08 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `biogas_scholarship`
--

CREATE TABLE `biogas_scholarship` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `student_aadhar` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_to` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_to` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biogas_scholarship`
--

INSERT INTO `biogas_scholarship` (`id`, `firstname`, `father_name`, `student_aadhar`, `contact`, `address`, `amount`, `created_to`, `updated_to`, `date`) VALUES
(8, 'Test-1', 'Test', '1234567890123', '1234567899', 'Neophrontech,thindal,erode', 'Rs.15000 /-', '0000-00-00 00:00:00', '2019-11-26 05:04:23', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `solar_scholarship`
--

CREATE TABLE `solar_scholarship` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `student_aadhar` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_to` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_to` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solar_scholarship`
--

INSERT INTO `solar_scholarship` (`id`, `firstname`, `father_name`, `student_aadhar`, `contact`, `address`, `amount`, `created_to`, `updated_to`, `date`) VALUES
(6, 'Test-2', 'Test', '1234567890124', '1234567898', 'Neophrontech,thindal,erode', 'Rs.2500 /-', '0000-00-00 00:00:00', '2019-11-26 05:07:50', '0'),
(19, 'sundaresh', 'sfg', 'g', 'sdfgn', 'sfgn', 'Rs.2500 /-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `student_scholarship`
--

CREATE TABLE `student_scholarship` (
  `id` int(11) NOT NULL,
  `date` varchar(250) CHARACTER SET utf8 NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `farmers_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `student_age` varchar(255) NOT NULL,
  `student_aadhar` varchar(255) NOT NULL,
  `student_contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `bank_account` varchar(255) NOT NULL,
  `student_year` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_to` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_to` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_scholarship`
--

INSERT INTO `student_scholarship` (`id`, `date`, `profile_image`, `student_name`, `farmers_name`, `dob`, `student_age`, `student_aadhar`, `student_contact`, `address`, `religion`, `cast`, `bank_account`, `student_year`, `student_address`, `amount`, `created_to`, `updated_to`) VALUES
(16, '', '1575003766_1.jpg', 'sfg', 'dfgn', '2019-11-21', 'dgnf', 'dfgn', 'dfgn', 'dfgn', 'Hindu', 'OC', '1234567890123', '2017', 'dfgn', 'Rs.150 /-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '2019-11-09', '1575013483_3.jpg', 'dfng', 'dfng', '2019-11-15', 'dfgn', 'dfgn', 'dfgn', 'dfgn', 'Hindu', 'OC', 'dfgn', 'dfgn', 'dfgn', 'Rs.150 /-', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biogas_scholarship`
--
ALTER TABLE `biogas_scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solar_scholarship`
--
ALTER TABLE `solar_scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_scholarship`
--
ALTER TABLE `student_scholarship`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biogas_scholarship`
--
ALTER TABLE `biogas_scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solar_scholarship`
--
ALTER TABLE `solar_scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student_scholarship`
--
ALTER TABLE `student_scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
