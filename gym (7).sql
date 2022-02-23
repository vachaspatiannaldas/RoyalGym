-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 03:44 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `sub`, `email`, `msg`) VALUES
(1, 'shruti', 'mali', 'PREMIUM', 'malishruti@gmail.com', 'nice gym!'),
(2, 'Akshata', 'Patil', 'STARTER', 'akshata@gmail.com', 'Nice'),
(3, 'seema', 'jadhav', 'ELITE', 'seema@gmail.com', 'superbbbb gym...'),
(4, 'sanjana ', 'pawar', 'STARTER', 'sanjana@gmail.com', 'best gym ever!'),
(5, 'mayuri', 'patange', 'PREMIUM', 'mayuri@gmail.com', 'Nice!!!'),
(6, 'Krishna', 'annaldas', 'ELITE', 'anna@gmail.com', 'very nice gym!!'),
(7, 'abhi', 'gouda', 'STARTER', 'abhishekgouda882@gmail.com', 'nice...'),
(8, 'nikhil', 'vidap', 'PREMIUM', 'nikhilvidap@gmail.com', 'Nice Gym...!!!');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `userid`, `pass`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `choice` varchar(20) NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `choice`, `price`) VALUES
(1, 'STARTER', '10000'),
(2, 'PREMIUM', '20000'),
(3, 'ELITE', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `mobile`, `email`, `userid`, `pass`) VALUES
(1, 'shruti mali', '7066217292', 'malishruti@gmail.com', 'shruti', '12345'),
(2, 'Akshata Patil', '9545033059', 'akshatapatil@gmail.com', 'Akshata', '4444'),
(3, 'seema jadhav', '9545030359', 'seema@gmail.com', 'seema', '1234'),
(4, 'sanjana pawar', '9765287247', 'sanjana@gmail.com', 'sanjana', '4321'),
(5, 'mayuri patange', '7020270905', 'mayuri@gmail.com', 'mayuri', '55555'),
(6, 'Krishna Annaldas', '7020663490', 'anna@gmail.com', 'anna', '1122'),
(7, 'Abhi Gouda', '9373960367', 'abhishekgouda882@gmail.com', 'abhi', '123'),
(8, 'nikhil vidap', '9576543415', 'nikhilvidap@gmail.com', 'nikhil', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `sup`
--

CREATE TABLE `sup` (
  `id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `temp_data` varchar(400) NOT NULL,
  `link` varchar(400) NOT NULL,
  `a_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sup`
--

INSERT INTO `sup` (`id`, `name`, `temp_data`, `link`, `a_image`) VALUES
(4, 'Bigmuscles Nutrition Real Mass Gainer', 'Protein Blend (Skimmed Milk Powder, Soya Protein Isolate, Whey Concentrate.', 'https://www.amazon.in/Bigmuscles-Nutrition-Chocolate-Carbohydrates-Calories/dp/B07YNL38ZY/ref=sr_1_1_sspa?crid=111UF760EPFTY&dchild=1&keywords=sapliment+bodybuilding+gainer&qid=1621861312&sprefix=sapliment%2Caps%2C372&sr=8-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyMTZRRVBXMllCR1JMJmVuY3J5cHRlZElkPUEwMTk1MTU1Mlk1TVRRTkFaWURGQSZlbmNyeXB0ZWRBZElkPUEwMjY0MTI4MTJQT0VFQUZQRU1JNyZ3aWRnZXROYW1lPXNwX2', 'sapliment2.jpg'),
(5, 'Optimum Nutrition', 'Maltodextrin (75%), Protein Blend (22%) (Whey Protein Concentrate, calcium Caseinate, egg whites, whey powder).', 'https://www.amazon.in/Optimum-Nutrition-Serious-Weight-Gainer/dp/B07XG8RN7P/ref=sr_1_4_sspa?crid=111UF760EPFTY&dchild=1&keywords=sapliment+bodybuilding+gainer&qid=1621861312&sprefix=sapliment%2Caps%2C372&sr=8-4-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyMTZRRVBXMllCR1JMJmVuY3J5cHRlZElkPUEwMTk1MTU1Mlk1TVRRTkFaWURGQSZlbmNyeXB0ZWRBZElkPUEwNTQ3NjUxM0UyVDA0OUhBSzlVUiZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249', 'sapliment4.jpg'),
(6, 'Bigflex Prime Muscle Mass', 'Total Energy 593 kcal, calcium Caseinate, egg whites, Energy from fats 53.1 kcal', 'https://www.amazon.in/Bigflex-Muscle-Gainer-Banana-Strawberry/dp/B08153ZPLN/ref=sr_1_3_sspa?crid=111UF760EPFTY&dchild=1&keywords=sapliment+bodybuilding+gainer&qid=1621861312&sprefix=sapliment%2Caps%2C372&sr=8-3-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyMTZRRVBXMllCR1JMJmVuY3J5cHRlZElkPUEwMTk1MTU1Mlk1TVRRTkFaWURGQSZlbmNyeXB0ZWRBZElkPUEwMTQ3MTQzMUdDNTdNM1RYMExYTSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249', 'sapliment3.jpg'),
(13, 'Optimum Nutrition (ON) Gold Standard 100%', 'Gold Standard 100% Whey Blend – 24g blended protein consisting of whey protein isolate, whey protein concentrate, and whey peptides ', 'https://www.amazon.in/Optimum-Nutrition-Standard-Protein-Powder/dp/B019T0K132/ref=sr_1_2_sspa?crid=2ILXQ0T9KEOIK&dchild=1&keywords=supliments+for+gym+protein&qid=1622014187&sprefix=supli%2Caps%2C390&sr=8-2-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyR1pRWjJaRTBIR1hNJmVuY3J5cHRlZElkPUEwODMyNjg3MjFPN1VBWUtBWlQ1UyZlbmNyeXB0ZWRBZElkPUEwMjk3OTc0M0pCVklRSUtJODNTTyZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY', 'sapliment5.jpg'),
(14, 'Bigmuscles Nutrition Premium Gold Whey 1Kg', 'POWERFUL FORMULATION: Advanced formulation combines two hard-hitting types of protein in one powerful blend i', 'https://www.amazon.in/Bigmuscles-Nutrition-Chocolate-Concentrate-Glutamic/dp/B084H8LWC3/ref=sr_1_5?crid=2ILXQ0T9KEOIK&dchild=1&keywords=supliments+for+gym+protein&qid=1622014187&smid=AT95IG9ONZD7S&sprefix=supli%2Caps%2C390&sr=8-5', 'sapliment7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `tname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `tname`) VALUES
(1, 'Krishna Sir'),
(2, 'Ram Sir'),
(3, 'Abhishek Sir'),
(4, 'Nikhil Sir'),
(5, 'Ram Sir'),
(6, 'Krishna Sir'),
(7, 'Abhishek Sir'),
(8, 'Ram Sir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sup`
--
ALTER TABLE `sup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sup`
--
ALTER TABLE `sup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
