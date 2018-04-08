-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2018 at 05:44 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `universal`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `ATTENDANCEID` int(5) NOT NULL,
  `ATTENDANCESTATUS` varchar(10) NOT NULL,
  `DATE` varchar(10) NOT NULL,
  `TIME` varchar(15) NOT NULL,
  `UNITID` int(5) NOT NULL,
  `CATEGORYID` int(5) NOT NULL,
  `CANDIDATEID` int(5) NOT NULL,
  `USERNAME_` varchar(15) NOT NULL,
  PRIMARY KEY (`ATTENDANCEID`),
  KEY `UNITID` (`UNITID`),
  KEY `USERNAME_` (`USERNAME_`),
  KEY `CATEGORYID` (`CATEGORYID`),
  KEY `CANDIDATEID` (`CANDIDATEID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--


-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `CANDIDATEID` int(5) NOT NULL AUTO_INCREMENT,
  `CANDIDATENAME` varchar(20) NOT NULL,
  `GENDERID` int(5) NOT NULL,
  `MOBILENO` varchar(13) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `CATEGORYID` int(5) NOT NULL,
  `USERNAME_` varchar(15) NOT NULL,
  PRIMARY KEY (`CANDIDATEID`),
  KEY `CATEGORYID` (`CATEGORYID`),
  KEY `GENDERID` (`GENDERID`),
  KEY `USERNAME_` (`USERNAME_`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CANDIDATEID`, `CANDIDATENAME`, `GENDERID`, `MOBILENO`, `DOB`, `EMAIL`, `CATEGORYID`, `USERNAME_`) VALUES
(11, 'Mayank', 1, '', '', '', 4, 'RohitDurgapal'),
(12, 'Manish', 1, '', '', '', 4, 'RohitDurgapal'),
(13, 'Anju', 2, '', '', '', 4, 'RohitDurgapal'),
(14, 'Priyanka', 2, '', '', '', 4, 'RohitDurgapal'),
(15, 'Pooja', 2, '', '', '', 4, 'RohitDurgapal'),
(16, 'Manoj', 1, '', '', '', 4, 'RohitDurgapal'),
(17, 'Nitin', 1, '', '', '', 4, 'RohitDurgapal'),
(18, 'Saurav', 1, '', '', '', 4, 'RohitDurgapal'),
(19, 'Shruti', 2, '', '', '', 4, 'RohitDurgapal'),
(20, 'Kiran', 2, '', '', '', 4, 'RohitDurgapal'),
(21, 'Kamal', 1, '', '', '', 4, 'RohitDurgapal'),
(22, 'Rohit Durgapal', 1, '', '', '', 5, 'NitinDeepak'),
(23, 'Rohit Singh Bisht', 1, '', '', '', 5, 'NitinDeepak'),
(24, 'Sachin Raikwal', 1, '', '', '', 5, 'NitinDeepak'),
(25, 'Shakshi', 2, '', '', '', 5, 'NitinDeepak'),
(26, 'Sandeep', 1, '', '', '', 5, 'NitinDeepak');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CATEGORYID` int(5) NOT NULL AUTO_INCREMENT,
  `CATEGORYNAME` varchar(20) NOT NULL,
  `PURPOSE` varchar(50) NOT NULL,
  `USERNAME_` varchar(15) NOT NULL,
  PRIMARY KEY (`CATEGORYID`),
  KEY `USERNAME_` (`USERNAME_`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORYID`, `CATEGORYNAME`, `PURPOSE`, `USERNAME_`) VALUES
(4, 'BCA I', 'For taking attendance', 'RohitDurgapal'),
(5, 'Lab Time', '', 'NitinDeepak'),
(6, 'B.TECH I', 'For taking attendance', 'RohitDurgapal');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `COUNTRYID` int(5) NOT NULL,
  `COUNTRY` varchar(15) NOT NULL,
  PRIMARY KEY (`COUNTRYID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`COUNTRYID`, `COUNTRY`) VALUES
(1, 'INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `GENDERID` int(5) NOT NULL,
  `GENDER` varchar(7) NOT NULL,
  PRIMARY KEY (`GENDERID`),
  KEY `GENDERID` (`GENDERID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`GENDERID`, `GENDER`) VALUES
(1, 'MALE'),
(2, 'FEMALE'),
(3, 'OTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `logdetail`
--

CREATE TABLE IF NOT EXISTS `logdetail` (
  `LOGID` int(5) NOT NULL,
  `LOGINDAY` varchar(10) NOT NULL,
  `LOGINTIME` varchar(15) NOT NULL,
  `LOGOUTDAY` varchar(10) NOT NULL,
  `LOGOUTTIME` varchar(15) NOT NULL,
  `USERNAME_` varchar(15) NOT NULL,
  PRIMARY KEY (`LOGID`),
  KEY `USERNAME_` (`USERNAME_`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logdetail`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `USERNAME_` varchar(15) NOT NULL,
  `PASSWORD_` varchar(20) NOT NULL,
  `STATUS` varchar(1) NOT NULL,
  `USER_UPLINE` varchar(15) NOT NULL,
  `TYPEID` int(5) NOT NULL,
  PRIMARY KEY (`USERNAME_`),
  KEY `TYPE_ID` (`TYPEID`),
  KEY `TYPEID` (`TYPEID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME_`, `PASSWORD_`, `STATUS`, `USER_UPLINE`, `TYPEID`) VALUES
('NitinDeepak', '12345', '1', 'NitinDeepak', 1),
('RohitDurgapal', '12345', '1', 'RohitDurgapal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `REGID` int(5) NOT NULL AUTO_INCREMENT,
  `FNAME` varchar(15) NOT NULL,
  `LNAME` varchar(15) NOT NULL,
  `GENDERID` int(5) NOT NULL,
  `MOBILE_NO` varchar(13) NOT NULL,
  `MOBILE_VERIFICATION` varchar(5) NOT NULL DEFAULT 'TRUE',
  `EMAIL` varchar(30) NOT NULL,
  `EMAIL_VERIFICATION` varchar(5) NOT NULL DEFAULT 'TRUE',
  `USERNAME_` varchar(15) NOT NULL,
  PRIMARY KEY (`REGID`),
  KEY `USERNAME_` (`USERNAME_`),
  KEY `GENDERID` (`GENDERID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`REGID`, `FNAME`, `LNAME`, `GENDERID`, `MOBILE_NO`, `MOBILE_VERIFICATION`, `EMAIL`, `EMAIL_VERIFICATION`, `USERNAME_`) VALUES
(1, 'Nitin', 'Mathur', 1, '9874578457', '', 'nitin@gmail.com', '', 'NitinDeepak'),
(2, 'Rohit', 'Durgapal', 1, '9675537951', '', 'rohitdurgapal18@gmail.com', '', 'RohitDurgapal');

-- --------------------------------------------------------

--
-- Table structure for table `sharingcandidate`
--

CREATE TABLE IF NOT EXISTS `sharingcandidate` (
  `SHARINGID` int(5) NOT NULL,
  `CATEGORYID` int(5) NOT NULL,
  `USERNAME_` varchar(15) NOT NULL,
  `USER_UPLINE` varchar(15) NOT NULL,
  PRIMARY KEY (`SHARINGID`),
  KEY `CATEGORYID` (`CATEGORYID`),
  KEY `USERNAME_` (`USERNAME_`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sharingcandidate`
--


-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `STATEID` int(5) NOT NULL AUTO_INCREMENT,
  `STATE` varchar(15) NOT NULL,
  `COUNTRYID` int(5) NOT NULL,
  PRIMARY KEY (`STATEID`),
  KEY `COUNTRYID` (`COUNTRYID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`STATEID`, `STATE`, `COUNTRYID`) VALUES
(16, 'Andhra Pradesh', 1),
(17, 'Arunachal Prade', 1),
(18, 'Assam', 1),
(19, 'Bihar', 1),
(20, 'Chhattisgarh', 1),
(21, 'Goa', 1),
(22, 'Gujarat', 1),
(23, 'Haryana', 1),
(24, 'Himachal Prades', 1),
(25, 'Jammu and Kashm', 1),
(27, 'Jharkhand', 1),
(28, 'Karnataka', 1),
(29, 'Kerala', 1),
(30, 'Madhya Pradesh', 1),
(31, 'Maharashtra', 1),
(32, 'Manipur', 1),
(33, 'Meghalaya', 1),
(34, 'Mizoram', 1),
(35, 'Nagaland', 1),
(36, 'Odisha', 1),
(37, 'Punjab', 1),
(38, 'Rajasthan', 1),
(39, 'Sikkim', 1),
(40, 'Tamil Nadu', 1),
(41, 'Telangana', 1),
(42, 'Tripura', 1),
(43, 'Uttar Pradesh', 1),
(44, 'Uttarakhand', 1),
(45, 'West Bengal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `UNITID` int(5) NOT NULL AUTO_INCREMENT,
  `UNITNAME` varchar(20) NOT NULL,
  `USERNAME_` varchar(15) NOT NULL,
  `STATEID` int(5) NOT NULL,
  PRIMARY KEY (`UNITID`),
  KEY `USERNAME_` (`USERNAME_`),
  KEY `STATEID` (`STATEID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`UNITID`, `UNITNAME`, `USERNAME_`, `STATEID`) VALUES
(6, 'Amrapali ', 'RohitDurgapal', 44),
(7, 'Project ', 'NitinDeepak', 22),
(8, 'Graphic Era', 'RohitDurgapal', 44);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `TYPEID` int(5) NOT NULL,
  `TYPE` varchar(6) NOT NULL,
  PRIMARY KEY (`TYPEID`),
  KEY `TYPE` (`TYPE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`TYPEID`, `TYPE`) VALUES
(1, 'ADMIN'),
(2, 'USER');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`CANDIDATEID`) REFERENCES `candidate` (`CANDIDATEID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`UNITID`) REFERENCES `unit` (`UNITID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`CATEGORYID`) REFERENCES `sharingcandidate` (`CATEGORYID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_4` FOREIGN KEY (`USERNAME_`) REFERENCES `login` (`USERNAME_`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`CATEGORYID`) REFERENCES `category` (`CATEGORYID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `candidate_ibfk_2` FOREIGN KEY (`GENDERID`) REFERENCES `gender` (`GENDERID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `candidate_ibfk_3` FOREIGN KEY (`USERNAME_`) REFERENCES `login` (`USERNAME_`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`USERNAME_`) REFERENCES `login` (`USERNAME_`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logdetail`
--
ALTER TABLE `logdetail`
  ADD CONSTRAINT `logdetail_ibfk_1` FOREIGN KEY (`USERNAME_`) REFERENCES `login` (`USERNAME_`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`TYPEID`) REFERENCES `user_type` (`TYPEID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`USERNAME_`) REFERENCES `login` (`USERNAME_`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`GENDERID`) REFERENCES `gender` (`GENDERID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sharingcandidate`
--
ALTER TABLE `sharingcandidate`
  ADD CONSTRAINT `sharingcandidate_ibfk_1` FOREIGN KEY (`CATEGORYID`) REFERENCES `category` (`CATEGORYID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sharingcandidate_ibfk_2` FOREIGN KEY (`USERNAME_`) REFERENCES `login` (`USERNAME_`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`COUNTRYID`) REFERENCES `country` (`COUNTRYID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`USERNAME_`) REFERENCES `login` (`USERNAME_`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unit_ibfk_2` FOREIGN KEY (`STATEID`) REFERENCES `state` (`STATEID`) ON DELETE CASCADE ON UPDATE CASCADE;
