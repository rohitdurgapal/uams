-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2018 at 02:34 AM
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
  `DOB` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `CATEGORYID` int(5) NOT NULL,
  PRIMARY KEY (`CANDIDATEID`),
  KEY `CATEGORYID` (`CATEGORYID`),
  KEY `GENDERID` (`GENDERID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CANDIDATEID`, `CANDIDATENAME`, `GENDERID`, `MOBILENO`, `DOB`, `EMAIL`, `CATEGORYID`) VALUES
(1, 'Mayank Durgapal', 1, '8745784784', '1996-12-12', 'mayankdurgapal@gmail.com', 1),
(2, 'Manish Durgapal', 1, '8745784578', '1996-12-12', 'manish@gmail.com', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORYID`, `CATEGORYNAME`, `PURPOSE`, `USERNAME_`) VALUES
(1, 'BCA I', 'Record the attendance of BCA 1st semester', 'rohit');

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
  `TYPE_ID` int(5) NOT NULL,
  PRIMARY KEY (`USERNAME_`),
  KEY `TYPE_ID` (`TYPE_ID`),
  KEY `TYPE_ID_2` (`TYPE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME_`, `PASSWORD_`, `STATUS`, `USER_UPLINE`, `TYPE_ID`) VALUES
('priyanka', '123', '1', 'priyanka', 1),
('raj', '12345', '1', 'raj', 1),
('ravi', '12345', '1', 'ravi', 1),
('rohit', '123', '1', 'rohit', 1),
('sandeep', '12345', '1', 'sandeep', 1),
('sd', '123', '1', 'sd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `REGID` int(5) NOT NULL AUTO_INCREMENT,
  `FNAME` varchar(15) NOT NULL,
  `LNAME` varchar(15) DEFAULT NULL,
  `GENDER` varchar(7) NOT NULL,
  `MOBILE_NO` varchar(13) NOT NULL,
  `MOBILE_VERIFICATION` varchar(5) NOT NULL DEFAULT 'TRUE',
  `EMAIL` varchar(30) NOT NULL,
  `EMAIL_VERIFICATION` varchar(5) NOT NULL DEFAULT 'TRUE',
  `USERNAME_` varchar(15) NOT NULL,
  PRIMARY KEY (`REGID`),
  KEY `USERNAME_` (`USERNAME_`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registration`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`STATEID`, `STATE`, `COUNTRYID`) VALUES
(1, 'UTTRAKHAND', 1),
(2, 'PUNJAB', 1),
(3, 'HARYANA', 1),
(4, 'GUJRAT', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`UNITID`, `UNITNAME`, `USERNAME_`, `STATEID`) VALUES
(1, 'Amrapali', 'rohit', 1),
(2, 'Amrapali', 'priyanka', 1),
(3, 'Amrapali', 'rohit', 1);

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
  ADD CONSTRAINT `candidate_ibfk_2` FOREIGN KEY (`GENDERID`) REFERENCES `gender` (`GENDERID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`TYPE_ID`) REFERENCES `user_type` (`TYPEID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`USERNAME_`) REFERENCES `login` (`USERNAME_`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `unit_ibfk_2` FOREIGN KEY (`STATEID`) REFERENCES `state` (`STATEID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`USERNAME_`) REFERENCES `login` (`USERNAME_`) ON DELETE CASCADE ON UPDATE CASCADE;
