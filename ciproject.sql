-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 05:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ciproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE IF NOT EXISTS `tbl_aboutus` (
  `aboutus_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`aboutus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`aboutus_id`, `user_id`, `title`, `content`) VALUES
(2, 1, 'About Us', '   please use this code to set session in codeigniter ... I was having the same problem and it got resolved using this code.Hope it works for you to please use this code to set session in codeigniter ... I was having the same problem and it got resolved using this code.Hope it works for you to please use this code to set session in codeigniter ... I was having the same problem and it got resolved using this code.Hope it works for you to  ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_homecontent`
--

CREATE TABLE IF NOT EXISTS `tbl_homecontent` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`home_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_homecontent`
--

INSERT INTO `tbl_homecontent` (`home_id`, `user_id`, `title`, `content`) VALUES
(1, 1, 'Home Content', ' hi ContentSet Home ContentSet Home ContentSet Home ContentSet Home ContentSet Home ContentSet Home ContentSet Home ContentSet Home ContentSet Home ContentSet Home ContentSet Home ContentSet Home Content ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `firstname`, `middlename`, `lastname`, `address`, `email`, `password`, `type`, `status`) VALUES
(1, 'md', 'shidur', 'rahman', 'sherpur', 'roky@gmail.com', '202cb962ac59075b964b07152d234b70', 'super_admin', 1),
(2, 'rakibul', 'islam', 'roommate', 'dhaka', 'rakib@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'user', 1),
(3, 'mia', 'abdul', 'alam', 'dhaka', 'mia@gmail.com', '202cb962ac59075b964b07152d234b70', 'usser', 1),
(4, 'nahid', 'hasan', 'khan', 'comilla', 'nahid@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 0),
(5, 'korim', 'hakim', 'abdul', 'nai', 'kr@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
