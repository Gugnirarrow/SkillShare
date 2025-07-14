-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2025 at 11:49 AM
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
-- Database: `skillshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `email` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `programme` varchar(30) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL,
  `about` varchar(2000) DEFAULT NULL,
  `profilePicture` varchar(300) DEFAULT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`email`, `name`, `password`, `programme`, `code`, `about`, `profilePicture`, `type`) VALUES
('haziq@ikonp.com', 'Haziq', '$2y$10$wZ3XUYvsQJgcA0Bb/seTNOAeUp96yofQtEqej65l1EeoiKAJa3iTe', 'Software Engineering', '421', 'Nothing much about me bro', '../Profile_Pictures/profile picture.jpg', ''),
('test@gmail.com', 'test', '$2y$10$wZt32wAFCbbtE3Hf5huFcODFPOEaUAlBFFSPNVwn.wcbu1Ujm9icy', 'Software Engineering', 'TestCode', 'I am a test account, testing for values beep boop', '../Profile_Pictures/profile picture.jpg', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `messageID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`messageID`, `firstName`, `lastName`, `email`, `message`) VALUES
(1, 'HAZIQ', 'Mustaqim', 'haziq@ikonp.com', 'test message'),
(3, 'HAZIQ', 'Mustaqim', 'haziq@ikonp.com', 'test message');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobId` int(50) NOT NULL,
  `jobCompany` varchar(100) NOT NULL,
  `jobName` varchar(100) NOT NULL,
  `jobRequirement` varchar(500) NOT NULL,
  `jobSalary` varchar(300) NOT NULL,
  `jobDescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobId`, `jobCompany`, `jobName`, `jobRequirement`, `jobSalary`, `jobDescription`) VALUES
(1, 'Tenaga Nasional Berhad Sdn. Bhd', 'UI Developer', 'HTML, CSS and React knowledge are sought after.', 'RM 3000 - RM 4000', 'Develop front-end for in-house application'),
(2, 'OCBC Bank', 'Accountant', 'Degree in  Accounting\r\nFresh Graduates are welcome', 'RM 3000 - RM 3800\r\n(Performance based)', 'Perform accounting task auditing financial transaction and auditing'),
(3, 'ISIANPADU Systems Sdn. Bhd (IPS)', 'Pre-sales', 'At least 2-3 year experience doing per-sales in ICT, Energy Level, Self-Motivated, Self-Development, Motivation, Verbal Communication, Handles Pressure, Self-Confidence, Business Knowledge, Meeting Proposal Dateline.', 'RM 5000 - RM 6000', 'Pre-sales involves giving detailed information about technical specifications and the ways in which they could meet a customer\'s needs. This often includes demonstrating those features before a sale. In some cases it also involves responding to a pre-qualification questionnaire (PQQ) and then, if short listed, replying request for information (RFI) to tender document. The role requires significant interaction with clients, which may be face-to-face or over the telephone. Tasks are varied and inc');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partnerID` int(11) NOT NULL,
  `partnerName` varchar(100) NOT NULL,
  `field` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partnerID`, `partnerName`, `field`, `description`) VALUES
(1, 'CTC Sdn Bhd', 'Information Technology', 'Rising IT giant looking to gather new people.'),
(2, 'ISIANPADU Systems Sdn. Bhd (IPS)', 'Information Technology', 'IPS\' core business is Information and Communication Technology primarily, focusing on project management, trunkey developemnt, package customization, systems integration and consulting.\r\nIPS comprise '),
(4, 'Hilti', 'Construction', 'Construction is one of the largest industries globally and faces significant challenges, such as lack of skilled labor, health and safety issues on jobsites, and high carbon emissions. In the face of ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partnerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partnerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
