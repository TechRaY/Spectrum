-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2016 at 06:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `halloffame`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `securityquest` varchar(5000) NOT NULL,
  `securityans` varchar(5000) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `securityquest`, `securityans`) VALUES
(1, 'spectrum', 'studyleague', 'My school name?', 'CRHS');

-- --------------------------------------------------------

--
-- Table structure for table `downloadlink`
--

CREATE TABLE IF NOT EXISTS `downloadlink` (
  `linkno` int(20) NOT NULL,
  `linkname` varchar(3000) NOT NULL,
  `linkpath` varchar(3000) NOT NULL,
  `linkfrontname` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloadlink`
--

INSERT INTO `downloadlink` (`linkno`, `linkname`, `linkpath`, `linkfrontname`) VALUES
(1, 'maths (1).pdf', 'downloadupload/maths (1).pdf', 'Brochure'),
(2, 'maths.pdf', 'downloadupload/maths.pdf', 'Pdf generator'),
(3, 'maths.pdf', 'downloadupload/maths.pdf', 'Time Table for FE');

-- --------------------------------------------------------

--
-- Table structure for table `footerlink`
--

CREATE TABLE IF NOT EXISTS `footerlink` (
  `emailid` varchar(1000) NOT NULL,
  `facebooklink` varchar(1000) NOT NULL,
  `twitterlink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footerlink`
--

INSERT INTO `footerlink` (`emailid`, `facebooklink`, `twitterlink`) VALUES
('spectrumacademy@gmail.com', 'www.facebook.com', 'www.twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE IF NOT EXISTS `homepage` (
  `imageno` int(10) NOT NULL,
  `imagename` varchar(1000) NOT NULL,
  `imagepath` varchar(1000) NOT NULL,
  PRIMARY KEY (`imageno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`imageno`, `imagename`, `imagepath`) VALUES
(1, '2016-03-10-22-31-14-683.jpg', 'scrollupload/2016-03-10-22-31-14-683.jpg'),
(2, 'P_20160125_133749_BF.jpg', 'scrollupload/P_20160125_133749_BF.jpg'),
(3, 'Chrysanthemum.jpg', 'scrollupload/Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

CREATE TABLE IF NOT EXISTS `source` (
  `fullname` varchar(250) NOT NULL,
  `collegename` varchar(250) NOT NULL,
  `semester` int(10) DEFAULT NULL,
  `pointer` float DEFAULT NULL,
  `rank` int(15) DEFAULT NULL,
  `imagepath` varchar(250) DEFAULT NULL,
  `year` int(20) DEFAULT NULL,
  `imagename` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`fullname`, `collegename`, `semester`, `pointer`, `rank`, `imagepath`, `year`, `imagename`) VALUES
('rahul', 'sacred school', 4, 3, 2, 'upload/007.JPG', 3424, '007.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `spect`
--

CREATE TABLE IF NOT EXISTS `spect` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `queries` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `spect`
--

INSERT INTO `spect` (`id`, `name`, `mobile`, `email`, `queries`) VALUES
(66, 'Rajeev Yadav', 0, 'spectrum@gmail.com', 'dgdfgf'),
(67, 'Rahul Shetty', 0, 'rajeev11430@gmail.com', 'cgdfgdfgfd'),
(68, 'Suryaprakash Yadav', 9657583510, 'rajeev11430@gmail.com', 'dfhg'),
(69, 'Rohit Tiwari', 9581212221, 'spectrumacademy@gmail.com', 'sdfgsdg'),
(70, 'Sanjeev Yadav', 9657581241, 'gh@bnbn.com', 'dfsdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `youtubepath`
--

CREATE TABLE IF NOT EXISTS `youtubepath` (
  `linkno` int(10) NOT NULL,
  `linkpath` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtubepath`
--

INSERT INTO `youtubepath` (`linkno`, `linkpath`) VALUES
(1, 'https://www.youtube.com/embed/NRKHhvRtLKU?list=PLwWrLU9W27bSaOEK2OnUAn4Tts6uoeGHS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
