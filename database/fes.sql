-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 08:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
  `semester` int(30) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=closed, 1=active, 2=pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`id`, `academic_year`, `semester`, `status`) VALUES
(1, '2021-2022', 1, 1);

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
(2, 'criteria 2'),
(3, 'criteria 3');

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
(1, 'BSIS', 4, 'A'),
(2, 'ACT', 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `evaluationid` int(30) NOT NULL,
  `sub_enrolled_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `password` varchar(255) NOT NULL,
  `view` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `fno`, `username`, `fname`, `lname`, `usertype`, `password`, `view`) VALUES
(1, '0001', 'Jocelyn', 'Jocelyn', 'Beriña', 'faculty', '$2y$10$CEOQt0wUjClUy36v/bib5e6dQYSIbThuFuqAu2rSdXRKmjiSBF.dS', '3eMQvkWu'),
(2, '0002', 'Ivy', 'Ivy', 'Encarnacion', 'faculty', '$2y$10$.m8TCTdyzzd1si1qhIpb3uIZtMHmDcNSaJ5zPEoTsL6TbXj0hV16.', 'APlgVusr'),
(3, '0003', 'Kaven Rey', 'Kaven Rey', 'Batac', 'faculty', '$2y$10$CURoQGNtlYJbJrFRWZMzWOabTNcHvXxCZstFubSNjj.AiNHQhy1Zu', 'ZBV2e1Tk'),
(6, '0004', 'anna rhodora', 'anna rhodora', 'Priolo', 'faculty', '$2y$10$JYiTm0bQvQShVOI7YoLty.gNbQcPS67t8LGHO7FHHRjaoA3grwnZi', 'CcV7h02K');

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
(1, 1, 'The teacher was accessible and willing to provide help'),
(2, 2, 'how frequently checked the attendance?'),
(3, 3, 'Excellence Teaching');

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

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(30) NOT NULL,
  `eval_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `eval_status`) VALUES
(1, 'active'),
(2, 'pending'),
(3, 'closed');

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
  `view` varchar(30) NOT NULL,
  `department_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentno`, `username`, `firstname`, `lastname`, `usertype`, `password`, `view`, `department_id`) VALUES
(9, '753-22', 'merryrose7209', 'merryrose', 'Ellorde', 'student', '$2y$10$bmADIB6ddqgq1uogc9aPneyhUrGSe8NBWA37p7GHYgo220vBip/ry', 'M76Gu8op', 1),
(10, '8474-26', 'Olive0935', 'Olive', 'Briones', 'student', '$2y$10$.Ndtmc.z7CcfNLCmu88Ene2TxCYGJFDQr4NtbcvebMpN5FL9gAjVO', 'gq768XMi', 1),
(11, '16-1287', 'michael0941', 'michael', 'bañaria', 'student', '$2y$10$scDiS5kJTquAKhukmxLRaeimGTh5zL5pcHaQf2AgBG0Xr/xhzRsXa', 'WX3nPfoe', 1),
(12, '21-5632', 'Brian7934', 'Brian', 'Delos Santos', 'student', '$2y$10$JOQQ.JlcMNNI3UJN6Wf9..Z3/7b0oZLsWiSNdFqH8LdO6L9KGac/S', 'T0rkyv13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `faculty_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `code`, `description`, `faculty_id`) VALUES
(1, 'CAP102', 'Capstone Project 2', 1),
(2, 'IS 105', 'Enterprise Architecture', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject_enrolled`
--

CREATE TABLE `subject_enrolled` (
  `id` int(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `subject_take` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_enrolled`
--

INSERT INTO `subject_enrolled` (`id`, `student_id`, `subject_take`) VALUES
(17, 9, 1),
(18, 9, 2),
(19, 10, 1),
(20, 10, 2),
(21, 11, 1),
(22, 11, 2),
(23, 12, 1),
(24, 12, 2);

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
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `sub_enrolled_id` (`sub_enrolled_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `evalid` (`evalid`),
  ADD KEY `questionid` (`questionid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_handled` (`faculty_id`);

--
-- Indexes for table `subject_enrolled`
--
ALTER TABLE `subject_enrolled`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_take` (`subject_take`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `id` tinyint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `evaluationid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject_enrolled`
--
ALTER TABLE `subject_enrolled`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`sub_enrolled_id`) REFERENCES `subject_enrolled` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`evalid`) REFERENCES `evaluation` (`evaluationid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`questionid`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_enrolled`
--
ALTER TABLE `subject_enrolled`
  ADD CONSTRAINT `subject_enrolled_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_enrolled_ibfk_3` FOREIGN KEY (`subject_take`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
