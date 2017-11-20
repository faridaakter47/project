-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 05:29 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_data`
--
CREATE DATABASE IF NOT EXISTS `project_data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project_data`;

-- --------------------------------------------------------

--
-- Table structure for table `accident_info`
--

CREATE TABLE IF NOT EXISTS `accident_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `road` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `number_of_death` int(255) NOT NULL,
  `number_of_injured` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `is_approval` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `accident_info`
--

INSERT INTO `accident_info` (`id`, `division`, `district`, `thana`, `road`, `time`, `date`, `number_of_death`, `number_of_injured`, `image`, `reference`, `is_approval`, `user_id`, `user_name`) VALUES
(6, 'Dhaka', 'Gazipur', 'Kaliakair', 'Kaliakair sadar road', '07:20:00', '2010-12-22', 5, 13, 'upload/1481203155.jpg', 'Prothom Alo newspaper, 23 december 2010', 1, 7, 'Tamanna'),
(7, 'Chittagong', 'Comilla', 'Brahman Baria', 'brahman baria shorok', '10:10:00', '2009-08-11', 5, 13, 'upload/1481203362.jpg', 'Daily Jogantor,12 August,2009', 1, 8, 'moumita'),
(8, ' Mymensingh', ' Mymensingh', '', 'rajbari sadr road', '11:01:00', '2016-12-20', 6, 15, 'upload/1482298768.jpg', 'Amar desh newspaper,21 December 2016', 0, 10, 'prova'),
(10, 'Khulna', 'Bagerhat ', '', 'Bagerhat boro bazar road', '22:56:00', '2008-11-23', 11, 19, 'upload/1482932768.jpg', 'Daily Amar desh,24 November 2008', 1, 18, 'Sraboni'),
(11, 'Syhlet', 'MOULVIBAZAR', '', 'Madob kondo boroleka road', '08:40:00', '2011-01-02', 10, 13, 'upload/1483536762.jpg', 'Daily Ittefak ,3 January 2011', 1, 22, 'dider'),
(13, 'Rajshahi', 'Bogra', '', 'chitagong high way', '16:00:00', '2017-01-24', 12, 20, 'upload/1483772806.jpg', 'prothom alo', 0, 18, 'Sraboni'),
(16, 'Rangpur', 'LALMONIRHAT', 'Lalmonirhat Sadar Upazila', 'lalmonirhat road', '22:24:00', '2008-02-23', 10, 13, 'upload/1486019214.jpg', 'Noadigonto,22 february', 0, 22, 'dider');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(1200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `image`) VALUES
(1, 'Farida Akter', 'farida', 'faridaakter47@yahoo.com', '1234', 'upload/me.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `complain_opinion`
--

CREATE TABLE IF NOT EXISTS `complain_opinion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `road_name` varchar(255) NOT NULL,
  `complain` varchar(255) NOT NULL,
  `is_approval` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `complain_opinion`
--

INSERT INTO `complain_opinion` (`id`, `name`, `road_name`, `complain`, `is_approval`) VALUES
(10, 'Sraboni', 'Comilla Chittagong road', 'This road is badly destroyed.Need to repair.This road recently occur accident for road fault.', 1),
(11, 'Tamanna', 'Dhaka Chittagong road', 'In this road most of the driver drive over the speed limit.Thats why yesterday a big accident  occured here.', 1),
(12, 'Nahid', 'Dhaka Mymensing  road', 'In dhaka Mymenshing road there have some place where no trafic police thats why driver overtake as thier wish and accident are occur. road ', 1),
(13, 'Tutul', 'Borishal Rangpur road', 'In this road the driver are not follow the traffic rules.They drive thier own wish not maintain speed.Thats why recently some accident are occured here', 1),
(14, 'Salma', 'Dhaka Sehlet  Railway Road', 'The dhaka Sehlet railway road is very risky .In this road in many times the train accident is happend.This road need to be repair.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver_fault`
--

CREATE TABLE IF NOT EXISTS `driver_fault` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `driver_sleeping` varchar(255) NOT NULL,
  `overtaking` varchar(255) NOT NULL,
  `driver_drunk` varchar(255) NOT NULL,
  `over_speed` varchar(255) NOT NULL,
  `road_fault` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `driver_fault`
--

INSERT INTO `driver_fault` (`id`, `year`, `driver_sleeping`, `overtaking`, `driver_drunk`, `over_speed`, `road_fault`) VALUES
(1, 2001, '13%', '23%', '20%', '27%', '17%'),
(2, 2002, '12%', '24%', '18%', '26%', '20%'),
(3, 2003, '17%', '20%', '19%', '28%', '16%'),
(4, 2004, '16%', '21%', '19%', '24%', '20%'),
(5, 2005, '12%', '25%', '21%', '23%', '19%'),
(6, 2006, '14%', '24%', '20%', '25%', '17%'),
(7, 2007, '19%', '28%', '18%', '20%', '15%'),
(8, 2008, '16%', '22%', '27%', '24%', '11%'),
(9, 2009, '18%', '23%', '21%', '26%', '12%'),
(10, 2010, '14%', '24%', '19%', '28%', '15%'),
(11, 2011, '15%', '26%', '20%', '19%', '20%'),
(12, 2012, '17%', '22%', '21%', '22%', '18%'),
(13, 2013, '18%', '24%', '20%', '25%', '13%'),
(14, 2014, '16%', '28%', '22%', '20%', '14%'),
(15, 2015, '18%', '27%', '23%', '21%', '11%'),
(18, 2016, '22%', '24%', '25%', '19%', '10%');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `division`, `district`, `thana`) VALUES
(1, 'Dhaka', 'Gazipur', 'Kaliakair'),
(3, 'Rajshahi', 'Bogra', 'Bogra Sadar'),
(4, 'Syhlet', 'Habiganj', 'Nabiganj'),
(5, 'Barisal', 'Barguna', 'Amtali Upazila'),
(6, 'Khulna', 'Bagerhat ', 'Bagerhat Sadar'),
(7, 'Rangpur', 'Rangpur', 'Rangpur Sadar Upazila'),
(8, 'Mymensingh', 'Mymensingh', 'Gaffargaon Upazila'),
(9, 'Chittagong', 'Comilla', 'Brahman Baria'),
(10, 'Dhaka', 'Narshingdi', 'Narshingdi'),
(11, 'Dhaka', 'RAJBARI ', 'RAJBARI SADAR'),
(12, 'Dhaka', 'NARAYANGANJ ', 'SONARGAON'),
(13, 'Chittagong', 'CHITTAGONG', 'Banshkhali Upazila'),
(14, 'Chittagong', 'BANDARBAN', 'Bandarban Sadar Upazila'),
(15, 'Barisal', 'BHOLA', 'Bhola Sadar Upazila'),
(16, 'Barisal', 'PATUAKHALI', 'Dumki Upazila'),
(17, 'Rajshahi', 'JOYPURHAT', 'Joypurhat Sadar Upazila'),
(18, 'Rajshahi', 'NATORE', 'Natore Sadar Upazila'),
(19, 'Syhlet', 'MOULVIBAZAR', 'Barlekha Upazila'),
(20, 'Syhlet', 'SUNAMGANJ', 'Sunamganj Sadar Upazila'),
(21, 'Khulna', 'JESSORE', 'Jessore Sadar Upazila'),
(22, 'Khulna', 'KUSHTIA', 'daulatpur upazila'),
(23, 'Rangpur', 'DINAJPUR', 'Birganj Upazila'),
(24, 'Rangpur', 'LALMONIRHAT', 'Lalmonirhat Sadar Upazila'),
(25, 'Mymensingh', 'SHERPUR', 'Sherpur Sadar Upazila'),
(26, 'Mymensingh', 'NETROKONA', 'Durgapur Upazila'),
(27, 'Barisal', 'BHOLA', 'Daulatkhan Upazila');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_analysis`
--

CREATE TABLE IF NOT EXISTS `monthly_analysis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `accident_rate` varchar(255) NOT NULL,
  `number_of_death` int(11) NOT NULL,
  `number_of_injured` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `monthly_analysis`
--

INSERT INTO `monthly_analysis` (`id`, `year`, `month`, `accident_rate`, `number_of_death`, `number_of_injured`) VALUES
(1, 2010, 'January', '25%', 22, 28),
(2, 2010, 'February', '29%', 30, 46),
(3, 2010, 'March', '28%', 26, 30),
(4, 2010, 'April', '35%', 34, 12),
(5, 2010, 'May', '41%', 38, 20),
(6, 2010, 'June', '48%', 46, 30),
(7, 2010, 'July', '46%', 49, 60),
(8, 2010, 'August', '50%', 52, 35),
(9, 2010, 'September', '48%', 46, 56),
(10, 2010, 'October', '58%', 56, 67),
(11, 2010, 'November', '65%', 67, 45),
(12, 2010, 'December', '55%', 57, 62),
(13, 2011, 'January', '28%', 29, 20),
(14, 2011, 'February', '21%', 20, 15),
(15, 2011, 'March', '25%', 23, 35),
(16, 2011, 'April', '30%', 30, 22),
(17, 2011, 'May', '35%', 33, 28),
(18, 2011, 'June', '40%', 41, 37),
(19, 2011, 'July', '38%', 41, 31),
(20, 2011, 'August', '39%', 42, 21),
(21, 2011, 'September', '42%', 48, 39),
(22, 2011, 'October', '51%', 56, 30),
(23, 2011, 'November', '42%', 43, 57),
(24, 2011, 'December', '53%', 55, 52);

-- --------------------------------------------------------

--
-- Table structure for table `road_analysis`
--

CREATE TABLE IF NOT EXISTS `road_analysis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `high_risk_road_name` varchar(255) NOT NULL,
  `yearly_accident_rate` varchar(255) NOT NULL,
  `per_day` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `road_analysis`
--

INSERT INTO `road_analysis` (`id`, `high_risk_road_name`, `yearly_accident_rate`, `per_day`) VALUES
(1, 'Dhaka Chittagong Highway', '52%', 6),
(2, 'Dhaka Sylhet Road', '48%', 5),
(3, 'Feni Cox''s Bazar', '42%', 4),
(4, 'Dhaka Borishal Raod', '39%', 3),
(5, 'Dhaka Tangail Road', '35%', 3),
(6, 'Khulna Potuakhali', '28%', 2),
(7, 'Comilla Chadpur', '23%', 2),
(8, 'Brahman Baria Voirob Road', '19%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms_setting`
--

CREATE TABLE IF NOT EXISTS `sms_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sms_setting`
--

INSERT INTO `sms_setting` (`id`, `full_name`, `phone_number`, `email`, `message`) VALUES
(1, 'Sorna Akter', 98765432, 'sorna@gmail.com', 'There was a problem in our local road.We need your help to show up the problem government.'),
(2, 'Tarik Ahmed', 12345678, 'tarik@yahoo.com', 'In our local road in dinajpur sadar upazilla occur a severe accident but not yet any case in our local thana.We want to panished driver for his careles work'),
(3, 'nilima', 7675643, 'nilima@gmail.com', 'Need to contact.....'),
(4, 'konika', 23487543, 'konika@gmail.com', 'need to meet with your organization for some help');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `image` varchar(1233) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `mobile`, `image`) VALUES
(7, 'Tamanna', 'tamanna@gmail.com', '2345', 'mogbazar,dhaka', 98765, 'upload/1481210866.jpg'),
(8, 'moumita', 'moumita@gmail.com', '5678', 'Dumki,Borisal', 234567, 'upload/1481297264.jpg'),
(10, 'prova', 'prova@gmail.com', '4567', 'darossalam,dhaka', 9876500, 'upload/1482298121.jpg'),
(18, 'Sraboni', 'sraboni@gmail.com', '2345', 'Brahman-para,Comilla', 1234567, 'upload/1483772208.jpg'),
(21, 'tazim', 'taz@yahoo.com', '1234', 'sfdgdf', 123567, 'upload/1483785892.jpg'),
(22, 'dider', 'dider@gmail.com', '4567', 'Tejkoni Para, Firmgate,Dhaka', 2345678, 'upload/1484325360.jpg'),
(23, 'mukti', 'mokti@gmail.com', '3456', 'Azimpur,Dhaka', 234567, 'upload/1485928304.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `yearly_analysis`
--

CREATE TABLE IF NOT EXISTS `yearly_analysis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `accident_rate` varchar(255) NOT NULL,
  `number_of_death` int(11) NOT NULL,
  `number_of_injured` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `yearly_analysis`
--

INSERT INTO `yearly_analysis` (`id`, `year`, `accident_rate`, `number_of_death`, `number_of_injured`) VALUES
(1, 2001, '34%', 256, 674),
(2, 2002, '42%', 301, 709),
(3, 2003, '48%', 329, 607),
(4, 2004, '37%', 281, 345),
(5, 2005, '57%', 385, 578),
(6, 2006, '49%', 338, 456),
(7, 2007, '61%', 401, 890),
(8, 2008, '52%', 365, 904),
(9, 2009, '54%', 371, 567),
(10, 2010, '46%', 315, 456),
(11, 2011, '63%', 420, 654),
(12, 2012, '49%', 335, 765),
(13, 2013, '52%', 367, 975),
(14, 2014, '55%', 382, 865),
(15, 2015, '67%', 460, 1043),
(16, 2016, '59%', 411, 967);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
