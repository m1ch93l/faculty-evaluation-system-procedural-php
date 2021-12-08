-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 02:23 PM
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
  `id` int(30) NOT NULL,
  `criteria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`id`, `criteria`) VALUES
(1, 'CRITERIA 1'),
(2, 'CRITERIA 2'),
(8, 'criteria 103'),
(9, 'Attendance 1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `year` int(30) NOT NULL,
  `section` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `course`, `year`, `section`) VALUES
(1, 'ACT', 2, 'A'),
(2, 'BSIS', 4, 'A'),
(3, 'BEED', 3, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `evaluationid` int(30) NOT NULL,
  `departmentid` int(30) NOT NULL,
  `subjectid` int(30) NOT NULL,
  `facultyid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`evaluationid`, `departmentid`, `subjectid`, `facultyid`) VALUES
(1, 3, 1, 2),
(2, 1, 2, 2),
(3, 3, 1, 1),
(5, 2, 3, 1),
(6, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(30) NOT NULL,
  `fno` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `fno`, `username`, `fname`, `lname`, `usertype`, `password`) VALUES
(1, '12-3', 'ivy', 'ivy', 'encarnacion', 'faculty', '$2y$10$LTJtpxGtFzjc9TZIidRUc.sZvyCuk.X5vwYpUGWrLqdvfhkC1rqfi'),
(2, '0-413', 'kaven rey', 'kaven rey', 'Batac', 'faculty', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(30) NOT NULL,
  `criteria_id` int(30) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `criteria_id`, `question`) VALUES
(1, 1, 'How Frequently checked Attendance'),
(2, 2, 'show interest in topic'),
(3, 1, 'sample'),
(4, 2, 'what are you doing'),
(5, 9, 'what are you doing'),
(6, 9, 'hdahudhusa'),
(8, 8, 'questions to be answer'),
(9, 9, 'example question');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(30) NOT NULL,
  `evalid` int(30) NOT NULL,
  `questionid` int(30) NOT NULL,
  `rate` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `evalid`, `questionid`, `rate`) VALUES
(17, 2, 1, 5),
(18, 2, 3, 5),
(19, 2, 2, 5),
(20, 2, 4, 5),
(21, 2, 8, 5),
(22, 2, 5, 5),
(23, 2, 6, 5),
(24, 2, 9, 5),
(25, 6, 1, 5),
(26, 6, 3, 5),
(27, 6, 2, 5),
(28, 6, 4, 5),
(29, 6, 8, 5),
(30, 6, 5, 5),
(31, 6, 6, 5),
(32, 6, 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(30) NOT NULL,
  `studentno` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentno`, `username`, `firstname`, `lastname`, `usertype`, `password`, `department_id`) VALUES
(1, '16-1287', 'michael', 'michael', 'banaria', 'student', '$2y$10$LTJtpxGtFzjc9TZIidRUc.sZvyCuk.X5vwYpUGWrLqdvfhkC1rqfi', 1),
(11, '16-1277', 'Brian', 'Brian', 'Delos Santos', 'student', '$2y$10$HbHN5JmfFxhyzpT6PgymyeeGJodoaoF2rh52AQeVugomHkTpwtGha', 2),
(12, '20-2021', 'Olive', 'Olive', 'Briones', 'student', '$2y$10$oygvrIubEqHicYuca/FRJe7GEfxlGUtKGTK/plot86LIx0SmcEp7O', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `code`, `description`) VALUES
(1, 'CC105', 'Enterprise Architecture'),
(2, 'CAP102', 'Capstone Project 2'),
(3, 'DM104', 'Evaluation of Business Performance');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`, `name`) VALUES
(1, 'teamcapslock', '$2y$10$oRNCt9.J96VpeJp2/nLxYeht5iPw7Oo1DsBSaJAWfgw8XuBQSADdq', 'admin', 'teamcapslock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`evaluationid`),
  ADD KEY `departmentid` (`departmentid`),
  ADD KEY `evaluation_ibfk_2` (`facultyid`),
  ADD KEY `subjectid` (`subjectid`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_id` (`criteria_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

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
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `evaluationid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`departmentid`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`facultyid`) REFERENCES `faculties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_3` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
