-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 03:02 PM
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
  `emp_name` varchar(255) NOT NULL,
  `emp_img` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_address` varchar(255) NOT NULL,
  `emp_department` varchar(255) NOT NULL,
  `emp_salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_img`, `emp_email`, `emp_address`, `emp_department`, `emp_salary`) VALUES
(1, 'Alice', 'https://th.bing.com/th/id/R.e7d4bee6ea8539b24f86ec9542e6743d?rik=Wny830MDaO34nA&riu=http%3a%2f%2fimages4.fanpop.com%2fimage%2fphotos%2f16000000%2fAlice-in-Wonderland-alice-in-wonderland-2010-16094070-1197-1450.jpg&ehk=jh%2fbq%2fxRfhhDNobFjzfnzdFrNH42Momvp', 'alice@gmail.com', 'Jordan- Aqaba', 'Software development', '2000'),
(2, 'Joseph', 'https://pbs.twimg.com/profile_images/421582930096689152/8VPg_q7p.jpeg', 'joseph@gmail.com', 'America, New York', 'Sales', '1500');

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
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
