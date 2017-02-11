-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 07:19 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `title`, `about`, `skill`, `facebook`, `google`, `twitter`, `skype`) VALUES
(1, 'niozam@gmail.com', 'nizamer', '123', 'Title2', 'fvfv', 'fvfvg,hh.hjjhhj,jhjhhj', 'fvfvgb', 'fvfgvb', 'fvfv', 'ghjh'),
(2, 'nizam2@gmail.com', 'nizam', '123', 'vcvc v', 'cv vc ', 'cv vc ', 'vc vc ', 'cv vc ', 'vc vc ', ''),
(3, 'batas2@gmail.com', 'batas', '123', 'vcvc ', 'cv vc ', 'vc cv ', 'v cvc ', 'vc vc ', 'vc v c', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
