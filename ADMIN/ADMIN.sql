-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2020 at 11:37 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `cid` int(11) NOT NULL auto_increment,
  `class` varchar(255) NOT NULL,
  PRIMARY KEY  (`cid`),
  UNIQUE KEY `class` (`class`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`cid`, `class`) VALUES
(7, 'ARTS'),
(6, 'COMMERCE'),
(1, 'SCIENCE'),
(3, 'VOCATIONAL SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `txn_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `card_num` bigint(20) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_exp_month` varchar(2) character set utf8 collate utf8_unicode_ci NOT NULL,
  `card_exp_year` varchar(5) character set utf8 collate utf8_unicode_ci NOT NULL,
  `tname` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `tusername` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `tfees` float(10,2) NOT NULL,
  `currency` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL default 'usd',
  `paid_amount` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `paid_amount_currency` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `s_username` varchar(255) NOT NULL,
  PRIMARY KEY  (`txn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=226 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`txn_id`, `name`, `email`, `card_num`, `card_cvc`, `card_exp_month`, `card_exp_year`, `tname`, `tusername`, `tfees`, `currency`, `paid_amount`, `paid_amount_currency`, `payment_status`, `created`, `modified`, `s_username`) VALUES
(12, 'siddhi', 'siddhi@com', 4242424242424242, 122, '02', '2026', 'OUR', 'OUR1', 1200.00, 'INR', '1200', 'INR', 'succeeded', '2020-04-22 23:43:19', '2020-04-22 23:43:19', ''),
(17, 'adu', 'adu@com', 4242424242424242, 122, '04', '2024', 'OUR', 'OUR1', 1200.00, 'INR', '1200', 'INR', 'succeeded', '2020-04-22 23:48:23', '2020-04-22 23:48:23', ''),
(21, 'abc', 'abc@gmail.com', 4242424242424242, 122, '02', '2023', 'siddhi', 'SIDDHI', 750.00, 'INR', '750', 'INR', 'succeeded', '2020-04-23 00:17:46', '2020-04-23 00:17:46', ''),
(25, 'abcd', 'boy@com', 4242424242424242, 122, '02', '2021', 'siddhi', 'SIDDHI', 750.00, 'INR', '750', 'INR', 'succeeded', '2020-04-23 00:24:21', '2020-04-23 00:24:21', ''),
(26, 'abc', 'abc@gmail.com', 4242424242424242, 122, '08', '2024', 'siddhi', 'SIDDHI', 750.00, 'INR', '750', 'INR', 'succeeded', '2020-04-23 00:31:28', '2020-04-23 00:31:28', ''),
(30, 'adu', 'aadityaajuwale2000@gmail.com', 4242424242424242, 122, '04', '2023', 'girl', 'girl1', 5000.00, 'INR', '5000', 'INR', 'succeeded', '2020-04-23 17:12:40', '2020-04-23 17:12:40', ''),
(39, 'shruti', 'shruti@com', 4242424242424242, 123, '02', '2022', 'girl', 'girl1', 5000.00, 'INR', '5000', 'INR', 'succeeded', '2020-04-23 17:52:37', '2020-04-23 17:52:37', ''),
(41, 'stud', 'stud@com', 4242424242424242, 123, '03', '2023', 'girl', 'girl1', 5000.00, 'INR', '5000', 'INR', 'succeeded', '2020-04-23 17:55:32', '2020-04-23 17:55:32', ''),
(42, 'stud', 'stud@com', 4242424242424242, 123, '04', '2024', 'RAT', 'RAT1', 500.00, 'INR', '500', 'INR', 'succeeded', '2020-04-23 17:56:44', '2020-04-23 17:56:44', ''),
(48, 'SHRUSH', 'siddhi@com', 4242424242424242, 123, '02', '2022', 'RAT', 'RAT1', 500.00, 'INR', '500', 'INR', 'succeeded', '2020-04-27 19:56:53', '2020-04-27 19:56:53', ''),
(51, 'SHRUSH', 'shrush@com', 4242424242424242, 123, '03', '2023', 'RAT', 'RAT1', 500.00, 'INR', '500', 'INR', 'succeeded', '2020-04-27 20:06:13', '2020-04-27 20:06:13', ''),
(64, 'SHRUTZ', 'shrutikulaye24@gmail.com', 4242424242424242, 122, '03', '2024', 'OUR', 'OUR1', 2190.00, 'INR', '2190', 'INR', 'succeeded', '2020-04-29 21:35:53', '2020-04-29 21:35:53', ''),
(222, 'AADITYAA', 'shrutikulaye24@gmail.com', 4242424242424242, 567, '02', '2022', 'RAT', 'RAT1', 500.00, 'INR', '500', 'INR', 'succeeded', '2020-05-15 18:42:37', '2020-05-15 18:42:37', ''),
(223, 'stud', 'rashi@com', 4242424242424242, 123, '09', '2023', 'RAT', 'RAT1', 500.00, 'INR', '500', 'INR', 'succeeded', '2020-05-16 22:06:52', '2020-05-16 22:06:52', 'stud1'),
(224, 'stud', 'rashi@com', 4242424242424242, 123, '09', '2023', 'RAT', 'RAT1', 500.00, 'INR', '500', 'INR', 'succeeded', '2020-05-16 22:08:36', '2020-05-16 22:08:36', 'stud1'),
(225, 'siddhi', 'siddhi@com', 4242424242424242, 123, '04', '2022', 'siddhi', 'SIDDHI', 750.00, 'INR', '750', 'INR', 'succeeded', '2020-05-26 23:12:26', '2020-05-26 23:12:26', 'SIDDHI');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL auto_increment,
  `t_username` varchar(30) NOT NULL,
  `paid_amount` int(20) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `t_username` (`t_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `t_username`, `paid_amount`) VALUES
(1, 'SIDDHI', 2250),
(2, 'JIJA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sid` int(11) NOT NULL auto_increment,
  `subject` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sid`, `subject`, `class`) VALUES
(1, 'PHYSICS', 'SCIENCE'),
(2, 'ACCOUNTS', 'COMMERCE'),
(3, 'COMPUTER SCIENCE', 'VOCATIONAL SCIENCE'),
(4, 'MATHS', 'ARTS'),
(5, 'CHEMISTRY', 'SCIENCE'),
(6, 'MATHS', 'SCIENCE');
