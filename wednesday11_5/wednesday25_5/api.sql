-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 11:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `emp_name` text NOT NULL,
  `emp_img` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_address` varchar(255) NOT NULL,
  `emp_salary` decimal(10,0) NOT NULL,
  `emp_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_img`, `emp_email`, `emp_address`, `emp_salary`, `emp_department`) VALUES
(1, 'Tamara', 'https://us.123rf.com/450wm/kakigori/kakigori1902/kakigori190200063/118899726-illustration-of-young-call-center-operator-girl-working-on-computer-typing-smiling-happy-looking-at-.jpg?ver=6', 'tamara@company.com', '52 Hanover Ave.\r\nJamestown, NY 14701', '10', 'AI / Robots'),
(2, 'Ali', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpbUbqPs2hXcgc3sWl4xp3oZmhj8yQjWj2tg&usqp=CAU', 'ali@company.com', 'New York, NY 10011, USA. 20 Cooper Square. 20 Cooper Square, ', '8', 'Mobil Application Development'),
(3, 'Ahmad', 'https://uschamber-co.imgix.net/https%3A%2F%2Fs3.us-east-1.amazonaws.com%2Fco-assets%2Fassets%2Fimages%2Ffiring-employee.jpg?auto=compress%2Cformat&crop=focalpoint&fit=crop&fp-x=0.5&fp-y=0.5&h=415&q=88&w=622&s=05d44ee1429ce1d81800dcb27dfc5eb7', 'employee@org.com', '441 4th Street, NW - Washington, DC', '10', 'Cyber Security');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
