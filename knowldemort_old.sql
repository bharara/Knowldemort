-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 07:32 AM
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
('focp', 'Fundamentals of Computer Programming', 'Computer Science'),
('we', 'Web Engineering', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `course_enroll`
--

CREATE TABLE `course_enroll` (
  `course` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `enroll_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_enroll`
--

INSERT INTO `course_enroll` (`course`, `student`, `enroll_id`) VALUES
(1, 3, 2),
(1, 4, 4),
(2, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `course_instance`
--

CREATE TABLE `course_instance` (
  `course` varchar(127) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `degree` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `pre_req` varchar(127) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `now` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_instance`
--

INSERT INTO `course_instance` (`course`, `credit_hour`, `year`, `degree`, `semester`, `instructor`, `pre_req`, `id`, `now`) VALUES
('we', 3, 2019, 1, 5, 1, NULL, 1, 1),
('focp', 3, 2017, 1, 1, 2, NULL, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_item`
--

CREATE TABLE `course_item` (
  `course` int(11) NOT NULL,
  `item_name` varchar(127) NOT NULL,
  `weight` float NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_item`
--

INSERT INTO `course_item` (`course`, `item_name`, `weight`, `id`) VALUES
(1, 'oht', 22.5, 1),
(1, 'ese', 37.5, 2),
(1, 'quiz', 7.5, 3),
(1, 'assignment', 7.5, 4),
(1, 'lab', 17.5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `course_item_marks`
--

CREATE TABLE `course_item_marks` (
  `item` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `total_marks` float NOT NULL,
  `obtained_marks` float NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `average_marks` float NOT NULL,
  `date` int(11) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_item_marks`
--

INSERT INTO `course_item_marks` (`item`, `student`, `total_marks`, `obtained_marks`, `item_name`, `average_marks`, `date`, `approved`) VALUES
(1, 3, 40, 32.5, 'OHT 1', 26, 20191010, 1),
(1, 3, 40, 32.5, 'OHT 2', 26.86, 20191120, 1),
(3, 3, 10, 9, 'quiz 1', 5.92, 20191215, 0),
(3, 3, 10, 7.5, 'quiz 2', 7.25, 20191001, 0),
(3, 3, 10, 7.5, 'quiz 3', 5.7, 20191017, 0),
(3, 3, 10, 0, 'quiz 4', 3.56, 20191125, 0);

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
('Mehdi', NULL, 1),
('Ali', 'joker.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_review`
--

CREATE TABLE `instructor_review` (
  `id` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` varchar(511) NOT NULL,
  `score` int(11) NOT NULL,
  `is_annon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_review`
--

INSERT INTO `instructor_review` (`id`, `instructor`, `student`, `title`, `detail`, `score`, `is_annon`) VALUES
(1, 2, 4, 'Answer all queries in Class', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto\r\nLaudantium enim repellat sapiente quos architecto', 5, 0),
(2, 2, 3, 'Poor Teaching Style', 'Can\'t understand a word', 2, 1);

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
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `Name`, `email`, `password`, `type`, `img`) VALUES
(3, 'Abdul Hadi Bharara', 'ahadi.bese17seecs@seecs.edu.pk', '$2y$10$PS9Tf9SUzUi7CwtKt3r2Z.IkoXpbrPHwLVasKfMf3wepW.6lsOlgK', '', '3.jpg'),
(4, 'Hamza Khan', 'hk@h.com', '$2y$10$PS9Tf9SUzUi7CwtKt3r2Z.IkoXpbrPHwLVasKfMf3wepW.6l4OlgK', '', '4.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_agg_marks`
-- (See below for the actual view)
--
CREATE TABLE `vw_agg_marks` (
`mymarks` double
,`avgmarks` double
,`mymarks_agg` double
,`avgmarks_agg` double
,`item_name` varchar(127)
,`student` int(11)
,`item` int(11)
,`weight` float
,`course` int(11)
,`count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_course_display`
-- (See below for the actual view)
--
CREATE TABLE `vw_course_display` (
`course_id` int(11)
,`course_name` varchar(255)
,`credit_hour` int(11)
,`year` int(11)
,`semester` int(11)
,`instructor` varchar(255)
,`instructor_id` int(11)
,`degree` varchar(255)
,`uni` varchar(255)
,`now` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_course_display_pre`
-- (See below for the actual view)
--
CREATE TABLE `vw_course_display_pre` (
`course_id` int(11)
,`course_name` varchar(255)
,`credit_hour` int(11)
,`year` int(11)
,`semester` int(11)
,`instructor` varchar(255)
,`instructor_id` int(11)
,`degree_tag` varchar(10)
,`uni_tag` varchar(10)
,`pre_req` varchar(127)
,`now` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_instructor_courses`
-- (See below for the actual view)
--
CREATE TABLE `vw_instructor_courses` (
`course_id` int(11)
,`course_name` varchar(255)
,`credit_hour` int(11)
,`year` int(11)
,`semester` int(11)
,`degree` varchar(255)
,`uni` varchar(255)
,`now` int(10)
,`instructor` int(11)
,`students` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_instructor_review`
-- (See below for the actual view)
--
CREATE TABLE `vw_instructor_review` (
`id` int(11)
,`instructor` int(11)
,`student` int(11)
,`Name` varchar(255)
,`img` varchar(255)
,`title` varchar(255)
,`detail` varchar(511)
,`score` int(11)
,`is_annon` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_item_weight`
-- (See below for the actual view)
--
CREATE TABLE `vw_item_weight` (
`student` int(11)
,`item` int(11)
,`weight` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_student_courses`
-- (See below for the actual view)
--
CREATE TABLE `vw_student_courses` (
`course_id` int(11)
,`course_name` varchar(255)
,`credit_hour` int(11)
,`year` int(11)
,`semester` int(11)
,`instructor` varchar(255)
,`instructor_id` int(11)
,`degree` varchar(255)
,`uni` varchar(255)
,`now` int(10)
,`student` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_student_items`
-- (See below for the actual view)
--
CREATE TABLE `vw_student_items` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_student_item_marks`
-- (See below for the actual view)
--
CREATE TABLE `vw_student_item_marks` (
`total_marks` float
,`obtained_marks` float
,`item_name` varchar(255)
,`average_marks` float
,`type` varchar(127)
,`date` int(11)
,`course` int(11)
,`student` int(11)
,`weight` double
);

-- --------------------------------------------------------

--
-- Structure for view `vw_agg_marks`
--
DROP TABLE IF EXISTS `vw_agg_marks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_agg_marks`  AS  select sum(`course_item_marks`.`obtained_marks`) AS `mymarks`,sum(`course_item_marks`.`average_marks`) AS `avgmarks`,((sum(`course_item_marks`.`obtained_marks`) / sum(`course_item_marks`.`total_marks`)) * `course_item`.`weight`) AS `mymarks_agg`,((sum(`course_item_marks`.`average_marks`) / sum(`course_item_marks`.`total_marks`)) * `course_item`.`weight`) AS `avgmarks_agg`,`course_item`.`item_name` AS `item_name`,`course_item_marks`.`student` AS `student`,`course_item_marks`.`item` AS `item`,`course_item`.`weight` AS `weight`,`course_item`.`course` AS `course`,count(`course_item_marks`.`total_marks`) AS `count` from (`course_item_marks` join `course_item` on((`course_item_marks`.`item` = `course_item`.`id`))) group by `course_item_marks`.`student`,`course_item_marks`.`item` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_course_display`
--
DROP TABLE IF EXISTS `vw_course_display`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_course_display`  AS  select `vw_course_display_pre`.`course_id` AS `course_id`,`vw_course_display_pre`.`course_name` AS `course_name`,`vw_course_display_pre`.`credit_hour` AS `credit_hour`,`vw_course_display_pre`.`year` AS `year`,`vw_course_display_pre`.`semester` AS `semester`,`vw_course_display_pre`.`instructor` AS `instructor`,`vw_course_display_pre`.`instructor_id` AS `instructor_id`,`degree`.`name` AS `degree`,`university`.`full_name` AS `uni`,`vw_course_display_pre`.`now` AS `now` from ((`vw_course_display_pre` join `degree` on((`vw_course_display_pre`.`degree_tag` = `degree`.`degree_tag`))) join `university` on((`vw_course_display_pre`.`uni_tag` = `university`.`uni_tag`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_course_display_pre`
--
DROP TABLE IF EXISTS `vw_course_display_pre`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_course_display_pre`  AS  select `course_instance`.`id` AS `course_id`,`course`.`course_name` AS `course_name`,`course_instance`.`credit_hour` AS `credit_hour`,`course_instance`.`year` AS `year`,`course_instance`.`semester` AS `semester`,`instructor`.`name` AS `instructor`,`instructor`.`id` AS `instructor_id`,`degree_uni`.`degree` AS `degree_tag`,`degree_uni`.`uni` AS `uni_tag`,`course_instance`.`pre_req` AS `pre_req`,`course_instance`.`now` AS `now` from (((`course_instance` join `course` on((`course_instance`.`course` = `course`.`course_tag`))) join `instructor` on((`course_instance`.`instructor` = `instructor`.`id`))) join `degree_uni` on((`course_instance`.`degree` = `degree_uni`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_instructor_courses`
--
DROP TABLE IF EXISTS `vw_instructor_courses`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_instructor_courses`  AS  select `vw_student_courses`.`course_id` AS `course_id`,`vw_student_courses`.`course_name` AS `course_name`,`vw_student_courses`.`credit_hour` AS `credit_hour`,`vw_student_courses`.`year` AS `year`,`vw_student_courses`.`semester` AS `semester`,`vw_student_courses`.`degree` AS `degree`,`vw_student_courses`.`uni` AS `uni`,`vw_student_courses`.`now` AS `now`,`vw_student_courses`.`instructor_id` AS `instructor`,count(`vw_student_courses`.`student`) AS `students` from `vw_student_courses` group by `vw_student_courses`.`instructor_id` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_instructor_review`
--
DROP TABLE IF EXISTS `vw_instructor_review`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_instructor_review`  AS  select `instructor_review`.`id` AS `id`,`instructor_review`.`instructor` AS `instructor`,`instructor_review`.`student` AS `student`,`users`.`Name` AS `Name`,`users`.`img` AS `img`,`instructor_review`.`title` AS `title`,`instructor_review`.`detail` AS `detail`,`instructor_review`.`score` AS `score`,`instructor_review`.`is_annon` AS `is_annon` from (`instructor_review` join `users` on((`instructor_review`.`student` = `users`.`uid`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_item_weight`
--
DROP TABLE IF EXISTS `vw_item_weight`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_item_weight`  AS  select `course_item_marks`.`student` AS `student`,`course_item_marks`.`item` AS `item`,(`course_item`.`weight` / count(`course_item_marks`.`item`)) AS `weight` from (`course_item_marks` join `course_item` on((`course_item`.`id` = `course_item_marks`.`item`))) group by `course_item_marks`.`student`,`course_item_marks`.`item` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_student_courses`
--
DROP TABLE IF EXISTS `vw_student_courses`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_student_courses`  AS  select `vw_course_display`.`course_id` AS `course_id`,`vw_course_display`.`course_name` AS `course_name`,`vw_course_display`.`credit_hour` AS `credit_hour`,`vw_course_display`.`year` AS `year`,`vw_course_display`.`semester` AS `semester`,`vw_course_display`.`instructor` AS `instructor`,`vw_course_display`.`instructor_id` AS `instructor_id`,`vw_course_display`.`degree` AS `degree`,`vw_course_display`.`uni` AS `uni`,`vw_course_display`.`now` AS `now`,`course_enroll`.`student` AS `student` from (`vw_course_display` join `course_enroll`) where (`vw_course_display`.`course_id` = `course_enroll`.`course`) order by `vw_course_display`.`now` desc,`course_enroll`.`student` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_student_items`
--
DROP TABLE IF EXISTS `vw_student_items`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_student_items`  AS  select `course_item_marks`.`total_marks` AS `total_marks`,`course_item_marks`.`obtained marks` AS `obtained marks`,`course_item_marks`.`item_name` AS `item_name`,`course_item_marks`.`average marks` AS `average marks`,`course_item`.`item_name` AS `type`,`course_item_marks`.`date` AS `date`,`course_item`.`course` AS `course`,`vw_item_weight`.`weight` AS `weight` from ((`course_item_marks` join `course_item` on((`course_item`.`id` = `course_item_marks`.`item`))) join `vw_item_weight` on(((`vw_item_weight`.`student` = `course_item_marks`.`student`) and (`vw_item_weight`.`item` = `course_item_marks`.`item`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_student_item_marks`
--
DROP TABLE IF EXISTS `vw_student_item_marks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_student_item_marks`  AS  select `course_item_marks`.`total_marks` AS `total_marks`,`course_item_marks`.`obtained_marks` AS `obtained_marks`,`course_item_marks`.`item_name` AS `item_name`,`course_item_marks`.`average_marks` AS `average_marks`,`course_item`.`item_name` AS `type`,`course_item_marks`.`date` AS `date`,`course_item`.`course` AS `course`,`course_item_marks`.`student` AS `student`,`vw_item_weight`.`weight` AS `weight` from ((`course_item_marks` join `course_item` on((`course_item`.`id` = `course_item_marks`.`item`))) join `vw_item_weight` on(((`vw_item_weight`.`student` = `course_item_marks`.`student`) and (`vw_item_weight`.`item` = `course_item_marks`.`item`)))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_tag`);

--
-- Indexes for table `course_enroll`
--
ALTER TABLE `course_enroll`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `course` (`course`),
  ADD KEY `student` (`student`);

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
-- Indexes for table `course_item`
--
ALTER TABLE `course_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `course_item_marks`
--
ALTER TABLE `course_item_marks`
  ADD PRIMARY KEY (`item_name`,`item`,`student`) USING BTREE,
  ADD KEY `item` (`item`),
  ADD KEY `student` (`student`);

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
-- Indexes for table `instructor_review`
--
ALTER TABLE `instructor_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `student` (`student`);

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
-- AUTO_INCREMENT for table `course_enroll`
--
ALTER TABLE `course_enroll`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_instance`
--
ALTER TABLE `course_instance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_item`
--
ALTER TABLE `course_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `degree_uni`
--
ALTER TABLE `degree_uni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instructor_review`
--
ALTER TABLE `instructor_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_enroll`
--
ALTER TABLE `course_enroll`
  ADD CONSTRAINT `course_enroll_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course_instance` (`id`),
  ADD CONSTRAINT `course_enroll_ibfk_2` FOREIGN KEY (`student`) REFERENCES `users` (`uid`);

--
-- Constraints for table `course_instance`
--
ALTER TABLE `course_instance`
  ADD CONSTRAINT `course_instance_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course` (`course_tag`),
  ADD CONSTRAINT `course_instance_ibfk_2` FOREIGN KEY (`degree`) REFERENCES `degree_uni` (`id`),
  ADD CONSTRAINT `course_instance_ibfk_3` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`id`),
  ADD CONSTRAINT `course_instance_ibfk_4` FOREIGN KEY (`pre_req`) REFERENCES `course` (`course_tag`);

--
-- Constraints for table `course_item`
--
ALTER TABLE `course_item`
  ADD CONSTRAINT `course_item_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course_instance` (`id`);

--
-- Constraints for table `course_item_marks`
--
ALTER TABLE `course_item_marks`
  ADD CONSTRAINT `course_item_marks_ibfk_1` FOREIGN KEY (`item`) REFERENCES `course_item` (`id`),
  ADD CONSTRAINT `course_item_marks_ibfk_2` FOREIGN KEY (`student`) REFERENCES `users` (`uid`);

--
-- Constraints for table `degree_uni`
--
ALTER TABLE `degree_uni`
  ADD CONSTRAINT `degree_uni_ibfk_1` FOREIGN KEY (`degree`) REFERENCES `degree` (`degree_tag`),
  ADD CONSTRAINT `degree_uni_ibfk_2` FOREIGN KEY (`uni`) REFERENCES `university` (`uni_tag`);

--
-- Constraints for table `instructor_review`
--
ALTER TABLE `instructor_review`
  ADD CONSTRAINT `instructor_review_ibfk_1` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`id`),
  ADD CONSTRAINT `instructor_review_ibfk_2` FOREIGN KEY (`student`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
