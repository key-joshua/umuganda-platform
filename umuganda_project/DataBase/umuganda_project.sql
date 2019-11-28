-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 07:02 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umuganda_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `umuganda_project`
--

CREATE TABLE `umuganda_project` (
  `ID` INT auto_increment PRIMARY KEY,
  `PROVINCE` varchar(255) NOT NULL,
  `DISTRICT` varchar(255) NOT NULL,
  `SECTOR` varchar(255) NOT NULL,
  `CELL` varchar(255) NOT NULL,
  `VILLAGE` varchar(255) NOT NULL,
  `RECORD_DATE` date NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `ID_NUMBER` varchar(16) NOT NULL,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  `TELEPHONE` varchar(255) NOT NULL,
  `RESULT` varchar(255) NOT NULL,
  `AVATAR` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `umuganda_project`
--

INSERT INTO `umuganda_project` (`PROVINCE`, `DISTRICT`, `SECTOR`, `CELL`, `VILLAGE`, `RECORD_DATE`, `GENDER`, `ID_NUMBER`, `FIRST_NAME`, `LAST_NAME`, `TELEPHONE`, `RESULT`, `AVATAR`) VALUES
('Kigali City', 'Gasabo', 'Rusororo', 'Kabuga I', 'Kalismbi', '2000-03-21', 'male', '1199680391000113', 'joshua', 'kayigamba', '+250789619422', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kabuga I', 'ituze', '2005-02-10', 'male', '1199990000000000', 'William', 'Muhigana', '+250781155882', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kabuga I', 'ituze', '2000-02-10', 'male', '1199999900000000', 'Orivie', 'Rwubakwanayo', '+250781115577', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'kabuga II', 'ineza', '2008-06-04', 'male', '1990000000000011', 'Teddy', 'Cyusa', '+250789619730', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kabuga I', 'Gahoromani', '2000-11-28', 'male', '1990000000092437', 'Yves', 'Rugamba', '+250781110361', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kigarama', 'Mukeza', '2001-01-18', 'female', '1990230000092009', 'Josyline', 'Munganyinka', '+250781110022', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kigara', 'Cyeru', '2004-07-03', 'female', '1990230000092292', 'juckyline', 'Mbabazi', '+250781114552', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kabuga II', 'Mibirizi', '2003-05-08', 'male', '1990230000092993', 'Yves', 'Rugamba', '+250781110001', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'gikoemero', 'rebezo', '2000-11-03', 'male', '1990230000098887', 'Joseph', 'Mupenzi', '+250781454545', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kabuga I', 'Hobe', '2000-05-08', 'female', '1990239000929939', 'milliam', 'uwizeyimana', '+250781103886', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Nyagahinga', 'ukwezi', '1998-01-03', 'female', '1999537891234567', 'Beatrice', 'Mujawamariya', '+250788253060', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Nyagahinga', 'Kabahizi', '2005-02-10', 'male', '1999990000000000', 'Henry', 'Mutesu', '+2507811155522', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Gisagara', 'ikaze', '2008-02-15', 'male', '1999990000091111', 'Rene', 'Kwizera', '+250781111111', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kabuga I', 'Kalisimbi', '2003-08-10', 'male', '1999990000099199', 'Evode', 'Mbagumya', '+250781115555', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Gisagara', 'ikaze', '2000-04-15', 'male', '1999990000099888', 'Gilbert', 'Muneza', '+250781115551', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kabuga I', 'Gahoromani', '2000-08-10', 'female', '1999990000099889', 'jeanne', 'giramata', '+250781155444', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Gisagara', 'ikaze', '2000-04-15', 'male', '1999990000099922', 'Gilbert', 'Muneza', '+250781115551', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'Kabuga II', 'Mibirizi', '2003-05-08', 'female', '1999999000929939', 'Yvette', 'mbaranya', '+250781110332', 'approval', 'AVATAR'),
('Kigali City', 'Gasabo', 'Rusororo', 'kabuga I', 'Bwiza', '2011-08-17', 'male', '1999999999999900', 'arnold', 'Twagirarurema', '+250788253060', 'approval', 'AVATAR');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_number` varchar(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_number`, `username`, `password`, `level`) VALUES
('1999999999999900', 'arnold', '6f9019a59c51da7447ae804dd2cbe5203f6f90ac', '3'),
('112569054892356', 'ezra', '438f76b67247d44ee6b2d0f7fd2161b3', '2'),
('1199680391000113', 'joshua', 'd6955d9721560531274cb8f50ff595a9bd39d66f', '4'),
('7777777777777777', 'kigali', 'd1133275ee2118be63a577af759fc052', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_results`
--

CREATE TABLE `user_results` (
  `ID_NUMBER` varchar(255) NOT NULL,
  `YEARS` varchar(255) NOT NULL,
  `MONTHS` varchar(255) NOT NULL,
  `DATES` varchar(255) NOT NULL,
  `HOURS` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `CHARGES` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_results`
--
INSERT INTO `user_results` (`ID_NUMBER`, `YEARS`, `MONTHS`, `DATES`, `HOURS`, `STATUS`, `CHARGES`) VALUES
('1199680391000113', '2019', 'Jan', '23', '10:03', 'PRESENT', 'NONE'),
('1999990000099888', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1999537891234567', '2019', 'Jan', '23', '10:00', 'PRESENT', 'NONE'),
('1999999999999900', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1199990000000000', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1990230000092993', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1199999900000000', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1990000000000011', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1990000000092437', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1990230000092009', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1990230000092292', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1990230000098887', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1990239000929939', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1999990000000000', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1999990000099199', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1999990000099889', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1999990000099922', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1999999000929939', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1999990000091111', '2019', 'Jan', '23', '11:02', 'PRESENT', 'NONE'),
('1999537891234567', '2019', 'Feb', '27', '11`:00', 'PRESENT', 'NONE'),
('1999999999999900', '2019', 'Feb', '27', '11:42', 'PRESENT', 'NONE'),
('1199680391000113', '2019', 'Feb', '27', '10:29', 'PRESENT', 'NONE'),
('1990000000000011', '2019', 'Feb', '27', '11:16', 'PRESENT', 'NONE'),
('1199680391000113', '2019', 'Mar', '21', '10:59', 'PRESENT', 'NONE'),
('1990000000000011', '2019', 'Mar', '21', '10:16', 'PRESENT', 'NONE'),
('1999999999999900', '2019', 'Mar', '21', '10:59', 'PRESENT', 'NONE'),
('1999537891234567', '2019', 'Mar', '21', '10:16', 'PRESENT', 'NONE'),
('1999999999999900', '2019', 'Apr', '25', '90:59', 'PRESENT', 'NONE'),
('1999537891234567', '2019', 'Apr', '25', '12:16', 'PRESENT', 'NONE'),
('1199680391000113', '2019', 'Apr', '25', '11:56', 'PRESENT', 'NONE'),
('1990000000000011', '2019', 'Apr', '25', '10:00', 'PRESENT', 'NONE'),
('1199680391000113', '2019', 'May', '29', '10:46', 'PRESENT', 'NONE'),
('1990000000000011', '2019', 'May', '29', '12:00', 'PRESENT', 'NONE'),
('1199680391000113', '2019', 'Jun', '26', 'Payed at 23:25', 'ABSENT', '500FRW'),
('1199680391000113', '2019', 'Jul', '21', 'Payed at 23:26', 'ABSENT', '500FRW');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `umuganda_project`
--
ALTER TABLE `umuganda_project`
  ADD PRIMARY KEY (`ID_NUMBER`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_results`
--
ALTER TABLE `user_results`
  ADD KEY `ID_NUMBER` (`ID_NUMBER`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_results`
--
ALTER TABLE `user_results`
  ADD CONSTRAINT `user_results_ibfk_1` FOREIGN KEY (`ID_NUMBER`) REFERENCES `umuganda_project` (`ID_NUMBER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
