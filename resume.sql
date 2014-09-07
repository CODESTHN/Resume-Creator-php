-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2014 at 07:15 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `name` varchar(300) NOT NULL,
  `email` varchar(500) NOT NULL,
  `fathers_name` varchar(500) NOT NULL,
  `plan` varchar(500) NOT NULL,
  `lan` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `college` varchar(500) NOT NULL,
  `education` varchar(500) NOT NULL,
  `percentage` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`name`, `email`, `fathers_name`, `plan`, `lan`, `address`, `college`, `education`, `percentage`, `experience`, `mobile`) VALUES
('SYED TARUF', 'syedtaruf@gmail.com', 'S.S.HAIDER', 'python', 'hindi', 'KANPUR', 'I.E.R.T. ALLAHABAD', 'Education', '72.8', 'experience', '8687270527'),
('SYED ', 'syedtaruf@gmail.com', 'S.S.HAIDER', 'python', 'hindi', 'KANPUR', 'I.E.R.T. ALLAHABAD', 'Education', '72.8', 'experience', '8687270527'),
('SYED NAQVI', 'syedtaruf@gmail.com', 'S.S.HAIDER', 'java', 'hindi', 'KANPUR', 'I.E.R.T. ALLAHABAD', 'B.TECH', '72.8', '', '8687270527');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
