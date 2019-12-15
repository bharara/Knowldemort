-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2019 at 07:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowldemort`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(11) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `instructorname` varchar(255) NOT NULL,
  `credithours` varchar(15) NOT NULL,
  `coursimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `coursename`, `instructorname`, `credithours`, `coursimg`) VALUES
(3433, 'java', 'hamer', '3+1', '\"/Knowldemort/images/js.png\"'),
(22100, 'Javascript', 'Abdul Hadi', '2+1', '\"/Knowldemort/images/course01.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `courseid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`courseid`, `userid`) VALUES
(3433, 123),
(22100, 123);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `courseid` int(11) NOT NULL,
  `q1` double DEFAULT NULL,
  `q2` double DEFAULT NULL,
  `a1` double DEFAULT NULL,
  `a2` double DEFAULT NULL,
  `oht1` double DEFAULT NULL,
  `oht2` double DEFAULT NULL,
  `ese` double NOT NULL,
  `totalobtmarks` double DEFAULT NULL,
  `totalmarks` double DEFAULT NULL,
  `avgmarks` double DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`courseid`, `q1`, `q2`, `a1`, `a2`, `oht1`, `oht2`, `ese`, `totalobtmarks`, `totalmarks`, `avgmarks`, `userid`) VALUES
(3433, 10, 10, 10, 10, 10, 10, 100, 200, 200, 198, 123),
(22100, 2, 3, 4, 2, 11, 22, 100, 111, 200, 99, 123);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `userimg` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `uni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `Name`, `userimg`, `email`, `password`, `type`, `degree`, `year`, `uni`) VALUES
(1, 'rosheen', '', 'rosheen@gmail.com', 'abcdefghijk', 'std', '', 0000, ''),
(123, 'rabia', '\"/Knowldemort/images/usimg.jpg\"', 'r@gmail.com', '12345678', 'std', 'Bachelor\'s in Software Engineering', 2017, 'National University Of Sciences and Technology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD UNIQUE KEY `enrolled` (`courseid`,`userid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`courseid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD CONSTRAINT `enrolled_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `enrolled_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `courses` (`cid`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `courses` (`cid`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
