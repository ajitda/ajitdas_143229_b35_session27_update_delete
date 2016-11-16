-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 05:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atomic_project_b35`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE IF NOT EXISTS `birthday` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`id`, `name`, `birthday`) VALUES
(1, 'Name1', '2016-11-09'),
(2, 'Name 2', '2016-11-16'),
(3, 'Name 3', '2016-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `book_title`
--

CREATE TABLE IF NOT EXISTS `book_title` (
  `id` int(11) NOT NULL,
  `booktitle` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_title`
--

INSERT INTO `book_title` (`id`, `booktitle`, `author`) VALUES
(1, 'Book 1', 'Author 1'),
(2, 'Book 2', 'Author 2'),
(3, 'Book 3', 'Author 3');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `city`) VALUES
(1, 'Name 1', 'Chittagong'),
(2, 'Name 2', 'Sylhet'),
(3, 'Name 3', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
`id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `Name`, `email`) VALUES
(1, 'Name 1', 'name1@gmail.com'),
(2, 'Name 2', 'name2@yahoo.com'),
(3, 'Name 3', 'name3@live.com');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`, `gender`) VALUES
(1, 'Name 1', 'Male'),
(2, 'Name 2', 'Female'),
(3, 'Name 3', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE IF NOT EXISTS `hobbies` (
`id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hobbies` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `name`, `hobbies`) VALUES
(1, 'Name 1', 'Playing, reading, gardening'),
(2, 'Name 2', 'Playing, reading, gardening'),
(3, 'Name 3', 'Playing, reading, gardening');

-- --------------------------------------------------------

--
-- Table structure for table `profile_picture`
--

CREATE TABLE IF NOT EXISTS `profile_picture` (
`id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_picture`
--

INSERT INTO `profile_picture` (`id`, `name`, `file_path`) VALUES
(1, 'Name 1', 'views/images/profile_picture/name1.jpg'),
(2, 'Name 2', 'views/images/profile_picture/name2.jpg'),
(3, 'Name 3', 'views/images/profile_picture/name3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `summary_of_organization`
--

CREATE TABLE IF NOT EXISTS `summary_of_organization` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `summary` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary_of_organization`
--

INSERT INTO `summary_of_organization` (`id`, `name`, `summary`) VALUES
(1, 'Company 1', 'Some text about Company 1'),
(2, 'Company 2', 'Some text about Company 2'),
(3, 'Company 3', 'Some summary text about Company 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthday`
--
ALTER TABLE `birthday`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_title`
--
ALTER TABLE `book_title`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_picture`
--
ALTER TABLE `profile_picture`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_of_organization`
--
ALTER TABLE `summary_of_organization`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthday`
--
ALTER TABLE `birthday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profile_picture`
--
ALTER TABLE `profile_picture`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `summary_of_organization`
--
ALTER TABLE `summary_of_organization`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
