-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 04:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangaywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` char(255) NOT NULL,
  `lastName` char(255) NOT NULL,
  `fullName` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `contactNo` char(255) NOT NULL,
  `address` char(255) NOT NULL,
  `dateOfBirth` char(255) NOT NULL,
  `maritalStatus` char(255) NOT NULL,
  `isDeceased` tinyint(1) NOT NULL,
  `userType` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `fullName`, `email`, `password`, `contactNo`, `address`, `dateOfBirth`, `maritalStatus`, `isDeceased`, `userType`) VALUES
(3, 'Vincent', 'Dytiapco', 'Vincent Dytiapco', 'vadytiapco@rocketmail.com', '0', '123456789', 'miami st.', '1990-01-01', 'single', 0, 'resident'),
(4, 'Vincent', 'Dytiapco', 'Vincent Dytiapco', 'vadytiapco@rocketmail.com', '$2y$10$L6Q2Mbp4LnvMAIbRmmzgWeaObhskq91STxfmid5eWjc.TNb6iPOpe', '123456789', 'miami st.', '1990-01-01', 'single', 0, 'resident'),
(5, 'Vincent', 'Dytiapco', 'Vincent Dytiapco', 'vadytiapco@rocketmail.com', '$2y$10$W7351RCOcqBGFhr.C6WcY.Jyx2DkEoYKEHn7vrRKqUpormg014zl.', '123456789', 'miami st.', '1990-01-01', 'single', 0, 'resident'),
(6, 'Kyle Dexter', 'Panganiban', 'Kyle Dexter Panganiban', 'kdhpanganiban@gmail.com', '$2y$10$u86st3XoVi2qGj3Qfyx8LOCEr2JL5XgAERQS3HQFz9DwoX8dyQXLu', '09062877686', 'moeadoew st', '01/16/2023', 'Widowed', 0, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
