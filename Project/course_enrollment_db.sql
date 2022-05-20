-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 10:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_enrollment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(4) NOT NULL,
  `course_code` varchar(7) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `number_enrolled_students` int(3) NOT NULL,
  `max_num_of_students` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`, `number_enrolled_students`, `max_num_of_students`) VALUES
(1234, 'SWE322', 'Advanced Web Programming', 1, 9),
(2222, 'SWE312', 'Software Construction', 1, 9),
(3333, 'CIS381', 'Computer Ethics', 2, 9),
(4444, 'MTH302', 'Differential Equations', 2, 9),
(5505, 'SWE301', 'Software Requirements Engineering', 2, 9),
(6161, 'PHY101', 'Introduction to Physical Science', 2, 9),
(7717, 'MTH104', 'Calculus I ', 1, 9),
(8888, 'CIS103', 'Programming Fundamentals I', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enroll_id` int(10) NOT NULL,
  `user_id` int(6) NOT NULL,
  `course_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enroll_id`, `user_id`, `course_id`) VALUES
(100156, 100035, 1234),
(100157, 100035, 2222),
(100158, 100035, 3333),
(100159, 100035, 4444),
(100160, 100036, 3333),
(100161, 100036, 4444),
(100162, 100036, 5505),
(100163, 100036, 6161),
(100164, 100037, 5505),
(100165, 100037, 6161),
(100166, 100037, 7717),
(100167, 100037, 8888);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(6) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_pword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `email`, `user_pword`) VALUES
(100024, 'Faris', 'faris@gmail.com', '$2y$10$/58noar3QiCLdRaBU04QE./mf3h3x8WQCt3giQj6X6gXrBKgzv5Kq'),
(100035, 'Hisham', 'Hisham@gmail.com', '$2y$10$NsRc5jJWwZLqB0EpSRPTlOPaA0xiaGLoBi2u.iOzud1cFrJJQCQIa'),
(100036, 'abdulmajeed', 'abdulmajeed@gmail.com', '$2y$10$pFbc7wgGPLUpvl5h9VuYf.ElfxmvoB5KOKLrb9lbwOnrDX7gIGtPC'),
(100037, 'Abdulrahman', 'Abdulrahman@gmail.com', '$2y$10$Bmp/JYq6kE55Ue72Jq84v.mDYqKP4acwBHe31474YoOmvMp66dETa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_id` (`course_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `user_id` (`user_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enroll_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100172;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100039;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
