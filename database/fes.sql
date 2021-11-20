-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 12:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fes`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `id` tinyint(30) NOT NULL,
  `academic_year` varchar(30) NOT NULL,
  `semester` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`id`, `academic_year`, `semester`) VALUES
(1, '2021-2022', 1),
(2, '2021-2022', 2),
(3, '2022-2023', 1),
(4, '2022-2023', 2);

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `id` tinyint(30) NOT NULL,
  `criteria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`id`, `criteria`) VALUES
(1, 'CRITERIA 1'),
(2, 'CRITERIA 2'),
(3, 'CRITERIA 3');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` tinyint(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `year` int(30) NOT NULL,
  `section` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `course`, `year`, `section`) VALUES
(1, 'ACT', 1, 'A'),
(2, 'BSIS', 2, 'A'),
(3, 'BEED', 4, 'B'),
(4, 'BSED', 1, 'C'),
(5, 'ELX', 2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` tinyint(30) NOT NULL,
  `useridf` tinyint(30) NOT NULL,
  `fno` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `useridf`, `fno`, `fname`, `lname`) VALUES
(1, 3, '123', 'ivy', 'encarnacion');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` tinyint(30) NOT NULL,
  `criteria_id` tinyint(30) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `criteria_id`, `question`) VALUES
(1, 1, 'How frequently checked attendance?'),
(2, 2, 'The instructor was well prepared for the class'),
(3, 3, 'The instructor showed an interest in helping students learn'),
(4, 1, 'The course was organized in a manner that helped understand the concepts');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` tinyint(30) NOT NULL,
  `userid` tinyint(30) NOT NULL,
  `studentno` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `userid`, `studentno`, `firstname`, `lastname`) VALUES
(0, 0, '99-123', 'Brian', 'Delos Santos');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` tinyint(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `code`, `description`) VALUES
(1, 'CC105', 'Enterprise Architecture'),
(2, 'CAP102', 'Capstone Project 2'),
(3, 'DM104', 'Evaluation of Business Perform');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` tinyint(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`, `name`) VALUES
(0, 'Brian', '$2y$10$k9xfCn1lBqsI2xEx3tyGrOcbWLlgVIbGIhBAOUIHtx3qeQqu8wfGG', 'student', 'Brian'),
(1, 'teamcapslock', '$2y$10$tApwfgU8Ak6CkqDyae9tG.nHLU9rhDC.snYBfRAqkD32xIyD5fgUC', 'admin', 'TEAM CAPSLOCK'),
(2, 'michael', '$2y$10$fFsRXfbGagCzmdBJnIxNr.6NiSyr/lAQgpf4irM57C4KUUmOCoFoG', 'student', 'MICHAEL'),
(3, 'ivy', '$2y$10$tApwfgU8Ak6CkqDyae9tG.nHLU9rhDC.snYBfRAqkD32xIyD5fgUC', 'faculty', 'IVY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD KEY `useridf` (`useridf`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD KEY `criteria_id` (`criteria_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` tinyint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_ibfk_1` FOREIGN KEY (`useridf`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
