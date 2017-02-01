-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2016 at 04:54 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `pass`) VALUES
(1, 'joy', 'joy123'),
(2, 'shubhankar', 'shub123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `brand_type` varchar(20) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `image_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `product_name`, `city_name`, `product_type`, `brand_type`, `product_desc`, `cost`, `image_name`) VALUES
(1, 'Sony Xperia Z3', 'Mumbai', 'Mobiles', 'Sony', 'Waterproof phone', '35000', 'Sony_Xperia-Z3.jpg'),
(2, 'iphone 6s', 'Mumbai', 'Mobiles', '', 'Very good camera', '59000', 'iphone6s.jpg'),
(3, 'Sony 4k', 'Mumbai', 'Television', 'Sony', 'Great quality', '65000', 'sonytv.jpg'),
(4, 'videocon tv', 'Mumbai', 'Television', 'Videocon', '3D 4k tv', '50,000', 'Videocon_tv.jpg'),
(5, 'Canon camera', 'Mumbai', 'Cameras', 'Sony', '40mp dslr camera', '30,000', 'canon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `review` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `p_id`, `review`, `name`, `time`, `status`) VALUES
(13, 2, 'The best camera', 'rocky', '2016-07-07 16:41:55', 1),
(14, 1, 'The best phone', 'rocky', '2016-07-07 16:42:29', 1),
(15, 2, 'sasds', 'rocky', '2016-07-07 17:18:00', 1),
(16, 2, 'a', 'rocky', '2016-07-07 17:21:45', 1),
(17, 3, 'Brilliant video quality', 'rocky', '2016-07-07 19:58:36', 1),
(18, 5, 'Great camera', 'rocky', '2016-07-07 20:02:51', 1),
(19, 2, 'The best in the iphone series', 'rocky', '2016-07-07 20:04:58', 1),
(20, 5, 'Awesome camera', 'rocky', '2016-07-07 20:10:38', 0),
(21, 5, 'Awesome camera', 'rocky', '2016-07-07 20:11:23', 1),
(22, 5, 'Awesome camera', 'rocky', '2016-07-07 20:12:46', 0),
(23, 5, 'Mindblowing camera', 'rocky', '2016-07-07 20:13:00', 0),
(24, 5, 'Mindblowing camera', 'rocky', '2016-07-07 20:13:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `pass`) VALUES
(1, 'abhilash', 'ab1234'),
(2, 'rocky', 'rocky123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
