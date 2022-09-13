-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 06:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `mobile`, `email`, `address`, `password`) VALUES
(8, 'krish', 'mehta', '12', 'krish@gmaol.com', 'delhi', '1230'),
(39, 'rushi ', 'mehta', '78459', 'mehtakrish1510@gmail.com', 'A-901 SHALEEN RESIDENCY GAURAV PATH ROAD RURAT', '753'),
(52, 'krish', 'mehta', '9316322506', 'krish@mail.com', 'A-901 SHALEEN RESIDENCY GAURAV PATH ROAD RURAT', '4567428412541fcgcvbnj'),
(57, 'tejal', 'mehta', '978456123', 'tej@meta.com', 'surat', 'H8ckP2UNbReVnQH'),
(63, 'krish', 'mehta', '123456', 'ma@manish.com', 'popopopopo', 'lkllkkll'),
(70, 'krish', 'mehta', '93163', 'mer1510@gmail.com', 'A-901 SHALEEN RESIDENCY GAURAV PATH ROAD RURAT', 'dcdcdc'),
(71, 'krish', 'mehta', '22506', 'mehtakrish1510@com.mgail', 'A-901 SHALEEN RESIDENCY GAURAV PATH ROAD RURAT', 'mmlmlm'),
(73, 'krish', 'mehta', '931632506', 'mehtakrish1510@mail.com', 'A-901 SHALEEN RESIDENCY GAURAV PATH ROAD RURAT', 'wdfghjk'),
(75, 'krish', 'mehta', '93162506', 'mehtaksh1510@mail.com', 'A-901 SHALEEN RESIDENCY GAURAV PATH ROAD RURAT', 'mlmlmlmlml'),
(76, 'krish', 'mehta', '93506', 'sh1510@gmail.com', 'A-901 SHALEEN RESIDENCY GAURAV PATH ROAD RURAT', 'zxcvbnm'),
(77, 'krish', 'mehta', '2506', 'krish1510@gmail.com', 'A-901 SHALEEN RESIDENCY GAURAV PATH ROAD RURAT', 'llmlmlmlljhgf'),
(78, 'krish', 'mehta', '93163506', 'mkrish1510@gmail.com', 'A-901 SHALEEN RESIDENCY GAURAV PATH ROAD RURAT', '42135'),
(80, 'Utsav', 'Shah', '9825917150', 'utsav.shah2001@gmail.com', '1 RATNATRAY BANGLOW, NR. JAY CHEMBER, ANAND MAHAL ROAD, ADAJAN, SURAT.', 'uRS1234@'),
(81, 'MANISH', 'MEHTA', '1023', 'MEHTAKRISH@GMAIL.COM', 'KEISHMETA', '4444'),
(82, 'rushi', 'naichale', '45123687', 'rushinaichale@gmail.com', 'naikhabar', '789654123'),
(83, 'rushi', 'parekh', '1222134', 'rushiparekh@otmail.com', 'bfefoio3ii123,surat', '12345'),
(84, 'raj', 'kelawala', '9758644235', 'raj@hotmail.com', 'surat', 'raj12345678'),
(85, 'soham', 'attarde', '7984668147', 'attardesoham2@gmail.com', '206, ramnagar soc. gate no.9 godadra road udhna surat', 'soham1211');

-- --------------------------------------------------------

--
-- Table structure for table `gold`
--

CREATE TABLE `gold` (
  `id` int(50) NOT NULL,
  `goldprice` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gold`
--

INSERT INTO `gold` (`id`, `goldprice`, `date`) VALUES
(1, '20rs', '2022-03-07'),
(4, '800rs', '2022-03-19'),
(5, '5rs', '2022-03-15'),
(8, '40rs', '2022-03-24'),
(9, '550000$', '2022-03-26'),
(10, '45rs', '2022-03-28'),
(11, '45000', '2022-03-28'),
(13, '1000000', '2022-04-12'),
(14, '4874', '2022-04-30'),
(15, '4,874 ₹', '2022-04-30'),
(16, '50000', '2022-04-20'),
(17, '48,000₹', '2022-04-12'),
(18, '48000', '2022-04-22'),
(19, '48,000₹', '2022-04-30'),
(20, '-10', '2022-05-12'),
(21, '10', '2022-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `carats` varchar(100) NOT NULL,
  `stocks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `price`, `weight`, `carats`, `stocks`) VALUES
(2, 'nacklance', '80000rs', '5kg', '30', '5'),
(3, 'braclet', '100', '0.3kg', '6', '100'),
(5, 'earing gold', '0.50rs', '1ton', '25', '0'),
(6, 'lasan', '75', '20', '45', '5'),
(7, 'krish', '0.05', '600kg', '24', '5'),
(8, 'krish', '0.05', '54kg', '24', '300'),
(9, 'krish', '86', '5kg', '24', '100'),
(11, '4444', '-111', 'yu', 'p', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sliver`
--

CREATE TABLE `sliver` (
  `id` int(50) NOT NULL,
  `sliverprice` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliver`
--

INSERT INTO `sliver` (`id`, `sliverprice`, `date`) VALUES
(1, '50478', '0000-00-00'),
(2, '900', '0000-00-00'),
(3, '455', '0000-00-00'),
(4, '8500rs', '2022-03-28'),
(5, '3rs', '2022-03-24'),
(6, '90000', '2022-03-28'),
(7, '50478rs', '2022-04-21'),
(8, '123456rs', '2022-04-22'),
(9, '50000', '2022-04-12'),
(10, '68,100₹', '2022-04-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `gold`
--
ALTER TABLE `gold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliver`
--
ALTER TABLE `sliver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `gold`
--
ALTER TABLE `gold`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliver`
--
ALTER TABLE `sliver`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
