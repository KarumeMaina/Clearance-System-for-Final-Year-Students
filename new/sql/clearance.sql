-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 06:51 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `clearance_basics`
--

CREATE TABLE `clearance_basics` (
  `incre` int(11) NOT NULL,
  `rights` varchar(100) NOT NULL,
  `developed` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtititle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance_basics`
--

INSERT INTO `clearance_basics` (`incre`, `rights`, `developed`, `website`, `title`, `subtititle`) VALUES
(2, 'Meru University of Science and Technology', 'Mutai Felix', 'http://www.must.ac.ke', 'MUST Clearance System', 'graduating has never been this easy');

-- --------------------------------------------------------

--
-- Table structure for table `department_dos`
--

CREATE TABLE `department_dos` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_dos`
--

INSERT INTO `department_dos` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(3, 'ct201/002/16', 1, ''),
(6, 'ct201/0027/16', 1, ''),
(7, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_finance`
--

CREATE TABLE `department_finance` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_finance`
--

INSERT INTO `department_finance` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(3, 'ct201/002/16', 1, ''),
(6, 'ct201/0027/16', 1, ''),
(7, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_food`
--

CREATE TABLE `department_food` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(50) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_food`
--

INSERT INTO `department_food` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(2, 'ct201/002/16', 1, ''),
(3, 'ct201/0027/16', 1, ''),
(4, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_health`
--

CREATE TABLE `department_health` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(50) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_health`
--

INSERT INTO `department_health` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(2, 'ct201/002/16', 2, ''),
(3, 'ct201/0027/16', 1, ''),
(4, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_hod`
--

CREATE TABLE `department_hod` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_hod`
--

INSERT INTO `department_hod` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(2, 'ct201/002/16', 1, ''),
(3, 'ct201/0027/16', 1, ''),
(4, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_ict`
--

CREATE TABLE `department_ict` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_ict`
--

INSERT INTO `department_ict` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(6, 'ct201/0027/16', 1, ''),
(7, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_library`
--

CREATE TABLE `department_library` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_library`
--

INSERT INTO `department_library` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(2, 'ct201/002/16', 1, ''),
(3, 'ct201/0027/16', 1, ''),
(4, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_registrar`
--

CREATE TABLE `department_registrar` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_registrar`
--

INSERT INTO `department_registrar` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(2, 'ct201/002/16', 2, ''),
(3, 'ct201/0027/16', 1, ''),
(4, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_residence`
--

CREATE TABLE `department_residence` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_residence`
--

INSERT INTO `department_residence` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(2, 'ct201/002/16', 2, ''),
(3, 'ct201/0027/16', 1, ''),
(4, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department_sports`
--

CREATE TABLE `department_sports` (
  `incre` int(11) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_sports`
--

INSERT INTO `department_sports` (`incre`, `idnumber`, `clearance_status`, `basket`) VALUES
(2, 'ct201/002/16', 2, ''),
(3, 'ct201/0027/16', 1, ''),
(4, 'ct201/003/16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `login_dos`
--

CREATE TABLE `login_dos` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_dos`
--

INSERT INTO `login_dos` (`id`, `username`, `password`) VALUES
(1, 'dos', 'dos'),
(2, 'felix', '1234'),
(3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_finance`
--

CREATE TABLE `login_finance` (
  `incre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_finance`
--

INSERT INTO `login_finance` (`incre`, `username`, `password`) VALUES
(1, 'finance', 'finance'),
(2, 'Timothy', '1234'),
(3, 'Timothy', '1234'),
(4, 'Timothy', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login_food`
--

CREATE TABLE `login_food` (
  `incre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_food`
--

INSERT INTO `login_food` (`incre`, `username`, `password`) VALUES
(1, 'food', 'food'),
(2, 'sports', '1234'),
(3, 'Timothy', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login_health`
--

CREATE TABLE `login_health` (
  `incre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_health`
--

INSERT INTO `login_health` (`incre`, `username`, `password`) VALUES
(1, 'health', 'health');

-- --------------------------------------------------------

--
-- Table structure for table `login_hod`
--

CREATE TABLE `login_hod` (
  `incre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_hod`
--

INSERT INTO `login_hod` (`incre`, `username`, `password`) VALUES
(1, 'hod', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `login_ict`
--

CREATE TABLE `login_ict` (
  `incre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_ict`
--

INSERT INTO `login_ict` (`incre`, `username`, `password`) VALUES
(1, 'ict', 'ict'),
(2, 'Timothy', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login_library`
--

CREATE TABLE `login_library` (
  `incre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_library`
--

INSERT INTO `login_library` (`incre`, `username`, `password`) VALUES
(1, 'library', 'library'),
(2, 'Naomi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login_registrar`
--

CREATE TABLE `login_registrar` (
  `incre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_registrar`
--

INSERT INTO `login_registrar` (`incre`, `username`, `password`) VALUES
(1, 'registrar', 'registrar'),
(2, 'Naomi', '1234'),
(3, 'admin', '1234'),
(4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_residence`
--

CREATE TABLE `login_residence` (
  `incre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_residence`
--

INSERT INTO `login_residence` (`incre`, `username`, `password`) VALUES
(1, 'residence', 'residence'),
(2, 'felix', '1234'),
(3, 'Timothy', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login_sports`
--

CREATE TABLE `login_sports` (
  `incre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_sports`
--

INSERT INTO `login_sports` (`incre`, `username`, `password`) VALUES
(1, 'sports', 'sports'),
(2, 'felix', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `incre` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `residence` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `department` varchar(250) NOT NULL,
  `clearance_status` int(1) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`incre`, `name`, `residence`, `course`, `idnumber`, `password`, `department`, `clearance_status`, `year`) VALUES
(0, 'mutai felix', 'oncampus', 'Computer Science', 'ct201/002/16', '1234', 'department computer science', 2, '2020'),
(0, 'mutai felix', 'oncampus', 'Computer Science', 'ct201/0027/16', '1234', 'department computer science', 1, '2020'),
(0, 'NAOMI', 'oncampus', 'Computer Science', 'ct201/003/16', '1234', 'department computer science', 1, '2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(22, 'admin', '1234'),
(37, 'admins', '1234'),
(38, 'ct201/0027/16', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clearance_basics`
--
ALTER TABLE `clearance_basics`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `department_dos`
--
ALTER TABLE `department_dos`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `department_finance`
--
ALTER TABLE `department_finance`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `department_food`
--
ALTER TABLE `department_food`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `department_health`
--
ALTER TABLE `department_health`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber` (`idnumber`),
  ADD UNIQUE KEY `idnumber_2` (`idnumber`);

--
-- Indexes for table `department_hod`
--
ALTER TABLE `department_hod`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `department_ict`
--
ALTER TABLE `department_ict`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `department_library`
--
ALTER TABLE `department_library`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber_2` (`idnumber`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `department_registrar`
--
ALTER TABLE `department_registrar`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `department_residence`
--
ALTER TABLE `department_residence`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `department_sports`
--
ALTER TABLE `department_sports`
  ADD PRIMARY KEY (`incre`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `login_dos`
--
ALTER TABLE `login_dos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_finance`
--
ALTER TABLE `login_finance`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `login_food`
--
ALTER TABLE `login_food`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `login_health`
--
ALTER TABLE `login_health`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `login_hod`
--
ALTER TABLE `login_hod`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `login_ict`
--
ALTER TABLE `login_ict`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `login_library`
--
ALTER TABLE `login_library`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `login_registrar`
--
ALTER TABLE `login_registrar`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `login_residence`
--
ALTER TABLE `login_residence`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `login_sports`
--
ALTER TABLE `login_sports`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`idnumber`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clearance_basics`
--
ALTER TABLE `clearance_basics`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department_dos`
--
ALTER TABLE `department_dos`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_finance`
--
ALTER TABLE `department_finance`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_food`
--
ALTER TABLE `department_food`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_health`
--
ALTER TABLE `department_health`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_hod`
--
ALTER TABLE `department_hod`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_ict`
--
ALTER TABLE `department_ict`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_library`
--
ALTER TABLE `department_library`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_registrar`
--
ALTER TABLE `department_registrar`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_residence`
--
ALTER TABLE `department_residence`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_sports`
--
ALTER TABLE `department_sports`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_dos`
--
ALTER TABLE `login_dos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_finance`
--
ALTER TABLE `login_finance`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_food`
--
ALTER TABLE `login_food`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_health`
--
ALTER TABLE `login_health`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_hod`
--
ALTER TABLE `login_hod`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_ict`
--
ALTER TABLE `login_ict`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_library`
--
ALTER TABLE `login_library`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_registrar`
--
ALTER TABLE `login_registrar`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_residence`
--
ALTER TABLE `login_residence`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_sports`
--
ALTER TABLE `login_sports`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department_dos`
--
ALTER TABLE `department_dos`
  ADD CONSTRAINT `department_dos_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_finance`
--
ALTER TABLE `department_finance`
  ADD CONSTRAINT `department_finance_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_food`
--
ALTER TABLE `department_food`
  ADD CONSTRAINT `department_food_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_health`
--
ALTER TABLE `department_health`
  ADD CONSTRAINT `department_health_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_hod`
--
ALTER TABLE `department_hod`
  ADD CONSTRAINT `department_hod_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_ict`
--
ALTER TABLE `department_ict`
  ADD CONSTRAINT `department_ict_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_library`
--
ALTER TABLE `department_library`
  ADD CONSTRAINT `department_library_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_registrar`
--
ALTER TABLE `department_registrar`
  ADD CONSTRAINT `department_registrar_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_residence`
--
ALTER TABLE `department_residence`
  ADD CONSTRAINT `department_residence_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_sports`
--
ALTER TABLE `department_sports`
  ADD CONSTRAINT `department_sports_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `student_details` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
