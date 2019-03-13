-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 06:27 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `firstName` varchar(15) DEFAULT NULL,
  `lastName` varchar(15) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`, `firstName`, `lastName`, `mobile`, `email`) VALUES
(1, 'vishal', 'vishal@1998', 'Vishal', 'Salvankar', 1234567890, 'vishal@gmail.com'),
(1, 'vishal', 'vishal@1998', 'Vishal', 'Salvankar', 1234567890, 'vishal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(7) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `address`, `number`, `email`, `password`) VALUES
(1, 'Shailendra', 'Sharma', 'vit', 90854689, 'shailendra@gmail.com', 'Shelu.1998'),
(2, 'Gaurav', 'Malik', 'haryana', 2147483647, 'gaurav@gmail.com', 'Gaurav@1998');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `bid` int(8) NOT NULL,
  `cid` int(8) NOT NULL,
  `status` varchar(7) NOT NULL,
  `qty` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`bid`, `cid`, `status`, `qty`) VALUES
(0, 1, 'cart', 1),
(0, 1, 'cart', 1),
(0, 1, 'cart', 1),
(0, 1, 'cart', 1),
(72, 0, 'cart', 1),
(72, 0, 'cart', 1),
(80, 2, 'cart', 1);

-- --------------------------------------------------------

--
-- Table structure for table `history_2`
--

CREATE TABLE `history_2` (
  `bid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_2`
--

INSERT INTO `history_2` (`bid`, `cid`, `status`, `qty`) VALUES
(69, 1, 'cart', 0),
(70, 1, 'cart', 0),
(70, 1, 'cart', 0),
(63, 1, 'cart', 0),
(63, 1, 'cart', 0),
(61, 1, 'cart', 0),
(61, 1, 'cart', 0),
(26, 1, 'cart', 0),
(26, 1, 'cart', 0),
(28, 1, 'cart', 0),
(28, 1, 'cart', 0),
(46, 1, 'cart', 0),
(46, 1, 'cart', 0),
(50, 1, 'cart', 0),
(74, 2, 'cart', 0),
(74, 2, 'cart', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `id` int(10) NOT NULL,
  `title` varchar(10) NOT NULL,
  `company` varchar(20) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `title`, `company`, `price`) VALUES
(85, 'Realme 2', 'Oppo', 8220);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(8) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `company` varchar(30) NOT NULL,
  `stock` int(4) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `company`, `stock`, `price`) VALUES
(1, 'Realme 2', 'Oppo', 50, 8990),
(2, 'Lenovo K9', 'Lenovo', 50, 8999),
(3, 'Honor 9N', 'Huawei', 50, 11999),
(4, 'Vivo V11 Pro', 'Vivo', 50, 25999),
(5, 'Asus Zenfone Lite L1', 'Asus', 50, 5999),
(6, 'Panasonic P95', 'Panasonic', 50, 4999),
(7, 'Emporio Armani AR1614', 'Armani', 50, 7278),
(8, 'Titan 177LS', 'Titan', 50, 1955),
(9, 'Casio G764 G-Shock', 'Casio', 50, 5176),
(10, 'Titan Karishma', 'Titan', 50, 1595),
(11, 'Lois Caron LCS-8078', 'Lois Caron', 50, 799),
(12, 'Fastrack Black', 'Fastrack', 50, 999),
(13, 'Cannon EOS 200D', 'Cannon', 50, 52990),
(14, 'Cannon EOS 6D', 'Cannon', 50, 202995),
(15, 'Cannon EOS 80D', 'Cannon', 50, 73900),
(16, 'Nikon Coolpix A10', 'Nikon', 50, 6450),
(17, 'Nikon D5300 DSLR', 'Nikon', 50, 37990),
(18, 'Nikon Coolpix A100', 'Nikon', 50, 6450),
(19, 'Database Management System (Pankaj Agarwal)', 'Niket Publications', 50, 225),
(20, 'Database Management System (P.K.Yadav)', 'Niket Publications', 50, 175),
(21, 'Database Management System (second edition)', 'Chauhan Publications', 50, 350),
(22, 'Database Management System Concepts', 'Chauhan Publications', 50, 115),
(23, 'Distributed DBMS', 'Das Publications', 50, 105),
(24, 'Simplfied Approach to DBMS', 'Das Publications', 50, 75),
(25, 'Maniac Checkered T-Shirt', 'DC', 50, 499),
(26, 'Tripr V-neck T-Shirt', 'DC', 50, 591),
(27, 'Aelo Solid Mens T-Shirt', 'Aelo', 50, 474),
(28, 'Classic Polo T-Shirt', 'Polo', 50, 599),
(29, 'Flying Machine Blue Jeans', 'FM', 50, 891),
(30, 'Lee Slim Mens Dark Jeans', 'Lee Cooper', 50, 1173),
(31, 'Saara Self Design Saree', 'Saara', 50, 549),
(32, 'Vaidehi Fashioned Saree', 'VFS', 50, 699),
(33, 'Hitesh Enterprise Saree', 'Hitesh Enterprise', 50, 349),
(34, 'FabTag Kurta', 'FabTag', 50, 297),
(35, 'Gujari Women Printed Kurta', 'Gujari', 50, 290),
(36, 'Stylum Casual Kurta', 'Stylum', 50, 790),
(37, 'Amardeep Tricycle', 'Amardeep', 50, 2340),
(38, 'Disney Minnie Mr', 'Disney World', 50, 399),
(39, 'Barbie Kitchen Doll', 'Barbie Productions', 50, 1119),
(40, 'Camera Drone RC', 'Deep Game Toys', 50, 6905),
(41, 'Hashbro Transformer RC', 'Hashbro', 50, 600),
(42, 'Scrabble Board', 'FunGame Productions', 50, 599),
(43, 'HealthKart Whey Protein(1 KG)', 'HealthKart', 50, 1055),
(44, 'Ultimate Nutrition Prostar', 'Ultimate Solutions', 50, 3599),
(45, 'MuscleBlaze Whey Protein', 'MuscleBlaze', 50, 549),
(46, 'ASITIS Nutrition Capsules', 'ASITIS', 50, 1996),
(47, 'Seven Seas Cod Liver Oil', 'Seven Seas Production', 50, 600),
(48, 'Salmon Fish Oil', 'Salmon Sea Products', 50, 699),
(49, 'Earton Hiking Shoes', 'Earton', 50, 348),
(50, 'Asian Running Shoes', 'Asian Footwear', 50, 584),
(51, 'Puma Mens Sandals', 'Puma', 50, 1199),
(52, 'Lee Cooper Sandals', 'Lee Cooper', 50, 1539),
(53, 'Jade Women Black Heels', 'Jade Productions', 50, 449),
(54, 'ABJ Fashion Wedges', 'ABJ Footwear Solutions', 50, 445),
(55, 'Lenovo Ideapad', 'Lenovo', 50, 37990),
(56, 'Dell Vostro', 'Dell', 50, 28990),
(57, 'Asus Core 8th Gen', 'Asus', 50, 43490),
(58, 'HP 15 Pentium', 'HP', 50, 20990),
(59, 'Apple MacBook Air', 'Apple', 50, 62990),
(60, 'Apple MacBook Pro', 'Apple', 50, 103990),
(61, 'WD 1TB Hard Disk', 'WD Computer Solutions', 50, 3799),
(62, 'Seagate 1TB Hard Disk', 'Seagate ', 50, 3999),
(63, 'Sandisk CruzerBlade 32GB', 'Sandisk', 50, 519),
(64, 'SanDisk 64GB OTG', 'Sandisk', 50, 1299),
(65, 'LogiTech Wireless Mouse', 'LogiTech', 50, 449),
(66, 'ElectroBot Wireless Mouse', 'Dellhouse Solutions', 50, 285),
(67, 'Denver Deodorant', 'Denver', 50, 277),
(68, 'Yardley Body Spray', 'Yardley', 50, 170),
(69, 'Park Avenue Deodorant', 'Park Avenue', 50, 159),
(70, 'Wild Stone Perfume', 'Wild Stone', 50, 350),
(71, 'Fogg Perfume', 'Fogg', 50, 418),
(72, 'Jaguar Classic Perfume', 'Jaguar', 50, 1704),
(73, 'Cello 30pcs Ball Pen', 'Cello', 50, 420),
(74, 'Flair Click Ball Pen', 'Flair', 50, 299),
(75, 'Parker Ball Pen', 'Parker', 50, 480),
(76, 'Doodle A5 Diary', 'Doodle Stationary ', 50, 446),
(77, 'Casio FX-82ES Calculator', 'Casio', 50, 565),
(78, 'Orpat FX 100D Calculator', 'Orpat', 50, 335),
(79, 'Philips Bluetooth Speaker', 'Philips', 50, 1199),
(80, 'JBL Bluetooth Speaker', 'JBL', 50, 3999),
(81, 'Sony Bluetooth Speaker', 'Sony', 50, 2299),
(82, 'Boat Earphones', 'Boat', 50, 599),
(83, 'Shure Headphones', 'Shure', 50, 5200),
(84, 'SkullCandy Earphones', 'SkullCandy', 50, 699);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
