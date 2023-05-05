-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 08:35 PM
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

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `firstName`, `lastName`, `email`, `phone`, `date`, `time`, `message`, `created_at`) VALUES
(14, 'Daniel', 'Panganiban', 'dhpanganiban@gmail.com', '90808080', '2023-06-08', '10:30:00', 'For Barangay clearance application', '2023-05-04 18:07:32'),
(15, 'Daniel', 'Panganiban', 'dhpanganiban@gmail.com', '90808080', '2023-05-26', '08:00:00', 'kjhkujhkhu', '2023-05-04 18:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `documentrequest`
--

CREATE TABLE `documentrequest` (
  `doc_id` int(11) NOT NULL,
  `doc_documentType` varchar(255) NOT NULL,
  `doc_fname` varchar(255) NOT NULL,
  `doc_lname` varchar(255) NOT NULL,
  `doc_address` varchar(255) NOT NULL,
  `doc_birthdate` date NOT NULL,
  `doc_sex` varchar(255) NOT NULL,
  `doc_email` varchar(255) NOT NULL,
  `doc_civilstatus` varchar(255) NOT NULL,
  `doc_directory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heritage`
--

CREATE TABLE `heritage` (
  `heritageID` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `title` char(255) DEFAULT NULL,
  `titleDescription` text NOT NULL,
  `newsDescription1` text NOT NULL,
  `newsDescription2` text NOT NULL,
  `newsDescription3` text NOT NULL,
  `lastUpdatedNews1` date NOT NULL,
  `lastUpdatedNews2` date NOT NULL,
  `lastUpdatedNews3` date NOT NULL,
  `aboutUsDescription` text NOT NULL,
  `heritageSite1` char(255) NOT NULL,
  `heritageSite2` char(255) NOT NULL,
  `heritageSite3` char(255) NOT NULL,
  `heritageSiteDesc1` text NOT NULL,
  `heritageSiteDesc2` text NOT NULL,
  `heritageSiteDesc3` text NOT NULL,
  `lastUpdatedHeritage1` date NOT NULL,
  `lastUpdatedHeritage2` date NOT NULL,
  `lastUpdatedHeritage3` date NOT NULL,
  `position1` char(255) NOT NULL,
  `position2` char(255) NOT NULL,
  `position3` char(255) NOT NULL,
  `positionDesc1` text NOT NULL,
  `positionDesc2` text NOT NULL,
  `positionDesc3` text NOT NULL,
  `lastUpdatedPosition1` date NOT NULL,
  `lastUpdatedPosition2` date NOT NULL,
  `lastUpdatedPosition3` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `title`, `titleDescription`, `newsDescription1`, `newsDescription2`, `newsDescription3`, `lastUpdatedNews1`, `lastUpdatedNews2`, `lastUpdatedNews3`, `aboutUsDescription`, `heritageSite1`, `heritageSite2`, `heritageSite3`, `heritageSiteDesc1`, `heritageSiteDesc2`, `heritageSiteDesc3`, `lastUpdatedHeritage1`, `lastUpdatedHeritage2`, `lastUpdatedHeritage3`, `position1`, `position2`, `position3`, `positionDesc1`, `positionDesc2`, `positionDesc3`, `lastUpdatedPosition1`, `lastUpdatedPosition2`, `lastUpdatedPosition3`) VALUES
(0, 'Barangay 872, Pandacan, Manila City', 'A Barangay in Manila', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', '2023-05-04', '2023-05-04', '2023-05-04', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', 'Osmena Highway', 'PNR', 'Barangay 872', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', '2023-05-04', '2023-05-04', '2023-05-04', 'Punong Barangay', 'SK Chairperson', 'Barangay Secretary', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum sit amet lectus in vulputate. Pellentesque eget sapien ante. Donec finibus faucibus massa, in sollicitudin dolor eleifend non. Ut fermentum nisi vel elit pulvinar, ut semper nisi pellentesque.', '2023-05-04', '2023-05-04', '2023-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsID` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
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
(6, 'Kyle Dexter', 'Panganiban', 'Kyle Dexter Panganiban', 'kdhpanganiban@gmail.com', '$2y$10$u86st3XoVi2qGj3Qfyx8LOCEr2JL5XgAERQS3HQFz9DwoX8dyQXLu', '09062877686', 'moeadoew st', '01/16/2023', 'Widowed', 0, 'admin'),
(7, 'Daniel', 'Panganiban', 'Daniel Panganiban', 'dhpanganiban@gmail.com', '$2y$10$mDU0BE27x.E2wOTSfeS0hOTpc7xIW0yEYCJL/QT6gdsKyDYGYJ6BO', '90808080', '188 Meadowood Ave., Panapaan 8', '03/21/2022', 'Married', 0, 'User'),
(8, 'Jethro', 'Panganiban', 'Jethro Panganiban', 'jvalenzuela@sdca.edu.ph', '$2y$10$I1.85JJXDgiVF./yt/PbnOaHVqIf36uc/EKBYdV4GQGYaDiCvFDMC', '0987123115', 'moeadoew st', '01/14/2009', 'Married', 0, 'User'),
(9, 'Kyle Dexter', 'Panganiban', 'Kyle Dexter Panganiban', 'kdhpanganiban@hotmail.com', '$2y$10$6dCD6FhirUmfgoijvlwNV.4pV2Ko71u0NG8Se9bppWDoTrS9Ftgpu', '089809709', 'moeadoew st', '03/16/2022', 'Single', 0, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentrequest`
--
ALTER TABLE `documentrequest`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `heritage`
--
ALTER TABLE `heritage`
  ADD PRIMARY KEY (`heritageID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsID`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `documentrequest`
--
ALTER TABLE `documentrequest`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `heritage`
--
ALTER TABLE `heritage`
  MODIFY `heritageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
