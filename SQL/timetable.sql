-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 06:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(31, 'Btech CS 3rd Sem'),
(41, 'Btech CS 4th Sem'),
(51, 'Btech CS 5th Sem'),
(61, 'Btech CS 6th Sem'),
(71, 'Btech CS 7th Sem'),
(81, 'Btech CS 8th Sem'),
(32, 'Btech IT 3rd Sem'),
(42, 'Btech IT 4th Sem'),
(52, 'Btech IT 5th Sem'),
(62, 'Btech IT 6th Sem'),
(72, 'Btech IT 7th Sem'),
(82, 'Btech IT 8thSem'),
(13, 'MCA 1st Sem'),
(23, 'MCA 2nd Sem'),
(33, 'MCA 3rd Sem'),
(43, 'MCA 4th Sem'),
(53, 'MCA 5th Sem'),
(63, 'MCA 6th Sem'),
(14, 'Mtech CS 1st Sem'),
(24, 'Mtech CS 2nd Sem'),
(34, 'Mtech CS 3rd Sem'),
(44, 'Mtech CS 4th Sem'),
(15, 'Mtech IS 1st Sem'),
(25, 'Mtech IS 2nd Sem'),
(35, 'Mtech IS 3rd Sem'),
(45, 'Mtech IS 4th Sem'),
(16, 'Mtech SE 1st Sem'),
(26, 'Mtech SE 2nd Sem'),
(36, 'Mtech SE 3rd Sem'),
(46, 'Mtech SE 4th Sem');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `subject_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`id`, `name`, `subject_id`) VALUES
(1001, 'Prof.M.M.Gore', 0),
(1002, 'Prof. Suneeta Agarwa', 0),
(1003, 'Prof. R.S.Yadav', 0),
(1004, 'Prof. Neeraj Tyagi', 0),
(1005, 'Prof. D.S. Kushwaha', 0),
(1006, 'Prof.A. K. Singh', 0),
(1007, 'Prof. D.K. Yadav', 0),
(1008, 'Mr. Rajesh Tripathi', 0),
(1009, 'Mr. Manoj Wariya', 0),
(1010, 'Dr. Mayank Pandey', 0),
(1011, 'Dr. Anoj Kumar', 0),
(1012, 'Dr. Krishn K. Mishra', 0),
(1013, 'Dr. Ranvijay', 0),
(1014, 'Dr. Rupesh Kumar Dew', 0),
(1015, 'Dr. Pragya Dwivedi?', 0),
(1016, 'Dr. Divya Kumar', 0),
(1017, 'Dr. Dushyant Kumar S', 0),
(1018, 'Dr. Dinesh Singh', 0),
(1019, 'Dr. Shashank Srivast', 0),
(1020, 'Dr. Shashwati Banerj', 0),
(1021, 'Dr. Rajitha B', 0),
(1022, 'Dr. Navjot Singh', 0),
(1023, 'GF-1', 0),
(1024, 'GF-2', 0),
(1025, 'GF-3', 0),
(1026, 'GF-4', 0),
(1027, 'GF-5', 0),
(1028, 'GF-6', 0),
(1029, 'GF-7', 0),
(1030, 'GF-8', 0),
(1031, 'GF-9', 0),
(1032, 'GF-10', 0),
(1033, 'GF-11', 0),
(1034, 'GF-12', 0),
(1035, 'GF-13', 0),
(1036, 'GF-14', 0),
(1037, 'GF-15', 0),
(1038, 'GF-16', 0),
(1039, 'GF-17', 0),
(1040, 'GF-18', 0),
(1041, 'GF-19', 0),
(1042, 'GF-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `savedduration`
--

CREATE TABLE `savedduration` (
  `id` int(11) NOT NULL,
  `day_name` varchar(20) NOT NULL,
  `89` text,
  `910` text,
  `1011` text,
  `1112` text,
  `121` text,
  `23` text,
  `34` text,
  `45` text,
  `56` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `savedduration`
--

INSERT INTO `savedduration` (`id`, `day_name`, `89`, `910`, `1011`, `1112`, `121`, `23`, `34`, `45`, `56`) VALUES
(5, 'Friday', '', '', '', '', '', '', '', '', ''),
(1, 'Monday', '', '1', '', '', '', '', '', '', ''),
(4, 'Thursday', '', '', '', '', '', '', '', '', ''),
(2, 'Tuesday', '', '', '', '', '', '', '', '', ''),
(3, 'Wednesday', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `savedtable`
--

CREATE TABLE `savedtable` (
  `id` int(11) NOT NULL,
  `day_name` varchar(20) NOT NULL,
  `89` text,
  `910` text,
  `1011` text,
  `1112` text,
  `121` text,
  `23` text,
  `34` text,
  `45` text,
  `56` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `savedtable`
--

INSERT INTO `savedtable` (`id`, `day_name`, `89`, `910`, `1011`, `1112`, `121`, `23`, `34`, `45`, `56`) VALUES
(5, 'Friday', '', '', '', '', '', '', '', '', ''),
(1, 'Monday', '', 'Object Oriented Programming<br>Prof. Suneeta Agarwa<br>LH 1', '', '', '', '', '', '', ''),
(4, 'Thursday', '', '', '', '', '', '', '', '', ''),
(2, 'Tuesday', '', '', '', '', '', '', '', '', ''),
(3, 'Wednesday', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` varchar(20) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `class_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `class_id`) VALUES
('CS-13101', 'Data Structures', 31),
('MS-13101', 'Management of IT Industries', 31),
('EC-13103', 'Analog & Digital Electronics', 31),
('CS-13104', 'Foundations of Logical Thought', 31),
('CS-13105', 'Object Oriented Programming', 31),
('CS-13201', 'Object Oriented Programming (Lab.)', 31),
('CS-13202', 'Data Structures (Lab)', 31),
('EC-13203', 'Analog & Digital Electronics (Lab)', 31),
('CS-14101', 'Analysis of Algorithms', 41),
('CS-14102', 'Graph Theory & Combinatorics', 41),
('CS-14103', 'Computer Organization', 41),
('CS-14104', 'Automata Theory', 41),
('EC-14105', 'Communication Foundations', 41),
('CS-14105', 'Scientific Computing', 41),
('CS-14201', 'Programming Tools-I(Shell) (Lab.)', 41),
('CS-14202', 'Analysis of Algorithms (Lab)', 41),
('CS-14203', 'Automata & Compilers (Lab)', 41),
('EC-14201', 'Communication Foundations (Lab)', 41),
('CS-15101', 'Microprocessor and its Application', 51),
('CS-15102', 'Operating Systems', 51),
('CS-15103', 'Database Management System ', 51),
('CS-15104', 'Object Oriented Modeling', 51),
('CS-15105', 'Operation Research', 51),
('CS-15106', 'Computer Architecture ', 51),
('CS-15201', 'Programming Tools-II (Systems Calls) Lab.)', 51),
('CS-15202', 'Microprocessor (Lab)', 51),
('CS-15203', 'Operating Systems (Lab)', 51),
('CS-15204', 'Database System (Lab)', 51),
('CS-16101', 'Embedded Systems', 61),
('CS-16102', 'Compiler Construction ', 61),
('CS-16103', 'Data Mining ', 61),
('CS-16104', 'Cryptography & Network Security ', 61),
('CS-16105', 'Computer Networks ', 61),
('CS-16106', 'Software Engineering', 61),
('CS-16202', 'Data Mining (Lab)', 61),
('CS-16203', 'Embedded Systems (Lab)', 61),
('CS-16204', 'Computer Networks (Lab) ', 61),
('CS-16201', 'Mini Project', 61),
('CS-17101', 'Distributed System', 71),
('CS-17102', 'Wireless & Mobile Networks', 71),
('OE-17501', 'Open Elective - I', 71),
('CS-17301  to  CS-173', 'Professional Elective - I', 71),
('CS-17311  to  CS-173', 'Professional Elective -II', 71),
('CS-17201', 'Distributed System (Lab)', 71),
('CS-17601', 'Project', 71),
('CS-18101', 'Formal Methods', 81),
('CS-18201', 'Formal Methods (Lab)', 81),
('OE-18501', 'Open Elective - II', 81),
('CS-18301  to  CS-183', 'Professional Elective - III', 81),
('CS-18311  to  CS-183', 'Professional Elective - IV', 81),
('CS-18601', 'Project', 81),
('CS-13101', 'Data Structures', 32),
('MS-13101', 'Management of IT Industries', 32),
('EC-13103', 'Analog & Digital Electronics', 32),
('CS-13104', 'Foundations of Logical Thought', 32),
('CS-13105', 'Object Oriented Programming', 32),
('CS-13201', 'Object Oriented Programming (Lab.)', 32),
('CS-13202', 'Data Structures (Lab)', 32),
('EC-13203', 'Analog & Digital Electronics (Lab)', 32),
('CS-14101', 'Analysis of Algorithms', 42),
('CS-14102', 'Graph Theory & Combinatorics', 42),
('CS-14103', 'Computer Organization', 42),
('CS-14104', 'Automata Theory', 42),
('EC-14105', 'Communication Foundations', 42),
('CS-14105', 'Scientific Computing', 42),
('CS-14201', 'Programming Tools-I(Shell) (Lab.)', 42),
('CS-14202', 'Analysis of Algorithms (Lab)', 42),
('CS-14203', 'Automata & Compilers (Lab)', 42),
('EC-14201', 'Communication Foundations (Lab)', 42),
('CS-15101', 'Microprocessor and its Application', 52),
('CS-15102', 'Operating Systems', 52),
('CS-15103', 'Database Management System ', 52),
('CS-15104', 'Object Oriented Modeling', 52),
('CS-15105', 'Operation Research', 52),
('CS-15106', 'Computer Architecture ', 52),
('CS-15201', 'Programming Tools-II (Systems Calls Lab.) ', 52),
('CS-15202', 'Microprocessor (Lab)', 52),
('CS-15203', 'Operating Systems (Lab)', 52),
('CS-15204', 'Database System (Lab)', 52),
('CS-16101', 'Embedded Systems', 62),
('CS-16102', 'Compiler Construction ', 62),
('CS-16103', 'Data Mining ', 62),
('CS-16104', 'Cryptography & Network Security ', 62),
('CS-16105', 'Computer Networks ', 62),
('CS-1606', 'Software Engineering', 62),
('CS-16202', 'Data Mining  (Lab)', 62),
('CS-16203', 'Embedded Systems (Lab)', 62),
('CS-16204', 'Computer Networks (Lab) ', 62),
('CS-16201', 'Mini Project', 62),
('CS-17101', 'Image Processing', 72),
('CS-17102', 'Wireless & Mobile Networks', 72),
('OE-17501', 'Open Elective - I', 72),
('CS-17301 to CS-17310', 'Professional Elective - I', 72),
('CS-17311  to  CS-173', 'Professional Elective - II', 72),
('CS-17201', 'Image Processing (Lab)', 72),
('CS-17601', 'Project', 72),
('CS-18101', 'Software Project Management', 82),
('CS-18201', 'Web Technology', 82),
('OE-18501', 'Open Elective - II', 82),
('CS-18301 to  CS-1831', 'Professional Elective - III', 82),
('CS-18311  to  CS-183', 'Professional Elective - IV', 82),
('CS-18601', 'Project', 82),
('CS31101', 'Programming & Problem Solving', 13),
('CS31201', 'Programming & Problem Solving (Lab)', 13),
('CS31102', 'Principles of IT Industries Management', 13),
('CS31103', 'Digital & Computer Organization', 13),
('CS31202', 'Digital Computer Organization (Lab)', 13),
('CS31104', 'Foundation of Logic', 13),
('CS31203', 'Shell Programming Lab', 13),
('CS32111', 'Data Structures', 23),
('CS32210', 'Data Structure (Lab)', 23),
('CS32112', 'Object Oriented Programming', 23),
('CS32113', 'XML Applications', 23),
('CS32211', 'XML Applications(Lab)', 23),
('CS32114', 'Automata Theory', 23),
('CS32115', 'Technical Writing', 23),
('CS32212', 'Object Oriented Programming Lab', 23),
('CS33121', 'Operating System', 33),
('CS33221', 'Operating System (Lab)', 33),
('CS33122', 'Dabatase Management System', 33),
('CS33222', 'Dabatase Management System (Lab.)', 33),
('CS33123', 'Soft Computing', 33),
('CS33124', 'Analysis of Algorithms', 33),
('CS33223', 'Analysis of Algorithms (Lab)', 33),
('CS33125', 'Object  based Modeling', 33),
('CS33224', 'Web Programming (Lab)', 33),
('CS34131', 'Computer Graphics', 43),
('CS34231', 'Computer Graphics (Lab)', 43),
('CS34132', 'Software Engineering', 43),
('CS34601', 'Mini Project I (SRS and Design)', 43),
('CS34133', 'Computer Network', 43),
('CS34232', 'Computer Network (Lab)', 43),
('CS34134', 'Data Mining', 43),
('CS34301 - 34499', 'Professional Elective - I', 43),
('CS35141', 'Multimedia Technology', 53),
('CS35241', 'Multimedia Technology (Lab)', 53),
('CS35142', 'E-Commerce', 53),
('CS35242', 'E-Commerce (Lab)', 53),
('CS35143', 'Professional Ethics', 53),
('CS35301-35499', 'Professional Elective - II', 53),
('CS35301-35499', 'Professional Elective - III', 53),
('CS35144', 'Software Project Management', 53),
('CS36601', 'Industrial Training', 63),
('CS21101', 'Research Methodology', 14),
('CS21201', 'Programming  Lab-1', 14),
('CS21XXX', 'Elective - I        ', 14),
('CS21XXX', 'Elective - II', 4),
('CS21XXX', 'Elective - III', 14),
('CS22201', 'Programming Lab.-2', 24),
('CS22101', 'Advance Computer Architecture', 24),
('CS22XXX', 'Elective - IV', 24),
('CS22XXX', 'Elective - V', 24),
('CS22XXX', 'Elective -VI', 24),
('CS23601', 'Thesis/Project', 34),
('CS23651', 'Colloquim/Term Project', 34),
('CS24601', 'Thesis/Project', 44),
('CS21101', 'Research Methodology', 15),
('CS21201', 'Programming  Lab-1', 15),
('CS21XXX', 'Elective - I        ', 15),
('CS21XXX', 'Elective - II', 15),
('CS21XXX', 'Elective - III', 15),
('CS22201', 'Programming Lab.-2', 25),
('CS22102', 'Cloud Computing', 25),
('CS22XXX', 'Elective - IV', 25),
('CS22XXX', 'Elective - V', 25),
('CS22XXX', 'Elective -VI', 25),
('CS23601', 'Thesis/Project', 35),
('CS23651', 'Colloquim/Term Project', 35),
('CS24601', 'Thesis/Project', 45),
('CS21101', 'Research Methodology', 16),
('CS21201', 'Programming  Lab-1', 16),
('CS21XXX', 'Elective - I        ', 16),
('CS21XXX', 'Elective - II', 16),
('CS21XXX', 'Elective - III', 16),
('CS22201', 'Programming Lab.-2', 26),
('CS22102', 'Cloud Computing', 26),
('CS22XXX', 'Elective - IV', 26),
('CS22XXX', 'Elective - V', 26),
('CS22XXX', 'Elective - VI', 26),
('CS23601', 'Thesis/Project', 36),
('CS23651', 'Colloquim/Term Project', 36),
('CS24601', 'Thesis/Project', 46);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `password`) VALUES
('CSED', 'csed');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `capacity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `name`, `capacity`) VALUES
(10001, 'NB 1', 90),
(10002, 'NB 2', 90),
(10003, 'LH 1', 90),
(10004, 'LH 2', 90),
(10005, 'LH 3', 90),
(10006, 'LH 4', 90),
(10007, 'LH 5', 50),
(10008, 'LH 6', 50),
(10009, 'LH 7', 50),
(10010, 'LH 8', 50),
(10011, 'NLHC 1', 200),
(10012, 'NLHC 2', 200),
(10013, 'SEW 1', 100),
(10014, 'SEW 2', 100),
(10015, 'SMS LH 1', 100),
(10016, 'SMS LH 2', 100),
(10017, 'SMS LH 3', 100),
(10018, 'SMS LH 4', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `savedduration`
--
ALTER TABLE `savedduration`
  ADD PRIMARY KEY (`day_name`);

--
-- Indexes for table `savedtable`
--
ALTER TABLE `savedtable`
  ADD PRIMARY KEY (`day_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
