-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2020 at 11:41 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL auto_increment,
  `t_name` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `action` tinyint(1) default NULL,
  `t_username` varchar(255) NOT NULL,
  `s_username` varchar(255) NOT NULL,
  `end` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=525 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `t_name`, `s_name`, `action`, `t_username`, `s_username`, `end`) VALUES
(11, 'RASHMI', 'AADITYAA', 1, 'RASHMI02', 'AADITYAA', 1),
(12, 'RASHMI', 'SHRUTZ', 1, 'RASHMI02', 'SHRUTZ', 1),
(15, 'siddhi', 'AADITYAA', 1, 'SIDDHI', 'AADITYAA', 1),
(16, 'siddhi', 'siddhi', 1, 'SIDDHI', 'SIDDHI', 1),
(509, 'RAT', 'SHRUSH', 1, 'RAT1', 'SHRUSH', 1),
(510, 'OUR', 'SHRUTZ', 1, 'OUR1', 'SHRUTZ', 0),
(511, 'RASHMI', 'SHRUTZ', 1, 'RASHMI02', 'SHRUTZ', 1),
(512, 'siddhi', 'SHRUTZ', 1, 'SIDDHI', 'SHRUTZ', 1),
(516, 'OUR', 'AADITYAA', 1, 'OUR1', 'AADITYAA', 1),
(521, 'RAT', 'stud', 1, 'RAT1', 'stud1', 1),
(522, 'siddhi', 'stud', 1, 'SIDDHI', 'stud1', 1),
(523, 'OUR', 'stud', 1, 'OUR1', 'stud1', 0),
(524, 'RASHMI', 'stud', 1, 'RASHMI02', 'stud1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `t_username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `accno` int(16) NOT NULL,
  `cno` int(16) NOT NULL,
  `ifsc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`t_username`, `name`, `accno`, `cno`, `ifsc`) VALUES
('RAT1', 'RAT', 2147483647, 2147483647, 'SYCC1235'),
('RAT1', 'SHRUTZ', 12345, 12345, 'SYCC1235'),
('RAT1', 'SIDDHI', 2147483647, 2147483647, 'SYCC1235'),
('RAT1', 'SIDDHI', 2147483647, 2147483647, 'SYCC1235'),
('SIDDHI', 'siddhi', 12345678, 987, 'stc12345');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(15) NOT NULL auto_increment,
  `u_tutor` varchar(255) NOT NULL,
  `u_student` varchar(255) NOT NULL,
  `rating` varchar(2) NOT NULL,
  `review` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `u_tutor`, `u_student`, `rating`, `review`) VALUES
(11, 'SIDDHI', '', '5', '     \r\n'),
(12, 'SIDDHI', '', '5', '     \r\n'),
(18, 'RAT1', '', '4', '     \r\ngood'),
(19, 'RAT1', '', '4', '     \r\ngood'),
(20, 'RAT1', 'SHRUSH', '3', '     \r\nWAS GOOD LEARNING VARIOUS CONCEPTS'),
(21, 'RAT1', 'SHRUSH', '3', '     \r\ngood '),
(22, 'RAT1', 'SHRUSH', '3', '     \r\ngood '),
(23, 'RAT1', 'SHRUSH', '3', '     \r\ngood '),
(24, 'RAT1', 'SHRUSH', '3', '     \r\ngood '),
(25, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(26, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(27, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(28, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(29, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(30, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(31, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(32, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(33, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(34, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(35, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(36, 'RAT1', 'SHRUSH', '3', '     \r\ngood'),
(37, 'RAT1', 'SHRUSH', '3', '     \r\ngood');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `tid` int(11) NOT NULL auto_increment,
  `t_username` varchar(255) NOT NULL,
  `amt` int(20) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`tid`, `t_username`, `amt`, `date`) VALUES
(1, 'SIDDHI', 1000, '2020-05-21 21:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `tusername` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`tusername`, `title`, `descr`) VALUES
('SIDDHI', 'HOMEWORK', 'homework done'),
('SIDDHI', 'HOMEWORK', 'Homework to be completed'),
('SHRUTZ', 'Classwork', 'Please download the files and complete\r\nthe classwork'),
('SHRUTZ', 'HOMEWORK', 'Please solve the unsolved examples!');

-- --------------------------------------------------------

--
-- Table structure for table `post_notes`
--

CREATE TABLE `post_notes` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `u_tutor` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `filename` (`filename`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `post_notes`
--

INSERT INTO `post_notes` (`id`, `title`, `description`, `filename`, `u_tutor`) VALUES
(1, 'HOMEWORK', 'THIS IS YOUR HOMEWORK', 'SIDDHI_1589231411.jpg', 'SIDDHI'),
(2, 'HOMEWORK', 'THIS IS YOUR HOMEWORK', 'SIDDHI_1589236925.jpg', 'SIDDHI'),
(3, 'Classwork', 'COMPLETE THIS', 'SIDDHI_1589339212.webp', 'SIDDHI'),
(4, 'HOMEWORK', 'THIS IS YOUR HOMEWORK', 'SIDDHI_1589339335.jpg', 'SIDDHI');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_details`
--

CREATE TABLE `tutor_details` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(265) NOT NULL,
  `dob` varchar(265) NOT NULL,
  `gender` varchar(265) NOT NULL,
  `contact` varchar(265) NOT NULL,
  `email` varchar(265) NOT NULL,
  `klang` varchar(265) NOT NULL,
  `address` varchar(265) NOT NULL,
  `pin` varchar(265) NOT NULL,
  `state` varchar(265) NOT NULL,
  `city` varchar(265) NOT NULL,
  `country` varchar(265) NOT NULL,
  `education` varchar(265) NOT NULL,
  `exp` varchar(265) NOT NULL,
  `class` varchar(265) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `username` varchar(265) default NULL,
  `password` varchar(265) default NULL,
  `location` varchar(265) NOT NULL,
  `fees` varchar(265) NOT NULL,
  `otp` int(6) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tutor_details`
--

INSERT INTO `tutor_details` (`id`, `name`, `dob`, `gender`, `contact`, `email`, `klang`, `address`, `pin`, `state`, `city`, `country`, `education`, `exp`, `class`, `subject`, `username`, `password`, `location`, `fees`, `otp`) VALUES
(2, 'RAT', '1980-04-01', 'Male', '243567890', 'RAT@COM', 'ENGLLSH', 'SWYFGUY', '71', 'maharastra', 'MUMBAI', 'india', 'HSC', '3YR', 'commerce', 'Hindi', 'RAT1', 'RAT1', 'MUMBAI', '500', 0),
(3, 'siddhi', '1980-05-04', 'Female', '1234567890', 'siddhi@com', 'english', 'ghatla village', '71', 'maharastra', 'mumbai', 'india', 'Bsc', '5yrs', 'arts', 'Maths', 'SIDDHI', 'SIDDHI', 'MUM', '750', 0),
(8, 'OUR', '1980-04-05', 'Male', '1020304050', 'our@GMAIL.COM', 'FRENCH', 'GHATLA', '77', 'maharastra', 'MUMBAI', 'india', 'Bsc', '1.5YRS', 'vocationals', 'Computer SCIENCE', 'OUR1', 'OUR1', 'MUMM', '2190', 0),
(9, 'RASHMI', '1980-05-04', 'Female', '1243568790', 'rkulaye25@gmal.com', 'MARATHI', 'ghatla', '71', 'maharastra', 'MUM', 'india', 'Bsc', '2YRS', 'science', 'Computer SCIENCE', 'RASHMI02', 'RASHMI02', 'MUM', '2500', 0),
(10, 'JIJA', '1981-04-27', 'Female', '00000000', 'JIJA@COM', ',ENGLISH', 'GHATLA', '71', 'maharastra', 'MUMBAI', 'india', 'Bsc', '2YRS', 'science', 'Physics', 'JIJA', 'JIJA', 'MUM', '2790', 0),
(11, 'GANESH', '1982-04-02', 'Male', '098765', 'ganeshchavan13999@gmail.com', 'MARATHI', 'pael', '71', 'maharastra', 'MUM', 'india', 'Bsc', '4YRS', 'SCIENCE', 'MATHS', 'GANESH', 'GANESH', 'MUM,DADAR', '1900', 668844),
(12, 'ABC', '1980-04-05', 'Male', '909090', 'ganeshchavan13999@gmail.com', 'hindi', 'dadar', '79', 'maharastra', 'mum', 'india', 'MSc', '1yr', 'ARTS', 'MATHS', 'ABC', 'ABC', 'MUM', '1000', 320797);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_login`
--

CREATE TABLE `tutor_login` (
  `username` varchar(265) NOT NULL,
  `password` varchar(265) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_login`
--

INSERT INTO `tutor_login` (`username`, `password`) VALUES
('', ''),
('ABC', 'ABC'),
('abc1', 'abc1'),
('ABCD', 'ABCD'),
('boss', 'boss'),
('boss1', 'boss1'),
('cat', 'tac'),
('GANESH', 'GANESH'),
('girl1', 'girl1'),
('JIJA', 'JIJA'),
('OUR1', 'OUR1'),
('pqr', 'pqr'),
('rash1', 'rash1'),
('RASHMI02', 'RASHMI02'),
('RAT1', 'RAT1'),
('shruti@24', 'shruti@24'),
('shubh', 'shubh'),
('SIDDHI', 'SIDDHI');
