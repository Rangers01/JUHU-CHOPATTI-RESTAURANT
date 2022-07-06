-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 11:01 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juhu_chopatti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `username`, `password`) VALUES
(1, 'Bhawani Tiwari', 'bhawanicse@gmail.com', '8104066299', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` varchar(255) NOT NULL,
  `contact_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `contact_date`) VALUES
(1, 'Bhawani Sharma', 'bhawanicse@gmail.com', 'Hello Admin this is a testing message', '0000-00-00 00:00:00'),
(2, 'kavita', 'kavita.jangid72@gmail.com', 'hello', '2016-06-05 06:56:37'),
(4, 'kavita', 'kavita.jangid72@gmail.com', 'hello ', '2016-06-05 08:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `i_price` varchar(255) NOT NULL,
  `i_des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `i_name`, `i_price`, `i_des`) VALUES
(1, 'Masala Dosa', '150 INR', ' South-indian'),
(2, 'Dal Bati Churma', '500 INR', 'Rajasthani Food'),
(3, 'Veg Pulav', '90 INR', 'Testing Package'),
(5, 'White Pasta', '150', 'Italian '),
(45, 'Veg Manchurian', '200', 'dfghjkl'),
(79, 'Paav Bhaji', '100', '90');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `name`, `email`, `mobile`, `address`, `item`) VALUES
(3, 'navya sharma', 'genx.kavita.jpr@gmail.com', '9876543210', 'Jaipur', 'Dal Bati Churma'),
(4, 'navya sharma', 'genx.kavita.jpr@gmail.com', '9876543210', 'BHilwaDA\r\n', 'Veg Pulav');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `Reservation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `mobile`, `time`, `date`, `message`, `Reservation_date`) VALUES
(1, 'kavita jangid', 'kavita.jangid72@gmail.comery', '9782204809', 'eklrmew', 'rjfnrkf', 'rkgfmrf,', '2016-06-05 06:27:17'),
(2, 'kavita jangid', 'kavita.jangid72@gmail.comery', '9782204809', '8:00 pm', '10-05-16', 'I wanna reserve my table.', '2016-06-05 08:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `register_users`
--

CREATE TABLE `register_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Registration_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_users`
--

INSERT INTO `register_users` (`id`, `firstname`, `lastname`, `email`, `mobile`, `password`, `Registration_date`) VALUES
(43, 'masoom', 'raza', 'abcd@gmail.com', '9931049549', 'Masoom', '2016-06-01 12:12:58'),
(44, 'kavita', 'jangid', 'kavita.jangid72@gmail.comery', '9782204809', 'kavita', '2016-06-05 06:05:13'),
(45, 'navya', 'sharma', 'genx.kavita.jpr@gmail.com', '9876543210', 'kavita', '2016-06-05 08:53:47'),
(46, 'kavita', 'jngid', 'xyz@gmail.com', '785136944', '123456', '2016-12-06 18:59:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_users`
--
ALTER TABLE `register_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register_users`
--
ALTER TABLE `register_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
