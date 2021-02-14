-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 01:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`admin_id`, `firstname`, `lastname`, `othernames`, `email`, `password`) VALUES
(1, 'Yau', 'Adam', 'Musa', 'saniabdullahi442@gmail.com', '12345'),
(3, 'Haruna', 'Aminu', 'Maipompo', 'maipompo@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `othernames`, `email`, `password`) VALUES
(1, 'Sani', 'Adam', 'Musa', 'saniabdullahi442@gmail.com', '12345'),
(3, 'Haruna', 'Aminu', 'Maipompo', 'maipompo@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `pabuja_id` int(20) NOT NULL,
  `cart_fname` varchar(40) NOT NULL,
  `cart_lname` varchar(50) NOT NULL,
  `cart_oname` varchar(50) NOT NULL,
  `cart_email` varchar(60) NOT NULL,
  `cart_phone` varchar(60) NOT NULL,
  `cart_amount` varchar(40) NOT NULL,
  `number_plot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`, `pabuja_id`, `cart_fname`, `cart_lname`, `cart_oname`, `cart_email`, `cart_phone`, `cart_amount`, `number_plot`) VALUES
(25, 2, 13, 'Usman', 'Ojeka', 'Hassan', 'adammusa89@gmail.com', '08142061156', '4000000', '10');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `PICTURE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `fname`, `lname`, `oname`, `gender`, `address`, `email`, `phone`, `password`, `date_registered`, `PICTURE`) VALUES
(1, 'Sani', 'Sani', '', 'Male', 'N0 20, Kalma Street Buwaya Gonin Gora Kaduna ', 'saniabdullahi442@gmail.com', '08165426897', '12345', '2021-01-23 12:01:07', ''),
(2, 'Usman', 'Ojeka', 'Hassan', 'Male', 'N0 20, Kalma Street Buwaya Gonin Gora Kaduna ', 'adammusa89@gmail.com', '08142061156', '12345', '2021-01-31 16:58:42', 'IMG_20201005_125252_497.jpg'),
(3, 'Bulus', 'Ojeka', 'Adam', '', 'N0 20, Kalma Street Buwaya Gonin Gora Kaduna ', 'bin@gmail.com', '09075452727', '12345', '2021-01-25 16:46:09', 'Abdullahi_Sani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `marketer`
--

CREATE TABLE `marketer` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketer`
--

INSERT INTO `marketer` (`admin_id`, `firstname`, `lastname`, `othernames`, `email`, `password`) VALUES
(1, 'Sani', 'Adam', 'Musa', 'saniabdullahi442@gmail.com', '12345'),
(3, 'Haruna', 'Aminu', 'Maipompo', 'maipompo@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `transaction_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `pabuja_id` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `oname` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `amount_payable` varchar(60) NOT NULL,
  `number_plot` varchar(60) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `payment_count` int(20) NOT NULL,
  `status` varchar(60) NOT NULL,
  `complete_balance` int(11) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `date_paid` varchar(60) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `transaction_id`, `customer_id`, `pabuja_id`, `fname`, `lname`, `oname`, `phone`, `email`, `amount`, `amount_payable`, `number_plot`, `payment_type`, `payment_count`, `status`, `complete_balance`, `reference`, `order_id`, `payment_method`, `date_paid`, `payment_date`) VALUES
(100, 72027, 2, 13, 'Usman', 'Ojeka', 'Hassan', '08142061156', 'adammusa89@gmail.com', '400000', '800000', '2', 'Installmental', 2, 'Success', 1, '634673828782', '34556', 'Online', '31-01-2021', '2021-01-31 18:35:18'),
(139, 72027, 2, 13, 'Usman', 'Ojeka', 'Hassan', '08142061156', 'adammusa89@gmail.com', '240000', '800000', '2', 'Installmental', 1, 'Success', 1, '', '', '', '', '2021-01-31 18:35:18'),
(140, 72027, 2, 13, 'Usman', 'Ojeka', 'Hassan', '08142061156', 'adammusa89@gmail.com', '160000', '800000', '2', 'Installmental', 0, 'Success', 1, '', '', '', '', '2021-01-31 18:35:57'),
(145, 47315, 2, 13, 'Usman', 'Ojeka', 'Hassan', '08142061156', 'adammusa89@gmail.com', '1600000', '1600000', '4', 'Out Rightly', 0, 'Success', 0, '220008106771', '310121232638', 'Online', '2021-01-31 11:01:58', '2021-01-31 22:30:58'),
(159, 41423, 1, 15, 'Sani', 'Sani', '', '08165426897', 'saniabdullahi442@gmail.com', '100000', '100000', '1', 'Out Rightly', 0, 'Success', 0, '330008156894', '030221102412', 'Online', '2021-02-03 10:02:59', '2021-02-03 09:26:59'),
(160, 44386, 1, 15, 'Sani', 'Sani', '', '08165426897', 'saniabdullahi442@gmail.com', '50000', '100000', '1', 'Installmental', 2, 'Success', 1, '300008156897', '030221105246', 'Online', '2021-02-03 10:02:26', '2021-02-03 12:38:32'),
(170, 44386, 1, 15, 'Sani', 'Sani', '', '08165426897', 'saniabdullahi442@gmail.com', '30000', '100000', '1', 'Installmental', 1, 'Pending', 1, '', '', '', '', '2021-02-03 12:38:32'),
(171, 44386, 1, 15, 'Sani', 'Sani', '', '08165426897', 'saniabdullahi442@gmail.com', '20000', '100000', '1', 'Installmental', 0, 'Pending', 1, '', '', '', '', '2021-02-03 12:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `percentage`
--

CREATE TABLE `percentage` (
  `percentage_id` int(11) NOT NULL,
  `first_payment` varchar(40) NOT NULL,
  `second_payment` varchar(50) NOT NULL,
  `last_payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percentage`
--

INSERT INTO `percentage` (`percentage_id`, `first_payment`, `second_payment`, `last_payment`) VALUES
(2, '0.5', '0.3', '0.2');

-- --------------------------------------------------------

--
-- Table structure for table `property_abuja`
--

CREATE TABLE `property_abuja` (
  `pabuja_id` int(11) NOT NULL,
  `property_location` varchar(50) NOT NULL,
  `state` varchar(60) NOT NULL,
  `price` varchar(40) NOT NULL,
  `available_plot` varchar(50) NOT NULL,
  `pics` varchar(500) NOT NULL,
  `lga` varchar(60) NOT NULL,
  `size` varchar(50) NOT NULL,
  `tag` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_abuja`
--

INSERT INTO `property_abuja` (`pabuja_id`, `property_location`, `state`, `price`, `available_plot`, `pics`, `lga`, `size`, `tag`) VALUES
(13, 'No 2, Abuja Raod Garki Kano State', 'Bauchi', '400000', '10', 'IMG-20210126-WA0002.jpg', 'Alkaleri', '50/100', 'Plot B'),
(14, 'No 22, Nasara Road Rigasa Kaduna State', 'Kaduna', '200000', '11', 'IMG-20210126-WA0006.jpg', 'Igabi', '50/100', 'Plot A'),
(15, 'No 22, Nasara Road T/Wada Kaduna State', 'Kaduna', '100000', '12', 'IMG-20210126-WA0014.jpg', 'Kaduna South', '100/100', 'Plot A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `marketer`
--
ALTER TABLE `marketer`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `percentage`
--
ALTER TABLE `percentage`
  ADD PRIMARY KEY (`percentage_id`);

--
-- Indexes for table `property_abuja`
--
ALTER TABLE `property_abuja`
  ADD PRIMARY KEY (`pabuja_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marketer`
--
ALTER TABLE `marketer`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `percentage`
--
ALTER TABLE `percentage`
  MODIFY `percentage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_abuja`
--
ALTER TABLE `property_abuja`
  MODIFY `pabuja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
