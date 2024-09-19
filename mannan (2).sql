-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 11:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mannan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `username`, `password`) VALUES
(1, 'Mannan', 'Mannan');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `sno` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `date` date NOT NULL,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`sno`, `name`, `phone`, `email`, `adult`, `children`, `date`, `destination`) VALUES
(1, 'SVmcm', '8918523121', 'mannanhossen5@gmail.com', 12, 2, '2023-06-28', 'goa'),
(2, 'MANNAN', '8967479276', 'mannanhossen5@gmail.com', 12, 34, '2002-02-02', 'anywhere'),
(3, 'MANNAN', '8967479276', 'mannanhossen5@gmail.com', 12, 34, '2002-02-02', 'anywhere'),
(4, 'SVmcm', '8918523121', 'mannanhossen5@gmail.com', 12, 2, '2023-06-28', 'goa'),
(5, 'Mokbul Hossain', '8967479276', 'mannan02@gmail.com', 12, 321, '0000-00-00', 'beach'),
(6, 'Mokbul Hossain', '8967479276', 'easylearn397@gmail.com', 12, 11, '2023-07-14', 'shikkim'),
(7, 'Mokbul Hossain', '8967479276', 'easylearn397@gmail.com', 12, 11, '2023-07-14', 'shikkim'),
(8, 'Mokbul Hossain', '8967479276', 'mannan02@gmail.com', 12, 12, '2023-06-30', 'beach'),
(9, 'Hii', '1212', 'mannan02@gmail.com', 12, 2, '2023-07-07', 'Manali'),
(10, 'SVmcm', '8967479276', 'easylearn397@gmail.com', 12, 2, '2023-07-06', 'beach'),
(11, 'SVmcm', '8967479276', 'easylearn397@gmail.com', 12, 2, '2023-07-06', 'beach'),
(12, 'SVmcm', '8967479276', 'mannan02@gmail.com1213', 12, 2, '2023-07-08', 'beach'),
(13, 'SVmcm', '8967479276', 'codingwithmannan02@gmail.com1213', 12, 2, '2023-07-08', 'beach'),
(14, 'SVmcm', '8967479276', 'codingwithmannan02@gmail.com1213', 12, 2, '2023-07-08', 'beach'),
(15, 'Mokbul Hossain', '8967479276', 'easylearn397@gmail.com', 12, 5, '2023-07-02', 'Dubai'),
(16, 'Mokbul Hossain', '8967479276', 'easylearn397@gmail.com', 12, 5, '2023-07-02', 'Dubai'),
(17, 'php', '8967479276', 'easylearn397@gmail.com', 34, 12, '2023-07-02', 'beach'),
(18, 'php', '8967479276', 'easylearn397@gmail.com', 34, 12, '2023-07-02', 'beach'),
(19, 'php', '8967479276', 'easylearn397@gmail.com', 34, 12, '2023-07-02', 'beach'),
(20, '', '', '', 0, 0, '0000-00-00', ''),
(21, 'TANVIE', '8918523221', 'mannanhossen5@gmail.com', 12, 12, '2023-07-09', 'Manali');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sno` int(2) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sno`, `name`, `email`, `subject`, `message`, `dt`) VALUES
(1, 'SVmcm', 'mannan@gmail.com', 'Tour', 'No ', '2023-05-12 22:18:47'),
(2, 'SVmcm', 'mannan@gmail.com', 'Tour', 'No ', '2023-05-12 22:18:58'),
(3, 'Mannan', 'mannan@gmail.com', 'tour', 'Tour ', '2023-05-12 22:19:16'),
(4, 'Mannan', 'mannan@gmail.com', 'tour', 'Tour ', '2023-05-12 22:20:31'),
(5, 'SVmcm', 'mannan@gmail.com', 'jjj', 'jjj', '2023-05-18 14:49:41'),
(6, 'hiiis', 'mannsssan@gmail.com', 'ss', 'sfsf', '2023-06-10 00:00:02'),
(7, 'hiiis', 'mannsssan@gmail.com', 'ss', 'sfsf', '2023-06-10 00:01:01'),
(8, 'SVmcm', 'mannsssan@gmail.com', 'SFS', 'SFS', '2023-06-10 00:05:39'),
(9, 'SVmcm', 'mannsssan@gmail.com', 'SFS', 'SFS', '2023-06-10 00:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `pyment`
--

CREATE TABLE `pyment` (
  `sno` int(3) NOT NULL,
  `cardNumber` varchar(20) NOT NULL,
  `expiryDate` int(50) NOT NULL,
  `cvv` int(3) NOT NULL,
  `billingAddress` varchar(10) NOT NULL,
  `amount` varchar(5) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pyment`
--

INSERT INTO `pyment` (`sno`, `cardNumber`, `expiryDate`, `cvv`, `billingAddress`, `amount`, `dt`) VALUES
(1, '  222-3333-4444-5555', 2024, 432, '  6745343 ', '$30', '2023-06-14 17:26:02'),
(2, '  222-3333-4444-5555', 2024, 432, '  6745343 ', '$30', '2023-06-14 17:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `place` varchar(50) NOT NULL,
  `para` varchar(1000) NOT NULL,
  `price` varchar(3) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`place`, `para`, `price`, `img`) VALUES
('Agra', 'The Taj Mahal is an ivory-white marble mausoleum on the right bank of the river Yamuna in Agra, Uttar Pradesh, India. It was commissioned in 1631 by the fifth Mughal emperor, Shah Jahan to house the tomb of his favourite wife, Mumtaz Mahal; it also houses the tomb of Shah Jahan himself', '$10', ''),
('Manali', 'Manali is a high-altitude Himalayan resort town in India’s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination. Set on the Beas River, it’s a gateway for skiing in the Solang Valley and trekking in Parvati Valley', '$25', ''),
('Shimla', 'Shimla is the capital of the northern Indian state of Himachal Pradesh, in the Himalayan foothills. Once the summer capital of British India, it remains the terminus of the narrow-gauge Kalka-Shimla Railway, completed in 1903. It’s also known for the handicraft shops that line The Mall, a pedestrian avenue, as well as the Lakkar Bazaar, a market specializing in wooden toys and crafts.', '$30', ''),
('Goa', 'Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the area’s tropical spice plantations. Goa is also known for its beaches, ranging from popular stretches at Baga and Palolem to those in laid-back fishing villages such as Agonda', '$30', ''),
('Ladakh', 'Ladakh is a region administered by India as a union territory which constitutes a part of the larger Kashmir region and has been the subject of dispute between India, Pakistan, and China since 1947.', '$40', ''),
('Gangtok', 'Gangtok is the capital of the mountainous northern Indian state of Sikkim. Established as a Buddhist pilgrimage site in the 1840s, the city became capital of an independent monarchy after British rule ended, but joined India in 1975. Today, it remains a Tibetan Buddhist center and a base for hikers organizing permits and transport for treks through Sikkim’s Himalayan mountain ranges.', '$40', ''),
('New Delhi', 'New Delhi is the capital of India and a part of the National Capital Territory of Delhi. New Delhi is the seat of all three branches of the Government of India, hosting the Rashtrapati Bhavan, Sansad Bhavan, and the Supreme Court', '$40', ''),
('North Sikkim', ' North Sikkim is a district of the Indian state of Sikkim. Its district headquarters is Mangan. It is the seventh least populous district in the country', '$70', ''),
('TURKEY HILLS', 'Turkey Hill Dairy, or simply known as Turkey Hill, is an American brand of iced tea, ice cream and other beverages and frozen desserts distributed throughout the United States and internationall', '$50', '');

-- --------------------------------------------------------

--
-- Table structure for table `user-info`
--

CREATE TABLE `user-info` (
  `sno` int(3) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-info`
--

INSERT INTO `user-info` (`sno`, `username`, `email`, `password`, `cpassword`, `dt`) VALUES
(1, 'Mannan hossain', 'mannanhossen5@gmail.com', '$2y$10$rLAJp4vJu6AvHZK40wI.J.6uOnw1ndB95M5WF/t8Qus/McUbVZjNG', '$2y$10$rLAJp4vJu6AvHZK40wI.J.6uOnw1ndB95M5WF/t8Qus/McUbVZjNG', '2023-05-15 00:39:51'),
(2, 'bca', 'easylearn397@gmail.com', '$2y$10$bY5MK7WkIRXV9/Ny9RKKtOI8/mEbyXMWlFxBxxJQT2/1iwsF4oJvS', '$2y$10$bY5MK7WkIRXV9/Ny9RKKtOI8/mEbyXMWlFxBxxJQT2/1iwsF4oJvS', '2023-05-16 21:36:34'),
(3, 'admin', 'easylearn397@gmail.com', '$2y$10$XJQbseFi1eNqyzydJlKfuOeCizvjVEHTK9WAQ50js5qRcZvy9K99K', '$2y$10$XJQbseFi1eNqyzydJlKfuOeCizvjVEHTK9WAQ50js5qRcZvy9K99K', '2023-05-18 14:41:50'),
(4, 'a', 'easylearn397@gmail.com', '$2y$10$T/xICjiIeRSZ1PMECkNK7eIde/qXDwSTbRt9iORD727D38b2Ymkju', '$2y$10$T/xICjiIeRSZ1PMECkNK7eIde/qXDwSTbRt9iORD727D38b2Ymkju', '2023-05-18 14:47:14'),
(5, 'bca', 'bca@gmail.com', '$2y$10$9919FPXze5h2LKmSWkcfuORHk14Rs5vHqrqY.VviwMCaeU6Kzdbqm', '$2y$10$9919FPXze5h2LKmSWkcfuORHk14Rs5vHqrqY.VviwMCaeU6Kzdbqm', '2023-05-27 00:06:59'),
(6, 'admin', 'admin1@gmial.com', '$2y$10$/gXa17o8av4j4jhksI7PbOqy1Ch0PaS1hOZIj/3w3gUJ45Cs8mOHC', '$2y$10$/gXa17o8av4j4jhksI7PbOqy1Ch0PaS1hOZIj/3w3gUJ45Cs8mOHC', '2023-06-08 15:35:37'),
(7, 'MANNAN', 'urmikhatun483@gmail.com', '$2y$10$3Ycqml9TOwVAIwI.A1ElO.rzK6T9QBqAUpSJKfL8gnX008Xs.nq5G', '$2y$10$3Ycqml9TOwVAIwI.A1ElO.rzK6T9QBqAUpSJKfL8gnX008Xs.nq5G', '2023-06-10 00:04:19'),
(8, 'bca', 'mannanhossen5@gmail.com', '$2y$10$Wo2br17f9yo4fbbsFkypNuu1arH63QG8dOML8RvtL2nJ.zQrpG7gO', '$2y$10$Wo2br17f9yo4fbbsFkypNuu1arH63QG8dOML8RvtL2nJ.zQrpG7gO', '2023-06-15 00:39:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `pyment`
--
ALTER TABLE `pyment`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user-info`
--
ALTER TABLE `user-info`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pyment`
--
ALTER TABLE `pyment`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user-info`
--
ALTER TABLE `user-info`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
