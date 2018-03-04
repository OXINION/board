-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 02:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aston`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbs1`
--

CREATE TABLE IF NOT EXISTS `bbs1` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` char(15) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `user_id` char(15) DEFAULT NULL,
  `name` char(15) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `story` text,
  `file01` varchar(80) DEFAULT NULL,
  `regdate` char(20) DEFAULT NULL,
  `ip` char(20) DEFAULT NULL,
  `category` char(20) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `bbs1`
--

INSERT INTO `bbs1` (`no`, `id`, `level`, `user_id`, `name`, `subject`, `story`, `file01`, `regdate`, `ip`, `category`) VALUES
(45, 'bbs1', 3, 'brandon', 'brandon ha', 'no 1 pet', 'pet 1', 'mv033010475869.jpg', '20170330224758', '::1', 'pet'),
(46, 'bbs1', 3, 'brandon', 'brandon ha', 'my pet 2', 'pet 2', 've033010483211.jpg', '20170330224833', '::1', 'pet'),
(47, 'bbs1', 3, 'brandon', 'brandon ha', 'my iphone 1', 'iphone', 'pf033010492188.jpg', '20170330224921', '::1', 'phone'),
(48, 'bbs1', 3, 'brandon', 'brandon ha', 'my jewelly 1', 'je 1', 'ez033010494489.jpg', '20170330224944', '::1', 'jewellery'),
(49, 'bbs1', 3, 'brandon', 'brandon ha', 'phone 2', '222', 'aj033010505695.jpeg', '20170330225056', '::1', 'phone'),
(50, 'bbs1', 3, 'brandon', 'brandon ha', 'my pet 3', 'pet ', 'es033010511386.jpeg', '20170330225113', '::1', 'pet'),
(51, 'bbs1', 3, 'brandon', 'brandon ha', 'last phone ', 'any', 'xs033010513714.jpg', '20170330225137', '::1', 'phone'),
(52, 'bbs1', 3, 'brandon', 'brandon ha', 'jewelry 2', '2222', 'bj033010515826.jpg', '20170330225158', '::1', 'jewellery'),
(53, 'bbs1', 3, 'brandon', 'brandon ha', 'last jellery', '333', 'ab033010521525.jpg', '20170330225215', '::1', 'jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `name` char(15) DEFAULT NULL,
  `item_subject` varchar(150) DEFAULT NULL,
  `item_no` int(11) NOT NULL,
  `reason` char(20) DEFAULT NULL,
  `description` text,
  UNIQUE KEY `item_no` (`item_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`name`, `item_subject`, `item_no`, `reason`, `description`) VALUES
('apple', 'iphone', 1, 'return', 'steve'),
('lg', 'g5', 23, 'found', 'rubbish'),
('michal', 'dog', 456, 'lost', 'hello'),
('apple', '2323', 2323, 'found', 'asdf'),
('samsung', 'galaxy', 123123, 'lost', 'hi'),
('lauren', 'rogers', 789456, 'lost', 'this is mine');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `user_id`, `password`, `name`, `email`) VALUES
(1, 'lary', '187d607af26cd51bb887a2414b5f8865', 'pages', 'asdfas@google.com'),
(2, 'steve', '6a204bd89f3c8348afd5c77c717a097a', 'jobs', 'asdfasdf@apple.com'),
(3, 'brandon', '4297f44b13955235245b2497399d7a93', 'brandon ha', 'hsy06@oxinion.com'),
(4, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'hi', 'hi'),
(6, 'lauren', '81dc9bdb52d04dc20036dbd8313ed055', 'lauren orgers', 'hihihi@aston');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
