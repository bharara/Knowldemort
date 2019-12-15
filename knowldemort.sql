-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 09:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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

INSERT INTO `courses` (`cid`, `coursename`, `instructorname`, `credithours`) VALUES
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
(22100, 123),
(22100, 123),
(22100, 123),
(3433, 123);


-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_tag` varchar(127) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_tag`, `course_name`, `field`) VALUES
('we', 'Web Engineering', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `course_instance`
--

CREATE TABLE `course_instance` (
  `course` varchar(127) NOT NULL,
  `year` int(11) NOT NULL,
  `degree` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `pre_req` varchar(127) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_instance`
--

INSERT INTO `course_instance` (`course`, `year`, `degree`, `semester`, `instructor`, `pre_req`, `id`) VALUES
('we', 2019, 1, 5, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degree_tag` varchar(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degree_tag`, `field`, `name`) VALUES
('se', 'Computer Science', 'Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `degree_uni`
--

CREATE TABLE `degree_uni` (
  `degree` varchar(10) NOT NULL,
  `uni` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree_uni`
--

INSERT INTO `degree_uni` (`degree`, `uni`, `id`) VALUES
('se', 'nust_h12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`name`, `image`, `id`) VALUES
('Mehdi', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `uni_tag` varchar(10) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uni_tag`, `full_name`) VALUES
('nust_h12', 'National University of Science and Technology - H-12 Campus');

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

INSERT INTO `users` (`uid`, `Name`, `email`, `password`, `type`) VALUES
(3, 'Abdul Hadi Bharara', 'ahadi.bese17seecs@seecs.edu.pk', '$2y$10$PS9Tf9SUzUi7CwtKt3r2Z.IkoXpbrPHwLVasKfMf3wepW.6lsOlgK', ''),
(123, 'rabia', '\"/Knowldemort/images/usimg.jpg\"', 'r@gmail.com', '12345678', 'std', 'Bachelor\'s in Software Engineering', 2017, 'National University Of Sciences and Technology');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_course_display`
-- (See below for the actual view)
--
CREATE TABLE `vw_course_display` (
`course_id` int(11)
,`course_name` varchar(255)
,`year` int(11)
,`semester` int(11)
,`instructor` varchar(255)
,`degree` varchar(255)
,`uni` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_course_display_pre`
-- (See below for the actual view)
--
CREATE TABLE `vw_course_display_pre` (
`course_id` int(11)
,`course_name` varchar(255)
,`year` int(11)
,`semester` int(11)
,`instructor` varchar(255)
,`degree_tag` varchar(10)
,`uni_tag` varchar(10)
,`pre_req` varchar(127)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_course_display`
--
DROP TABLE IF EXISTS `vw_course_display`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_course_display`  AS  select `vw_course_display_pre`.`course_id` AS `course_id`,`vw_course_display_pre`.`course_name` AS `course_name`,`vw_course_display_pre`.`year` AS `year`,`vw_course_display_pre`.`semester` AS `semester`,`vw_course_display_pre`.`instructor` AS `instructor`,`degree`.`name` AS `degree`,`university`.`full_name` AS `uni` from ((`vw_course_display_pre` join `degree` on((`vw_course_display_pre`.`degree_tag` = `degree`.`degree_tag`))) join `university` on((`vw_course_display_pre`.`uni_tag` = `university`.`uni_tag`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_course_display_pre`
--
DROP TABLE IF EXISTS `vw_course_display_pre`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_course_display_pre`  AS  select `course_instance`.`id` AS `course_id`,`course`.`course_name` AS `course_name`,`course_instance`.`year` AS `year`,`course_instance`.`semester` AS `semester`,`instructor`.`name` AS `instructor`,`degree_uni`.`degree` AS `degree_tag`,`degree_uni`.`uni` AS `uni_tag`,`course_instance`.`pre_req` AS `pre_req` from (((`course_instance` join `course` on((`course_instance`.`course` = `course`.`course_tag`))) join `instructor` on((`course_instance`.`instructor` = `instructor`.`id`))) join `degree_uni` on((`course_instance`.`degree` = `degree_uni`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_tag`);

--
-- Indexes for table `course_instance`
--
ALTER TABLE `course_instance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`course`),
  ADD KEY `degree` (`degree`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `pre_req` (`pre_req`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degree_tag`);

--
-- Indexes for table `degree_uni`
--
ALTER TABLE `degree_uni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `degree` (`degree`),
  ADD KEY `uni` (`uni`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`uni_tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_instance`
--
ALTER TABLE `course_instance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `degree_uni`
--
ALTER TABLE `degree_uni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_instance`
--
ALTER TABLE `course_instance`
  ADD CONSTRAINT `course_instance_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course` (`course_tag`),
  ADD CONSTRAINT `course_instance_ibfk_2` FOREIGN KEY (`degree`) REFERENCES `degree_uni` (`id`),
  ADD CONSTRAINT `course_instance_ibfk_3` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`id`),
  ADD CONSTRAINT `course_instance_ibfk_4` FOREIGN KEY (`pre_req`) REFERENCES `course` (`course_tag`);

--
-- Constraints for table `degree_uni`
--
ALTER TABLE `degree_uni`
  ADD CONSTRAINT `degree_uni_ibfk_1` FOREIGN KEY (`degree`) REFERENCES `degree` (`degree_tag`),
  ADD CONSTRAINT `degree_uni_ibfk_2` FOREIGN KEY (`uni`) REFERENCES `university` (`uni_tag`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
