-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2020 at 07:05 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_details`
--

CREATE TABLE `stud_details` (
  `sname` varchar(265) NOT NULL,
  `sdob` varchar(265) NOT NULL,
  `sgender` varchar(265) NOT NULL,
  `scontact` varchar(265) NOT NULL,
  `semail` varchar(265) NOT NULL,
  `saddress` varchar(265) NOT NULL,
  `spin` varchar(265) NOT NULL,
  `state` varchar(265) NOT NULL,
  `city` varchar(265) NOT NULL,
  `country` varchar(265) NOT NULL,
  `class` varchar(265) NOT NULL,
  `subject` varchar(265) NOT NULL,
  `marks` varchar(265) default NULL,
  `sscmarks` varchar(265) default NULL,
  `username` varchar(265) NOT NULL,
  `password` varchar(265) NOT NULL,
  UNIQUE KEY `semail` (`semail`),
 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_details`
--

INSERT INTO `stud_details` (`sname`, `sdob`, `sgender`, `scontact`, `semail`, `saddress`, `spin`, `state`, `city`, `country`, `class`, `subject`, `marks`, `sscmarks`, `username`, `password`) VALUES
('raj', '1990-01-01', 'Female', '000000', 'aadityaa@juvale.com1', 'fytg', '656', 'maharastra', 'jhjhik', 'india', 'science', 'fyjc', '464', '898', 'raj', 'jar'),
('aa', '12', 'Female', '99', 'adug@gmail.comn', 'dfd', '99', 'maharastra', 'dfvds', 'india', 'science', 'fyjc', '12', '12', 'ss', ''),
('ganesh chavan', '2014-01-01', 'Male', '9765656', 'ganesh@chavan', 'parel', '6476', 'karanataka', 'mum', 'india', 'commerce', 'syjc', '56', '76', 'ganesh', 'chavan');

-- --------------------------------------------------------

--
-- Table structure for table `stud_login`
--

CREATE TABLE `stud_login` (
  `username` varchar(265) NOT NULL,
  `password` varchar(265) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_login`
--

INSERT INTO `stud_login` (`username`, `password`) VALUES
('aadu', '1234'),
('bvbv', 'bvbv'),
('ganesh', 'chavan'),
('ganesh123', 'ganesh'),
('gauri', '12'),
('mansi', 'chembur'),
('raj', 'jar');
