-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 10:42 PM
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
-- Database: `abctuition`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adID` char(7) NOT NULL,
  `adPassword` varchar(75) NOT NULL,
  `usertype` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adID`, `adPassword`, `usertype`) VALUES
('ADM0001', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cID` char(7) NOT NULL,
  `cName` varchar(75) NOT NULL,
  `category` varchar(15) NOT NULL,
  `cDesc` text NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `lecAssigned` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cID`, `cName`, `category`, `cDesc`, `startDate`, `endDate`, `lecAssigned`) VALUES
('ABC0001', 'Academic English', 'Language', 'This is basic english course', '2020-04-21', '2020-05-21', 'LEC0002'),
('ABC0002', 'Introductory Programming', 'Technology', 'This course is designed to teach students fundamentals of programming languages. The programming language taught in this module will be C++. The course is designed to cover all basic modules of programming with C++. Netbeans will be used as the code editor ide.', '2020-04-30', '2020-05-28', 'LEC0004'),
('ABC0003', 'Drawing Fundamentals', 'Art', 'Drawing fundamentals will equip students with knowledge of basic drawing and sketching. The course is suitable for students pursuing a major in art and require basics drawing techniques necessary to ace the major.', '2020-05-07', '2020-06-17', 'LEC0005'),
('ABC0004', 'Physics 1', 'Science', 'Physics is the study of the basic principles that govern the physical world around us. We\'ll start by looking at motion itself. Then, we\'ll learn about forces, momentum, energy, and other concepts in lots of different physical situations. To get the most out of physics, you\'ll need a solid understanding of algebra and a basic understanding of trigonometry.', '2020-04-22', '2020-06-03', 'LEC0003'),
('ABC0006', 'Algebra I', 'Maths', 'This course is designed to emphasize the study of multiple representations of linear and non-linear functions.  It includes mathematical concepts for working with rational numbers, various expressions, analyzing and solving linear equations & inequalities, data analysis, probability, statistics, and polynomials.  Students will use hands-on materials and calculators when needed in solving problems where the algebra concepts are applied.  Students who complete Algebra I should take Geometry next.', '2020-04-15', '2020-04-30', 'LEC0002');

-- --------------------------------------------------------

--
-- Table structure for table `course-enrolled`
--

CREATE TABLE `course-enrolled` (
  `courseID` char(7) NOT NULL,
  `studID` char(7) NOT NULL,
  `lect1` tinyint(1) NOT NULL,
  `lect2` tinyint(1) NOT NULL,
  `lect3` tinyint(1) NOT NULL,
  `lect4` tinyint(1) NOT NULL,
  `lect5` tinyint(1) NOT NULL,
  `asn1` tinyint(1) NOT NULL,
  `asn2` double NOT NULL,
  `totalAttend` double NOT NULL,
  `courseMark` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course-enrolled`
--

INSERT INTO `course-enrolled` (`courseID`, `studID`, `lect1`, `lect2`, `lect3`, `lect4`, `lect5`, `asn1`, `asn2`, `totalAttend`, `courseMark`) VALUES
('ABC0002', 'STU0002', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ABC0002', 'STU0003', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ABC0003', 'STU0002', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ABC0004', 'STU0003', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ABC0006', 'STU0001', 1, 0, 1, 1, 0, 40, 30, 60, 68),
('ABC0006', 'STU0002', 1, 1, 1, 1, 1, 30, 38, 100, 74.4),
('ABC0006', 'STU0005', 1, 0, 0, 1, 0, 0, 10, 40, 16);

-- --------------------------------------------------------

--
-- Table structure for table `emaillist`
--

CREATE TABLE `emaillist` (
  `email_address` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecID` char(7) NOT NULL,
  `lecName` varchar(75) NOT NULL,
  `lecPassword` varchar(75) NOT NULL,
  `lecEmail` varchar(75) NOT NULL,
  `usertype` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecID`, `lecName`, `lecPassword`, `lecEmail`, `usertype`) VALUES
('LEC0001', 'Pooja Singh', '202cb962ac59075b964b07152d234b70', 'pooja@gmail.com', 'lecturer'),
('LEC0002', 'Susan Smith', '202cb962ac59075b964b07152d234b70', 'susansmith@gmail.com', 'lecturer'),
('LEC0003', 'Dr Ahmad Faiz', '827ccb0eea8a706c4c34a16891f84e7b', 'ahmadfaiz123@gmail.com', 'lecturer'),
('LEC0004', 'Nor Anis Binti Sulaiman', '202cb962ac59075b964b07152d234b70', 'anissulaiman@gmail.com', 'lecturer'),
('LEC0005', 'John Paul', '202cb962ac59075b964b07152d234b70', 'johnpaul@gmail.com', 'lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sID` char(7) NOT NULL,
  `sName` varchar(75) NOT NULL,
  `sPassword` varchar(75) NOT NULL,
  `sEmail` varchar(75) NOT NULL,
  `sDOB` date NOT NULL,
  `usertype` varchar(8) NOT NULL DEFAULT 'student',
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sID`, `sName`, `sPassword`, `sEmail`, `sDOB`, `usertype`, `status`) VALUES
('STU0001', 'Mohamed Sayed', '202cb962ac59075b964b07152d234b70', 'msayed1111@gmail.com', '1997-07-03', 'student', 'active'),
('STU0002', 'Nandita Dhanda', '202cb962ac59075b964b07152d234b70', 'nandita.nd64@gmail.com', '1994-04-28', 'student', 'active'),
('STU0003', 'Peo ', '202cb962ac59075b964b07152d234b70', 'peo@gmail.com', '1992-04-16', 'student', 'active'),
('STU0005', 'Sneha Kapoor', '202cb962ac59075b964b07152d234b70', 'sneha@gmail.com', '1994-05-24', 'student', 'active'),
('STU0007', 'Jimmy Jones', '202cb962ac59075b964b07152d234b70', 'jonesjimmy@gmail.com', '2005-02-24', 'student', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cID`),
  ADD KEY `fk_lecturer` (`lecAssigned`);

--
-- Indexes for table `course-enrolled`
--
ALTER TABLE `course-enrolled`
  ADD PRIMARY KEY (`courseID`,`studID`),
  ADD KEY `fk_studentid` (`studID`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_lecturer` FOREIGN KEY (`lecAssigned`) REFERENCES `lecturer` (`lecID`);

--
-- Constraints for table `course-enrolled`
--
ALTER TABLE `course-enrolled`
  ADD CONSTRAINT `fk_courseid` FOREIGN KEY (`courseID`) REFERENCES `course` (`cID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
