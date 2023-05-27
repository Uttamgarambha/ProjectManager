-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 11:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `conatct_us`
--

DROP TABLE IF EXISTS `conatct_us`;
CREATE TABLE `conatct_us` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conatct_us`
--

INSERT INTO `conatct_us` (`name`, `email`, `message`) VALUES
('Kuldeep ', 'kd@gmail.com', 'Hey this Site is Awesome..!!'),
('Nothing', 'a@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
CREATE TABLE `meeting` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `organizer` varchar(25) NOT NULL,
  `agenda` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(25) NOT NULL,
  `follow` date NOT NULL,
  `priority` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `name`, `organizer`, `agenda`, `date`, `duration`, `follow`, `priority`, `status`) VALUES
(2, 'Bizlist', 'Project Manager', 'progression', '2023-05-09', '25 min', '2023-05-29', 'Medium', 'Schedule'),
(5, 'jdbc', 'team leader', 'new ', '2023-05-28', '15 min', '2023-05-30', 'High', 'Schedule'),
(3, 'Lorem', 'CEO', 'Qouatation', '2023-02-14', '40 min', '2023-03-15', 'High', 'Schedule'),
(1, 'GetOn', 'Team leader', 'General talk', '2023-05-02', '30 min', '2023-05-03', 'High', 'Schedule'),
(4, 'Tour', 'Manager', 'tour plan', '2023-05-18', '35 min', '2023-05-29', 'Medium', 'Schedule');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `id` int(3) NOT NULL,
  `project_name` varchar(20) NOT NULL,
  `project_manager` varchar(20) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `client_phone` bigint(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `budget` int(6) NOT NULL,
  `no_of_emp` int(3) NOT NULL,
  `resources` varchar(30) NOT NULL,
  `project_type` varchar(20) NOT NULL,
  `progress` int(20) NOT NULL,
  `issues` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `project_name`, `project_manager`, `client_name`, `client_phone`, `start_date`, `end_date`, `status`, `priority`, `budget`, `no_of_emp`, `resources`, `project_type`, `progress`, `issues`) VALUES
(3, 'bigscal', 'hirav', 'rabidra', 5451326, '2023-01-18', '2023-05-27', 'In Progress', 'medium', 560000, 12, 'aws , domain', 'web application', 78, ''),
(1, 'ActoScript', 'DavalKumar', 'Krishna Kapadiya', 9564785124, '2023-03-18', '2023-05-30', 'Completed', 'high', 74000, 6, 'SubScripted Site', 'Software Development', 42, ''),
(2, 'CreatorGiants', 'Parth Gabani', 'Darshan Kapadiya', 985564412, '2023-05-16', '2023-06-22', 'In Progress', 'high', 25000, 3, 'domain', 'website', 10, 'Not'),
(404, 'Nova', 'kalkani Yash', 'Kuldeep Luvani', 12547633545, '2023-05-12', '2023-11-30', 'In Progress', 'high', 315000, 14, 'cloud, domain, functionality', 'App developer', 56, 'Running Late');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `joining_date` date NOT NULL,
  `position` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `performance` int(3) NOT NULL,
  `salary` int(7) NOT NULL,
  `salary_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `joining_date`, `position`, `gender`, `email`, `phone`, `performance`, `salary`, `salary_status`) VALUES
(1, 'Gujarati Mit', '2023-05-04', 'sr analyst', 'male', 'guj@gmail.com', 84241848, 79, 56000, 'Paid'),
(2, 'Kalkani yash', '2022-07-14', 'web developer', 'male', 'yash@gmail.com', 2147483647, 85, 42000, 'Pending'),
(3, 'Parth Gabani', '2023-05-04', 'software developer', 'male', 'parth@gmail.com', 2147483647, 56, 23000, 'Paid'),
(4, 'Darsh Gol', '2023-04-05', 'Web Designer', 'male', 'darsh@gmail.com', 2147483647, 75, 62000, 'Paid'),
(5, 'Bansari bhalala', '2023-04-09', 'web designer', 'female', 'bansi@gmail.com', 2147483647, 45, 25000, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `full_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`full_name`, `username`, `email`, `password`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Uttam Patel', 'uttam', 'uttam@gmail.com', 'uttam123'),
('hirav', 'hirav', 'hirav@gmail.com', 'hirav123'),
('dhruv', 'dhruv', 'dhruv@gmail.com', 'dhruv123'),
('Mit Gujarati', 'Mit', 'mit3010@gmail.com', '12345'),
('Dhruv Dobariya', 'dhruv', 'dhruv123@gmail.com', 'dhruv123'),
('krunal ', 'krunal', 'krunal@gmail.com', 'krunal123'),
('tyj', 'fyufy', 'hujkok@gmail.com', 'fyufy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
