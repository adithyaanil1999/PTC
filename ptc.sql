-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2019 at 08:30 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptc`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval_students`
--

CREATE TABLE `approval_students` (
  `app_id` int(11) NOT NULL,
  `app_student` varchar(30) DEFAULT NULL,
  `app_vac` int(11) DEFAULT NULL,
  `app_status` varchar(30) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approval_students`
--

INSERT INTO `approval_students` (`app_id`, `app_student`, `app_vac`, `app_status`) VALUES
(6, '17BCI0163', 34, 'APROVED');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(20) DEFAULT NULL,
  `comp_desc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comp_id`, `comp_name`, `comp_desc`) VALUES
(1, 'tata', 'cars and mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `login_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `userpass` varchar(500) DEFAULT NULL,
  `usertype` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`login_id`, `username`, `userpass`, `usertype`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'A'),
(4, '17BCI0163', '523af537946b79c4f8369ed39ba78605', 'S'),
(8, '17REC1234', '523af537946b79c4f8369ed39ba78605', 'R'),
(9, '17BCE0123', '523af537946b79c4f8369ed39ba78605', 'S'),
(11, '17BCI0123', '523af537946b79c4f8369ed39ba78605', 'S'),
(12, '17BCE0163', '523af537946b79c4f8369ed39ba78605', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `offer_sent`
--

CREATE TABLE `offer_sent` (
  `offer_id` int(11) NOT NULL,
  `vac_id` int(11) DEFAULT NULL,
  `student_id` varchar(30) DEFAULT NULL,
  `rec_id` varchar(30) DEFAULT NULL,
  `offer_amt` int(11) DEFAULT NULL,
  `offer_status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_sent`
--

INSERT INTO `offer_sent` (`offer_id`, `vac_id`, `student_id`, `rec_id`, `offer_amt`, `offer_status`) VALUES
(1, 34, '17BCI0163', '17REC1234', 10000, 'ACCEPTED');

-- --------------------------------------------------------

--
-- Table structure for table `user_recruiter`
--

CREATE TABLE `user_recruiter` (
  `rec_no` int(11) NOT NULL,
  `rec_id` varchar(10) DEFAULT NULL,
  `rec_name` varchar(100) DEFAULT NULL,
  `rec_comp` varchar(100) DEFAULT NULL,
  `rec_approved_status` varchar(20) DEFAULT NULL,
  `rec_denied_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_recruiter`
--

INSERT INTO `user_recruiter` (`rec_no`, `rec_id`, `rec_name`, `rec_comp`, `rec_approved_status`, `rec_denied_desc`) VALUES
(5, '17REC1234', 'ad', 'tata', 'APPROVED', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `user_student`
--

CREATE TABLE `user_student` (
  `student_no` int(11) NOT NULL,
  `student_id` varchar(10) DEFAULT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `student_branch` varchar(40) DEFAULT NULL,
  `student_cgpa` float DEFAULT NULL,
  `student_obj` varchar(500) DEFAULT NULL,
  `student_prof_skills` varchar(500) DEFAULT NULL,
  `student_pers_skills` varchar(500) DEFAULT NULL,
  `student_placement_status` varchar(20) DEFAULT NULL,
  `student_approved_status` varchar(20) DEFAULT NULL,
  `student_denined_desc` varchar(500) DEFAULT 'null',
  `student_comp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_student`
--

INSERT INTO `user_student` (`student_no`, `student_id`, `student_name`, `student_branch`, `student_cgpa`, `student_obj`, `student_prof_skills`, `student_pers_skills`, `student_placement_status`, `student_approved_status`, `student_denined_desc`, `student_comp`) VALUES
(3, '17BCI0163', 'test', 'test', 3, 'test', 'test', 'test', 'PLACED', 'APPROVED', 'null', NULL),
(4, '17BCE0123', 'test', 'test', 2, 'ad', 'adtst', 'addw', 'NOTPLACED', 'APPROVED', 'null', NULL),
(7, '17BCE0163', 'anil', 'CSE', 8, 'myobj ', 'JAVAC', 'swimming', 'NOTPLACED', 'APPROVED', 'null', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy_listing`
--

CREATE TABLE `vacancy_listing` (
  `vacancy_id` int(11) NOT NULL,
  `vacancy_recruiter_id` varchar(30) DEFAULT NULL,
  `vacancy_desc` varchar(500) DEFAULT NULL,
  `vacancy_comp` varchar(100) DEFAULT NULL,
  `vacancy_cgpa` float DEFAULT NULL,
  `vacancy_skills_req` varchar(500) DEFAULT NULL,
  `vacancy_location` varchar(100) DEFAULT NULL,
  `vacancy_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy_listing`
--

INSERT INTO `vacancy_listing` (`vacancy_id`, `vacancy_recruiter_id`, `vacancy_desc`, `vacancy_comp`, `vacancy_cgpa`, `vacancy_skills_req`, `vacancy_location`, `vacancy_date`) VALUES
(34, '17REC1234', 'Good Job', 'tata', 1, 'C++,JAVAC,JS,Node', 'SJT 4th Floor', '2019-04-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval_students`
--
ALTER TABLE `approval_students`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `app_vac` (`app_vac`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `offer_sent`
--
ALTER TABLE `offer_sent`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `vac_id` (`vac_id`);

--
-- Indexes for table `user_recruiter`
--
ALTER TABLE `user_recruiter`
  ADD PRIMARY KEY (`rec_no`),
  ADD KEY `rec_id` (`rec_id`);

--
-- Indexes for table `user_student`
--
ALTER TABLE `user_student`
  ADD PRIMARY KEY (`student_no`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `vacancy_listing`
--
ALTER TABLE `vacancy_listing`
  ADD PRIMARY KEY (`vacancy_id`),
  ADD UNIQUE KEY `vacancy_recruiter_id` (`vacancy_recruiter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval_students`
--
ALTER TABLE `approval_students`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `offer_sent`
--
ALTER TABLE `offer_sent`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_recruiter`
--
ALTER TABLE `user_recruiter`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_student`
--
ALTER TABLE `user_student`
  MODIFY `student_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vacancy_listing`
--
ALTER TABLE `vacancy_listing`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval_students`
--
ALTER TABLE `approval_students`
  ADD CONSTRAINT `approval_students_ibfk_1` FOREIGN KEY (`app_vac`) REFERENCES `vacancy_listing` (`vacancy_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `offer_sent`
--
ALTER TABLE `offer_sent`
  ADD CONSTRAINT `offer_sent_ibfk_1` FOREIGN KEY (`vac_id`) REFERENCES `vacancy_listing` (`vacancy_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_recruiter`
--
ALTER TABLE `user_recruiter`
  ADD CONSTRAINT `user_recruiter_ibfk_1` FOREIGN KEY (`rec_id`) REFERENCES `login_table` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `user_student`
--
ALTER TABLE `user_student`
  ADD CONSTRAINT `user_student_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `login_table` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `vacancy_listing`
--
ALTER TABLE `vacancy_listing`
  ADD CONSTRAINT `vacancy_listing_ibfk_1` FOREIGN KEY (`vacancy_recruiter_id`) REFERENCES `user_recruiter` (`rec_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
